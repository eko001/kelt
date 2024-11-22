<?php

namespace app\portal\controller;
use app\portal\model\StaffModel;
use cmf\controller\AdminBaseController;

class StaffController extends AdminBaseController
{
    public function index(){
        $param = $this->request->param();
        $staffModel = new StaffModel();
        $data = $staffModel->getStaffList($param);
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
            $post['create_time'] = time();
            $staffModel = new StaffModel();
            $result = $staffModel->addData($post);
            if($result){
                $this->success('添加成功!', url('Staff/index'));
            }else{
                $this->error("添加失败");
            }
        }
    }


    public function edit(){
        $id = $this->request->param('id', 0, 'intval');
        $staffModel = new StaffModel();
        $post = $staffModel->where('id', $id)->find();
        $this->assign('post', $post);
        return $this->fetch();
    }

    public function editPost(){
        if ($this->request->isPost()) {
            $data = $this->request->param();
            $post   = $data['post'];
            $staffModel = new StaffModel();
            $result = $staffModel->editData($post);
            if($result){
                $this->success('编辑成功!', url('Staff/index'));
            }else{
                $this->error("编辑失败");
            }
        }
    }


    public function delete(){
        $param = $this->request->param();
        $staffModel = new StaffModel();
        if (isset($param['id'])) {
            $id = $this->request->param('id', 0, 'intval');
            $state = $staffModel->where('id', $id)->delete();
            if($state){
                $this->success('删除成功!', url('Staff/index'));
            }else{
                $this->error("删除失败");
            }
        }
        if (isset($param['ids'])) {
            $ids = $this->request->param('ids/a');
            $state = $staffModel->where('id','in', $ids)->delete();
            if($state){
                $this->success('删除成功!', url('Staff/index'));
            }else{
                $this->error("删除失败");
            }

        }
    }

    public function toggle()
    {
        $data                = $this->request->param();
        $staffModel = new StaffModel();
        $ids                 = $this->request->param('ids/a');

        if (isset($data['ids']) && !empty($data["display"])) {
            $staffModel->where('id', 'in', $ids)->update(['status' => 1]);
            $this->success("更新成功！");
        }

        if (isset($data['ids']) && !empty($data["hide"])) {
            $staffModel->where('id', 'in', $ids)->update(['status' => 0]);
            $this->success("更新成功！");
        }

    }

}