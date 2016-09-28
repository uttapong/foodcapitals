$(document).ready(function(){
			$(".nav-site").affix({
				offset: { 
					top: 100
				}
			});
		});

$('a.back-to-top').click(function() {
	$('html, body').animate({
		scrollTop: 0
	}, 700);
	return false;
});
var totalItems = $('.item').length;
var currentIndex = $('item.active').index() + 1;
$('.num').html('' + currentIndex + ' / ' + totalItems + '');
$('#chain-carousel, #lifestyle-carousel, #hospitality-carousel, #promo-carousel').bind('slide', function() {
	currentIndex = $('item.active').index() + 1;
	$('.num').html('' + currentIndex + ' / ' + totalItems + '');
});
$(document).ready(function() {
	$("#chain-carousel, #lifestyle-carousel, #hospitality-carousel, #promo-carousel, #chain-res-carousel").owlCarousel({
		nav: true,
		navText: ['<i class="fa fa-angle-left fa-1"></i>', '<i class="fa fa-angle-right fa-1"></i>'],
		pagination: false,
		items: 1,
		loop: true,
	});
});
$(document).ready(function() {
	$("#promo-news-carousel").owlCarousel({
		nav: true,
		navText: ['<i class="fa fa-angle-left fa-1"></i> Older', 'Newer <i class="fa fa-angle-right fa-1"></i>'],
		pagination: false,
		items: 2,
		margin: 30,
		responsiveClass: true,
		responsive: {
			0: {
				items: 1,
			},
			600: {
				items: 2,
			},
			1000: {
				items: 2,
			}
		}
	});
});
$(".header-mobile-toggle_link").on("click", function() {
	var G = $("html"),
		H = "menu-active";
	G.toggleClass(H)
});
$(".header-mobile-search_link").on("click", function() {
	var G = $("html"),
		H = "menu-active";
	G.addClass(H);
	if (G.hasClass(H)) {
		$(".header-search-mobile_input").trigger("focus")
	}
});
$(document).on("click", function(G) {
	if ($(G.target).closest("#navigation, .header-mobile-toggle_link, .header-mobile-search_link").length === 0) {
		$(".level-1_item").removeClass("js-hover");
		$("html").removeClass("menu-active")
	}
});
/*
            accordionToggle: (function() {
                var h = $("[data-nav-toggle]");
                h.off("accordionToggle").on("click.accordionToggle", function() {
                    var n = $(this)
                      , i = n.siblings("i").length ? n.siblings("i") : n
                      , j = n.siblings("a").length ? n.siblings("a") : n
                      , k = i.siblings("[data-toggle-content]")
                      , m = k.attr("data-toggle-active") || false
                      , l = i.parents("[data-toggle-group]").first();
                    if (k.length && m) {
                        j.removeClass("js-active");
                        i.toggleClass("icon-minus fa fa-icon-plus");
                        k.removeAttr("data-toggle-active").slideUp(200, "easeInOutCubic")
                    } else {
                        if (k.length) {
                            j.addClass("js-active");
                            i.toggleClass("icon-minus fa fa-icon-plus");
                            k.attr("data-toggle-active", "true").slideDown(200, "easeInOutCubic")
                        } else {
                            window.console.error("Toggle button clicked, but there is no matching content to toggle")
                        }
                    }
                    if (l.length) {
                        l.find("a[data-toggle]").not(j).removeClass("js-active");
                        l.find("i[data-toggle]").not(i).removeClass("icon-minus").addClass("fa fa-icon-plus");
                        l.find("[data-toggle-active]").not(k).removeAttr("data-toggle-active").slideUp(200, "easeInOutCubic")
                    }
                })
            });
            */
//navToggle: (function() {
var h = $("[data-nav-toggle]");
h.off("navToggle").on("click.navToggle", function() {
	var m = $(this),
		j = m.siblings("[data-toggle-content]"),
		l = j.attr("data-toggle-active") || false,
		k = m.parents("[data-toggle-group]").first(),
		i = $(this);
	if (j.length && l) {
		m.removeClass("js-active");
		j.removeAttr("data-toggle-active").slideUp(200, "easeInOutCubic");
		if (m.hasClass("level-1_toggle")) {
			j.find("ul.level-2_list > li").css("opacity", "0")
		} else {
			if (m.hasClass("level-2_toggle")) {
				j.find("li.level-3_item").css("opacity", "0")
			}
		}
	} else {
		if (j.length) {
			m.parent().siblings(":first-child").children().removeClass("js-active");
			m.addClass("js-active");
			if (m.hasClass("level-1_toggle")) {
				j.attr("data-toggle-active", "true").slideDown(250, "easeInOutCubic").find("ul.level-2_list > li").each(function(n) {
					$(this).delay(100 * n).animate({
						opacity: "1"
					}, 100)
				})
			} else {
				if (m.hasClass("level-2_toggle")) {
					j.attr("data-toggle-active", "true").slideDown(250, "easeInOutCubic").find("li.level-3_item").each(function(n) {
						$(this).delay(100 * n).animate({
							opacity: "1"
						}, 100)
					})
				}
			}
		} else {
			window.console.error("Toggle button clicked, but there is no matching content to toggle")
		}
	}
	if (false && k.length) {
		k.find("[data-nav-toggle]").not(m).removeClass("js-active");
		k.find("[data-toggle-active]").not(j).removeAttr("data-toggle-active").slideUp(200, "easeInOutCubic", function() {
			var o = $(i),
				r = $("nav-site").scrollTop(),
				q = r + $("nav-site").height(),
				n = o.offset().top,
				p = n + o.height();
			if (!((p <= q) && (n >= r))) {
				$("nav-site").animate({
					scrollTop: n
				}, 500)
			}
		}).find("ul.level-2_list > li, li.level-3_item").css("opacity", "0")
	}
})
//});