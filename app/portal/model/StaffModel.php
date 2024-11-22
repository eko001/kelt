<?php

namespace app\portal\model;
use think\Model;

class StaffModel extends Model
{
    protected $name = 'staff';

    public function getStaffList($param){
        if($param){
            if(!empty($param['name']) && !empty($param['phone'])){
                $list = $this->where('name','like',$param['name'])->where('phone','like',$param['phone'])->order('id', 'DESC')
                    ->paginate(10);
            }else if(!empty($param['name']) && empty($param['phone'])){
                $list = $this->where('name','like',$param['name'])->order('id', 'DESC')
                    ->paginate(10);
            }else if(empty($param['name']) && !empty($param['phone'])){
                $list = $this->where('phone','like',$param['phone'])->order('id', 'DESC')
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
        $staff = self::find($data['id']);
        $result = $staff->save($data);
        return $result;
    }


}