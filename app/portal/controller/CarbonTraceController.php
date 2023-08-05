<?php

namespace app\portal\controller;

use cmf\controller\HomeBaseController;

class CarbonTraceController extends HomeBaseController
{
    public function index()
    {
        return $this->fetch(':carbonTrace');
    }
}
