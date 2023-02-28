<?php

namespace app\portal\controller;

use cmf\controller\HomeBaseController;

class AppsController extends HomeBaseController
{
    public function index()
    {
        return $this->fetch(":app");
    }

    public function xcx()
    {
        return $this->fetch(":xcx");
    }

    public function wlw()
    {
        return $this->fetch(":wlw");
    }

    public function suc()
    {
        return $this->fetch(":success");
    }

}