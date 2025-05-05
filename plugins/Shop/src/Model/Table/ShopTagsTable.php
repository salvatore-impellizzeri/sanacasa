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

class ShopTagsTable extends AppTable
{

    public function initialize(array $config): void
    {
        parent::initialize($config);

		// configurazione tabella
        $this->setTable('shop_tags');
        $this->setDisplayField('title');
        $this->setPrimaryKey('id');

        // behavior
		$this->addBehavior('Timestamp');
		$this->addBehavior('MultiTranslatable', ['fields' => ['title', 'modified', '_status']]);


        $this->belongsToMany('ShopProducts', [
            'className' => 'Shop.ShopProducts',
            'joinTable' => 'shop_tags_products'
        ]);



    }


    public function validationDefault(Validator $validator): Validator
    {
        $validator
            ->integer('id')
            ->allowEmptyString('id', null, 'create');

        $validator
            ->scalar('title')
            ->maxLength('title', 255)
            ->requirePresence('title', 'create')
            ->notEmptyString('title');

        return $validator;
    }

    public function buildRules(RulesChecker $rules): RulesChecker
    {
        $rules->add($rules->isUnique(['title']));
        return $rules;
    }



	public function findFiltered(Query $query, array $options)
    {
        $key = $options['key'];
        return $query->where(['ShopTags.title LIKE' => "%" . trim($key) . "%"]);
    }


}
