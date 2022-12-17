<?php

namespace app\portal\model;
use think\Model;

class CompanyModel extends Model
{
    protected $name = 'company_area';

    public function getCompanyList($param){
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
        $company = self::find($data['id']);
        $result = $company->save($data);
        return $result;
    }


}