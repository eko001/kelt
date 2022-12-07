<?php

namespace app\portal\controller;
use \cmf\controller\HomeBaseController;
class StaffsController extends HomeBaseController
{
    public function index()
    {
        return $this->fetch(':staffs');
    }
}