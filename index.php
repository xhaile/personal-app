<?php


class UserController extends BaseController{
	
	static private $message_url;

	public function __construct(){

		self::$message_url = 'http://api.message.com/v1/sendMessage.php';
	}


	public function sendMessage($apiUrl, $userId, $messageContent){

		//sender(1, 'php is the best program lang');

	}


	public function testAjax(){

		
	}

	public function checkLoginStatus()
	{
		if(Session::get('uid')) return true;
		if($_COOKIE['uid']) return true;
		return false;
	}


	public function getEnv(){
	
		return $_SERVER;
	}

	public function setCache($key){

		return Cache::put($key);
	}


	public function isLogin(){
	
		$uid = Session::get('user.id');

		return $uid ? true : false;
	}


}
