<?php
declare(strict_types=1);

namespace Shop\Controller\Admin;

use Cake\Event\EventInterface;
use App\Controller\Admin\AppController;
use Cake\ORM\Query;


class ShopTagsController extends AppController
{



	public function get()
    {
		$this->queryOrder = ['ShopTags.title' => 'ASC'];
		parent::get();
	}

	public function edit($id = null)
    {

		$this->queryContain = [
			'Images' => 'ResponsiveImages',
		];
        parent::edit($id);
    }



}
