<?php

namespace app\portal\controller;

use app\portal\model\BookModel;
use app\portal\model\ContactModel;
use app\portal\model\PortalPostModel;

class FormController extends \cmf\controller\HomeBaseController
{
    public function index()
    {
        return $this->fetch(':form');
    }


    public function addPost(){
        if ($this->request->isPost()) {
            $data = $this->request->param();
            $post = $data['post'];
            $post['create_time'] = time();
            $BookModel = new BookModel();
            $result = $BookModel->addData($post);
            if($result){
                $this->success('添加成功!');
            }else{
                $this->error("添加失败");
            }
        }
    }


}