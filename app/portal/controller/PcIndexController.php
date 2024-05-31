<?php

namespace app\portal\controller;

use app\portal\service\PostService;
use cmf\controller\RestBaseController;


class PcIndexController extends RestBaseController
{

  public function index()
  {

    return $this->fetch(':index');
  }

    /**
     * 获取合作客户列表
     */
    public function getCustomerList()
    {
        $param = $this->request->param();
        $postService = new PostService();
        $list = $postService->adminArticleListNotPage($param);
        for ($index = 0; $index < count($list); $index++) {
            $list[$index]['thumbnail'] = cmf_get_image_url($list[$index]['thumbnail']);
        }
        $this->success('请求成功!', $list);
    }

}

