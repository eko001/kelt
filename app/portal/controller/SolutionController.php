<?php

namespace app\portal\controller;

use app\portal\service\PostService;
use cmf\controller\HomeBaseController;

class SolutionController extends HomeBaseController
{
    public function index(){
		return $this->fetch(':solution');
    }

    public function detail(){
        $postService         = new PostService();

        $articleId  = $this->request->param('id', 0, 'intval');
        $categoryId = $this->request->param('cid', 0, 'intval');
        $article    = $postService->publishedArticle($articleId, $categoryId);
        if (empty($article)) {
            abort(404, '文章不存在!');
        }

        $this->assign("solutionDetail",$article);
        return $this->fetch(':solutionDetail');
    }
}