<?php

namespace app\portal\controller;

use app\portal\model\PortalCategoryModel;
use app\portal\model\PortalPostModel;
use app\portal\service\PostService;
use \cmf\controller\HomeBaseController;
use think\facade\Db;

class NewsController extends HomeBaseController
{
    public function index(){
       $typeList=Db::name('portal_category')->field('*')->where('parent_id','=',22)->select();
        $this->assign("typeList", $typeList);
        return $this->fetch(':news');
    }

    public function list(){
        $param = $this->request->param();
        $postService = new PostService();
        $data        = $postService->adminArticleList($param);
        $page = $data->render();
        $this->assign("list", $data);
        $this->assign("page", $page);
        return $this->fetch(':news');
    }

	public function detail(){
      /*  $postService         = new PostService();
        $articleId  = $this->request->param('id', 0, 'intval');
        $categoryId = $this->request->param('cid', 0, 'intval');
        $article    = $postService->publishedArticle($articleId, $categoryId);
        if (empty($article)) {
            abort(404, '文章不存在!');
        }
        $this->assign("newsDetail",$article);*/
	    return $this->fetch(':newsDetail');
	}
}