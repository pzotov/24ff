<?php

class shopTestPluginBackendItemsController extends waJsonController {
	const LIMIT = 10;
	public function execute(){
		$offset = waRequest::get('offset', 0, 'int');
		$model = new shopProductModel();
//		$items = $model
//			->select('name')
//			->order('count=0, name')
//			->limit(self::LIMIT, $offset)
//			->fetchAll();
		$products = $model->query("SELECT name
				FROM shop_product
				ORDER BY count=0, name
				LIMIT i:offset, i:limit
				", array(
						'offset' => $offset,
						'limit' => self::LIMIT
					));
		$items = [];
		foreach($products as $product){
			$items[] = $product;
		}
		
		$this->response = array(
			'items' => $items,
			'total' => $model->countAll()
        );
	}
}