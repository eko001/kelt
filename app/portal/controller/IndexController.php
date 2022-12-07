<?php
// +----------------------------------------------------------------------
// | ThinkCMF [ WE CAN DO IT MORE SIMPLE ]
// +----------------------------------------------------------------------
// | Copyright (c) 2013-2019 http://www.thinkcmf.com All rights reserved.
// +----------------------------------------------------------------------
// | Licensed ( http://www.apache.org/licenses/LICENSE-2.0 )
// +----------------------------------------------------------------------
// | Author: 老猫 <thinkcmf@126.com>
// +----------------------------------------------------------------------
namespace app\portal\controller;

use app\admin\model\LinkModel;
use app\portal\model\PortalPostModel;
use app\portal\service\PostService;
use cmf\controller\HomeBaseController;
use think\facade\Db;
use function MongoDB\BSON\toJSON;

class IndexController extends HomeBaseController
{
    public function index()
    {
        //新闻中心
        $postService = new PostService();
        $param["category"] = 11;
        $newsList = Db::name('portal_post')->alias('p')->field('p.id as pid,p.*' )->leftJoin('portal_category_post c','c.post_id=p.id')->field('c.*')->where("p.post_status",1)->where("c.status",1)->where('c.category_id',11)->limit(0,4)->order('p.id','desc')->select();

        $data        = $postService->adminArticleList($param);
        //$data=array_slice((array)$data,0,4);
        $this->assign("newsList", $newsList);
        //$portalPostModel = new PortalPostModel();
        //$list = $portalPostModel->select();
        $postService = new PostService();
        //顶部轮播图
        $topSwiperList= Db::name('portal_post')->alias('p')->leftJoin('portal_category_post c','c.post_id=p.id')->where("p.post_status",1)->where("c.status",1)->where('c.category_id',14)->order('p.id','desc')->select();
        $this->assign("topSwiperList",$topSwiperList);
        //案例(推荐按)
        $anLiRecommendList = Db::name('portal_post')->alias('p')->leftJoin('portal_category_post c','c.post_id=p.id')->where("p.post_status",1)->where("c.status",1)->where('c.category_id',6)->where("p.recommended",1)->order('p.id','desc')->select();
        $this->assign("anLiRecommendList",$anLiRecommendList);
        //案例置顶
        $anLiTopList = Db::name('portal_post')->alias('p')->leftJoin('portal_category_post c','c.post_id=p.id')->where("p.post_status",1)->where("c.status",1)->where('c.category_id',6)->where("p.is_top",1)->order('p.id','desc')->select();
        $this->assign("anLiTopList",$anLiTopList);


       //解决方案
        $fangAnList= Db::name('portal_post')->alias('p')->leftJoin('portal_category_post c','c.post_id=p.id')->where("p.post_status",1)->where("c.status",1)->where('c.category_id',3)->order('p.id','desc')->select();

        $this->assign("fangAnList",$fangAnList);
         //优势
         $youShiList= Db::name('portal_post')->alias('p')->leftJoin('portal_category_post c','c.post_id=p.id')->where("p.post_status",1)->where("c.status",1)->where('c.category_id',8)->order('p.id','desc')->select();;
         $this->assign("youShiList",$youShiList);
         //媒体中心(置顶)
        $meiTiTop = Db::name('portal_post')->alias('p')->leftJoin('portal_category_post c','c.post_id=p.id')->where("p.post_status",1)->where("c.status",1)->where('c.category_id',11)->where("p.is_top",1)->order('p.id','desc')->limit(1)->limit(1)->select();
        $this->assign("meiTiTop",$meiTiTop);
        //媒体中心(推荐)
        $meiTiRecommendList = Db::name('portal_post')->alias('p')->leftJoin('portal_category_post c','c.post_id=p.id')->where("p.post_status",1)->where("c.status",1)->where('c.category_id',11)->where("p.recommended",1)->order('p.id','desc')->limit(2)->select();
        $this->assign("meiTiRecommendList",$meiTiRecommendList);
        //媒体中心
        $meiTiList = Db::name('portal_post')->alias('p')->leftJoin('portal_category_post c','c.post_id=p.id')->where("p.post_status",1)->where("c.status",1)->where('c.category_id',11)->where("p.recommended",0)->where("p.is_top",0)->order('p.id','desc')->limit(2)->select();
        $this->assign("meiTiList",$meiTiList);
        //中部轮播图
        $centerSwiperList= Db::name('portal_post')->alias('p')->leftJoin('portal_category_post c','c.post_id=p.id')->where("p.post_status",1)->where("c.status",1)->where('c.category_id',10)->order('p.id','desc')->select();
        $this->assign("centerSwiperList",$centerSwiperList);
       /* //客户(置顶)
        $customerTopList = Db::name('portal_post')->alias('p')->leftJoin('portal_category_post c','c.post_id=p.id')->where('c.category_id',15)->where("p.is_top",1)->order('p.id','desc')->limit(1)->select();
        $this->assign("customerTopList",$customerTopList);
        //客户(推荐)
        $customerRecommendList = Db::name('portal_post')->alias('p')->leftJoin('portal_category_post c','c.post_id=p.id')->where('c.category_id',15)->where("p.recommended",1)->order('p.id','desc')->limit(1)->select();
        $this->assign("customerRecommendList",$customerRecommendList);
        //客户
        $linkModel = new LinkModel();
        $customerList     = $linkModel->select();
        //$customerList = Db::name('portal_post')->alias('p')->leftJoin('portal_category_post c','c.post_id=p.id')->where('c.category_id',15)->where("p.recommended",0)->where("p.is_top",0)->order('p.id','desc')->select();
        $this->assign("customerList",$customerList);*/
        return $this->fetch(':index');
    }

    function getArtitle($param){
        $postService = new PostService();
        $data = $postService->adminArticleList($param);
        return $data;
    }


}
