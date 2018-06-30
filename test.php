<?php

echo md5('admin');

phpinfo();


class userController{


	public function userList(){

		return view::make('user.list');
	}


}
