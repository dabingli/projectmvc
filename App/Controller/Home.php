<?php
namespace App\Controller;

use IMooc\Controller;

class Home extends Controller{
	public function index(){
		return ['name'=>'zhangsan'];
	}
}