<?php

namespace app\portal\model;
use think\Model;

class CompanyAreaModel extends Model
{
    protected $name = 'company_area';

    public function getCompanyAreaList($param){
        if($param){
            if(!empty($param['name'])){
                $list = $this->where('name','like',$param['name'])->order('id', 'DESC')
                    ->paginate(10);
            }else{
                $list = $this->order('id', 'DESC')
                    ->paginate(10);
            }

        }else{
            $list = $this->order('id', 'DESC')
                ->paginate(10);
        }
        return $list;
    }


    public function addData($data){
        $result = $this->save($data);
        return $result;
    }

    public function editData($data){
        $companyArea = self::find($data['id']);
        $result = $companyArea->save($data);
        return $result;
    }


}