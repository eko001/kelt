<?php

namespace app\portal\controller;

use cmf\controller\HomeBaseController;

class WarehouseController extends HomeBaseController
{
    public function index()
    {
        return $this->fetch(':warehouse');
    }
}
