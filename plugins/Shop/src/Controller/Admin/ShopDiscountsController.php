<?php
declare(strict_types=1);

namespace Shop\Controller\Admin;

use Cake\Event\EventInterface;
use App\Controller\Admin\AppController;
use Cake\ORM\Query;


class ShopDiscountsController extends AppController
{


    public function beforeRender (EventInterface $event)
    {
        parent::beforeRender($event);

        if (in_array($this->request->getParam('action'), ['add', 'edit'])) {

            $shopCategories = $this->ShopDiscounts->ShopCategories->find('threaded')
                ->order(['ShopCategories.lft' => 'ASC']);

            $shopCategories = $this->ShopDiscounts->ShopCategories->formatTreeList($shopCategories, spacer: '- ')->toArray();

            $clients = $this->ShopDiscounts->Clients->find('list')
                ->order(['Clients.fullname' => 'ASC']);

            $shopProducts = $this->ShopDiscounts->ShopProducts->find('list')
                ->order(['ShopProducts.title' => 'ASC']);

			$this->set(compact('shopCategories', 'shopProducts', 'clients'));

        }

        
    }



	public function get()
    {
		$this->queryOrder = ['ShopDiscounts.title' => 'ASC'];
		parent::get();
	}

	public function edit($id = null)
    {

		$this->queryContain = [
			'Images' => 'ResponsiveImages',
            'ShopProducts',
            'ShopCategories',
            'Clients'
		];
        parent::edit($id);
    }



}
