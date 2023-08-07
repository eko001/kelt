<?php

namespace app\portal\controller;

use cmf\controller\HomeBaseController;

class SupplychainController extends HomeBaseController
{
    public function index()
    {
        return $this->fetch(':supplychain');
    }
}
