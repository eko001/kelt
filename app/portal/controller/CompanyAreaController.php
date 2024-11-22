<?php

namespace app\portal\controller;
use app\portal\model\CompanyAreaModel;
use cmf\controller\AdminBaseController;

class CompanyAreaController extends AdminBaseController
{
    public function index(){
        $param = $this->request->param();
        $companyAreaModel = new CompanyAreaModel();
        $data = $companyAreaModel->getCompanyAreaList($param);
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
            $companyAreaModel = new CompanyAreaModel();
            $result = $companyAreaModel->addData($post);
            if($result){
                $this->success('添加成功!', url('CompanyArea/index'));
            }else{
                $this->error("添加失败");
            }
        }
    }


    public function edit(){
        $id = $this->request->param('id', 0, 'intval');
        $companyAreaModel = new CompanyAreaModel();
        $post = $companyAreaModel->where('id', $id)->find();
        $this->assign('post', $post);
        return $this->fetch();
    }

    public function editPost(){
        if ($this->request->isPost()) {
            $data = $this->request->param();
            $post   = $data['post'];
            $companyAreaModel = new CompanyAreaModel();
            $result = $companyAreaModel->editData($post);
            if($result){
                $this->success('编辑成功!', url('CompanyArea/index'));
            }else{
                $this->error("编辑失败");
            }
        }
    }


    public function delete(){
        $param = $this->request->param();
        $companyAreaModel = new CompanyAreaModel();
        if (isset($param['id'])) {
            $id = $this->request->param('id', 0, 'intval');
            $state = $companyAreaModel->where('id', $id)->delete();
            if($state){
                $this->success('删除成功!', url('CompanyArea/index'));
            }else{
                $this->error("删除失败");
            }
        }
        if (isset($param['ids'])) {
            $ids = $this->request->param('ids/a');
            $state = $companyAreaModel->where('id','in', $ids)->delete();
            if($state){
                $this->success('删除成功!', url('CompanyArea/index'));
            }else{
                $this->error("删除失败");
            }

        }
    }

    public function toggle()
    {
        $data                = $this->request->param();
        $companyAreaModel = new CompanyAreaModel();
        $ids                 = $this->request->param('ids/a');

        if (isset($data['ids']) && !empty($data["display"])) {
            $companyAreaModel->where('id', 'in', $ids)->update(['status' => 1]);
            $this->success("更新成功！");
        }

        if (isset($data['ids']) && !empty($data["hide"])) {
            $companyAreaModel->where('id', 'in', $ids)->update(['status' => 0]);
            $this->success("更新成功！");
        }

    }

}