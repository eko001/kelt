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
        $param = $this->request->param();
        $postService = new PostService();
        if(!isset($param["category"])){
            $param["category"] = 11;
        }
        $data        = $postService->adminArticleList($param);
        $page = $data->render();
        $this->assign("list", $data);
        $this->assign("page", $page);
        return $this->fetch(':news');
    }

    public function list(){
        $param = $this->request->param();
        $postService = new PostService();
        if(!isset($param["category"])){
            $param["category"] = 20;
        }
        $data        = $postService->adminArticleList($param);
        $page = $data->render();
        $this->assign("list", $data);
        $this->assign("page", $page);
        return $this->fetch(':news');
    }

    public function branch(){
        $param = $this->request->param();
        $postService = new PostService();
        if(!isset($param["category"])){
            $param["category"] = 21;
        }
        $data        = $postService->adminArticleList($param);
        $page = $data->render();
        $this->assign("list", $data);
        $this->assign("page", $page);
        return $this->fetch(':news');
    }

	public function detail(){
     /*   $id = $this->request->param('id', 0);
        $newsDetail= Db::name('portal_post')->where('id',$id)->select();
        $this->assign("newsDetail",$newsDetail[0]);*/
     /*   $portalCategoryModel = new PortalCategoryModel();
        $postService         = new PostService();
        //文章id
        $id = $this->request->param('id', 0);
        //分类id
        $categoryId = $this->request->param('cid', 0, 'intval');
        $article    = $postService->publishedArticle($id, $categoryId);
        //$newsDetail  = Db::name('portal_post')->alias('p')->leftJoin('portal_category_post c','c.post_id=p.id')->leftJoin('cmf_user u','p.user_id=u.id')->where('c.category_id',$categoryId)->where("p.id",$id)->order('p.id','desc')->select();
        //var_dump($newsDetail[0]);*/
        $portalCategoryModel = new PortalCategoryModel();
        $postService         = new PostService();

        $articleId  = $this->request->param('id', 0, 'intval');
        $categoryId = $this->request->param('cid', 0, 'intval');
        $article    = $postService->publishedArticle($articleId, $categoryId);
        if (empty($article)) {
            abort(404, '文章不存在!');
        }
        //hook('portal_before_assign_article', $article);

        //$this->assign('article', $article);

        $this->assign("newsDetail",$article);
	    return $this->fetch(':newsDetail');
	}
}