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
        $newsList = Db::name('portal_post')->alias('p')->field('p.id as pid,p.*' )->leftJoin('portal_category_post c','c.post_id=p.id')->leftJoin('portal_category pc','c.category_id=pc.id')->field('c.*')->where("pc.parent_id",22)->where("p.post_status",1)->where("c.status",1)->limit(0,4)->order('p.id','desc')->select()->toArray();
        for($index=0;$index<count($newsList);$index++){
            $newsList[$index]["post_content"] = strip_tags(htmlspecialchars_decode($newsList[$index]["post_content"]));
        }
        $this->assign("newsList", $newsList);
        return $this->fetch(':index');
    }

    function getArtitle($param){
        $postService = new PostService();
        $data = $postService->adminArticleList($param);
        return $data;
    }

}
