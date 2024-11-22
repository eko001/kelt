<?php

namespace app\portal\controller;

use cmf\controller\HomeBaseController;

class ProductsController extends HomeBaseController
{
    public function index()
    {
        return $this->fetch(':products');
    }
}
