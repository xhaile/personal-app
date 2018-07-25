<?php

class ArrayHelper{
	public static function getHost()
	{
		$current_host = $_SERVER['HTTP_HOST'];

		$url_arr = parse_url($current_host);
		$host = current($url_host);

		return $host;

	}
}
