<?php

namespace app\portal\model;
use think\Model;

class BookModel extends Model
{
    protected $name = 'book';

    public function getBookList($param){
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
        $book = self::find($data['id']);
        $result = $book->save($data);
        return $result;
    }


}