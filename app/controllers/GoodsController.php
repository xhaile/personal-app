<?php


namespace app\controllers;

class GoodsController extends BaseController
{

	public $goods_attribute;
	
	public function __construct()
	{
		$this->goods_attributes = Session::get('goods_attribute');
	}
}
