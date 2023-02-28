<?php

namespace app\portal\controller;

use app\portal\model\ContactModel;
use app\portal\service\PostService;
use \cmf\controller\HomeBaseController;

class AboutController extends HomeBaseController
{
    public function index()
    {

        // $postService = new PostService();
        // $arr=['category'=>13];
        // $data        = $postService->adminArticleList($arr);
        // for($index=0;$index<count($data);$index++){
        //     $data[$index]['post_keywords'] = explode(',',$data[$index]['post_keywords']);
        // }
        // $this->assign("city", $data);
        return $this->fetch(':gsjj');
    }

    public function contact()
    {
        return $this->fetch(':contact');
    }



    public function addPost()
    {
        if ($this->request->isPost()) {
            $data = $this->request->param();
            $post = $data['post'];
            $post['create_time'] = time();
            $ContactModel = new ContactModel();
            $result = $ContactModel->addData($post);
            if ($result) {
                $this->success('添加成功!');
            } else {
                $this->error("添加失败");
            }
        }
    }
}