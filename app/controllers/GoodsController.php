<?php


namespace app\controllers;

class GoodsController extends BaseController
{

	public $goods_attribute;
	
	public function __construct()
	{
<<<<<<< HEAD
		$this->goods_attribute = Cookie::get('goods_attribute');
=======
		$this->goods_attributes = Session::get('goods_attribute');
>>>>>>> t2
	}


}
