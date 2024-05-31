<?php
use think\facade\Route;

Route::get('首页/:id', 'portal/Article/index?cid=42')->append(array('cid' => '42',))
->pattern(array('id' => '\d+',  'cid' => '\d+',));

Route::get('轮播图/:id', 'portal/Article/index?cid=43')->append(array('cid' => '43',))
->pattern(array('id' => '\d+',  'cid' => '\d+',));

Route::get('我们的服务/:id', 'portal/Article/index?cid=44')->append(array('cid' => '44',))
->pattern(array('id' => '\d+',  'cid' => '\d+',));

Route::get('行业领先企业/:id', 'portal/Article/index?cid=45')->append(array('cid' => '45',))
->pattern(array('id' => '\d+',  'cid' => '\d+',));

Route::get('顶部背景图/:id', 'portal/Article/index?cid=47')->append(array('cid' => '47',))
->pattern(array('id' => '\d+',  'cid' => '\d+',));

Route::get('产品/:id', 'portal/Article/index?cid=48')->append(array('cid' => '48',))
->pattern(array('id' => '\d+',  'cid' => '\d+',));

Route::get('产品管理/:id', 'portal/Article/index?cid=31')->append(array('cid' => '31',))
->pattern(array('id' => '\d+',  'cid' => '\d+',));

Route::get('首页', 'portal/List/index?id=42')->append(array('id' => '42',))
->pattern(array('id' => '\d+',));

Route::get('轮播图', 'portal/List/index?id=43')->append(array('id' => '43',))
->pattern(array('id' => '\d+',));

Route::get('我们的服务', 'portal/List/index?id=44')->append(array('id' => '44',))
->pattern(array('id' => '\d+',));

Route::get('行业领先企业', 'portal/List/index?id=45')->append(array('id' => '45',))
->pattern(array('id' => '\d+',));

Route::get('顶部背景图', 'portal/List/index?id=47')->append(array('id' => '47',))
->pattern(array('id' => '\d+',));

Route::get('产品', 'portal/List/index?id=48')->append(array('id' => '48',))
->pattern(array('id' => '\d+',));

Route::get('产品管理', 'portal/List/index?id=31')->append(array('id' => '31',))
->pattern(array('id' => '\d+',));


