<?php /*a:4:{s:40:"themes/simpleboot3/portal\\customer.html";i:1670291596;s:35:"themes/simpleboot3/public\head.html";i:1670401148;s:39:"themes/simpleboot3/public\function.html";i:1670291596;s:37:"themes/simpleboot3/public\footer.html";i:1670291596;}*/ ?>
<!DOCTYPE html>
<html>
<head>
   <!-- <title>首页 <?php echo (isset($site_info['site_name']) && ($site_info['site_name'] !== '')?$site_info['site_name']:''); ?></title>
    <meta name="keywords" content="<?php echo (isset($site_info['site_seo_keywords']) && ($site_info['site_seo_keywords'] !== '')?$site_info['site_seo_keywords']:''); ?>"/>
    <meta name="description" content="<?php echo (isset($site_info['site_seo_description']) && ($site_info['site_seo_description'] !== '')?$site_info['site_seo_description']:''); ?>">-->
    
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
                    <li data-url = "staffhome"><p><a href="<?php echo cmf_url('portal/Staffhome/index'); ?>" title="员工查询" target="_blank">员工查询</a></p></li>
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


	<style>
	.customer-box .customer-item{
		margin-bottom: 20px;
	}
	.customer-box img{
		width: 100%;
	}
	</style>
</head>
<body>
<div class="index-banner index-banner-top" style="width:100%;">
	<div class="hidden-xs index-banner-img" style="background: url('/themes/simpleboot3/public/assets/style/img/customers/banner.png') 0 0 no-repeat;background-size:  100% 100%;">
		<div class="inner">
			<div class="index-banner-box3">
				<div class="index-banner-title">合作客户</div>
				<!-- <div class="index-banner-text"><span>致力于做到行业最高清洁水平，引领行业标准</span></div> -->
			</div>
		</div>
	</div>
	<div class="hidden-lg hidden-md hidden-sm index-banner-img" style="background: url('/themes/simpleboot3/public/assets/style/img/customers/moble_banner.png') 0 0 no-repeat;background-size:  100% 100%;">
		<div class="inner">
			<div class="index-banner-box3 text-center">
				<div class="index-banner-title">合作客户</div>
				<!-- <div class="index-banner-text"><span>致力于做到行业最高清洁水平，引领行业标准</span></div> -->
			</div>
		</div>
	</div>
</div>
<div class="bg">
	<div class="inner">
		<div class="inner-bigger-title">
			<p>合作客户</p>
			<p></p>
			<p>COOPERATIVE CUSTOMERS</p>
		</div>
		<div class="row customer-box">
			<div class="col-lg-6 col-md-6 col-sm-12 col-xs-12 customer-item">
				<img src="/themes/simpleboot3/public/assets/style/img/customers/1.png" class="customers-img" />
			</div>
			<div class="col-lg-6 col-md-6 col-sm-12 col-xs-12 customer-item">
				<img src="/themes/simpleboot3/public/assets/style/img/customers/13.png" class="customers-img" />
			</div>
			<div class="col-lg-6 col-md-6 col-sm-12 col-xs-12 customer-item">
				<img src="/themes/simpleboot3/public/assets/style/img/customers/2.png" class="customers-img" />
			</div>
			<div class="col-lg-6 col-md-6 col-sm-12 col-xs-12 customer-item">
				<img src="/themes/simpleboot3/public/assets/style/img/customers/21.png" class="customers-img" />
			</div>
			<div class="col-lg-6 col-md-6 col-sm-12 col-xs-12 customer-item">
				<img src="/themes/simpleboot3/public/assets/style/img/customers/20.png" class="customers-img" />
			</div>
			<div class="col-lg-6 col-md-6 col-sm-12 col-xs-12 customer-item">
				<img src="/themes/simpleboot3/public/assets/style/img/customers/8.png" class="customers-img" />
			</div>
			<div class="col-lg-6 col-md-6 col-sm-12 col-xs-12 customer-item">
				<img src="/themes/simpleboot3/public/assets/style/img/customers/18.png" class="customers-img" />
			</div>
			<div class="col-lg-6 col-md-6 col-sm-12 col-xs-12 customer-item">
				<img src="/themes/simpleboot3/public/assets/style/img/customers/19.png" class="customers-img" />
			</div>
			<div class="col-lg-6 col-md-6 col-sm-12 col-xs-12 customer-item">
				<img src="/themes/simpleboot3/public/assets/style/img/customers/15.png" class="customers-img" />
			</div>
			<div class="col-lg-6 col-md-6 col-sm-12 col-xs-12 customer-item">
				<img src="/themes/simpleboot3/public/assets/style/img/customers/17.png" class="customers-img" />
			</div>
			<div class="col-lg-6 col-md-6 col-sm-12 col-xs-12 customer-item">
				<img src="/themes/simpleboot3/public/assets/style/img/customers/16.png" class="customers-img" />
			</div>
			<div class="col-lg-6 col-md-6 col-sm-12 col-xs-12 customer-item">
				<img src="/themes/simpleboot3/public/assets/style/img/customers/3.png" class="customers-img" />
			</div>
			<div class="col-lg-6 col-md-6 col-sm-12 col-xs-12 customer-item">
				<img src="/themes/simpleboot3/public/assets/style/img/customers/4.png" class="customers-img" />
			</div>
			<div class="col-lg-6 col-md-6 col-sm-12 col-xs-12 customer-item">
				<img src="/themes/simpleboot3/public/assets/style/img/customers/6.png" class="customers-img" />
			</div>
			<div class="col-lg-6 col-md-6 col-sm-12 col-xs-12 customer-item">
				<img src="/themes/simpleboot3/public/assets/style/img/customers/7.png" class="customers-img" />
			</div>
			<div class="col-lg-6 col-md-6 col-sm-12 col-xs-12 customer-item">
				<img src="/themes/simpleboot3/public/assets/style/img/customers/9.png" class="customers-img" />
			</div>
			<div class="col-lg-6 col-md-6 col-sm-12 col-xs-12 customer-item">
				<img src="/themes/simpleboot3/public/assets/style/img/customers/11.png" class="customers-img" />
			</div>
			<div class="col-lg-6 col-md-6 col-sm-12 col-xs-12 customer-item">
				<img src="/themes/simpleboot3/public/assets/style/img/customers/12.png" class="customers-img" />
			</div>
			<div class="col-lg-6 col-md-6 col-sm-12 col-xs-12 customer-item">
				<img src="/themes/simpleboot3/public/assets/style/img/customers/14.png" class="customers-img" />
			</div>
			<div class="col-lg-6 col-md-6 col-sm-12 col-xs-12 customer-item">
				<img src="/themes/simpleboot3/public/assets/style/img/customers/5.png" class="customers-img" />
			</div>
			<div class="col-lg-6 col-md-6 col-sm-12 col-xs-12 customer-item">
				<img src="/themes/simpleboot3/public/assets/style/img/customers/10.png" class="customers-img" />
			</div>
		</div>
	</div>
</div>





<div class="footer hidden-xs bgc" style="padding-bottom: 0;">
    <div class="foot-top">
		<div class="foot-top-left">
			<div class="yuyue-btn text-center">
				<a href="<?php echo cmf_url('portal/Form/index'); ?>" title="预约方案">预约方案</a>
			</div>
			<div class="contact-us">联系我们</div>
			<div class="contact-text">联系电话：186 0111 8711</div>
			<div class="contact-text">邮      箱：zhongjie@hualaogroup.com</div>
			<div class="contact-text">地      址：中国北京人力资源产业园（通州园）</div>
		</div>
		<div class="foot-top-right">
			<div class="row">
				<ul class="col-lg-3 col-md-3 col-sm-3">
					<li class="foot-top-right-title"><a href="javascript:void(0);">产品服务</a></li>
					<li class="foot-top-right-text"><a href="<?php echo cmf_url('portal/Service/index',array('id'=>1)); ?>">政府清洁</a></li>
					<li class="foot-top-right-text"><a href="<?php echo cmf_url('portal/Service/index',array('id'=>2)); ?>">酒店清洁</a></li>
					<li class="foot-top-right-text"><a href="<?php echo cmf_url('portal/Service/index',array('id'=>3)); ?>">学校清洁</a></li>
					<li class="foot-top-right-text"><a href="<?php echo cmf_url('portal/Service/index',array('id'=>4)); ?>">医院清洁</a></li>
					<li class="foot-top-right-text"><a href="<?php echo cmf_url('portal/Service/index',array('id'=>5)); ?>">写字楼清洁</a></li>
					<li class="foot-top-right-text"><a href="<?php echo cmf_url('portal/Service/index',array('id'=>6)); ?>">工业园区清洁</a></li>
					<li class="foot-top-right-text"><a href="<?php echo cmf_url('portal/Service/index',array('id'=>7)); ?>">城市环境清洁</a></li>
					<li class="foot-top-right-text"><a href="<?php echo cmf_url('portal/Service/index',array('id'=>8)); ?>">商场清洁</a></li>
				</ul>
				<ul class="col-lg-4 col-md-4 col-sm-4">
					<li class="foot-top-right-title"><a href="javascript:void(0);">解决方案</a></li>
					<li class="foot-top-right-text"><a href="<?php echo cmf_url('portal/Solution/index',array('id'=>1)); ?>">国企和上市物业公司保洁用工解决方案</a></li>
					<li class="foot-top-right-text"><a href="<?php echo cmf_url('portal/Solution/index',array('id'=>2)); ?>">保洁用工风险解决方案</a></li>
					<li class="foot-top-right-text"><a href="<?php echo cmf_url('portal/Solution/index',array('id'=>3)); ?>">保洁人员招聘外包解决方案</a></li>
				</ul>
				<ul class="col-lg-3 col-md-3 col-sm-3">
					<li class="foot-top-right-title"><a href="javascript:void(0);">联系我们</a></li>
					<li class="foot-top-right-text"><a href="<?php echo cmf_url('portal/Contacts/index'); ?>">联系方式</a></li>
					<li class="foot-top-right-text"><a href="<?php echo cmf_url('portal/Contacts/index'); ?>">服务覆盖</a></li>
					<li class="foot-top-right-text"><a href="<?php echo cmf_url('portal/Contacts/index'); ?>">加入我们</a></li>
				</ul>
				<ul class="col-lg-2 col-md-2 col-sm-2">
					<li class="text-right">
						<img src="/themes/simpleboot3/public/assets/style/img/qrcode.jpg" class="qrcode-img" />
						<div class="qrcode-text">官方公众平台</div>
					</li>
				</ul>
			</div>
		</div>
		<img src="/themes/simpleboot3/public/assets/style/img/triangle.png" class="foot-top-img" />
    </div>
    <div class="foot_d">
        <div class="row foot_down wd1100 " style="margin: 0 auto;">
            <div class="col-lg-7 col-md-7 col-sm-12 col-xs-12">
				<div style="display: flex;">
					<div>&copy;2022 中洁清洁服务有限公司&nbsp; &nbsp;</div>
					<div style="width:300px;margin:2px auto 0; ">
						<a target="_blank" href="http://www.beian.gov.cn/portal/registerSystemInfo?recordcode=37028502220584" style="display:inline-block;text-decoration:none;height:20px;line-height:20px;"><img src="http://www.beian.gov.cn/file/ghs.png" style="float:left;"/><p style="float:left;height:20px;line-height:20px;margin: 0px 0px 0px 5px; color:#939393;">鲁公网安备 37028502220584号</p></a>
					</div>
					<div><a target="_blank" href="https://beian.miit.gov.cn/?spm=5176.19720258.J_9220772140.111.6a2776f44GYwbi#/Integrated/index" style="display:inline-block;text-decoration:none;height:20px;line-height:20px;color: #939393;">鲁ICP备20013027号-2</a></div>
				</div>
				
                <!-- <div class="copyright">
                    &copy;2022 中洁清洁服务有限公司&nbsp; &nbsp;鲁ICP备20013027号
                </div> -->
            </div>
            <div class="col-lg-5 col-md-5 col-sm-12 col-xs-12" style="text-align: right;">
                <span>友情链接：</span>
				<a href="https://www.hualaogroup.com/" target="_blank" style="margin-left: 0;">
					<img src="/themes/simpleboot3/public/assets/style/img/hualao.gif"  style="width: 72px;" />
				</a>
               <!-- <?php
     $__LINKS__ = \app\admin\service\ApiService::links();
if(is_array($__LINKS__) || $__LINKS__ instanceof \think\Collection || $__LINKS__ instanceof \think\Paginator): $i = 0; $__LIST__ = $__LINKS__;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$vo): $mod = ($i % 2 );++$i;?>

                    <a href="<?php echo (isset($vo['url']) && ($vo['url'] !== '')?$vo['url']:''); ?>" target="<?php echo (isset($vo['target']) && ($vo['target'] !== '')?$vo['target']:''); ?>">
                        <?php echo (isset($vo['name']) && ($vo['name'] !== '')?$vo['name']:''); ?>
                    </a>
                
<?php endforeach; endif; else: echo "" ;endif; ?> -->
				<!-- <a href="<?php echo cmf_url('portal/Page/index',array('id'=>74)); ?>">法律声明</a>
				<a href="<?php echo cmf_url('portal/Page/index',array('id'=>75)); ?>">隐私政策</a> -->
            </div>
        </div>
    </div>
</div>
<div class="footer cl hidden-sm hidden-md hidden-lg" style="padding-bottom: 0;background: #F5F5F7;">
	<div class="inner">
		<div class="inner-bigger-title">
			<p>联系我们</p>
		<!-- 	<p></p>
			<p>COOPERATIVE CUSTOMERS</p> -->
		</div>
		<div class="foot-top-moble">
			<div class="contact-text">电话：186 0111 8711</div>
			<div class="contact-text">邮箱：zhongjie@hualaogroup.com</div>
			<div class="contact-text">地址：中国北京人力资源产业园（通州园）</div>
			<div class="yuyue-btn text-center" style="margin-top: 0.53rem;">
				<a href="<?php echo cmf_url('portal/Form/index'); ?>" title="预约方案">预约方案</a>
			</div>
		</div>
		<div class="buju">
			<div class="buju-title">全国<span>170+</span>家直营分/子公司</div>
			<div class="buju-name">东北地区：黑龙江、吉林、辽宁</div>
			<div class="buju-name">华北地区：北京、天津、河北、山西、内蒙古</div>
			<div class="buju-name">华中地区：河南、湖北、湖南</div>
			<div class="buju-name">华东地区：山东、江苏、安徽、上海、浙江、江西、福建</div>
			<div class="buju-name">华南地区：广东、广西、海南、香港、澳门、台湾</div>
			<div class="buju-name">西北地区：陕西、甘肃、宁夏、青海、新疆</div>
			<div class="buju-name">西南地区：四川、贵州、云南、重庆、西藏</div>
		</div>
		<div class="foot-center-moble text-center">
			<img src="/themes/simpleboot3/public/assets/style/img/qrcode.jpg" class="qrcode-img" />
			<div class="qrcode-text">官方公众平台</div>
		</div>
		<div class="youqinglianjie text-center">
			<a href="https://www.hualaogroup.com" title="华劳集团">
				<img src="/themes/simpleboot3/public/assets/style/img/lianjie.png" class="lianjie-img" />
			华劳集团</a>
		</div>
		<div class="beian">
			<div class="copyright" style="margin-top: 0.75rem;">
			    &copy;2022 中洁清洁服务有限公司
			</div>
			<!-- <div class="copyright">鲁ICP备20013027号</div> -->
			<div style="width:300px;margin:0 auto;height: 20px; ">
				<a target="_blank" href="http://www.beian.gov.cn/portal/registerSystemInfo?recordcode=37028502220584" style="display:inline-block;text-decoration:none;height:20px;line-height:20px;"><img src="http://www.beian.gov.cn/file/ghs.png" style="float:left;"/><p style="float:left;height:20px;line-height:20px;margin: 0px 0px 0px 5px; color:#939393;">鲁公网安备 37028502220584号</p></a>
			</div>
			<div><a target="_blank" href="https://beian.miit.gov.cn/?spm=5176.19720258.J_9220772140.111.6a2776f44GYwbi#/Integrated/index" style="display:inline-block;text-decoration:none;height:20px;line-height:20px;color: #939393;">鲁ICP备20013027号-2</a></div>
		</div>
		
	</div>
</div>

<script src="/themes/simpleboot3/public/assets/style/js/bootstrap.min.js"></script>
<script src="/themes/simpleboot3/public/assets/style/js/bootstrap-paginator.js"></script>
<script src="/themes/simpleboot3/public/assets/style/js/index.js"></script>

<!-- Swiper -->
<link rel="stylesheet" type="text/css" href="/themes/simpleboot3/public/assets/style/css/swiper.min.css">
<script type="text/javascript" src="/themes/simpleboot3/public/assets/style/js/swiper.jquery.min.js"></script>

<script>
    $(function() {
        var indexBnrSwiper = new Swiper('.index-banner .swiper-container', {
            pagination: '.index-banner .swiper-pagination',
            autoplay: 4000,
            speed: 600,
            effect: 'fade',
            loop: true,
            prevButton: '.button-prev',
            nextButton: '.button-next',
            paginationClickable: true,
            autoplayDisableOnInteraction: false,
            onInit: function(swiper) {
                $('.index-banner .swiper-pagination .swiper-pagination-bullet').html("<i></i>");
                $('.index-banner .swiper-pagination .swiper-pagination-bullet-active i').animate({
                    "left": 0
                }, 4000, function() {
                    $('.index-banner .swiper-pagination .swiper-pagination-bullet i').stop()
                        .css("left", "-100%");
                });
            },
            onSlideChangeEnd: function() {
                $('.index-banner .swiper-pagination .swiper-pagination-bullet i').stop().css("left",
                    "-100%");
                $('.index-banner .swiper-pagination .swiper-pagination-bullet-active i').animate({
                    "left": 0
                }, 4000, function() {
                    $('.index-banner .swiper-pagination .swiper-pagination-bullet i').stop()
                        .css("left", "-100%");
                });
            }
        });
    function b(e) {
        var c = e.data("num");
        e.text(0);
        var d = 0;
        var f = setInterval(function() {
            e.text(d += 6);
            if (d >= c) {
                clearInterval(f);
                e.text(c);
            }
        }, 110)
    }

    // $(".priorities").waypoint(function(c) {
    //     if (c == "down") {
    //         b($(".num").eq(0));
    //         b($(".num").eq(1));
    //         b($(".num").eq(2));
    //         b($(".num").eq(3));
    //         b($(".num").eq(4));
    //     }
    // }, {
    //     offset: "64%"
    // });
	});
</script>
</body>
</html>
