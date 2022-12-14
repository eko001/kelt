<?php

namespace app\portal\controller;

use app\portal\model\PortalPostModel;
use app\portal\model\ResumeModel;
use cmf\controller\RestBaseController;
use think\facade\Db;

class AppController extends RestBaseController
{

    /**
     * 获取员工信息
     * @return false|string
     */
    public function getStaff()
    {
        $data = $this->request->param();
        $content = $data['content'];
        $detail = Db::name('staff')->field('*')
            ->where('name','=',$content)
            ->whereOr('phone','=',$content)
            ->find();
		$avatar=cmf_get_image_url($detail['avatar']);
		 $detail['avatar']=$avatar;
        $this->success('请求成功!', $detail);
    }

    /**
     * 职位列表
     * @return false|string
     */
    public function positionList()
    {
        $positionList = Db::name('recruit')->field('*')->order('id', 'desc')->select();
        $this->success('请求成功!', $positionList);
    }

    /** 推荐职位
     * @return false|string
     */
    public function positionTop()
    {
        $where = [
            'is_top' => 1,
        ];
        $positionTop = Db::name('recruit')->field('*')
            ->order('id', 'desc')
            ->limit(0, 1)
            ->where($where)
            ->find();
        $this->success('请求成功!', $positionTop);
    }

    /**
     * 职位详细
     */
    public function detail($id)
    {
        $where = [
            'id' => $id
        ];
        $detail = Db::name('recruit')->field('*')
            ->where($where)
            ->find();
        $this->success('请求成功!', $detail);
    }

    /**
     * 公司信息
     */
    public function company()
    {
        $portalPostModel = new PortalPostModel();
        $where = [
            'p.post_status' => 1,
            'p.delete_time' => 0,
            'c.category_id' => 19,
        ];
        $article = $portalPostModel->alias('p')->field('p.*')
            ->join('portal_category_post c', 'p.id = c.post_id')
            ->where($where)
            ->find();
        $webSite = json_encode($article, 320);
        $this->success('请求成功!', $article);
    }

    /**
     * 投简历
     */
    public function addPost()
    {
        if ($this->request->isPost()) {
            $data = $this->request->param();
            $post = $data['post'];
            $post['create_time'] = time();
            $ResumeModel = new ResumeModel();
            $result = $ResumeModel->addData($post);
            if ($result) {
                $this->success('添加成功!');
            } else {
                $this->error("添加失败");
            }
        }
    }

    /**
     * 获取 access_token
     */
    public function getAccessToken()
    {

        $Url = "https://api.weixin.qq.com/cgi-bin/token?grant_type=client_credential&appid=wx5833728a8d4192b0&secret=3d71b360bb69d031ed28d077d9c7cab7";
        $res = file_get_contents($Url);
        $wxres = json_decode($res, true);
        $token = $wxres['access_token'];
        if ($token) {
            $this->success('请求成功!',$token);
        } else {
            $this->error("请求失败！",$token);
        }
    }

    /**
     * 获取 手机号
     */
    public function getPhone($accessToken, $code)
    {
        $post_data = array(
            'code' => $code,
        );
        $Url = "https://api.weixin.qq.com/wxa/business/getuserphonenumber?access_token=".$accessToken;
        $data = json_encode($post_data);
        $ch = curl_init();
        curl_setopt($ch, CURLOPT_URL, $Url);
        curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
        curl_setopt($ch, CURLOPT_POST, true);
        curl_setopt($ch, CURLOPT_POSTFIELDS, $data);
        curl_setopt($ch, CURLOPT_HTTPHEADER,array(
            'Content-Type: application/json; charset=utf-8',
            'Content-Length:' . strlen($data),
            'Cache-Control: no-cache',
            'Pragma: no-cache'
        ));
        curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, false);
        curl_setopt($ch, CURLOPT_SSL_VERIFYHOST, false);

        $res = curl_exec($ch);
        curl_close($ch);
        $wxres = json_decode($res, true);

         if($wxres){
             $this->success('请求成功!',$wxres);
         }else{
             $this->error("请求失败！");
         }
    }

    /**
     * 客户信息
     */
    public function customer()
    {
        $artList= Db::name('portal_post')->alias('p')->leftJoin('portal_category_post c','c.post_id=p.id')->where("p.post_status",1)->where("c.status",1)->where('c.category_id',22)->order('p.id','desc')->select();
        $webSite = json_encode($artList, 320);
        $this->success('请求成功!', $artList);
    }

}