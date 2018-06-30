<?php


class UserController extends BaseController{
	
	static private $message_url;

	public function __construct(){

		self::$message_url = 'http://api.message.com/v1/sendMessage.php';
	}

}
