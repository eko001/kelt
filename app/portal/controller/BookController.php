<?php

namespace app\portal\controller;
use app\portal\model\BookModel;
use cmf\controller\AdminBaseController;

class BookController extends AdminBaseController
{
    public function index(){
        $param = $this->request->param();
        $bookModel = new BookModel();
        $data = $bookModel->getBookList($param);
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
            $bookModel = new BookModel();
            $result = $bookModel->addData($post);
            if($result){
                $this->success('添加成功!', url('Book/index'));
            }else{
                $this->error("添加失败");
            }
        }
    }


    public function edit(){
        $id = $this->request->param('id', 0, 'intval');
        $bookModel = new BookModel();
        $post = $bookModel->where('id', $id)->find();
        $this->assign('post', $post);
        return $this->fetch();
    }

    public function editPost(){
        if ($this->request->isPost()) {
            $data = $this->request->param();
            $post   = $data['post'];
            $bookModel = new BookModel();
            $result = $bookModel->editData($post);
            if($result){
                $this->success('编辑成功!', url('Book/index'));
            }else{
                $this->error("编辑失败");
            }
        }
    }


    public function delete(){
        $param = $this->request->param();
        $bookModel = new BookModel();
        if (isset($param['id'])) {
            $id = $this->request->param('id', 0, 'intval');
            $state = $bookModel->where('id', $id)->delete();
            if($state){
                $this->success('删除成功!', url('Book/index'));
            }else{
                $this->error("删除失败");
            }
        }
        if (isset($param['ids'])) {
            $ids = $this->request->param('ids/a');
            $state = $bookModel->where('id','in', $ids)->delete();
            if($state){
                $this->success('删除成功!', url('Book/index'));
            }else{
                $this->error("删除失败");
            }

        }
    }


}