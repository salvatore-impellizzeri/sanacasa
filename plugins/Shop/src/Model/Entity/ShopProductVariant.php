<?php
declare(strict_types=1);

namespace Shop\Model\Entity;

use Cake\ORM\Entity;
use Cake\Utility\Text;
use Cake\Datasource\FactoryLocator;
use Cake\Core\Configure;


class ShopProductVariant extends Entity
{

    protected array $_accessible = [
        '*' => true
    ];

    protected array $_virtual = [
        'display_price', //prezzo da mostrare
        'display_discounted_price', //prezzo scontato da mostrare
    ];
	
	protected function _getSefUrl()
    {
        $title = '';

        if (!empty($this->shop_product_id)) {
            $productId = $this->shop_product_id;
            $brand = FactoryLocator::get('Table')->get('Shop.Brands')->find()
                ->matching('ShopProducts', function($q) use ($productId){
                    return $q->where(['ShopProducts.id' => $productId]);
                })
                ->first();
                
            if (!empty($brand)) {
                $title = Text::slug($brand->title, ['replacement' => '-']) . ' ';
            }
        }
        $title .= $this->title;
        $path = Text::slug(__dx('shop', 'admin', 'sef prefix'), ['replacement' => '-']) . '/' . Text::slug($title, ['replacement' => '-']);
		return trim($path, '/');				
    }

    protected function _getDisplayPrice()
    {
        
        return Configure::read('Shop.vatIncuded') ? $this->price : $this->price_net;
    }

    protected function _getDisplayDiscountedPrice()
    {
        return Configure::read('Shop.vatIncuded') ? $this->discounted_price : $this->discounted_price_net;
    }

}
