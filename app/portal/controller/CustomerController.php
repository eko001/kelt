<?php
namespace app\portal\controller;

use \cmf\controller\HomeBaseController;
class CustomerController extends HomeBaseController{
	
	public function index(){
		return $this->fetch(":customer");
	}
	
}


