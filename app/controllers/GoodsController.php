<?php


namespace app\controllers;

class GoodsController extends BaseController
{

	public $goods_attribute;
	
	public function __construct()
	{
		$this->goods_attribute = Cookie::get('goods_attribute');
	}


}
