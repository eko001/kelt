<?php /*a:2:{s:46:"themes/admin_simpleboot3/portal\staff\add.html";i:1670398428;s:91:"D:\phpstudy\phpstudy_pro\WWW\hualaogroup\public/themes/admin_simpleboot3/public\header.html";i:1670291596;}*/ ?>
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

<style type="text/css">
    .pic-list li {
        margin-bottom: 5px;
    }
</style>
<script type="text/html" id="photos-item-tpl">
    <li id="saved-image{id}">
        <input id="photo-{id}" type="hidden" name="photo_urls[]" value="{filepath}">
        <input class="form-control" id="photo-{id}-name" type="text" name="photo_names[]" value="{name}"
               style="width: 200px;" title="图片名称">
        <img id="photo-{id}-preview" src="{url}" style="height:36px;width: 36px;"
             onclick="imagePreviewDialog(this.src);">
        <a href="javascript:uploadOneImage('图片上传','#photo-{id}');">替换</a>
        <a href="javascript:(function(){$('#saved-image{id}').remove();})();">移除</a>
    </li>
</script>
<script type="text/html" id="files-item-tpl">
    <li id="saved-file{id}">
        <input id="file-{id}" type="hidden" name="file_urls[]" value="{filepath}">
        <input class="form-control" id="file-{id}-name" type="text" name="file_names[]" value="{name}"
               style="width: 200px;" title="文件名称">
        <a id="file-{id}-preview" href="{preview_url}" target="_blank">下载</a>
        <a href="javascript:uploadOne('文件上传','#file-{id}','file');">替换</a>
        <a href="javascript:(function(){$('#saved-file{id}').remove();})();">移除</a>
    </li>
</script>
</head>
<body>
<div class="wrap js-check-wrap">
    <ul class="nav nav-tabs">
        <li><a href="<?php echo url('Staff/index'); ?>">员工管理</a></li>
        <li class="active"><a href="<?php echo url('Staff/add'); ?>">添加员工</a></li>
    </ul>
    <form action="<?php echo url('Staff/addPost'); ?>" method="post" class="form-horizontal js-ajax-form margin-top-20">
        <div class="row">
            <div class="col-md-9">
                <table class="table table-bordered">
                    <tr>
                        <th>姓名<span class="form-required">*</span></th>
                        <td>
                            <input class="form-control" type="text" name="post[name]"
                                   id="name" required value="" placeholder="请输入姓名"/>
                        </td>
                    </tr>
                    <tr>
                        <th>编号<span class="form-required">*</span></th>
                        <td>
                            <input class="form-control" type="text" name="post[number]" id="number" value="" required
                                   placeholder="请输入编号">
                        </td>
                    </tr>
                    <tr>
                        <th>性别<span class="form-required">*</span></th>
                        <td>
                            <select class="form-control" name="post[sex]" id="sex" value="" required>
                                <option value ="0">男</option>
                                <option value ="1">女</option>
                            </select>
                        </td>
                    </tr>
                    <tr>
                        <th>电话<span class="form-required">*</span></th>
                        <td><input class="form-control" type="text" name="post[phone]" id="phone" value="" required
                                   placeholder="请输入电话"></td>
                    </tr>
                    <tr>
                        <th>岗位<span class="form-required">*</span></th>
                        <td><input class="form-control" type="text" name="post[position]" id="position" value="" required
                                   placeholder="请输入岗位"></td>
                    </tr>
                    <tr>
                        <th>头像<span class="form-required">*</span></th>
                        <td>
                            <input type="hidden" name="post[avatar]" class="form-control" required
                                   id="js-thumbnail-input">
                            <div>
                                <a href="javascript:uploadOneImage('图片上传','#js-thumbnail-input');">
                                    <img src="/themes/admin_simpleboot3/public/assets/images/default-thumbnail.png"
                                         id="js-thumbnail-input-preview"
                                         width="135" style="cursor: pointer"/>
                                </a>
                            </div>
                        </td>
                    </tr>

                </table>
                <div class="form-group">
                    <div class="col-sm-offset-2 col-sm-10">
                        <button type="submit" class="btn btn-primary js-ajax-submit"><?php echo lang('ADD'); ?></button>
                        <a class="btn btn-default" href="<?php echo url('Staff/index'); ?>"><?php echo lang('BACK'); ?></a>
                    </div>
                </div>
            </div>
            <div class="col-md-3">
                <table class="table table-bordered">
                    <tr>
                        <th><b>发布时间</b></th>
                    </tr>
                    <tr>
                        <td>
                            <input class="form-control js-bootstrap-datetime" type="text" name="post[create_time]"
                                   value="<?php echo date('Y-m-d H:i:s',time()); ?>">
                        </td>
                    </tr>

                </table>

               <!-- <?php 
    hook('portal_admin_article_edit_view_right_sidebar',null,false);
 ?>-->
            </div>
        </div>
    </form>
</div>
<script type="text/javascript" src="/static/js/admin.js"></script>
<script type="text/javascript">
    //编辑器路径定义
    var editorURL = GV.WEB_ROOT;
</script>
<script type="text/javascript" src="/static/js/ueditor/ueditor.config.js"></script>
<script type="text/javascript" src="/static/js/ueditor/ueditor.all.min.js"></script>
<script type="text/javascript">
    $(function () {

        editorcontent = new baidu.editor.ui.Editor();
        editorcontent.render('content');
        try {
            editorcontent.sync();
        } catch (err) {
        }

        $('.btn-cancel-thumbnail').click(function () {
            $('#thumbnail-preview').attr('src', '/themes/admin_simpleboot3/public/assets/images/default-thumbnail.png');
            $('#thumbnail').val('');
        });

    });

    function doSelectCategory() {
        var selectedCategoriesId = $('#js-categories-id-input').val();
        openIframeLayer("<?php echo url('AdminCategory/select'); ?>?ids=" + selectedCategoriesId, '请选择分类', {
            area: ['700px', '400px'],
            btn: ['确定', '取消'],
            yes: function (index, layero) {
                //do something

                var iframeWin          = window[layero.find('iframe')[0]['name']];
                var selectedCategories = iframeWin.confirm();
                if (selectedCategories.selectedCategoriesId.length == 0) {
                    layer.msg('请选择分类');
                    return;
                }
                $('#js-categories-id-input').val(selectedCategories.selectedCategoriesId.join(','));
                $('#js-categories-name-input').val(selectedCategories.selectedCategoriesName.join(' '));
                //console.log(layer.getFrameIndex(index));
                layer.close(index); //如果设定了yes回调，需进行手工关闭
            }
        });
    }
</script>
</body>
</html>
