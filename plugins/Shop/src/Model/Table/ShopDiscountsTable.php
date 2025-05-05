<?php
declare(strict_types=1);

namespace Shop\Model\Table;

use ArrayObject;
use Cake\Datasource\EntityInterface;
use Cake\Event\EventInterface;
use Cake\ORM\Query;
use Cake\ORM\RulesChecker;
use App\Model\Table\AppTable;
use Cake\Validation\Validator;
use Cake\Datasource\FactoryLocator;
use Cake\I18n\FrozenDate;
use Cake\Database\Expression\QueryExpression;

class ShopDiscountsTable extends AppTable
{

    public function initialize(array $config): void
    {
        parent::initialize($config);

		// configurazione tabella
        $this->setTable('shop_discounts');
        $this->setDisplayField('title');
        $this->setPrimaryKey('id');

        // behavior
		$this->addBehavior('Timestamp');


        $this->belongsToMany('ShopProducts', [
            'className' => 'Shop.ShopProducts',
            'joinTable' => 'shop_discounts_products'
        ]);

        $this->belongsToMany('ShopCategories', [
            'className' => 'Shop.ShopCategories',
            'joinTable' => 'shop_discounts_categories'
        ]);

        $this->belongsToMany('Clients', [
            'className' => 'Clients.Clients',
            'joinTable' => 'shop_discounts_clients'
        ]);

        $this->hasMany('ShopPromoPrices', [
            'className' => 'Shop.ShopPromoPrices'
        ])->setDependent(true);


    }


    public function validationDefault(Validator $validator): Validator
    {
        $validator
            ->integer('id')
            ->allowEmptyString('id', null, 'create');

        $validator
            ->integer('discount_type') // 0 -> tutto il catalogo, 1 -> categorie specifiche, 2 -> prodotti specifici
            ->notEmptyString('discount_type');

        $validator
            ->scalar('title')
            ->maxLength('title', 255)
            ->requirePresence('title', 'create')
            ->notEmptyString('title');

        $validator
            ->numeric('percentage')
            ->greaterThan('percentage', 0)
            ->notEmptyString('percentage');

        $validator
            ->dateTime('valid_from')
            ->requirePresence('valid_from', 'create')
            ->allowEmptyString('valid_from');    

        $validator
            ->dateTime('valid_to')
            ->requirePresence('valid_to', 'create')
            ->allowEmptyString('valid_to')
            ->add('valid_to', 'custom', [
                'rule' => function ($value, $context) {
                    if (empty($value) || empty($context['data']['valid_from'])) {
                        return true; // evitare errore doppio, sarà già gestito da notEmpty
                    }
    
                    $startDate = new FrozenDate($context['data']['valid_from']);
                    $endDate = new FrozenDate($value);
    
                    return $endDate > $startDate;
                },
                'message' => __dx('shop', 'admin', 'end date must be greater than start date')
            ]);

        $validator
            ->boolean('apply_to_products')
            ->notEmptyString('apply_to_products');

        $validator
            ->boolean('active')
            ->notEmptyString('active');


        return $validator;
    }


    public function afterSave(EventInterface $event, EntityInterface $entity, ArrayObject $options)
    {
        // aggiorno i prezzi in promo delle varianti
        if ($entity->isNew()) {
            $shopDiscount = $this->findById($entity->id)->contain([
                'Clients',
                'ShopCategories',
                'ShopProducts'
            ])->first();
            
            if (empty($shopDiscount)) return;

            $clientIds = $this->extractClientIds($shopDiscount);
            $productVariants = $this->getDiscountVariants($shopDiscount);
            
            // salvo gli sconti
            if (!empty($productVariants) && $productVariants->count()) {
                foreach ($productVariants as $productVariant) {
                    $this->ShopPromoPrices->ShopProductVariants->addPromoPrice($shopDiscount->id, $productVariant->id, $clientIds, $productVariant->price, $shopDiscount->percentage, $shopDiscount->round_discounts, $shopDiscount->valid_from, $shopDiscount->valid_to, $shopDiscount->active);
                }
            }

        } else {


            $dirtyFields = $entity->getDirty();
            $excludedFields = ['multicheckbox_search', 'modified', '_stay'];
            $filteredDirtyFields = array_diff($dirtyFields, $excludedFields);

            if ($entity->isDirty('active') && count($filteredDirtyFields) === 1) {
                // se è stato modificato solo active aggiorno gli sconti di conseguenza 
                $this->ShopPromoPrices->updateAll(
                    ['active' => $entity->active],
                    ['shop_discount_id' => $entity->id]
                );
            } else {
                // se ho modificato solo la percentuale e/o l'arrotondamento e/o active aggiorno i prezzi 
                if (!$entity->isDirty('discount_type') || !$entity->isDirty('shop_products') || !$entity->isDirty('shop_categories') || !$entity->isDirty('clients')) { 
                    $precision = $entity->round_discounts ? 0 : 2;
                    $this->ShopPromoPrices->updateAll(
                        [
                            'discounted_price' => new QueryExpression("ROUND(price * (1 - ({$entity->percentage} / 100)), $precision)"),
                            'percentage' => $entity->percentage,
                            'active' => $entity->active,
                            'valid_from' => $entity->valid_from,
                            'valid_to' => $entity->valid_to,
                        ],
                        [
                            'shop_discount_id' => $entity->id
                        ] 
                    );
          
                } else {
                    // altrimenti cancello e risalvo tutti gli sconti (TODO: vedere se si può ottimizzare questa parte)
                    return $this->ShopPromoPrices->deleteAll(['shop_discount_id' => $entity->id]);
                }
                
            }
      
        }   
    }  
    
    
    // recupera le varianti a cui applicare uno sconto in  base al tipo di sconto
    protected function getDiscountVariants($shopDiscount) 
    {
        $productVariants = null;

        switch ($shopDiscount->discount_type) {
            case 0:
                // tutti i prodotti
                $productVariants = $this->ShopPromoPrices->ShopProductVariants->find()->all();
                break;

            case 1:
                // prodotti di categorie specifiche
                $categories = $this->extractCategoryIds($shopDiscount);
                $productVariants = $this->ShopPromoPrices->ShopProductVariants->find('byCategory', category: $categories)->all();
                break;

            case 2:
                // prodotti specifici
                $products = $this->extractProductIds($shopDiscount);
                $productVariants = $this->ShopPromoPrices->ShopProductVariants->find()->where(['ShopProductVariants.shop_product_id IN' => $products])->all();
            
        }
    }


    protected function extractClientIds($shopDiscount)
    {
        if (empty($shopDiscount) || empty($shopDiscount->clients)) return [];

        $out = [];
        foreach ($shopDiscount->clients as $client) $out[] = $client->id;
        return $out;
    }

    protected function extractCategoryIds($shopDiscount)
    {
        if (empty($shopDiscount) || empty($shopDiscount->shop_categories)) return [];

        $out = [];
        foreach ($shopDiscount->shop_categories as $category) $out[] = $category->id;
        return $out;
    }

    protected function extractProductIds($shopDiscount)
    {
        if (empty($shopDiscount) || empty($shopDiscount->shop_products)) return [];

        $out = [];
        foreach ($shopDiscount->shop_products as $product) $out[] = $product->id;
        return $out;
    }


    // finder custom
	public function findFiltered(Query $query, array $options)
    {
        $key = $options['key'];
        return $query->where(['ShopDiscounts.title LIKE' => "%" . trim($key) . "%"]);
    }


    
    public function findActive(Query $query, array $options)
    {   

        // active
        $query->where([
            'ShopDiscounts.active' => true
        ]);

        // data valida
        $query->where([
            'OR' => [
                [
                    'ShopDiscounts.valid_from IS NULL',
                    'ShopDiscounts.valid_to IS NULL',
                ],
                [
                    'ShopDiscounts.valid_from IS NOT NULL',
                    'ShopDiscounts.valid_to IS NULL',
                    'UNIX_TIMESTAMP(ShopDiscounts.valid_from) <=' => time() 
                ],
                [
                    'ShopDiscounts.valid_from IS NULL',
                    'ShopDiscounts.valid_to IS NOT NULL',
                    'UNIX_TIMESTAMP(ShopDiscounts.valid_to) >=' => time() 
                ],
                [
                    'ShopDiscounts.valid_from IS NOT NULL',
                    'ShopDiscounts.valid_to IS NOT NULL',
                    'UNIX_TIMESTAMP(ShopDiscounts.valid_from) <=' => time(),
                    'UNIX_TIMESTAMP(ShopDiscounts.valid_to) >=' => time() 
                ],
            ]
        ]);

        return $query;
    }


}
