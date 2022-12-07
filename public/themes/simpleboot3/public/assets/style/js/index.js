$(function() {
	function f(o) {
		var q = $(window).scrollTop();
		var p = q + $(window).height();
		var n = $(o).offset().top;
		if (n + 50 < p) {
			return true
		} else {
			return false
		}
	}

	function k(n, o, p) {
		if ($(n).attr("init") == "false" && f($(n).parent())) {
			$(n).attr("init", "true");
			setTimeout(function() {
				$(n).animate({
					"bottom": "0"
				}, 800, "easeOutCubic");
				p
			}, o)
		}
	}

	function b(n, o) {
		if ($(n).attr("init") == "false" && f($(n))) {
			$(n).attr("init", "true");
			setTimeout(function() {
				$(n).animate({
					"bottom": "0"
				}, 800, null)
			}, o)
		}
	}

	function i(n, o, p) {
		$(n).delay(o).animate({
			"top": "650px"
		}, 1200, "easeOutCubic", p)
	}
	var m = false,
		g = $(".J_Box"),
		j = $(".J_Box2"),
		a = $(".tileA .tile"),
		l = $(".tileB .tile"),
		d = $(".foot-tags div"),
		h = true;
	$.each(a, function() {
		$(this).attr("init", "false")
	});
	$.each(l, function() {
		$(this).attr("init", "false")
	});
	$.each(g, function() {
		$(this).attr("init", "false")
	});
	$.each(j, function() {
		$(this).attr("init", "false")
	});
	$.each(d, function() {
		$(this).attr("init", "false")
	});
	$.each($(".services div"), function() {
		$(this).attr("init", "false")
	});

	function e() {
		$.each(g, function() {
			if ($(this).attr("init") == "false" && f($(this))) {
				$(this).attr("init", "true");
				$(this).animate({
					"left": "50%"
				}, 1000, "easeOutCubic")
			}
		});
		$.each(a, function() {
			if ($(this).attr("init") == "false" && f($(this))) {
				$(this).attr("init", "true");
				$(this).animate({
					"left": "50%"
				}, 1000, "easeOutCubic")
			}
		});
		$.each(l, function() {
			if ($(this).attr("init") == "false" && f($(this))) {
				$(this).attr("init", "true");
				$(this).animate({
					"left": "50%"
				}, 1000, "easeOutCubic")
			}
		});
		b(".foot-tag1", 0);
		b(".foot-tag2", 100);
		b(".foot-tag3", 200);
		b(".foot-tag4", 300);
		b(".foot-tag5", 400);
		b(".s1", 0);
		b(".s2", 100);
		b(".s3", 200);
		b(".s4", 300);
		if (!m) {
			k(".star1", 0);
			k(".star2", 200);
			k(".star3", 400);
			k(".star4", 600, function() {
				m = true
			})
		}
	}
	e();
	$(window).scroll(function() {
		e()
	});
	$(".floor-content3 li").hover(function() {
		$(this).addClass("floor_on");
		$(this).find(".business_ho").fadeTo(500, 1);
		$(this).find(".business_icon1").animate({
			"right": "-122px"
		}, 800);
		$(this).find(".business_icon2").animate({
			"left": "66px"
		}, 800);
		$(this).find(".business_text1").animate({
			"left": "-220px"
		}, 800);
		$(this).find(".business_text2").animate({
			"right": "18px"
		}, 800)
	}, function() {
		$(this).removeClass("floor_on");
		$(this).find(".business_ho").fadeTo(500, 0);
		$(this).find(".business_icon1").animate({
			"right": "66px"
		}, 800);
		$(this).find(".business_icon2").animate({
			"left": "-122px"
		}, 800);
		$(this).find(".business_text1").animate({
			"left": "18px"
		}, 800);
		$(this).find(".business_text2").animate({
			"right": "-220px"
		}, 800)
	});
	var c = $(".blog_sel a");
	c.hover(function() {
		$(this).addClass("blog_on").siblings().removeClass("blog_on");
		var n = c.index(this);
		$(".blog_selCon>div").eq(n).fadeIn(150).siblings().hide()
	});
	$(".float_list li").hover(function() {
		var n = $(this).attr("data-name");
		$(this).find("a").html(n);
		$(this).find("a").css({
			"background-color": "#c70c1f",
			"opacity": "1"
		});
		$(this).find("a").stop().animate({
			"width": "170px"
		}, 450)
	}, function() {
		var n = $(this).attr("data-text");
		$(this).find("a").html(n);
		$(this).find("a").css({
			"background-color": "#000",
			"opacity": "0.7"
		});
		$(this).find("a").stop().animate({
			"width": "30px"
		}, 450)
	});
	$(".float_list li").click(function() {
		$(this).addClass("floag_on").siblings().removeClass("floag_on")
	})
	$('.collapself').click(function(){
		$("#logoList").toggleClass("logo-list-show")
	})
});
