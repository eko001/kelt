<?php

namespace app\portal\controller;
use app\portal\model\CompanyModel;
use cmf\controller\AdminBaseController;

class CompanyController extends AdminBaseController
{
    public function index(){
        $param = $this->request->param();
        $companyModel = new CompanyModel();
        $data = $companyModel->getCompanyList($param);
        for($index=0;$index<count($data);$index++){

            $data[$index]['area'] = cmf_get_image_url($data[$index]['thumbnail']);
        }
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
            $companyModel = new CompanyModel();
            $result = $companyModel->addData($post);
            if($result){
                $this->success('添加成功!', url('Company/index'));
            }else{
                $this->error("添加失败");
            }
        }
    }


    public function edit(){
        $id = $this->request->param('id', 0, 'intval');
        $companyModel = new CompanyModel();
        $post = $companyModel->where('id', $id)->find();
        $this->assign('post', $post);
        return $this->fetch();
    }

    public function editPost(){
        if ($this->request->isPost()) {
            $data = $this->request->param();
            $post   = $data['post'];
            $companyModel = new CompanyModel();
            $result = $companyModel->editData($post);
            if($result){
                $this->success('编辑成功!', url('Company/index'));
            }else{
                $this->error("编辑失败");
            }
        }
    }


    public function delete(){
        $param = $this->request->param();
        $companyModel = new CompanyModel();
        if (isset($param['id'])) {
            $id = $this->request->param('id', 0, 'intval');
            $state = $companyModel->where('id', $id)->delete();
            if($state){
                $this->success('删除成功!', url('Company/index'));
            }else{
                $this->error("删除失败");
            }
        }
        if (isset($param['ids'])) {
            $ids = $this->request->param('ids/a');
            $state = $companyModel->where('id','in', $ids)->delete();
            if($state){
                $this->success('删除成功!', url('Company/index'));
            }else{
                $this->error("删除失败");
            }

        }
    }

    public function toggle()
    {
        $data                = $this->request->param();
        $companyModel = new CompanyModel();
        $ids                 = $this->request->param('ids/a');

        if (isset($data['ids']) && !empty($data["display"])) {
            $companyModel->where('id', 'in', $ids)->update(['status' => 1]);
            $this->success("更新成功！");
        }

        if (isset($data['ids']) && !empty($data["hide"])) {
            $companyModel->where('id', 'in', $ids)->update(['status' => 0]);
            $this->success("更新成功！");
        }

    }

}