$(document).ready(function() {
	"use strict";

	/*
	 * ----------------------------------------------------------------------------------------
	 *  CHANGE MENU BACKGROUND JS
	 * ----------------------------------------------------------------------------------------
	 */

	var headertopoption = $(window);
	var headTop = $('.header-top-area');

	headertopoption.on('scroll', function() {
		if (headertopoption.scrollTop() > 0) {
			headTop.addClass('menu-bg');

		} else {
			headTop.removeClass('menu-bg');

		}

	});

	// Window_load
	$(window).load(function() {
		$("body").addClass("border_effect");
	});

	/*----------------------------------------------
	 -----------hamburger js  --------------------
	 -------------------------------------------------*/

	$('#nav-icon2').click(function() {
		$(this).toggleClass('open');
		$('.mainmenu ul').toggleClass('nav-menu-show');
	});
	/*----------------------------------------------
	 -----------Wow js  --------------------
	 -------------------------------------------------*/
	if ($('.wow').length) {
		new WOW().init();
	};
	/*----------------------------------------------
	 -----------MatchHeight--------------------
	 -------------------------------------------------*/
	if ($('.matchHeigh').length) {
		var matchHeigh = $('.matchHeigh');
		if (matchHeigh) {
			matchHeigh.matchHeight();
		}
	}
	/*----------------------------------------------
	 -----------Submenu Function -------
	 -------------------------------------------------*/
	$('.navbar-nav> li >a').on('click', function() {
		if ($(window).width() <= 767) {
			$('.navbar-nav> li').removeClass('on');
			$('.navbar-nav> li> ul').slideUp('normal');
			if ($(this).next('ul').is(':hidden') == true) {
				$(this).parent('li').addClass('on');
				$(this).next('ul').slideDown('normal');
			}
		}
	});
	$('.dropdown-submenu> a').on('click', function() {
		if ($(window).width() <= 767) {
			$('.dropdown-submenu .sub-menu').removeClass('on');
			$('.dropdown-submenu .sub-menu').slideUp('normal');
			if ($(this).next('ul').is(':hidden') == true) {
				$(this).parent('li').addClass('on');
				$(this).next('ul').slideDown('normal');
			}
		}
	});
	/*----------------------------------------------
	 -----------Slider Function  --------------------
	 -------------------------------------------------*/
	var testimonial_owl = $(".testimonial_owl");
	testimonial_owl.owlCarousel({

		animateIn : 'fadeInRight',
		animateOut : 'zoomOutLeft',
		loop : true,
		margin : 10,
		responsiveClass : true,
		dots : false,
		nav : true,
		navText : ["<i class='ion-ios-arrow-thin-left'></i>", "<i class='ion-ios-arrow-thin-right'></i>"],
		responsive : {
			0 : {
				items : 1

			},
			600 : {
				items : 1
			},
			1000 : {
				items : 1

			}
		}
	})

	var testimonial_carosule_wrap = $(".testimonial_carosule-wrap");
	testimonial_carosule_wrap.owlCarousel({
		loop : true,
		margin : 10,
		responsiveClass : true,
		dots : false,
		nav : true,
		navText : ["<i class='ion-ios-arrow-thin-left'></i>", "<i class='ion-ios-arrow-thin-right'></i>"],
		responsive : {
			0 : {
				items : 1

			},
			600 : {
				items : 2
			},
			1000 : {
				items : 3

			}
		}
	})
	//==========Homepage 6==============
	var testimonial_carosule_wrap = $(".slider_6");
	testimonial_carosule_wrap.owlCarousel({
		loop : true,
		margin : 10,
		dots : false,
		nav : true,
		navText : ["<i class='ion-ios-arrow-thin-left'></i>", "<i class='ion-ios-arrow-thin-right'></i>"],
		responsive : {
			0 : {
				items : 1

			},
			600 : {
				items : 1
			},
			1000 : {
				items : 1

			}
		}
	});
	//==========Homepage 8==============
	var testimonial_carosule_wrap = $(".slider_8");
	testimonial_carosule_wrap.owlCarousel({
		loop : true,
		margin : 10,
		dots : true,
		nav : false,
		navText : ["<i class='ion-ios-arrow-thin-left'></i>", "<i class='ion-ios-arrow-thin-right'></i>"],
		responsive : {
			0 : {
				items : 1

			},
			600 : {
				items : 1
			},
			1000 : {
				items : 1

			}
		}
	});

	var testimonial_carosule_wrap = $("#testi-carousel");
	testimonial_carosule_wrap.owlCarousel({

		animateIn : 'fadeInRight',
		animateOut : 'zoomOutLeft',
		loop : true,
		margin : 10,
		responsiveClass : true,
		dots : true,
		nav : false,
		navText : ["<i class='ion-ios-arrow-thin-left'></i>", "<i class='ion-ios-arrow-thin-right'></i>"],
		responsive : {
			0 : {
				items : 1

			},
			600 : {
				items : 1
			},
			1000 : {
				items : 1

			}
		}
	});
	/*----------------------------------------------
	 -----------Counter Function  --------------------
	 -------------------------------------------------*/
	var counter = $('.counter');
	if (counter.length) {
		$('.counter').appear(function() {
			counter.each(function() {
				var e = $(this),
				    a = e.attr("data-count");

				$({
					countNum : e.text()
				}).animate({
					countNum : a
				}, {
					duration : 8e3,
					easing : "linear",
					step : function() {
						e.text(Math.floor(this.countNum) + "%");
					},
					complete : function() {
						e.text(this.countNum + "%");
					}
				});

				e.next('.graph_line').width(a + "%")
			});

		});
	}

	var about_counter = $('.about-counter');
	if (about_counter.length) {
		about_counter.appear(function() {
			about_counter.each(function() {
				var e = $(this),
				    a = e.attr("data-count");

				$({
					countNum : e.text()
				}).animate({
					countNum : a
				}, {
					duration : 8e3,
					easing : "linear",
					step : function() {
						e.text(Math.floor(this.countNum));
					},
					complete : function() {
						e.text(this.countNum);
					}
				});

			});

		});
	}
	if ($(".video").length) {
		$(".video").mediaelementplayer({
			loop : !0,
			enableKeyboard : !1,
			iPadUseNativeControls : !1,
			pauseOtherPlayers : !1,
			iPhoneUseNativeControls : !1,
			AndroidUseNativeControls : !1,
			enableAutosize : !0
		}), $(".bg-video").mediaelementplayer({
			loop : !0,
			enableKeyboard : !1,
			iPadUseNativeControls : !1,
			pauseOtherPlayers : !1,
			iPhoneUseNativeControls : !1,
			AndroidUseNativeControls : !1,
			enableAutosize : !0,
			alwaysShowControls : !1
		}), $(".audio").mediaelementplayer({
			audioWidth : "100%",
			pauseOtherPlayers : !1
		});
		$(".video, .audio, .post-media, .post-media iframe").fitVids();
	}
	/*
	 * ----------------------------------------------------------------------------------------
	 *  SMOTH SCROOL JS
	 * ----------------------------------------------------------------------------------------
	 */
	$(window).scroll(function() {
		if ($(window).scrollTop() > 600) {
			$('.goto').addClass('goto-active');
		} else {
			$('.goto').removeClass('goto-active');
		}
	})
	$('.goto').on('click', function(e) {
		e.preventDefault();
		$('html,body').animate({
			scrollTop : 0
		}, 400);
	});
	/*

	 /*----------------------------------------------
	 -----------Light Function  --------------------
	 -------------------------------------------------*/
	var fLight = $(".fancylight");
	if (fLight.length) {
		fLight.fancybox({
			openEffect : 'elastic',
			closeEffect : 'elastic',
			helpers : {
				media : {}
			}
		});
	}

	/*
	 * ----------------------------------------------------------------------------------------
	 *  Popup JS
	 * ----------------------------------------------------------------------------------------
	 */
	var show_image = $(".show-image");
	if (show_image.length) {
		$('.show-image').magnificPopup({
			type : 'image'
		});
	}
	/*
	 * ----------------------------------------------------------------------------------------
	 *  PRELOADER JS
	 * ----------------------------------------------------------------------------------------
	 */
	$('body').css('overflow', 'hidden');
	var prealoaderOption = $(window);
	prealoaderOption.on("load", function() {
		var preloader = jQuery('.loader-wrapper');
		var preloaderArea = jQuery('.preloader-area');
		preloader.fadeOut();
		preloaderArea.delay(350).fadeOut('slow');
		$('body').css('overflow', 'visible');
	});

	/*----------------------------------------------
	 -----------Masonry Function  --------------------
	 -------------------------------------------------*/
	var container_masonry = $(".container-masonry");
	container_masonry.imagesLoaded(function() {
		container_masonry.isotope({
			itemSelector : '.nf-item',
			transitionDuration : '1s',
			percentPosition : true,
			masonry : {
				columnWidth : '.grid-sizer'
			}
		});
	});

	/*----------------------------------------------
	 -----------Masonry filter Function  --------------------
	 -------------------------------------------------*/
	var container_filter = $(".container-filter");
	container_filter.on("click", ".categories", function() {
		var a = $(this).attr("data-filter");
		container_masonry.isotope({
			filter : a
		});

	});
	/*----------------------------------------------
	 -----------Masonry filter Active Function  --------------------
	 -------------------------------------------------*/
	container_filter.each(function(e, a) {
		var i = $(a);
		i.on("click", ".categories", function() {
			i.find(".active").removeClass("active"), $(this).addClass("active");
		});
	});
	/*
	 * ----------------------------------------------------------------------------------------
	 *  TYPE EFFECT JS
	 * ----------------------------------------------------------------------------------------
	 */

	var TxtType = function(el, toRotate, period) {
		this.toRotate = toRotate;
		this.el = el;
		this.loopNum = 0;
		this.period = parseInt(period, 10) || 1000;
		this.txt = '';
		this.tick();
		this.isDeleting = false;
	};

	TxtType.prototype.tick = function() {
		var i = this.loopNum % this.toRotate.length;
		var fullTxt = this.toRotate[i];

		if (this.isDeleting) {
			this.txt = fullTxt.substring(0, this.txt.length - 1);
		} else {
			this.txt = fullTxt.substring(0, this.txt.length + 1);
		}

		this.el.innerHTML = '<span class="wrap">' + this.txt + '</span>';

		var that = this;
		var delta = 150 - Math.random() * 100;

		if (this.isDeleting) {
			delta /= 2;
		}

		if (!this.isDeleting && this.txt === fullTxt) {
			delta = this.period;
			this.isDeleting = true;
		} else if (this.isDeleting && this.txt === '') {
			this.isDeleting = false;
			this.loopNum++;
			delta = 500;
		}

		setTimeout(function() {
			that.tick();
		}, delta);
	};

	window.onload = function() {
		var elements = document.getElementsByClassName('typewrite');
		for (var i = 0; i < elements.length; i++) {
			var toRotate = elements[i].getAttribute('data-type');
			var period = elements[i].getAttribute('data-period');
			if (toRotate) {
				new TxtType(elements[i], JSON.parse(toRotate), period);
			}
		}
		// INJECT CSS
		var css = document.createElement("style");
		css.type = "text/css";
		css.innerHTML = ".typewrite > .wrap { border-right: 0.02em solid #fff}";
		document.body.appendChild(css);
	};
	/*
	 * ----------------------------------------------------------------------------------------
	 *  PARALLAX JS
	 * ----------------------------------------------------------------------------------------
	 */

	var parallaxeffect = $(window);
	parallaxeffect.stellar({
		responsive : true,
		positionProperty : 'position',
		horizontalScrolling : false
	});

});