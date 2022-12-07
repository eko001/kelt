<?php

namespace app\portal\controller;

use app\portal\service\PostService;
use cmf\controller\HomeBaseController;

class ServiceController extends HomeBaseController
{
    public function index(){
		$id= $this->request->param('id', 0, 'intval');
        $postService = new PostService();
        $arr=['category'=>3];
        $data        = $postService->adminArticleList($arr);
        $this->assign("list", $data);
		$this->assign("sid", $id);
        return $this->fetch(':service');
    }

    public function detail(){
        $postService         = new PostService();

        $articleId  = $this->request->param('id', 0, 'intval');
        $categoryId = $this->request->param('cid', 0, 'intval');
        $article    = $postService->publishedArticle($articleId, $categoryId);
        if (empty($article)) {
            abort(404, '文章不存在!');
        }

        $this->assign("serviceDetail",$article);
        return $this->fetch(':serviceDetail');
    }
}