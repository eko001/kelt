<?php

namespace app\portal\controller;
use app\portal\model\ResumeModel;
use cmf\controller\AdminBaseController;

class ResumeController extends AdminBaseController
{
    public function index(){
        $param = $this->request->param();
        $ResumeModel = new ResumeModel();
        $data = $ResumeModel->getResumeList($param);
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
            $ResumeModel = new ResumeModel();
            $result = $ResumeModel->addData($post);
            if($result){
                $this->success('添加成功!', url('Resume/index'));
            }else{
                $this->error("添加失败");
            }
        }
    }


    public function edit(){
        $id = $this->request->param('id', 0, 'intval');
        $ResumeModel = new ResumeModel();
        $post = $ResumeModel->where('id', $id)->find();
        $this->assign('post', $post);
        return $this->fetch();
    }

    public function editPost(){
        if ($this->request->isPost()) {
            $data = $this->request->param();
            $post   = $data['post'];
            $ResumeModel = new ResumeModel();
            $result = $ResumeModel->editData($post);
            if($result){
                $this->success('编辑成功!', url('Resume/index'));
            }else{
                $this->error("编辑失败");
            }
        }
    }


    public function delete(){
        $param = $this->request->param();
        $ResumeModel = new ResumeModel();
        if (isset($param['id'])) {
            $id = $this->request->param('id', 0, 'intval');
            $state = $ResumeModel->where('id', $id)->delete();
            if($state){
                $this->success('删除成功!', url('Resume/index'));
            }else{
                $this->error("删除失败");
            }
        }
        if (isset($param['ids'])) {
            $ids = $this->request->param('ids/a');
            $state = $ResumeModel->where('id','in', $ids)->delete();
            if($state){
                $this->success('删除成功!', url('Resume/index'));
            }else{
                $this->error("删除失败");
            }

        }
    }


}