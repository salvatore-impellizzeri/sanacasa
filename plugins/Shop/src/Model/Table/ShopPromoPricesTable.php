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

class ShopPromoPricesTable extends AppTable
{

    public function initialize(array $config): void
    {
        parent::initialize($config);

		// configurazione tabella
        $this->setTable('shop_promo_prices');
        $this->setDisplayField('price');
        $this->setPrimaryKey('id');

        // behavior
		$this->addBehavior('Timestamp');


        $this->belongsTo('ShopProductVariants', [
            'className' => 'Shop.ShopProductVariants'
        ]);

        $this->belongsTo('ShopDiscounts', [
            'className' => 'Shop.ShopDiscounts'
        ]);

        $this->belongsTo('Clients', [
            'className' => 'Clients.Clients'
        ]);


    }


    public function validationDefault(Validator $validator): Validator
    {
        $validator
            ->integer('id')
            ->allowEmptyString('id', null, 'create');

        $validator
            ->integer('shop_discount_id')
            ->notEmptyString('shop_discount_id');

        $validator
            ->integer('shop_product_variant_id')
            ->notEmptyString('shop_product_variant_id');

        $validator
            ->integer('client_id')
            ->allowEmptyString('client_id');
        
        $validator
            ->numeric('percentage')
            ->notEmptyString('percentage');

        $validator
            ->numeric('price')
            ->notEmptyString('price');

        $validator
            ->dateTime('valid_from')
            ->allowEmptyString('valid_from');    

        $validator
            ->dateTime('valid_to')
            ->allowEmptyString('valid_to');


        return $validator;
    }


}
