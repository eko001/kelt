<?php

namespace app\portal\controller;
use app\portal\model\RecruitModel;
use cmf\controller\AdminBaseController;

class RecruitController extends AdminBaseController
{
    public function index(){
        $param = $this->request->param();
        $RecruitModel = new RecruitModel();
        $data = $RecruitModel->getRecruitList($param);
        $this->assign('list', $data->items());
        $this->assign('page', $data->render());
        return $this->fetch();
    }

    public function add(){
        return $this->fetch();
    }

    public function addPost(){
        if ($this->request->isPost()) {
            $data = $this->request->param();
            $post = $data['post'];
//            $lat=$post['lat'];
//            $lng=$post['lng'];
//            $url='https://apis.map.qq.com/ws/geocoder/v1/?location='.$lat.','.$lng.'&key=EZSBZ-D6C64-AANU6-DKAAW-T5432-IZFWM';
//            $html = file_get_contents($url);
//            $obj= json_decode($html);
//            if($obj->status==0){
//                $post['address']=$obj->result->address;
//                echo $post['address'];
//            }else{
//                $this->error("添加失败");
//            }
            $post['create_time'] = time();
            $RecruitModel = new RecruitModel();
            $result = $RecruitModel->addData($post);
            if($result){
                $this->success('添加成功!', url('Recruit/index'));
            }else{
                $this->error("添加失败");
            }
        }
    }


    public function edit(){
        $id = $this->request->param('id', 0, 'intval');
        $RecruitModel = new RecruitModel();
        $post = $RecruitModel->where('id', $id)->find();
        $this->assign('post', $post);
        return $this->fetch();
    }

    public function editPost(){
        if ($this->request->isPost()) {
            $data = $this->request->param();
            $post   = $data['post'];
//            $lat=$post['lat'];
//            $lng=$post['lng'];
//            $url='https://apis.map.qq.com/ws/geocoder/v1/?location='.$lat.','.$lng.'&key=EZSBZ-D6C64-AANU6-DKAAW-T5432-IZFWM';
//            $html = file_get_contents($url);
//            $obj= json_decode($html);
//            if($obj->status==0){
//                $post['address']=$obj->result->address;
//                echo $post['address'];
//            }else{
//                $this->error("编辑失败");
//            }
            $RecruitModel = new RecruitModel();
            $result = $RecruitModel->editData($post);
            if($result){
                $this->success('编辑成功!', url('Recruit/index'));
            }else{
                $this->error("编辑失败");
            }
        }
    }


    public function delete(){
        $param = $this->request->param();
        $RecruitModel = new RecruitModel();
        if (isset($param['id'])) {
            $id = $this->request->param('id', 0, 'intval');
            $state = $RecruitModel->where('id', $id)->delete();
            if($state){
                $this->success('删除成功!', url('Recruit/index'));
            }else{
                $this->error("删除失败");
            }
        }
        if (isset($param['ids'])) {
            $ids = $this->request->param('ids/a');
            $state = $RecruitModel->where('id','in', $ids)->delete();
            if($state){
                $this->success('删除成功!', url('Recruit/index'));
            }else{
                $this->error("删除失败");
            }

        }
    }


}