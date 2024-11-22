<?php

namespace app\portal\controller;

use app\portal\service\PostService;
use cmf\controller\HomeBaseController;

class ProductController extends HomeBaseController
{
    public function index(){
		return $this->fetch(':product');
    }
   
}