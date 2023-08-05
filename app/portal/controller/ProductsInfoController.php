<?php

namespace app\portal\controller;

use cmf\controller\HomeBaseController;

class ProductsInfoController extends HomeBaseController
{
    public function index()
    {
        return $this->fetch(':productsInfo');
    }
}
