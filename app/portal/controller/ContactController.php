<?php

namespace app\portal\controller;
use app\portal\model\ContactModel;
use cmf\controller\AdminBaseController;

class ContactController extends AdminBaseController
{
    public function index(){
        $param = $this->request->param();
        $ContactModel = new ContactModel();
        $data = $ContactModel->getContactList($param);
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
            $ContactModel = new ContactModel();
            $result = $ContactModel->addData($post);
            if($result){
                $this->success('添加成功!', url('Contact/index'));
            }else{
                $this->error("添加失败");
            }
        }
    }


    public function edit(){
        $id = $this->request->param('id', 0, 'intval');
        $ContactModel = new ContactModel();
        $post = $ContactModel->where('id', $id)->find();
        $this->assign('post', $post);
        return $this->fetch();
    }

    public function editPost(){
        if ($this->request->isPost()) {
            $data = $this->request->param();
            $post   = $data['post'];
            $ContactModel = new ContactModel();
            $result = $ContactModel->editData($post);
            if($result){
                $this->success('编辑成功!', url('Contact/index'));
            }else{
                $this->error("编辑失败");
            }
        }
    }


    public function delete(){
        $param = $this->request->param();
        $ContactModel = new ContactModel();
        if (isset($param['id'])) {
            $id = $this->request->param('id', 0, 'intval');
            $state = $ContactModel->where('id', $id)->delete();
            if($state){
                $this->success('删除成功!', url('Contact/index'));
            }else{
                $this->error("删除失败");
            }
        }
        if (isset($param['ids'])) {
            $ids = $this->request->param('ids/a');
            $state = $ContactModel->where('id','in', $ids)->delete();
            if($state){
                $this->success('删除成功!', url('Contact/index'));
            }else{
                $this->error("删除失败");
            }

        }
    }


}