<?php
namespace IMooc;

class Loader{
	static function AutoLoader($class){
		$file = BASEDIR.'/'.str_replace('\\', '/', $class).'.php';
		require $file;
	}
}