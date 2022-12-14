<?php
namespace app\portal\controller;

use app\portal\service\PostService;
use \cmf\controller\HomeBaseController;
class ApplicationController extends HomeBaseController{
	
	public function index(){
        $postService = new PostService();
        $arr=['category'=>29];
        $data        = $postService->adminArticleList($arr);
        $this->assign("list", $data);
		return $this->fetch(":application");
	}

}


