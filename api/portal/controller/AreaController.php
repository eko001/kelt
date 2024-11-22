<?php

namespace api\portal\controller;
use cmf\controller\RestBaseController;
use think\Db;
use api\portal\model\CompanyAreaModel;


class AreaController extends RestBaseController
{
    public function getAreaList(){
        $model = new CompanyAreaModel();
        $list = $model->getAreaList();
        $this->success("请求成功",$list);
    }
}