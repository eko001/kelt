<?php

namespace app\portal\model;
use think\facade\Db;
use think\Model;

class CompanyModel extends Model
{
    protected $name = 'company';

    public function getCompanyList($param){
        if($param){
            if(!empty($param['name'])){
                $list = Db::name('company')->alias('m')->field('m.id as mid,m.*' )->leftJoin('company a','a.id=m.area_id')
                    ->field('a.name as a_name' )
                    ->where('m.name','like',$param['name'])->order('m.id', 'DESC')
                    ->paginate(10);
            }else{
                $list = Db::name('company')->alias('m')->field('m.id as mid,m.*' )->leftJoin('company a','a.id=m.area_id')
                    ->field('a.name as areaname' )->order('id', 'DESC')
                    ->paginate(10);
            }

        }else{
            $list = Db::name('company')->alias('m')->field('m.id as mid,m.*' )->leftJoin('company a','a.id=m.area_id')
                ->field('a.name as areaname' )->order('id', 'DESC')
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