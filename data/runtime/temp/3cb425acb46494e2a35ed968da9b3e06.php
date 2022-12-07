<?php /*a:3:{s:38:"themes/simpleboot3/portal\\staffs.html";i:1670406762;s:35:"themes/simpleboot3/public\head.html";i:1670402422;s:39:"themes/simpleboot3/public\function.html";i:1670291596;}*/ ?>
<!DOCTYPE html>
<html>
<head>
    
<?php 
    /*可以加多个方法哟！*/
    if (!function_exists('_sp_helloworld')) {
        function _sp_helloworld(){
        echo "hello ThinkCMF!";
        }
    }

    if (!function_exists('_sp_helloworld2')) {
        function _sp_helloworld2(){
        echo "hello ThinkCMF2!";
        }
    }

    if (!function_exists('_sp_helloworld3')) {
        function _sp_helloworld3(){
        echo "hello ThinkCMF3!";
        }
    }
 ?>
<meta name="author" content="ThinkCMF">
<html>
<head>
	<meta http-equiv="content-type" content="text/html; charset=utf-8">
	<meta name="format-detection" content="telephone=no">
	<meta name="apple-mobile-web-app-capable" content="yes">
	<meta name="apple-mobile-web-app-status-bar-style" content="black-translucent">
	<meta name="renderer" content="webkit">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="screen-orientation" content="portrait">
	<meta name="x5-orientation" content="portrait">
	<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1, minimum-scale=1, user-scalable=no, minimal-ui">
	<title>中洁清洁-公共区域保洁服务商</title>
	<meta name="keywords" content="酒店清洁、学校清洁、医院清洁、办公清洁、商场清洁，城市清洁，政府清洁，保洁人员外包">
	<meta name="description" content="2022冬残奥会优质服务荣誉获得单位，酒店清洁、学校清洁、医院清洁、办公清洁、商场清洁，城市清洁，政府清洁，保洁人员外包，一站式保洁外包服务商">
	<meta http-equiv="Cache-Control" content="no-transform">
	<meta http-equiv="Cache-Control" content="no-siteapp">
	<meta http-equiv="Pragma" content="no-cache">
	<meta http-equiv="Cache-Control" content="no-cache">
	<meta http-equiv="Expires" content="0">
	<script src="/themes/simpleboot3/public/assets/style/js/flexible.js"></script>
    <link href="/themes/simpleboot3/public/assets/style/css/bootstrap.min.3.3.7.css" rel="stylesheet">
	<link href="/themes/simpleboot3/public/assets/style/css/slick.css" rel="stylesheet">
	<link href="/themes/simpleboot3/public/assets/style/css/slick-theme.css" rel="stylesheet">
	<link rel="stylesheet" type="text/css" href="/themes/simpleboot3/public/assets/style/css/reset.css?v=0.08">
    <link rel="stylesheet" type="text/css" href="/themes/simpleboot3/public/assets/style/css/common.css?v=0.11">
    <link rel="stylesheet" type="text/css" href="/themes/simpleboot3/public/assets/style/css/index.css?v=0.11">
	<link href="/themes/simpleboot3/public/assets/style/font/iconfont.css" rel="stylesheet">
    <link rel="shortcut icon" href="/themes/simpleboot3/public/assets/style/img/favicon.ico">
    <link href="/themes/simpleboot3/public/assets/style/css/contact.css" rel="stylesheet">
    <link href="/themes/simpleboot3/public/assets/style/css/staffs.css" rel="stylesheet">
    <link href="/themes/simpleboot3/public/assets/style/css/map.css" rel="stylesheet">
    <link href="/themes/simpleboot3/public/assets/style/css/news.css" rel="stylesheet">
	<script src="/themes/simpleboot3/public/assets/style/js/jquery.min.js"></script>
	<script src="/themes/simpleboot3/public/assets/style/js/slick.min.js"></script>
	<script src="/themes/simpleboot3/public/assets/style/font/iconfont.js"></script>
	
	
</head>

<body>
<!--头部公用-start-->
<div class="navbar nav-header hidden-xs header">
    <div class="header-box">
        <div class="row">
            <div class="col-lg-2 col-md-2 col-sm-2">
				<a href="javascript:void(0)" class="img-logo"></a>
            </div>
            <div class="col-lg-8 col-md-8 col-sm-8">
                <ul class="nav navbar-nav">
                    <li data-url = "index"><p><a href="<?php echo cmf_url('portal/Index/index'); ?>" title="首页">首页</a></p></li>
                    <li data-url = "solution">
						<p><a href="javascript:;" title="解决方案&产品服务">解决方案&产品服务</a></p>
						<div class="menu-dropdown" id="menu-dropdown-1">
							<div id="menu-dropdown-wrapper" class="menu-dropdown-wrapper">
								<div id="menu-dropdown-content-wrapper" class="menu-dropdown-content-wrapper" style="border:none;height:100%">
									<div class="menu-dropdown-content-2 flex-box" id="menu-dropdown-content"  style="height:100%">
										<ul class="nav-item-title">
											<li class="title-active">解决方案</li>
											<li>产品服务</li>
										</ul>
										<ul class="nav-item-text" style="height:100%;border-left: solid 1px #e6e6e6;">
											<li class="nav-item-text-list text-active">
												<ul class="nav-item-text-item flex-box">
													<li><a href="<?php echo cmf_url('portal/Solution/index',array('id'=>1)); ?>" title="国企和上市物业公司保洁用工解决方案">国企和上市物业公司保洁用工解决方案</a></li>
													<li><a href="<?php echo cmf_url('portal/Solution/index',array('id'=>2)); ?>" title="保洁用工风险解决方案">保洁用工风险解决方案</a></li>
													<li><a href="<?php echo cmf_url('portal/Solution/index',array('id'=>3)); ?>" title="保洁人员招聘外包解决方案">保洁人员招聘外包解决方案</a></li>
												</ul>
											</li>
											<li class="nav-item-text-list">
												<ul class="nav-item-text-item flex-box">
													<li><a href="<?php echo cmf_url('portal/Service/index',array('id'=>1)); ?>" title="政府清洁">政府清洁</a></li>
													<li><a href="<?php echo cmf_url('portal/Service/index',array('id'=>2)); ?>" title="酒店清洁">酒店清洁</a></li>
													<li><a href="<?php echo cmf_url('portal/Service/index',array('id'=>3)); ?>" title="学校清洁">学校清洁</a></li>
													<li><a href="<?php echo cmf_url('portal/Service/index',array('id'=>4)); ?>" title="医院清洁">医院清洁</a></li>
													<li><a href="<?php echo cmf_url('portal/Service/index',array('id'=>5)); ?>" title="写字楼清洁">写字楼清洁</a></li>
													<li><a href="<?php echo cmf_url('portal/Service/index',array('id'=>6)); ?>" title="工业园区清洁">工业园区清洁</a></li>
													<li><a href="<?php echo cmf_url('portal/Service/index',array('id'=>7)); ?>" title="城市环境清洁">城市环境清洁</a></li>
													<li><a href="<?php echo cmf_url('portal/Service/index',array('id'=>8)); ?>" title="商场清洁">商场清洁</a></li>
												</ul>
											</li>
										</ul>
									</div>
								</div>
							</div>
						</div>
					</li>
                    <!-- <li data-url = "news"><p><a href="<?php echo cmf_url('portal/News/index'); ?>" title="新闻中心">新闻中心</a></p></li> -->
                    <li data-url = "about"><p><a href="<?php echo cmf_url('portal/About/index'); ?>" title="关于中洁">关于中洁</a></p></li>
                    <li data-url = "customer"><p><a href="<?php echo cmf_url('portal/Customer/index'); ?>" title="合作客户">合作客户</a></p></li>
                    <li data-url = "contacts"><p><a href="<?php echo cmf_url('portal/Contacts/index'); ?>" title="联系我们">联系我们</a></p></li>
                    <li data-url = "form"><p><a href="<?php echo cmf_url('portal/Form/index'); ?>" title="预约方案" target="_blank">预约方案</a></p></li>
                    <li data-url = "staffs"><p><a href="<?php echo cmf_url('portal/Staffs/index'); ?>" title="员工查询" target="_blank">员工查询</a></p></li>
                </ul>
            </div>
            <div class="col-lg-2 col-md-2 col-sm-2 num-phone">186 0111 8711</div>
        </div>
    </div>
</div>

<div class="navbar navbar-default hidden-sm hidden-md hidden-lg xmHeader" role="navigation" id="xmHeader">
    <div class="navbar-header header" id="header">
        <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#navbar-collapse">
            <span class="sr-only">切换导航</span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
        </button>
        <a class="navbar-brand img-logo" href="javascript:void(0)"></a>
    </div>
    <div class="collapse navbar-collapse navbar-inverse navbar-fixed-top" id="navbar-collapse">
		<ul class="menu-splitL">
			<li class="menu-splitL-li border-1px-rgba animate">
				<a href="<?php echo cmf_url('portal/Index/index'); ?>" class="menu-splitL-item" title="首页">首页</a>
			</li>
			<li class="menu-splitL-li menu-splitL-product-li border-1px-rgba animate">
				<a href="javascript:void(0)" class="menu-splitL-item" title="解决方案&产品服务">解决方案&产品服务</a>
				<img class="menu-icon" src="/themes/simpleboot3/public/assets/style/img/menu-icon.png" alt="">
			</li>
			<ul class="menu-product-ul" style="display: none;">
				<li class="menu-product-ul-li menu-product-estate-li border-1px-rgba animate">
					<a href="javascript:void(0)" class="menu-splitL-item">解决方案</a>
					<img class="menu-icon" src="/themes/simpleboot3/public/assets/style/img/menu-icon.png" alt="">                                    
				</li>
				<ul class="menu-estate-ul menu-product-ul-style border-1px-rgba" style="display: none;">
					<li class="menu-estate-ul-li animate">
						<a href="<?php echo cmf_url('portal/Solution/index',array('id'=>1)); ?>" class="menu-splitL-item menu-product-ul-li-style">国企和上市物业公司保洁用工解决方案</a>
					</li>
					<li class="menu-estate-ul-li animate">
						<a href="<?php echo cmf_url('portal/Solution/index',array('id'=>2)); ?>" class="menu-splitL-item menu-product-ul-li-style">保洁用工风险解决方案</a>
					</li>
					<li class="menu-estate-ul-li animate">
						<a href="<?php echo cmf_url('portal/Solution/index',array('id'=>3)); ?>" class="menu-splitL-item menu-product-ul-li-style">保洁人员招聘外包解决方案</a>
					</li>
				</ul>	
				<li class="menu-product-ul-li menu-product-government-li border-1px-rgba animate">
					<a href="javascript:void(0)" class="menu-splitL-item" title="产品服务">产品服务</a>
					<img class="menu-icon" src="/themes/simpleboot3/public/assets/style/img/menu-icon.png" alt="产品服务">                                    
				</li>
				<ul class="menu-government-ul menu-product-ul-style border-1px-rgba" style="display: none;">
					<li class="menu-government-ul-li menu-product-ul-li-style animate">
						<a href="<?php echo cmf_url('portal/Service/index',array('id'=>1)); ?>" class="menu-splitL-item" title="政府清洁">政府清洁</a>
					</li>
					<li class="menu-government-ul-li menu-product-ul-li-style animate">
						<a href="<?php echo cmf_url('portal/Service/index',array('id'=>2)); ?>" class="menu-splitL-item" title="酒店清洁">酒店清洁</a>
					</li>
					<li class="menu-government-ul-li menu-product-ul-li-style animate">
						<a href="<?php echo cmf_url('portal/Service/index',array('id'=>3)); ?>" class="menu-splitL-item" title="学校清洁">学校清洁</a>
					</li>
					<li class="menu-government-ul-li menu-product-ul-li-style animate">
						<a href="<?php echo cmf_url('portal/Service/index',array('id'=>4)); ?>" class="menu-splitL-item" title="医院清洁">医院清洁</a>
					</li>
					<li class="menu-government-ul-li menu-product-ul-li-style animate">
						<a href="<?php echo cmf_url('portal/Service/index',array('id'=>5)); ?>" class="menu-splitL-item" title="写字楼清洁">写字楼清洁</a>
					</li>
					<li class="menu-government-ul-li menu-product-ul-li-style animate">
						<a href="<?php echo cmf_url('portal/Service/index',array('id'=>6)); ?>" class="menu-splitL-item" title="工业园区清洁">工业园区清洁</a>
					</li>
					<li class="menu-government-ul-li menu-product-ul-li-style animate">
						<a href="<?php echo cmf_url('portal/Service/index',array('id'=>7)); ?>" class="menu-splitL-item" title="城市环境清洁">城市环境清洁</a>
					</li>
					<li class="menu-government-ul-li menu-product-ul-li-style animate">
						<a href="<?php echo cmf_url('portal/Service/index',array('id'=>8)); ?>" class="menu-splitL-item" title="商场清洁">商场清洁</a>
					</li>
				</ul>
			</ul>
			<!-- <li class="menu-splitL-li border-1px-rgba animate">
				<a href="<?php echo cmf_url('portal/News/index'); ?>" class="menu-splitL-item" title="新闻中心">新闻中心</a>
			</li> -->
			<li class="menu-splitL-li border-1px-rgba animate">
				<a href="<?php echo cmf_url('portal/About/index'); ?>" class="menu-splitL-item" title="关于中洁">关于中洁</a>
			</li>
			<li class="menu-splitL-li border-1px-rgba animate">
				<a href="<?php echo cmf_url('portal/Customer/index'); ?>" class="menu-splitL-item" title="合作客户">合作客户</a>
			</li>
			<li class="menu-splitL-li border-1px-rgba animate">
				<a href="<?php echo cmf_url('portal/Contacts/index'); ?>" class="menu-splitL-item" title="联系我们">联系我们</a>
			</li>
			<li class="menu-splitL-li border-1px-rgba animate">
				<a href="<?php echo cmf_url('portal/Form/index'); ?>" class="menu-splitL-item" title="预约方案">预约方案</a>
			</li>
			<li class="menu-splitL-li border-1px-rgba animate">
				<a href="<?php echo cmf_url('portal/Staffs/index'); ?>" class="menu-splitL-item" title="员工查询">员工查询</a>
			</li>
		</ul>
    </div>
</div>
</body>
<script type="text/javascript">
	$(function(){
		activeNav();
		$('.header-box li').mouseover(function(){
			$('.header-box li').removeClass('active');
			$(this).addClass('active');
		});
		
		$('.nav-item-title li').mouseover(function(){
			$('.nav-item-title li').removeClass('title-active');
			$(this).addClass('title-active');
			var n = $(this).index();
			$('.nav-item-text .nav-item-text-list').removeClass('text-active');
			$('.nav-item-text .nav-item-text-list').eq(n).addClass('text-active');
		});
		$(".nav-item-text .nav-item-text-list li").mouseover(function(){
			$('.nav-item-text li.nav-item-text-list li').removeClass('col');
			$(this).addClass('col');
		});
		$('.header-box').mouseout(function(){
			activeNav();
		});
		function activeNav(){
			$('.header-box li').removeClass('active');
			var location = window.location.pathname;
			var arr = location.split("/");
			if(location == '/'){
				$('.header-box li').eq(0).addClass('active');
			}else if(arr[2] === "service"){
				$('.header-box li').eq(1).addClass('active');	
			}else{
				for(var i = 0;i<$('.header-box li').length;i++){
					if($('.header-box li').eq(i).data('url')==arr[2]){
						$('.header-box li').eq(i).addClass('active');
						return true
					}
				}
			}
			
		};
		$(".menu-splitL-li").click(function(){
			$(this).next().toggle();
			$(this).children(".menu-icon").toggleClass("menu-icon-route");
		});
		$(".menu-product-ul-li").click(function(){
			$(this).next().toggle();
			$(this).children(".menu-icon").toggleClass("menu-icon-route");
		});
		//头部固定
		$(window).scroll(function() {
		    var scrollTop = document.documentElement.scrollTop || window.pageYOffset || document.body.scrollTop;
		    if(scrollTop > 50) {
		        $('.header').addClass('header-fixed-box');
		    } else {
		        $('.header').removeClass('header-fixed-box');
		    }
		});
		
		$(window).scroll(function () {
		    if ($(window).scrollTop() >= 30) {
		        $("#xmHeader").addClass("header-fixed-box");
		    } else {
		        $("#xmHeader").removeClass("header-fixed-box");
		    }
		});
	})
</script>
</html>


</head>
<body>
<div id="staffs">
    <div style="height: 400px;"></div>
    <!-- 联系方式 -->
    <div class="staffsContainer">
        <div class="inner">
            <div class="text">员工查询</div>
            <div style="display: flex;width: 100%">
                <div style="width: 90%">
                    <input type="text" class="form-control input-lg colbg" placeholder="请输入姓名/手机号" name="content" id="content">
                </div>
                <button  type="button" class="btn btn-default input-lg colbg" style=" width: 10%; font-weight: bold; padding: 10px 32px; font-size: 14px; color: #009e96; background-color: #FFFFFF; border: solid 1px;" id="button">立即查询</button>
            </div>
            <div class="userInfo">
                <img src="" alt="">
                <div class="userInfo_right">
                    <div class="userInfo_right_name">姓名:</div>
                    <div class="userInfo_right_sex">性别:</div>
                    <div class="userInfo_right_sex">工号:</div>
                    <div class="userInfo_right_sex">状态:</div>
                    <div class="userInfo_right_sex">电话:</div>
                </div>

            </div>
            <div class="tag">友情提示:</div>
            <div class="content">输入姓名或工号即可验证查询人员是否为华劳集团及关联公司员工。</div>
            <div class="content">可查询华劳集团及关联公司的员工基本信息和“在/离职”状态。</div>
            <div class="content">如果已离职员工或其他公司员工以华劳集团名义与您合作，可以向我们举报。</div>
            <div class="content">举报电话：400-871-8711。</div>
        </div>

    </div>
</div>


<script type="text/javascript">
    window.onload = function () {
        $(".show-big .slider-slides").slick({
            dots: true,
            infinite: true,
            slidesToShow: 5,
            slidesToScroll: 5
        });
        $(".show-small .slider-slides").slick({
            dots: true,
            infinite: true,
            slidesToShow: 2,
            slidesToScroll: 2
        });
        $('.show-regin').mouseenter(function () {
            $(this).find('.map-desc').addClass('map-desc-active');
        })
        $('.show-regin').mouseleave(function () {
            $(this).find('.map-desc').removeClass('map-desc-active')
        })
    }

    //正常屏幕提交
    document.getElementById("button").onclick = function() {
        var content = document.getElementById("content").value;
        $.ajax({
            type: "GET",
            url: "<?php echo url('App/getStaff'); ?>" ,
            data: content,
            success: function (result) {
                console.log(result);//打印服务端返回的数据(调试用)
                if (result.code == 1) {
                    alert("提交成功")
                };
            },
            error : function() {
                alert("提交失败");
            }
        })
    };

</script>
</body>
<style>
    input::-webkit-input-placeholder {
        /* placeholder颜色 */
        color: rgba(18, 18, 18, 0.4);
        /* placeholder字体大小 */
        font-size: 14px;
        position: relative;
        /* left:20px; */
    }
</style>
</html>
