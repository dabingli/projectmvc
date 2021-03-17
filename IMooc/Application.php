<?php
namespace IMooc;

class Application{
	static $instance;
	private $config;
	private function __construct($baseDir){
		$this->baseDir = $baseDir;
		$this->config = new Config($this->baseDir.'/Config');
	}

	static function getInstance($baseDir){
		if(!self::$instance){
			self::$instance = new self($baseDir);
		}

		return self::$instance;
	}

	public function dispatch(){
		$uri = $_SERVER['REQUEST_URI'];
		list($c, $v) = explode('/', trim($uri, '/'));
		$c = ucfirst($c);
		$v = strtolower($v);

		$class = '\\App\\Controller\\'.$c;

		$classObj = new $class($c, $v);
		$result = $classObj->$v();
		echo json_encode($result);
	}
}