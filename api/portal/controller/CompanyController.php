<?php

namespace api\portal\controller;
use api\portal\model\CompanyModel;
use cmf\controller\RestBaseController;

class CompanyController extends RestBaseController
{
    public function getAllCompany(){
        $model = new CompanyModel();
        $list = $model->getAllCompany();
        $this->success("请求成功",$list);
    }

    public function getCompanyById(){
        $params      = $this->request->get();
        $model = new CompanyModel();
        $list = [];
        if($params && $params['id']){
            $list = $model->getCompanyByAreaId($params['id']);
        }else{
            $list = $model->getAllCompany();
        }
        $this->success("请求成功",$list);
    }

}