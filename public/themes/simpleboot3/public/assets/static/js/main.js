$(function () {
	 var swiper = new Swiper('.swiper-container', {
        pagination: '.swiper-pagination',
        slidesPerView: 4,
        centeredSlides: true,
        paginationClickable: true,
        spaceBetween: 30
    });

	  var swiper2 = new Swiper('.gov_app_swiper', {
        pagination: '.swiper-pagination',
        effect: 'flip',
        grabCursor: true,
        nextButton: '.swiper-button-next',
        prevButton: '.swiper-button-prev'
    });


	 var Dom = {
	 	$ar_item : $('.ar_case_info span'),
	 	$ar_li : $('.ar_case_con ul li'),
	 	$case_info : $('.case_info .row .col-sm-2'),
	 	$case_info_mo : $('.case_info_mo li'),
	 	$app_case_content : $('.app_case_content>ul>li')
	 };
	 // artab切换
	 Dom.$ar_item.click(function(){
	 	$(this).addClass('cur').siblings().removeClass('cur');
	 	var $index = $(this).index();
	 	Dom.$ar_li.eq($index).show().siblings().hide();
	 });

	 // case tab切换
	 Dom.$case_info.click(function(){
	 	var $index = $(this).index();
	 	Dom.$app_case_content.eq($index).show().siblings().hide();
	 });
	 Dom.$case_info_mo.click(function(){
	 	var $index = $(this).index();
	 	$(this).addClass('active').siblings().removeClass('active');
	 	Dom.$app_case_content.eq($index).show().siblings().hide();
	 });
	

	// 动画加载开始
		var $window = $(window),
		win_height_padded = $window.height()*1.1;
		// 监听滚动事件触发函数
		$window.on('scroll',revealOnScroll);
		// revealOnScroll函数
		function revealOnScroll() {
			var scrolled = $window.scrollTop(),
				win_height_padded = $window.height()*1.1;

			// 滚动是动画开始
			$(".revealOnScroll:not(.animated)").each(function(){
				var $this = $(this),
					offsetTop = $(this).offset().top;
				if (scrolled + win_height_padded > offsetTop) {
					if ($this.data('timeout')) {
						window.setTimeout(function(){
							$this.addClass('animated ' + $this.data('animation'));
						},parseInt($this.data('timeout'),10));
					} else {
						$this.addClass('animated ' + $this.data('animation'));
					}
				}
			});
			// 滚粗时隐藏元素
			$(".revealOnScroll.animated").each(function(index){
				var $this = $(this),
					offsetTop = $this.offset().top;
				if (scrolled + win_height_padded < offsetTop) {
					$(this).removeClass('slide animated fadeInUp flipInX lightSpeedIn');
				}
			});
		};
})