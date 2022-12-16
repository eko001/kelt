<?php

namespace api\portal\model;

class CompanyModel extends \think\Model
{
    protected $name = 'company';

    public function getAllCompany(){
        $data = $this->select();
        return $data;
    }

    public function getCompanyByAreaId($areaId){
        $list = $this->where(['area_id' => $areaId])->select();
        return $list;
    }

}