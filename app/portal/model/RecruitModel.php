<?php

namespace app\portal\model;
use think\Model;

class RecruitModel extends Model
{
    protected $name = 'recruit';

    public function getRecruitList($param){
        if($param){
            if(!empty($param['name']) ){
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
        $recruit = self::find($data['id']);
        $result = $recruit->save($data);
        return $result;
    }


}