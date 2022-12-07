<?php /*a:2:{s:48:"themes/admin_simpleboot3/portal\staff\index.html";i:1670399517;s:91:"D:\phpstudy\phpstudy_pro\WWW\hualaogroup\public/themes/admin_simpleboot3/public\header.html";i:1670291596;}*/ ?>
<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <!-- Set render engine for 360 browser -->
    <meta name="renderer" content="webkit">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- HTML5 shim for IE8 support of HTML5 elements -->
    <!--[if lt IE 9]>
    <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
    <![endif]-->


    <link href="/themes/admin_simpleboot3/public/assets/themes/<?php echo cmf_get_admin_style(); ?>/bootstrap.min.css" rel="stylesheet">
    <link href="/themes/admin_simpleboot3/public/assets/simpleboot3/css/simplebootadmin.css" rel="stylesheet">
    <link href="/static/font-awesome/css/font-awesome.min.css" rel="stylesheet" type="text/css">
    <!--[if lt IE 9]>
    <script src="https://cdn.bootcss.com/respond.js/1.4.2/respond.min.js"></script>
    <![endif]-->
    <style>
        form .input-order {
            margin-bottom: 0px;
            padding: 0 2px;
            width: 42px;
            font-size: 12px;
        }

        form .input-order:focus {
            outline: none;
        }

        .table-actions {
            margin-top: 5px;
            margin-bottom: 5px;
            padding: 0px;
        }

        .table-list {
            margin-bottom: 0px;
        }

        .form-required {
            color: red;
        }
    </style>
    <?php 
        $cmf_version=cmf_version();
        if (strpos(cmf_version(), '6.') === 0) {
            $_app=app()->http->getName();
        }else{
            $_app=request()->module();
        }
     ?>
    <script type="text/javascript">
        //全局变量
        var GV = {
            ROOT: "/",
            WEB_ROOT: "/",
            JS_ROOT: "static/js/",
            APP: '<?php echo $_app; ?>'/*当前应用名*/
        };
    </script>
    <script src="/themes/admin_simpleboot3/public/assets/js/jquery-1.10.2.min.js"></script>
    <script src="/static/js/wind.js"></script>
    <script src="/themes/admin_simpleboot3/public/assets/js/bootstrap.min.js"></script>
    <script>
        Wind.css('artDialog');
        Wind.css('layer');
        $(function () {
            $("[data-toggle='tooltip']").tooltip({
                container: 'body',
                html: true,
            });
            $("li.dropdown").hover(function () {
                $(this).addClass("open");
            }, function () {
                $(this).removeClass("open");
            });
        });
    </script>
    <?php if(APP_DEBUG): ?>
        <style>
            #think_page_trace_open {
                z-index: 9999;
            }
        </style>
    <?php endif; ?>

</head>
<body>
<div class="wrap js-check-wrap">
    <ul class="nav nav-tabs">
        <li class="active"><a href="javascript:;">所有员工</a></li>
        <li><a href="<?php echo url('Staff/add'); ?>">添加员工</a></li>
    </ul>
    <form class="well form-inline margin-top-20" method="post" action="<?php echo url('Staff/index'); ?>">

        姓名:
        <input type="text" class="form-control" name="name" style="width: 200px;"
               value="<?php echo (isset($name) && ($name !== '')?$name:''); ?>" placeholder="请输入姓名...">
        电话:
        <input type="text" class="form-control" name="phone" style="width: 200px;"
               value="<?php echo (isset($phone) && ($phone !== '')?$phone:''); ?>" placeholder="请输入电话...">
        <input type="submit" class="btn btn-primary" value="搜索"/>
        <a class="btn btn-danger" href="<?php echo url('Staff/index'); ?>">清空</a>
    </form>
    <form class="js-ajax-form" action="" method="post">
        <div class="table-actions">
            <button class="btn btn-danger btn-sm js-ajax-submit" type="submit"
                    data-action="<?php echo url('Staff/delete'); ?>" data-subcheck="true" data-msg="您确定删除吗？">
                <?php echo lang('DELETE'); ?>
            </button>
        </div>
        <table class="table table-hover table-bordered table-list">
            <thead>
            <tr>
                <th width="15">
                    <label>
                        <input type="checkbox" class="js-check-all" data-direction="x" data-checklist="js-check-x">
                    </label>
                </th>
                <th width="50">ID</th>
                <th width="130">姓名</th>
                <th width="130">编号</th>
                <th width="50">性别</th>
                <th width="160">电话</th>
                <th width="160">岗位</th>
                <th width="65">状态</th>
                <th width="65">头像</th>
                <th width="160">发布时间</th>
                <th width="95">操作</th>
            </tr>
            </thead>
            <?php if(is_array($list) || $list instanceof \think\Collection || $list instanceof \think\Paginator): if( count($list)==0 ) : echo "" ;else: foreach($list as $key=>$vo): ?>
                <tr>
                    <td>
                        <input type="checkbox" class="js-check" data-yid="js-check-y" data-xid="js-check-x" name="ids[]"
                               value="<?php echo $vo['id']; ?>" title="ID:<?php echo $vo['id']; ?>">
                    </td>
                    <td><b><?php echo $vo['id']; ?></b></td>
                    <td><?php echo $vo['name']; ?></td>
                    <td><?php echo $vo['number']; ?></td>
                    <td><?php echo $vo['sex']; ?></td>
                    <td><?php echo $vo['phone']; ?></td>
                    <td><?php echo $vo['position']; ?></td>
                    <td>
                        <?php echo !empty($vo['status']) ? '<span class=" btn btn-xs btn-success ">在职</span>' : 
                        '<span class=" btn btn-xs btn-warning ">离职</span>'; ?>
                    </td>
                    <td>
                            <img src="<?php echo cmf_get_image_preview_url($vo['avatar']); ?>"
                                 width="135" style="cursor: pointer"/>
                    </td>
                    <td>
                        <?php if(!(empty($vo['create_time']) || (($vo['create_time'] instanceof \think\Collection || $vo['create_time'] instanceof \think\Paginator ) && $vo['create_time']->isEmpty()))): ?>
                            <?php echo date('Y-m-d H:i',$vo['create_time']); ?>
                        <?php endif; ?>
                    </td>
                    <td>
                        <a class="btn btn-xs btn-primary" href="<?php echo url('Staff/edit',array('id'=>$vo['id'])); ?>"><?php echo lang('EDIT'); ?></a>
                        <a class="btn btn-xs btn-danger js-ajax-delete"
                           href="<?php echo url('Staff/delete',array('id'=>$vo['id'])); ?>"><?php echo lang('DELETE'); ?></a>
                        <?php if(empty($vo['status']) || (($vo['status'] instanceof \think\Collection || $vo['status'] instanceof \think\Paginator ) && $vo['status']->isEmpty())): ?>
                            <a class="js-ajax-dialog-btn btn btn-xs btn-success " data-msg="您确定变更为在职吗"
                               href="<?php echo url('Staff/toggle',['ids'=>$vo['id'],'display'=>1]); ?>">在职</a>
                            <?php else: ?>
                            <a class="js-ajax-dialog-btn btn btn-xs btn-warning " data-msg="您确定变更为离职吗"
                               href="<?php echo url('Staff/toggle',['ids'=>$vo['id'],'hide'=>1]); ?>">离职</a>
                        <?php endif; ?>
                    </td>
                </tr>
            <?php endforeach; endif; else: echo "" ;endif; ?>
        </table>
        <div class="table-actions">
            <button class="btn btn-danger btn-sm js-ajax-submit" type="submit"
                    data-action="<?php echo url('Staff/delete'); ?>" data-subcheck="true" data-msg="您确定删除吗？">
                <?php echo lang('DELETE'); ?>
            </button>
        </div>
        <ul class="pagination"><?php echo (isset($page) && ($page !== '')?$page:''); ?></ul>
    </form>
</div>
<script src="/static/js/admin.js"></script>
<script>

    function reloadPage(win) {
        win.location.reload();
    }

    $(function () {
        setCookie("refersh_time", 0);
        Wind.use('ajaxForm', 'artDialog', 'iframeTools', function () {
            //批量复制
            $('.js-articles-copy').click(function (e) {
                var ids = [];
                $("input[name='ids[]']").each(function () {
                    if ($(this).is(':checked')) {
                        ids.push($(this).val());
                    }
                });

                if (ids.length == 0) {
                    art.dialog.through({
                        id: 'error',
                        icon: 'error',
                        content: '您没有勾选信息，无法进行操作！',
                        cancelVal: '关闭',
                        cancel: true
                    });
                    return false;
                }

                ids = ids.join(',');
                art.dialog.open("/index.php?g=portal&m=AdminArticle&a=copy&ids=" + ids, {
                    title: "批量复制",
                    width: "300px"
                });
            });
            //批量移动
            $('.js-articles-move').click(function (e) {
                var ids = [];
                $("input[name='ids[]']").each(function () {
                    if ($(this).is(':checked')) {
                        ids.push($(this).val());
                    }
                });

                if (ids.length == 0) {
                    art.dialog.through({
                        id: 'error',
                        icon: 'error',
                        content: '您没有勾选信息，无法进行操作！',
                        cancelVal: '关闭',
                        cancel: true
                    });
                    return false;
                }

                ids = ids.join(',');
                art.dialog.open("/index.php?g=portal&m=AdminArticle&a=move&old_term_id=<?php echo (isset($term['term_id']) && ($term['term_id'] !== '')?$term['term_id']:0); ?>&ids=" + ids, {
                    title: "批量移动",
                    width: "300px"
                });
            });
        });
    });
</script>
</body>
</html>