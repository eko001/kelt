<?php

namespace app\portal\controller;

use cmf\controller\HomeBaseController;
use app\portal\model\FormModel;
use think\Request;


class BuildingController extends HomeBaseController
{

  public function index()
  {
    return $this->fetch(':building');
  }

}