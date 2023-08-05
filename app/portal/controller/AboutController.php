<?php

namespace app\portal\controller;

use cmf\controller\HomeBaseController;
use app\portal\model\FormModel;
use think\Request;

class AboutController extends HomeBaseController
{
    public function index()
    {
        return $this->fetch(':about');
    }

    public function submitForm(Request $request)
{
    $data = $request->param(); // 获取表单提交的数据

    // 保存到数据库
    $formModel = new FormModel();
    $result = $formModel->save($data); // 保存数据

    // 判断保存结果并返回响应
    if ($result) {
        return json(['status' => 'success', 'message' => '表单提交成功！']);
    } else {
        return json(['status' => 'error', 'message' => '表单提交失败。']);
    }
}
}

