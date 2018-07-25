<?php



Route::group(array("domain"=>"apply.dev.baicheng.com"),function(){
	Route::get("list", array("as"=>"user-list", "userContoller@list"));
	Route::get("detail_{user_id}", array(
		"as"=>"detail", 
		"userController@detail"))->where(array(
		"user_id"=>"[\d]+"
	));

});


Route::get('goods-list', array('use'=>'GoodsController@GoodsList', 'as'=>'goods-list'));
