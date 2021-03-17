<?php
namespace IMooc;

class Config implements ArrayAccess{
	static $config;
	private $dir;
	public function __construct($configdir){
		$this->dir = $configdir;
	}

	public function offsetExists($key){
		return isset($this->testData[$key]);
	}

	public function offsetSet($key, $value){
		return true;	
	}

	public function offsetGet($key){
		if(empty(self::$config[$key])){
			$config = require $this->dir.'/'.$key.'.php';
			self::$config[$key] = $config;
		}

		return self::$config[$key];
	}

	public function offsetUnset($key){
		return unset($this->testData[$key]);
	}
}