<?php

namespace vatal\artisan\core;

class DB
{
	protected static $instance;
	
	public static function getConnect()
	{
		if(self::$instance === NULL){
			self::$instance = self::connect();
		}
		return self::$instance;
	}
	
	protected static function connect()
	{
		$opt = [
			// \PDO::ATTR_ERRMODE => \PDO::ERRMODE_EXCEPTION,
        	\PDO::ATTR_DEFAULT_FETCH_MODE => \PDO::FETCH_ASSOC
        ];
		$dsn = sprintf('%s:host=%s;dbname=%s', 'mysql', 'localhost', 'myyour-artisan1');
		return new \PDO($dsn, 'root', '');
	}

}