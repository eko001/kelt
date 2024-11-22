<?php

namespace app\portal\controller;

use cmf\controller\HomeBaseController;

class CarbontraceController extends HomeBaseController
{
    public function index()
    {
        return $this->fetch(':carbontrace');
    }
}
