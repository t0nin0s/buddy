/* Brett Meyer - Broken Pony Club */

if (!window.getComputedStyle) {
	window.getComputedStyle = function(el, pseudo) {
		pseudo = null;
		this.el = el;
		this.getPropertyValue = function(prop) {
			var re = /(\-([a-z]){1})/g;
			if (prop === 'float') prop = 'styleFloat';
			if (re.test(prop)) {
				prop = prop.replace(re, function () {
					return arguments[2].toUpperCase();
				});
			}
			return el.currentStyle[prop] ? el.currentStyle[prop] : null;
		};
		return this;
	};
}

jQuery(document).ready(function($) {
	var bpc = bpc || {};
	bpc.aniIn = 0.2;
	bpc.aniOut = 0.3;
	bpc.retina = window.devicePixelRatio > 1;
	bpc.resw = screen.width;
	bpc.resh = screen.height;
	bpc.clickType = Modernizr.touch ? 'tap' : 'click';
	bpc.hash = window.location.hash.replace('#/', '');
	bpc.root = '';
	bpc.mute = false;

	bpc.doneResize = 0;
	bpc.resize = function() {
		bpc.stageWidth = $(window).width();
		bpc.stageHeight = $(window).height();
		bpc.resizeIntroVideo();
	};

	bpc.vr = 16/9;
	bpc.resizeIntroVideo = function() {
		if (bpc.videoPlayer !== undefined) {
			var vw = $(window).width();
			var vh = $(window).width() / bpc.vr;
			if (vh < $(window).height()) {
				vw = $(window).height() * bpc.vr;
				vh = $(window).height();
			}
			var x = (vw - $(window).width()) / 2;
			var y = (vh - $(window).height()) / 2;
			$('.backgrounds .background').width(vw).height(vh).css({left: -x, top: -y});
		}
	};
	
	bpc.scriptsToLoad = [bpc.root+'js/jquery.mobile.custom.min.js', 'http://cdnjs.cloudflare.com/ajax/libs/gsap/latest/TweenMax.min.js', bpc.root+'video-js/video.min.js', bpc.root+'js/preloadjs-0.4.1.min.js'];
	bpc.scriptsLoaded = 0;
	bpc.loadScriptsAsync = function() {
		for (var i=0; i<bpc.scriptsToLoad.length; i++) {
			$.ajax({
				url: bpc.scriptsToLoad[i],
				dataType: 'script',
				cache: true,
				async: false,
				success: bpc.fileLoaded
			});
		}
	};

	bpc.fileLoaded = function() {
		bpc.scriptsLoaded++;
		if (bpc.scriptsLoaded === bpc.scriptsToLoad.length)
			bpc.preloadImages();//bpc.loadComplete();
	};

	bpc.preloadImages = function() {
		bpc.preloadQueue = new createjs.LoadQueue(false);
		bpc.preloadQueue.on('progress', bpc.preloadProgress, this);
		bpc.preloadQueue.on('fileload', bpc.preloadFileComplete, this);
		bpc.preloadQueue.on('complete', bpc.preloadQueueComplete, this);

		$('*[data-preload]').each(function() {
			var src = $(this).attr('data-preload');
			bpc.preloadQueue.loadFile({id: $(this), src: src}, true);
		});
	};

	bpc.preloadProgress = function(event) {
		TweenMax.killTweensOf($('.preloader .progress'));
		TweenMax.to($('.preloader .progress'), 0.25, {width: (event.loaded*100)+'%', ease: Linear.easeNone});
	};

	bpc.preloadFileComplete = function(event) {
		//event.item.html
		if (event.item.id.attr('data-type') === 'src')
			event.item.id.attr('src', event.item.src);
		else
			event.item.id.css('background-image', 'url('+event.item.src+')');
	};

	bpc.preloadQueueComplete = function() {
		//bpc.intoAnimationOut();
		TweenMax.to('.prelaoder', 0.5, {css: {top: '100%'}, ease: Quart.easeOut, onComplete: function() {
			$('.preloader').remove();
			$('body').addClass('loaded');
			bpc.loadComplete();
		}});
	};

	bpc.loadComplete = function() {
		bpc.ismobile = false;
		if (bpc.clickType === 'tap') {
			$('#background-video').remove();
			$('.backgrounds .background').css('background-image', 'url(img/mobile-back.jpg?cache=1)');
			bpc.ismobile = true;
		} else {
			bpc.videoPlayer = $('#background-video');
			bpc.resizeIntroVideo();
			$('.pages .intro').click(function() {
				if (bpc.videoPlayer.get(0).paused) {
					bpc.videoPlayer.get(0).play();
				} else {
					bpc.videoPlayer.get(0).pause();
				}
			});
		}

		//bpc.inlineVideo1 = videojs('inline-player-1');
		//bpc.inlineVideo2 = videojs('inline-player-2');
		//bpc.inlineVideo3 = videojs('inline-player-3');
		//bpc.inlineVideo4 = videojs('inline-player-4');

		bpc.resize();
		bpc.initNav();
		bpc.initAudio();
		bpc.initFooter();
		bpc.scrollLogic();

		bpc.initWhatCanIDo();
		bpc.initWatchVideo();

		bpc.initCelebVids();

		$(document).scroll(bpc.scrollLogic);
	};

	bpc.page = 0;
	bpc.lastScroll = 0;
	bpc.scrollDirection = 'down';

	bpc.scrollLogic = function() {
		var pct = $(document).scrollTop() / (bpc.stageHeight); // see CSS for page height %

		// direction
		if ($(document).scrollTop() > bpc.lastScroll) bpc.scrollDirection = 'down';
		else bpc.scrollDirection = 'up';
		bpc.lastScroll = $(document).scrollTop();
		// video
		if (!bpc.ismobile) {
			if (pct > 0.5 && !bpc.videoPlayer.get(0).paused) {
				bpc.videoPlayer.get(0).pause();
				TweenMax.to(bpc.videoPlayer, 0.3, {alpha: 0.45, ease: Quart.easeOut});
			} else if (pct < 0.5 && bpc.videoPlayer.get(0).paused) {
				bpc.videoPlayer.get(0).play();
				TweenMax.to(bpc.videoPlayer, 0.3, {alpha: 1, ease: Quart.easeOut});
			}
		}
		// intro
		var ipct = pct;
		if (ipct > 1) ipct = 1;
		var xx = $(window).width() < 786 ? 12 : 40;
		$('.logo').css({left: xx - (535*ipct)/*, top: (50 - (50*ipct))+'%', marginTop: -70 + (80*ipct), width: 495 - (273*ipct), height: 143 - (79*ipct)*/});
		if ($(window).width() < 786) {
			$('.header').css({top: -82 + (82*ipct)});
		}
		$('.scroll').css({bottom: 5 - (81*ipct)});
		
		$('.footer .childline').css({right: 40 - (332 * ipct)});
		if (!bpc.ismobile) $('.footer .childline-sml').css({right: -151 + (191 * ipct)});

		// page 1
		/*var pg1_pct = pct - 0.5;
		if (pg1_pct < 0) pg1_pct = 0;
		if (pg1_pct > 1) pg1_pct = 1;
		console.log(pg1_pct);
		$('.what-is h1').css({top: 100 - ((pg1_pct) * 100), opacity: 0 + pg1_pct + 0.5});
		$('.what-is p').css({top: 100 - ((pg1_pct) * 100), opacity: 0 + pg1_pct + 0.5});*/

		var pg = Math.round(pct);
		if (pg < 0) pg = 0;
		if (pg > $('.pages .page').length-1) pg = $('.pages .page').length-1;

		// for mobile
		/*if (bpc.clickType === 'tap') {
			$('body').on('swipedown',function() {
				pg --;
				if (pg < 0) pg = 0;
				$('.main-nav a').eq(pg).click();
				console.log(pg);
			});
			$('body').on('swipeup',function() {
				pg ++;
				if (pg > 8) pg = 8;
				$('.main-nav a').eq(pg).click();
				console.log(pg);
			});
		}*/

		if (pg !== 0 && pg !== 8 && bpc.ismobile) {
			TweenMax.to($('.footer .childline-sml'), 0.5, {css: {right: -200}, ease: Quart.easeOut});
		} else if ((pg === 0 || pg === 8) && bpc.ismobile) {
			TweenMax.to($('.footer .childline-sml'), 0.5, {css: {right: 20}, ease: Quart.easeOut});
		}
		
		if (bpc.page !== pg) {
			// out animations
			if (bpc.page === 0) $('.pages .intro').hide(0);
			if (bpc.page === 1) bpc.page1out();
			if (bpc.page === 2) bpc.page2out();
			if (bpc.page === 3) bpc.page3out();
			if (bpc.page === 4) bpc.page4out();
			//if (bpc.page === 5) bpc.page5out();
			if (bpc.page === 5) bpc.page6out();
			if (bpc.page === 6) bpc.page7out();
			if (bpc.page === 7) bpc.page8out();

			// in animations
			if (pg === 0) $('.pages .intro').show(0);
			if (pg === 1) bpc.page1in();
			if (pg === 2) bpc.page2in();
			if (pg === 3) bpc.page3in();
			if (pg === 4) bpc.page4in();
			//if (pg === 5) bpc.page5in();
			if (pg === 5) bpc.page6in();
			if (pg === 6) bpc.page7in();
			if (pg === 7) bpc.page8in();
			
			/*$('.pages .page').hide(0);
			$('.pages .page').eq(pg).show(0);*/

			//if (!bpc.inlineVideo1.paused()) bpc.inlineVideo1.pause();
			//if (!bpc.inlineVideo2.paused()) bpc.inlineVideo2.pause();
			//if (!bpc.inlineVideo3.paused()) bpc.inlineVideo3.pause();
			//if (!bpc.inlineVideo4.paused()) bpc.inlineVideo4.pause();

			$('.header .main-nav a').removeClass('active');
			$('.mobile-nav a').removeClass('active');
			$('.header .main-nav a').eq(pg).addClass('active');
			$('.mobile-nav a').eq(pg).addClass('active');

			window.location.hash = $('.header .main-nav a.active').attr('href');
			bpc.page = pg;
		}

		if (pg === 0) {
			$('.nonauharcelement').removeClass('sml');
		} else {
			$('.nonauharcelement').addClass('sml');
		}
	};

	// animations
	bpc.showDelay = 0.75;

	bpc.page1in = function() {
		try {
			lypn_trackPageView('le-harcelement-cest-quoi');
		} catch(err) {
			console.log(err);
		}
		$('.le-harcelement-cest-quoi').css('display', 'table');//.show(0);
		var back = $('.le-harcelement-cest-quoi').find('.background'),
			h1 = $('.le-harcelement-cest-quoi').find('h1'),
			p = $('.le-harcelement-cest-quoi').find('p');
		TweenMax.killTweensOf(back);
		TweenMax.killTweensOf(h1);
		TweenMax.killTweensOf(p);

		if (bpc.scrollDirection === 'up') {
			TweenMax.to(back, 0.5, {css: {top: -100, bottom: 0}, ease: Quart.easeOut, delay: bpc.showDelay + 0});
			TweenMax.to(h1, 0.5, {css: {top: 0}, ease: Quart.easeOut, delay: bpc.showDelay + 0.4});
			TweenMax.to(p, 0.5, {css: {top: 0}, ease: Quart.easeOut, delay: bpc.showDelay + 0.2});

			TweenMax.to(h1, 0.5, {alpha: 1, ease: Quart.easeOut, delay: bpc.showDelay + 0.4});
			TweenMax.to(p, 0.5, {alpha: 1, ease: Quart.easeOut, delay: bpc.showDelay + 0.2});
		} else if (bpc.scrollDirection === 'down') {
			TweenMax.to(back, 0.5, {css: {top: -100, bottom: 0}, ease: Quart.easeOut, delay: bpc.showDelay + 0.2});
			TweenMax.to(h1, 0.5, {css: {top: 0}, ease: Quart.easeOut, delay: bpc.showDelay + 0});
			TweenMax.to(p, 0.5, {css: {top: 0}, ease: Quart.easeOut, delay: bpc.showDelay + 0.4});
			
			TweenMax.to(h1, 0.5, {alpha: 1, ease: Quart.easeOut, delay: bpc.showDelay + 0});
			TweenMax.to(p, 0.5, {alpha: 1, ease: Quart.easeOut, delay: bpc.showDelay + 0.4});
		}
	};

	bpc.page1out = function() {
		var back = $('.le-harcelement-cest-quoi').find('.background'),
			h1 = $('.le-harcelement-cest-quoi').find('h1'),
			p = $('.le-harcelement-cest-quoi').find('p');
		TweenMax.killTweensOf(back);
		TweenMax.killTweensOf(h1);
		TweenMax.killTweensOf(p);

		if (bpc.scrollDirection === 'up') {
			TweenMax.to(back, 0.5, {css: {top: '100%'}, ease: Quart.easeOut, delay: 0.4, onComplete: function() { $('.le-harcelement-cest-quoi').hide(0); }});
			TweenMax.to(h1, 0.5, {css: {top: 120}, ease: Quart.easeOut, delay: 0.2});
			TweenMax.to(p, 0.5, {css: {top: 120}, ease: Quart.easeOut, delay: 0});

			TweenMax.to(h1, 0.5, {alpha: 0, ease: Quart.easeOut, delay: 0.2});
			TweenMax.to(p, 0.5, {alpha: 0, ease: Quart.easeOut, delay: 0});
		} else {
			TweenMax.to(back, 0.5, {css: {bottom: '100%'}, ease: Quart.easeOut, delay: 0.4, onComplete: function() { $('.le-harcelement-cest-quoi').hide(0); }});
			TweenMax.to(h1, 0.5, {css: {top: -120}, ease: Quart.easeOut, delay: 0});
			TweenMax.to(p, 0.5, {css: {top: -120}, ease: Quart.easeOut, delay: 0.2});

			TweenMax.to(h1, 0.5, {alpha: 0, ease: Quart.easeOut, delay: 0});
			TweenMax.to(p, 0.5, {alpha: 0, ease: Quart.easeOut, delay: 0.2});
		}
	};

	bpc.page2in = function() {
		try {
			lypn_trackPageView('a-toi-dagir');
		} catch(err) {
			console.log(err);
		}
		$('.a-toi-dagir').css('display', 'table');//show(0);
		var back = $('.a-toi-dagir').find('.background'),
			h1 = $('.a-toi-dagir').find('h1'),
			body = $('.a-toi-dagir').find('.body');
		TweenMax.killTweensOf(back);
		TweenMax.killTweensOf(h1);
		TweenMax.killTweensOf(body);

		if (bpc.scrollDirection === 'up') {
			TweenMax.to(back, 0.5, {css: {top: -160, bottom: 0}, ease: Quart.easeOut, delay: bpc.showDelay + 0});
			TweenMax.to(h1, 0.5, {css: {top: 0}, ease: Quart.easeOut, delay: bpc.showDelay + 0.4});
			TweenMax.to(body, 0.5, {css: {top: 0}, ease: Quart.easeOut, delay: bpc.showDelay + 0.2});

			TweenMax.to(h1, 0.5, {alpha: 1, ease: Quart.easeOut, delay: bpc.showDelay + 0.4});
			TweenMax.to(body, 0.5, {alpha: 1, ease: Quart.easeOut, delay: bpc.showDelay + 0.2});
		} else if (bpc.scrollDirection === 'down') {
			TweenMax.to(back, 0.5, {css: {top: -160, bottom: 0}, ease: Quart.easeOut, delay: bpc.showDelay + 0.2});
			TweenMax.to(h1, 0.5, {css: {top: 0}, ease: Quart.easeOut, delay: bpc.showDelay + 0});
			TweenMax.to(body, 0.5, {css: {top: 0}, ease: Quart.easeOut, delay: bpc.showDelay + 0.4});
			
			TweenMax.to(h1, 0.5, {alpha: 1, ease: Quart.easeOut, delay: bpc.showDelay + 0});
			TweenMax.to(body, 0.5, {alpha: 1, ease: Quart.easeOut, delay: bpc.showDelay + 0.4});
		}
	};

	bpc.page2out = function() {
		var back = $('.a-toi-dagir').find('.background'),
			h1 = $('.a-toi-dagir').find('h1'),
			body = $('.a-toi-dagir').find('.body');
		TweenMax.killTweensOf(back);
		TweenMax.killTweensOf(h1);
		TweenMax.killTweensOf(body);
		$('.a-toi-dagir .copy.open').slideUp(300, 'easeOutQuart').removeClass('open').next('.button').show(0);

		if (bpc.scrollDirection === 'up') {
			TweenMax.to(back, 0.5, {css: {top: '100%'}, ease: Quart.easeOut, delay: 0.4, onComplete: function() { $('.a-toi-dagir').hide(0); }});
			TweenMax.to(h1, 0.5, {css: {top: 120}, ease: Quart.easeOut, delay: 0.2});
			TweenMax.to(body, 0.5, {css: {top: 120}, ease: Quart.easeOut, delay: 0});

			TweenMax.to(h1, 0.5, {alpha: 0, ease: Quart.easeOut, delay: 0.2});
			TweenMax.to(body, 0.5, {alpha: 0, ease: Quart.easeOut, delay: 0});
		} else {
			TweenMax.to(back, 0.5, {css: {bottom: '100%'}, ease: Quart.easeOut, delay: 0.4, onComplete: function() { $('.a-toi-dagir').hide(0); }});
			TweenMax.to(h1, 0.5, {css: {top: -120}, ease: Quart.easeOut, delay: 0});
			TweenMax.to(body, 0.5, {css: {top: -120}, ease: Quart.easeOut, delay: 0.2});

			TweenMax.to(h1, 0.5, {alpha: 0, ease: Quart.easeOut, delay: 0});
			TweenMax.to(body, 0.5, {alpha: 0, ease: Quart.easeOut, delay: 0.2});
		}
	};

	bpc.page3in = function() {
		try {
			lypn_trackPageView('regarde-les-videos');
		} catch(err) {
			console.log(err);
		}
		$('.regarde-les-videos').css('display', 'table');//show(0);
		var back = $('.regarde-les-videos').find('.background'),
			h1 = $('.regarde-les-videos').find('h1'),
			body = $('.regarde-les-videos').find('.videos');
		TweenMax.killTweensOf(back);
		TweenMax.killTweensOf(h1);
		TweenMax.killTweensOf(body);

		if (bpc.scrollDirection === 'up') {
			TweenMax.to(back, 0.5, {css: {top: -160, bottom: 0}, ease: Quart.easeOut, delay: bpc.showDelay + 0});
			TweenMax.to(h1, 0.5, {css: {top: 0}, ease: Quart.easeOut, delay: bpc.showDelay + 0.4});
			TweenMax.to(body, 0.5, {css: {top: 0}, ease: Quart.easeOut, delay: bpc.showDelay + 0.2});

			TweenMax.to(h1, 0.5, {alpha: 1, ease: Quart.easeOut, delay: bpc.showDelay + 0.4});
			TweenMax.to(body, 0.5, {alpha: 1, ease: Quart.easeOut, delay: bpc.showDelay + 0.2});
		} else if (bpc.scrollDirection === 'down') {
			TweenMax.to(back, 0.5, {css: {top: -160, bottom: 0}, ease: Quart.easeOut, delay: bpc.showDelay + 0.2});
			TweenMax.to(h1, 0.5, {css: {top: 0}, ease: Quart.easeOut, delay: bpc.showDelay + 0});
			TweenMax.to(body, 0.5, {css: {top: 0}, ease: Quart.easeOut, delay: bpc.showDelay + 0.4});
			
			TweenMax.to(h1, 0.5, {alpha: 1, ease: Quart.easeOut, delay: bpc.showDelay + 0});
			TweenMax.to(body, 0.5, {alpha: 1, ease: Quart.easeOut, delay: bpc.showDelay + 0.4});
		}
	};

	bpc.page3out = function() {
		var back = $('.regarde-les-videos').find('.background'),
			h1 = $('.regarde-les-videos').find('h1'),
			body = $('.regarde-les-videos').find('.videos');
		TweenMax.killTweensOf(back);
		TweenMax.killTweensOf(h1);
		TweenMax.killTweensOf(body);

		if (bpc.scrollDirection === 'up') {
			TweenMax.to(back, 0.5, {css: {top: '100%'}, ease: Quart.easeOut, delay: 0.4, onComplete: function() { $('.regarde-les-videos').hide(0); }});
			TweenMax.to(h1, 0.5, {css: {top: 120}, ease: Quart.easeOut, delay: 0.2});
			TweenMax.to(body, 0.5, {css: {top: 120}, ease: Quart.easeOut, delay: 0});

			TweenMax.to(h1, 0.5, {alpha: 0, ease: Quart.easeOut, delay: 0.2});
			TweenMax.to(body, 0.5, {alpha: 0, ease: Quart.easeOut, delay: 0});
		} else {
			TweenMax.to(back, 0.5, {css: {bottom: '100%'}, ease: Quart.easeOut, delay: 0.4, onComplete: function() { $('.regarde-les-videos').hide(0); }});
			TweenMax.to(h1, 0.5, {css: {top: -120}, ease: Quart.easeOut, delay: 0});
			TweenMax.to(body, 0.5, {css: {top: -120}, ease: Quart.easeOut, delay: 0.2});

			TweenMax.to(h1, 0.5, {alpha: 0, ease: Quart.easeOut, delay: 0});
			TweenMax.to(body, 0.5, {alpha: 0, ease: Quart.easeOut, delay: 0.2});
		}
	};

	/*bpc.page5in = function() {
		try {
			lypn_trackPageView('meet-anna');
		} catch(err) {
			console.log(err);
		}
		$('.meet-anna').css('display', 'table');//show(0);
		var back = $('.meet-anna').find('.background'),
			h1 = $('.meet-anna').find('h1'),
			h2 = $('.meet-anna').find('h2'),
			body = $('.meet-anna').find('.inline-player');
		TweenMax.killTweensOf(back);
		TweenMax.killTweensOf(h1);
		TweenMax.killTweensOf(h2);
		TweenMax.killTweensOf(body);

		if (bpc.scrollDirection === 'up') {
			TweenMax.to(back, 0.5, {css: {top: 0, bottom: 0}, ease: Quart.easeOut, delay: bpc.showDelay + 0});
			TweenMax.to(h1, 0.5, {css: {top: 0}, ease: Quart.easeOut, delay: bpc.showDelay + 0.4});
			TweenMax.to(h2, 0.5, {css: {top: 0}, ease: Quart.easeOut, delay: bpc.showDelay + 0.3});
			TweenMax.to(body, 0.5, {css: {top: 0}, ease: Quart.easeOut, delay: bpc.showDelay + 0.2});

			TweenMax.to(h1, 0.5, {alpha: 1, ease: Quart.easeOut, delay: bpc.showDelay + 0.4});
			TweenMax.to(h2, 0.5, {alpha: 1, ease: Quart.easeOut, delay: bpc.showDelay + 0.3});
			TweenMax.to(body, 0.5, {alpha: 1, ease: Quart.easeOut, delay: bpc.showDelay + 0.2});
		} else if (bpc.scrollDirection === 'down') {
			TweenMax.to(back, 0.5, {css: {top: 0, bottom: 0}, ease: Quart.easeOut, delay: bpc.showDelay + 0.2});
			TweenMax.to(h1, 0.5, {css: {top: 0}, ease: Quart.easeOut, delay: bpc.showDelay + 0});
			TweenMax.to(h2, 0.5, {css: {top: 0}, ease: Quart.easeOut, delay: bpc.showDelay + 0.3});
			TweenMax.to(body, 0.5, {css: {top: 0}, ease: Quart.easeOut, delay: bpc.showDelay + 0.4});
			
			TweenMax.to(h1, 0.5, {alpha: 1, ease: Quart.easeOut, delay: bpc.showDelay + 0});
			TweenMax.to(h2, 0.5, {alpha: 1, ease: Quart.easeOut, delay: bpc.showDelay + 0.3});
			TweenMax.to(body, 0.5, {alpha: 1, ease: Quart.easeOut, delay: bpc.showDelay + 0.4});
		}
	};

	bpc.page5out = function() {
		var back = $('.meet-anna').find('.background'),
			h1 = $('.meet-anna').find('h1'),
			h2 = $('.meet-anna').find('h2'),
			body = $('.meet-anna').find('.inline-player');
		TweenMax.killTweensOf(back);
		TweenMax.killTweensOf(h1);
		TweenMax.killTweensOf(h2);
		TweenMax.killTweensOf(body);

		if (bpc.scrollDirection === 'up') {
			TweenMax.to(back, 0.5, {css: {top: '100%'}, ease: Quart.easeOut, delay: 0.4, onComplete: function() { $('.meet-anna').hide(0); }});
			TweenMax.to(h1, 0.5, {css: {top: 120}, ease: Quart.easeOut, delay: 0.3});
			TweenMax.to(h2, 0.5, {css: {top: 120}, ease: Quart.easeOut, delay: 0.2});
			TweenMax.to(body, 0.5, {css: {top: 120}, ease: Quart.easeOut, delay: 0});

			TweenMax.to(h1, 0.5, {alpha: 0, ease: Quart.easeOut, delay: 0.3});
			TweenMax.to(h2, 0.5, {alpha: 0, ease: Quart.easeOut, delay: 0.2});
			TweenMax.to(body, 0.5, {alpha: 0, ease: Quart.easeOut, delay: 0});
		} else {
			TweenMax.to(back, 0.5, {css: {bottom: '100%'}, ease: Quart.easeOut, delay: 0.4, onComplete: function() { $('.meet-anna').hide(0); }});
			TweenMax.to(h1, 0.5, {css: {top: -120}, ease: Quart.easeOut, delay: 0});
			TweenMax.to(h2, 0.5, {css: {top: -120}, ease: Quart.easeOut, delay: 0.1});
			TweenMax.to(body, 0.5, {css: {top: -120}, ease: Quart.easeOut, delay: 0.2});

			TweenMax.to(h1, 0.5, {alpha: 0, ease: Quart.easeOut, delay: 0});
			TweenMax.to(h2, 0.5, {alpha: 0, ease: Quart.easeOut, delay: 0.1});
			TweenMax.to(body, 0.5, {alpha: 0, ease: Quart.easeOut, delay: 0.2});
		}
	};*/

	bpc.page4in = function() {
		try {
			lypn_trackPageView('la-video-golden-moustache');
		} catch(err) {
			console.log(err);
		}
		$('.la-video-golden-moustache').css('display', 'table');//show(0);
		var back = $('.la-video-golden-moustache').find('.background'),
			h1 = $('.la-video-golden-moustache').find('h1'),
			h2 = $('.la-video-golden-moustache').find('h2'),
			body = $('.la-video-golden-moustache').find('.videos');
			//body = $('.la-video-golden-moustache').find('.inline-player');
		TweenMax.killTweensOf(back);
		TweenMax.killTweensOf(h1);
		TweenMax.killTweensOf(h2);
		TweenMax.killTweensOf(body);

		if (bpc.scrollDirection === 'up') {
			TweenMax.to(back, 0.5, {css: {top: 0, bottom: 0}, ease: Quart.easeOut, delay: bpc.showDelay + 0});
			TweenMax.to(h1, 0.5, {css: {top: 0}, ease: Quart.easeOut, delay: bpc.showDelay + 0.4});
			TweenMax.to(h2, 0.5, {css: {top: 0}, ease: Quart.easeOut, delay: bpc.showDelay + 0.3});
			TweenMax.to(body, 0.5, {css: {top: 0}, ease: Quart.easeOut, delay: bpc.showDelay + 0.2});

			TweenMax.to(h1, 0.5, {alpha: 1, ease: Quart.easeOut, delay: bpc.showDelay + 0.4});
			TweenMax.to(h2, 0.5, {alpha: 1, ease: Quart.easeOut, delay: bpc.showDelay + 0.3});
			TweenMax.to(body, 0.5, {alpha: 1, ease: Quart.easeOut, delay: bpc.showDelay + 0.2});
		} else if (bpc.scrollDirection === 'down') {
			TweenMax.to(back, 0.5, {css: {top: 0, bottom: 0}, ease: Quart.easeOut, delay: bpc.showDelay + 0.2});
			TweenMax.to(h1, 0.5, {css: {top: 0}, ease: Quart.easeOut, delay: bpc.showDelay + 0});
			TweenMax.to(h2, 0.5, {css: {top: 0}, ease: Quart.easeOut, delay: bpc.showDelay + 0.3});
			TweenMax.to(body, 0.5, {css: {top: 0}, ease: Quart.easeOut, delay: bpc.showDelay + 0.4});
			
			TweenMax.to(h1, 0.5, {alpha: 1, ease: Quart.easeOut, delay: bpc.showDelay + 0});
			TweenMax.to(h2, 0.5, {alpha: 1, ease: Quart.easeOut, delay: bpc.showDelay + 0.3});
			TweenMax.to(body, 0.5, {alpha: 1, ease: Quart.easeOut, delay: bpc.showDelay + 0.4});
		}
	};

	bpc.page4out = function() {
		var back = $('.la-video-golden-moustache').find('.background'),
			h1 = $('.la-video-golden-moustache').find('h1'),
			h2 = $('.la-video-golden-moustache').find('h2'),
			body = $('.la-video-golden-moustache').find('.videos');
			//body = $('.la-video-golden-moustache').find('.inline-player');
		TweenMax.killTweensOf(back);
		TweenMax.killTweensOf(h1);
		TweenMax.killTweensOf(h2);
		TweenMax.killTweensOf(body);

		if (bpc.scrollDirection === 'up') {
			TweenMax.to(back, 0.5, {css: {top: '100%'}, ease: Quart.easeOut, delay: 0.4, onComplete: function() { $('.la-video-golden-moustache').hide(0); }});
			TweenMax.to(h1, 0.5, {css: {top: 120}, ease: Quart.easeOut, delay: 0.3});
			TweenMax.to(h2, 0.5, {css: {top: 120}, ease: Quart.easeOut, delay: 0.2});
			TweenMax.to(body, 0.5, {css: {top: 120}, ease: Quart.easeOut, delay: 0});

			TweenMax.to(h1, 0.5, {alpha: 0, ease: Quart.easeOut, delay: 0.3});
			TweenMax.to(h2, 0.5, {alpha: 0, ease: Quart.easeOut, delay: 0.2});
			TweenMax.to(body, 0.5, {alpha: 0, ease: Quart.easeOut, delay: 0});
		} else {
			TweenMax.to(back, 0.5, {css: {bottom: '100%'}, ease: Quart.easeOut, delay: 0.4, onComplete: function() { $('.la-video-golden-moustache').hide(0); }});
			TweenMax.to(h1, 0.5, {css: {top: -120}, ease: Quart.easeOut, delay: 0});
			TweenMax.to(h2, 0.5, {css: {top: -120}, ease: Quart.easeOut, delay: 0.1});
			TweenMax.to(body, 0.5, {css: {top: -120}, ease: Quart.easeOut, delay: 0.2});

			TweenMax.to(h1, 0.5, {alpha: 0, ease: Quart.easeOut, delay: 0});
			TweenMax.to(h2, 0.5, {alpha: 0, ease: Quart.easeOut, delay: 0.1});
			TweenMax.to(body, 0.5, {alpha: 0, ease: Quart.easeOut, delay: 0.2});
		}
	};

	bpc.page6in = function() {
		try {
			lypn_trackPageView('le-code-des-copains');
		} catch(err) {
			console.log(err);
		}
		$('.le-code-des-copains').css('display', 'table');//show(0);
		var back = $('.le-code-des-copains').find('.background'),
			h1 = $('.le-code-des-copains').find('h1'),
			body = $('.le-code-des-copains').find('.body');
		TweenMax.killTweensOf(back);
		TweenMax.killTweensOf(h1);
		TweenMax.killTweensOf(body);

		if (bpc.scrollDirection === 'up') {
			TweenMax.to(back, 0.5, {css: {top: -160, bottom: 0}, ease: Quart.easeOut, delay: bpc.showDelay + 0});
			TweenMax.to(h1, 0.5, {css: {top: 0}, ease: Quart.easeOut, delay: bpc.showDelay + 0.4});
			TweenMax.to(body, 0.5, {css: {top: 0}, ease: Quart.easeOut, delay: bpc.showDelay + 0.2});

			TweenMax.to(h1, 0.5, {alpha: 1, ease: Quart.easeOut, delay: bpc.showDelay + 0.4});
			TweenMax.to(body, 0.5, {alpha: 1, ease: Quart.easeOut, delay: bpc.showDelay + 0.2});
		} else if (bpc.scrollDirection === 'down') {
			TweenMax.to(back, 0.5, {css: {top: -160, bottom: 0}, ease: Quart.easeOut, delay: bpc.showDelay + 0.2});
			TweenMax.to(h1, 0.5, {css: {top: 0}, ease: Quart.easeOut, delay: bpc.showDelay + 0});
			TweenMax.to(body, 0.5, {css: {top: 0}, ease: Quart.easeOut, delay: bpc.showDelay + 0.4});
			
			TweenMax.to(h1, 0.5, {alpha: 1, ease: Quart.easeOut, delay: bpc.showDelay + 0});
			TweenMax.to(body, 0.5, {alpha: 1, ease: Quart.easeOut, delay: bpc.showDelay + 0.4});
		}
	};

	bpc.page6out = function() {
		var back = $('.le-code-des-copains').find('.background'),
			h1 = $('.le-code-des-copains').find('h1'),
			body = $('.le-code-des-copains').find('.body');
		TweenMax.killTweensOf(back);
		TweenMax.killTweensOf(h1);
		TweenMax.killTweensOf(body);

		if (bpc.scrollDirection === 'up') {
			TweenMax.to(back, 0.5, {css: {top: '100%'}, ease: Quart.easeOut, delay: 0.4, onComplete: function() { $('.le-code-des-copains').hide(0); }});
			TweenMax.to(h1, 0.5, {css: {top: 120}, ease: Quart.easeOut, delay: 0.2});
			TweenMax.to(body, 0.5, {css: {top: 120}, ease: Quart.easeOut, delay: 0});

			TweenMax.to(h1, 0.5, {alpha: 0, ease: Quart.easeOut, delay: 0.2});
			TweenMax.to(body, 0.5, {alpha: 0, ease: Quart.easeOut, delay: 0});
		} else {
			TweenMax.to(back, 0.5, {css: {bottom: '100%'}, ease: Quart.easeOut, delay: 0.4, onComplete: function() { $('.le-code-des-copains').hide(0); }});
			TweenMax.to(h1, 0.5, {css: {top: -120}, ease: Quart.easeOut, delay: 0});
			TweenMax.to(body, 0.5, {css: {top: -120}, ease: Quart.easeOut, delay: 0.2});

			TweenMax.to(h1, 0.5, {alpha: 0, ease: Quart.easeOut, delay: 0});
			TweenMax.to(body, 0.5, {alpha: 0, ease: Quart.easeOut, delay: 0.2});
		}
	};

	bpc.page7in = function() {
		try {
			lypn_trackPageView('partenaire');
		} catch(err) {
			console.log(err);
		}
		$('.partenaire').css('display', 'table');//show(0);
		var back = $('.partenaire').find('.background'),
			h1 = $('.partenaire').find('h1'),
			body = $('.partenaire').find('.body');
		TweenMax.killTweensOf(back);
		TweenMax.killTweensOf(h1);
		TweenMax.killTweensOf(body);

		if (bpc.scrollDirection === 'up') {
			TweenMax.to(back, 0.5, {css: {top: -160, bottom: 0}, ease: Quart.easeOut, delay: bpc.showDelay + 0});
			TweenMax.to(h1, 0.5, {css: {top: 0}, ease: Quart.easeOut, delay: bpc.showDelay + 0.4});
			TweenMax.to(body, 0.5, {css: {top: 0}, ease: Quart.easeOut, delay: bpc.showDelay + 0.2});

			TweenMax.to(h1, 0.5, {alpha: 1, ease: Quart.easeOut, delay: bpc.showDelay + 0.4});
			TweenMax.to(body, 0.5, {alpha: 1, ease: Quart.easeOut, delay: bpc.showDelay + 0.2});
		} else if (bpc.scrollDirection === 'down') {
			TweenMax.to(back, 0.5, {css: {top: -160, bottom: 0}, ease: Quart.easeOut, delay: bpc.showDelay + 0.2});
			TweenMax.to(h1, 0.5, {css: {top: 0}, ease: Quart.easeOut, delay: bpc.showDelay + 0});
			TweenMax.to(body, 0.5, {css: {top: 0}, ease: Quart.easeOut, delay: bpc.showDelay + 0.4});
			
			TweenMax.to(h1, 0.5, {alpha: 1, ease: Quart.easeOut, delay: bpc.showDelay + 0});
			TweenMax.to(body, 0.5, {alpha: 1, ease: Quart.easeOut, delay: bpc.showDelay + 0.4});
		}
	};

	bpc.page7out = function() {
		var back = $('.partenaire').find('.background'),
			h1 = $('.partenaire').find('h1'),
			body = $('.partenaire').find('.body');
		TweenMax.killTweensOf(back);
		TweenMax.killTweensOf(h1);
		TweenMax.killTweensOf(body);

		if (bpc.scrollDirection === 'up') {
			TweenMax.to(back, 0.5, {css: {top: '100%'}, ease: Quart.easeOut, delay: 0.4, onComplete: function() { $('.partenaire').hide(0); }});
			TweenMax.to(h1, 0.5, {css: {top: 120}, ease: Quart.easeOut, delay: 0.2});
			TweenMax.to(body, 0.5, {css: {top: 120}, ease: Quart.easeOut, delay: 0});

			TweenMax.to(h1, 0.5, {alpha: 0, ease: Quart.easeOut, delay: 0.2});
			TweenMax.to(body, 0.5, {alpha: 0, ease: Quart.easeOut, delay: 0});
		} else {
			TweenMax.to(back, 0.5, {css: {bottom: '100%'}, ease: Quart.easeOut, delay: 0.4, onComplete: function() { $('.partenaire').hide(0); }});
			TweenMax.to(h1, 0.5, {css: {top: -120}, ease: Quart.easeOut, delay: 0});
			TweenMax.to(body, 0.5, {css: {top: -120}, ease: Quart.easeOut, delay: 0.2});

			TweenMax.to(h1, 0.5, {alpha: 0, ease: Quart.easeOut, delay: 0});
			TweenMax.to(body, 0.5, {alpha: 0, ease: Quart.easeOut, delay: 0.2});
		}
	};

	bpc.page8in = function() {
		try {
			lypn_trackPageView('obtenir-de-laide');
		} catch(err) {
			console.log(err);
		}
		$('.obtenir-de-laide').css('display', 'table');//show(0);
		var back = $('.obtenir-de-laide').find('.background'),
			h1 = $('.obtenir-de-laide').find('h1'),
			p = $('.obtenir-de-laide').find('p');
		TweenMax.killTweensOf(back);
		TweenMax.killTweensOf(h1);
		TweenMax.killTweensOf(p);

		if (bpc.scrollDirection === 'up') {
			TweenMax.to(back, 0.5, {css: {top: -100, bottom: 0}, ease: Quart.easeOut, delay: bpc.showDelay + 0});
			TweenMax.to(h1, 0.5, {css: {top: 0}, ease: Quart.easeOut, delay: bpc.showDelay + 0.4});
			TweenMax.to(p, 0.5, {css: {top: 0}, ease: Quart.easeOut, delay: bpc.showDelay + 0.2});

			TweenMax.to(h1, 0.5, {alpha: 1, ease: Quart.easeOut, delay: bpc.showDelay + 0.4});
			TweenMax.to(p, 0.5, {alpha: 1, ease: Quart.easeOut, delay: bpc.showDelay + 0.2});
		} else if (bpc.scrollDirection === 'down') {
			TweenMax.to(back, 0.5, {css: {top: -100, bottom: 0}, ease: Quart.easeOut, delay: bpc.showDelay + 0.2});
			TweenMax.to(h1, 0.5, {css: {top: 0}, ease: Quart.easeOut, delay: bpc.showDelay + 0});
			TweenMax.to(p, 0.5, {css: {top: 0}, ease: Quart.easeOut, delay: bpc.showDelay + 0.4});
			
			TweenMax.to(h1, 0.5, {alpha: 1, ease: Quart.easeOut, delay: bpc.showDelay + 0});
			TweenMax.to(p, 0.5, {alpha: 1, ease: Quart.easeOut, delay: bpc.showDelay + 0.4});
		}
	};

	bpc.page8out = function() {
		var back = $('.obtenir-de-laide').find('.background'),
			h1 = $('.obtenir-de-laide').find('h1'),
			p = $('.obtenir-de-laide').find('p');
		TweenMax.killTweensOf(back);
		TweenMax.killTweensOf(h1);
		TweenMax.killTweensOf(p);

		if (bpc.scrollDirection === 'up') {
			TweenMax.to(back, 0.5, {css: {top: '100%'}, ease: Quart.easeOut, delay: 0.4, onComplete: function() { $('.obtenir-de-laide').hide(0); }});
			TweenMax.to(h1, 0.5, {css: {top: 120}, ease: Quart.easeOut, delay: 0.2});
			TweenMax.to(p, 0.5, {css: {top: 120}, ease: Quart.easeOut, delay: 0});

			TweenMax.to(h1, 0.5, {alpha: 0, ease: Quart.easeOut, delay: 0.2});
			TweenMax.to(p, 0.5, {alpha: 0, ease: Quart.easeOut, delay: 0});
		} else {
			TweenMax.to(back, 0.5, {css: {bottom: '100%'}, ease: Quart.easeOut, delay: 0.4, onComplete: function() { $('.obtenir-de-laide').hide(0); }});
			TweenMax.to(h1, 0.5, {css: {top: -120}, ease: Quart.easeOut, delay: 0});
			TweenMax.to(p, 0.5, {css: {top: -120}, ease: Quart.easeOut, delay: 0.2});

			TweenMax.to(h1, 0.5, {alpha: 0, ease: Quart.easeOut, delay: 0});
			TweenMax.to(p, 0.5, {alpha: 0, ease: Quart.easeOut, delay: 0.2});
		}
	};

	// end animations

	bpc.initNav = function() {
		$('.header .main-nav a, .mobile-nav a').click(function() {
			var index = $(this).index();
			$('html, body').animate({scrollTop: index*bpc.stageHeight}, 300);
			if ($('.mobile-nav').is(':visible')) {
				TweenMax.to($('.footer .open'), 0.3, {css: {top: 0}, ease: Quad.easeOut});
				$('.mobile-nav').hide(0);
				TweenMax.to($('.footer .childline-sml'), 0.3, {css: {right: 40}, ease: Quad.easeOut});
			}
		});
		if (window.location.hash !== '') {
			$('.header .main-nav a[href="'+window.location.hash+'"]').click();
		}
		$('.logo').click(function() {
			$('html, body').animate({scrollTop: 0}, 300);
		});
		$('.mobile-nav-btn').click(function() {
			$('.mobile-nav').show(0);
			TweenMax.to($('.footer .open'), 0.3, {css: {top: -30}, ease: Quad.easeOut});
			TweenMax.to($('.footer .childline-sml'), 0.3, {css: {right: -200}, ease: Quad.easeOut});
			$('.logo').hide(0);
		});
		$('.mobile-nav .close').click(function() {
			$('.mobile-nav').hide(0);
			TweenMax.to($('.footer .open'), 0.3, {css: {top: 0}, ease: Quad.easeOut});
			TweenMax.to($('.footer .childline-sml'), 0.3, {css: {right: 40}, ease: Quad.easeOut});
			$('.logo').show(0);
		});
	};

	bpc.initAudio = function() {
		$('.audio-control').on(bpc.clickType, function() {
			$(this).find('i').toggleClass('fa-volume-up');
			$(this).find('i').toggleClass('fa-volume-off');

			if(bpc.videoPlayer.prop('muted')) {
				bpc.videoPlayer.prop('muted', false);
			} else {
				bpc.videoPlayer.prop('muted', true);
			}

			bpc.mute = !bpc.mute;
			//bpc.inlineVideo1.muted(bpc.mute);
			//bpc.inlineVideo2.muted(bpc.mute);
			//bpc.inlineVideo3.muted(bpc.mute);
			//bpc.inlineVideo4.muted(bpc.mute);
		});
	};

	bpc.initWhatCanIDo = function() {
		$('.a-toi-dagir .button').click(function() {
			$('.a-toi-dagir .copy.open').slideUp(300, 'easeOutQuart').removeClass('open').next('.button').show(0);
			$(this).prev('.copy').addClass('open').slideDown(300, 'easeOutQuart');
			$(this).hide(0);
		});
	};

	bpc.initWatchVideo = function() {
		$('.videos a').click(function() {
			var src = $(this).attr('data-src');
			try {
				lypn_trackPageView('regarde-les-videos/'+$(this).attr('data-track'));
			} catch(err) {
				console.log(err);
			}
			$('.video-player').html('<video id="video-player" class="video-js vjs-default-skin" controls preload="auto" autoplay width="100%" height="100%" poster="" data-setup="{}"><source src="'+src+'.mp4" type="video/mp4"><source src="'+src+'.webm" type="video/webm"></video><div class="close"><i class="fa fa-times"></i></div>');
			var player = videojs("video-player", {}, function(){
				// Player (this) is initialized and ready.
			});
			player.muted(bpc.mute);
			$('.video-player').show(0);
			$('.video-player .close').click(function() {
				player.pause();
				player.dispose();
				$('.video-player').hide(0).html('');
				//player.tech.destroy();
				//player.destroy();
			});
		});
	};

	bpc.initCelebVids = function() {
		$('.arrows.right').click(function() {
			$(this).hide();
			//if (!bpc.inlineVideo1.paused()) bpc.inlineVideo1.pause();
			//if (!bpc.inlineVideo2.paused()) bpc.inlineVideo2.pause();
			//if (!bpc.inlineVideo3.paused()) bpc.inlineVideo3.pause();
			//if (!bpc.inlineVideo4.paused()) bpc.inlineVideo4.pause();
			$(this).parent().find('.left').show(0);
			TweenMax.to($(this).parent().parent().find('.double-video'), 0.6, {css: {marginLeft: '-100%'}, ease: Quart.easeOut});
		});
		$('.arrows.left').click(function() {
			$(this).hide();
			//if (!bpc.inlineVideo1.paused()) bpc.inlineVideo1.pause();
		//	if (!bpc.inlineVideo2.paused()) bpc.inlineVideo2.pause();
			//if (!bpc.inlineVideo3.paused()) bpc.inlineVideo3.pause();
			//if (!bpc.inlineVideo4.paused()) bpc.inlineVideo4.pause();
			$(this).parent().find('.right').show(0);
			TweenMax.to($(this).parent().parent().find('.double-video'), 0.6, {css: {marginLeft: 0}, ease: Quart.easeOut});
		});

		$('.la-video-golden-moustache').on('swipeleft', function(){
			if ($('.la-video-golden-moustache .arrows.right').is(':visible'))
				$('.la-video-golden-moustache .arrows.right').click();
		});
		$('.la-video-golden-moustache').on('swiperight', function(){
			if ($('.la-video-golden-moustache .arrows.left').is(':visible'))
				$('.la-video-golden-moustache .arrows.left').click();
		});
		$('.meet-anna').on('swipeleft', function(){
			if ($('.meet-anna .arrows.right').is(':visible'))
				$('.meet-anna .arrows.right').click();
		});
		$('.meet-anna').on('swiperight', function(){
			if ($('.meet-anna .arrows.left').is(':visible'))
				$('.meet-anna .arrows.left').click();
		});
	};

	bpc.initFooter = function() {
		$('.footer .open').on(bpc.clickType, function() {
			$('.footer').toggleClass('opened');
			if ($('.footer').hasClass('opened')) {
				TweenMax.to($('.footer'), 0.3, {css: {bottom: 0}, ease: Quart.easeOut});
			} else {
				TweenMax.to($('.footer'), 0.3, {css: {bottom: -97}, ease: Quart.easeOut});
			}
		});
	};

	/*bpc.preloadImages = function() {
		bpc.preloadQueue = new createjs.LoadQueue(false);
		bpc.preloadQueue.on('progress', bpc.preloadProgress, this);
		bpc.preloadQueue.on('fileload', bpc.preloadFileComplete, this);
		bpc.preloadQueue.on('complete', bpc.preloadQueueComplete, this);

		$('.preload').each(function() {
			var src = $(this).attr('data-src');
			bpc.preloadQueue.loadFile({id: $(this), src: src}, true);
		});
	};

	bpc.preloadProgress = function(event) {
		TweenMax.killTweensOf($('.site-loader .loader-progress'));
		TweenMax.to($('.site-loader .loader-progress'), 0.25, {width: (event.loaded*100)+'%', ease: Linear.easeNone});

		$('.site-loader .loader-percent').html(Math.round(event.loaded*100));
		TweenMax.killTweensOf($('.site-loader .loader-percent, .site-loader .loader-logo'));
		TweenMax.to($('.site-loader .loader-percent, .site-loader .loader-logo'), 0.25, {css: {right: (100-(event.loaded*100))+'%'}, ease: Linear.easeNone});
	};

	bpc.preloadFileComplete = function(event) {
		event.item.id.html('<img src="'+event.item.src+'" alt="" />');
	};

	bpc.preloadQueueComplete = function() {
		bpc.intoAnimationOut();
	};*/

	// inits

	bpc.init = function() {
		if (/MSIE (\d+\.\d+);/.test(navigator.userAgent)) bpc.clickType = 'click';
		$(window).resize(bpc.resize);
		
		bpc.loadScriptsAsync();
	};

	bpc.init();
});

/*! A fix for the iOS orientationchange zoom bug.
 Script by @scottjehl, rebound by @wilto.
 MIT License.
*/
(function(w){
	// This fix addresses an iOS bug, so return early if the UA claims it's something else.
	if (!(/iPhone|iPad|iPod/.test(navigator.platform) && navigator.userAgent.indexOf("AppleWebKit") > -1)){ return; }
	var doc = w.document;
	if(!doc.querySelector){ return; }
	var meta = doc.querySelector("meta[name=viewport]"),
		initialContent = meta && meta.getAttribute("content"),
		disabledZoom = initialContent + ",maximum-scale=1",
		enabledZoom = initialContent + ",maximum-scale=10",
		enabled = true,
		x, y, z, aig;
	if(!meta){ return; }
	function restoreZoom(){
		meta.setAttribute("content", enabledZoom);
		enabled = true; }
	function disableZoom(){
		meta.setAttribute("content", disabledZoom);
		enabled = false; }
	function checkTilt(e){
		aig = e.accelerationIncludingGravity;
		x = Math.abs(aig.x);
		y = Math.abs(aig.y);
		z = Math.abs(aig.z);
		// If portrait orientation and in one of the danger zones
		if(!w.orientation && (x > 7 || ((z > 6 && y < 8 || z < 8 && y > 6) && x > 5))){
			if(enabled){ disableZoom(); } }
		else if(!enabled){ restoreZoom(); } }
	w.addEventListener("orientationchange", restoreZoom, false);
	w.addEventListener("devicemotion", checkTilt, false);
})(this);