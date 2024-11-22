<?php

namespace api\portal\model;
use \think\Model;

class CompanyAreaModel extends Model
{
    protected $name = 'company_area';

    public function getAreaList(){
       $data =  $this->select();
        return $data;
    }

}