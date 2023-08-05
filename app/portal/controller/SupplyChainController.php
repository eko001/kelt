<?php

namespace app\portal\controller;

use cmf\controller\HomeBaseController;

class SupplyChainController extends HomeBaseController
{
    public function index()
    {
        return $this->fetch(':supplyChain');
    }
}
