<?php
declare(strict_types=1);

namespace Shop\Model\Entity;

use Cake\ORM\Entity;
use Cake\Utility\Text;
use Cake\Datasource\FactoryLocator;

class ShopPromoPrice extends Entity
{

    protected array $_accessible = [
        '*' => true
    ];
	

}
