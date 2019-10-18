<?php

namespace App\Utils;

class Config {
	public static function get($path){
		if($path){
			$config = $GLOBALS['config'];
			$results = explode('/',$path);

			foreach ($results as $value) {
			$config = (isset($config[$value]))? $config[$value]:$config;
			}
			return $config;

		}
    }
    
	public static function getArray($key)
	{
		if(!empty($key))
		{
			return $GLOBALS['config'][$key];
		}
	}

	public static function set($key,$array)
	{
		if(!empty($key))
		{
			$GLOBALS['config'][$key] = $array;
		}
	}
}
