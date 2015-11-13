<?php
	ob_start('ob_gzhandler');
	header('X-UA-Compatible: IE=edge,chrome=1');
	error_reporting(E_ALL);
	ini_set('display_errors', 1);
	
	date_default_timezone_set('Africa/Johannesburg');

	if (!isset($_server)) $_server = $_SERVER['HTTP_HOST'];

	$_version = '1.0.12';
?>
<!DOCTYPE html>
<!--[if lt IE 7]>      <html class="no-js lt-ie9 lt-ie8 lt-ie7"> <![endif]-->
<!--[if IE 7]>         <html class="no-js lt-ie9 lt-ie8"> <![endif]-->
<!--[if IE 8]>         <html class="no-js lt-ie9"> <![endif]-->
<!--[if gt IE 8]><!--> <html class="no-js"> <!--<![endif]-->
	<head>
		<meta charset="utf-8">
		<title>Cartoon Network / Buddy Network / Be a Buddy</title>
		<meta name="description" content="Be a buddy, not a bully.">
		<meta name="format-detection" content="telephone-no">
		<meta name="viewport" content="initial-scale=1, maximum-scale=1, user-scalable=no, width=device-width">
		<meta name="apple-mobile-web-app-capable" content="yes" />
		<link rel="icon" type="image/ico" href="img/favicon_0.ico">
		<link href="video-js/video-js.min.css" rel="stylesheet">
		<link rel="stylesheet" href="css/antibully.css?v=<?php echo $_version; ?>">
<!--[if lt IE 9]>		<link rel="stylesheet" href="css/ie.css?v=<?php echo $_version; ?>"> <![endif]-->
		<link href="//maxcdn.bootstrapcdn.com/font-awesome/4.2.0/css/font-awesome.min.css" rel="stylesheet">
		<link rel="apple-touch-icon-precomposed" href="img/icon.png" />
		
		<script src="js/modernizr.custom.min.js"></script>
		<script src="http://competition.turner.com/tracking/s_code.js"></script>
	</head>
	<body>
		<div class="preloader">
			<div class="bar">
				<div class="progress"></div>
			</div>
		</div>

		<div class="header noselect">
			<a href="http://www.cartoonnetwork.co.uk" target="_blank"><div class="header-logo"></div></a>

			<nav class="main-nav">
				<a href="#/" class="intro"></a>
				<a href="#/what-is-bullying">What is<br/>Bullying</a>
				<a href="#/what-can-i-do">What can<br/>I do</a>
				<a href="#/watch-videos">Watch<br/>Videos</a>
				<a href="#/meet-celeb">Meet the<br/>Ambassadors</a>
				<a href="#/meet-anna">Advice From<br/>Childline</a>
				<a href="#/buddy-code">Buddy<br/>Code</a>
				<a href="#/uk-partners">UK<br/>Partners</a>
				<a href="#/get-help">Get<br/>Help</a>
			</nav>
		</div>

		<a class="audio-control noselect"><i class="fa fa-volume-up"></i></a>
		<a class="mobile-nav-btn noselect"><i class="fa fa-bars"></i></a>

		<div class="scroll"></div>

		<a href="http://www.cartoonnetwork.co.uk" target="_blank"><img src="img/buddy-network.png" alt="Buddy Network" class="logo" /></a>

		<div class="backgrounds">
			<div class="background">
<?php
	//$videos = array('bully', 'bullied', 'observer');
	$videos = array('beabuddy_season2');
	$vid = $videos[array_rand($videos)];
?>
				<video loop id="background-video">
					<source src="http://ht.cdn.turner.com/tbseurope/big/Adops/<?php echo $vid; ?>.webm" type="video/webm">
					<source src="http://ht.cdn.turner.com/tbseurope/big/Adops/<?php echo $vid; ?>.mp4" type="video/mp4">
				</video>
			</div>
		</div>

		<div class="scroller"></div>

		<div class="pages">
			<div class="page intro"></div>

			<div class="page what-is-bullying">
				<div class="background" data-preload="img/page-background.png" data-type="background"></div>
				<div class="inner">
					<h1>What Is Bullying?</h1>
					<p>Bullying is when people are repeatedly mean to someone or hurt them on purpose.  Bullying can happen to anyone at any age and can happen at school, on the playground, at home or online and might involve someone pushing you, hitting you, teasing you, taking things from you, calling you names or picking on you for being different.</p>
					<p>Bullying is not ok. If you get bullied, it’s not your fault.</p>
				</div>
			</div>

			<div class="page what-can-i-do">
				<div class="background" data-preload="img/page-background-2.png" data-type="background"></div>
				<div class="inner">
					<h1>What Can I do?</h1>
					<div class="body">
						<div class="panel">
							<div class="icon"><img src="img/blank.gif" data-type="src" data-preload="img/what-icon-1.png" alt="" /></div>
							<h2>Tell someone what's happening</h2>
							<div class="copy">
								<p>Bullying is never something anyone should suffer with in silence. Tell someone you trust immediately - this can be a friend, a teacher, mentor or trusted adult. You are not alone and it's important to let someone know if you are being bullied or you see others being bullied.</p>
							</div>
							<a class="button">READ MORE</a>
						</div>
						<div class="panel">
							<div class="icon"><img src="img/blank.gif" data-type="src" data-preload="img/what-icon-2.png" alt="" /></div>
							<h2>Be Friendly</h2>
							<div class="copy">
								<p>Someone who is being bullied or who is bullying others needs a friend and support too. Create opportunites to be friendly to everyone.</p>
							</div>
							<a class="button">READ MORE</a>
						</div>
						<div class="panel">
							<div class="icon"><img src="img/blank.gif" data-type="src" data-preload="img/what-icon-3.png" alt="" /></div>
							<h2>Be Brave and Speak Out</h2>
							<div class="copy">
								<p>Be confident in who you are and encourage your friends to stand up against bullying and take action to stop it, whether it’s happening to you or others. Talking about it doesn’t mean you are a snitch or tattletale. You’re doing something good by helping someone out.</p>
								<p>Even if you think that bullying is just a laugh, children who are bullied feel scared and upset.  If you are upset or angry about something, talk about it instead of taking it out on someone else.</p>
							</div>
							<a class="button">READ MORE</a>
						</div>
					</div>
				</div>
			</div>

			<div class="page watch-videos">
				<div class="background" data-preload="img/page-background-3.png" data-type="background"></div>
				<div class="inner">
					<h1>Watch Videos</h1>
					<div class="videos">
						<a data-track="watch-animatic" data-src="http://ht.cdn.turner.com/tbseurope/big/Adops/beabuddy_season2">
							<div class="thumb">
								<div class="table">
									<div class="cell">Watch Be a Buddy</div>
								</div>
							</div>
						</a>
						<a data-track="watch-bullied" data-src="http://ht.cdn.turner.com/tbseurope/big/CN_UK/videos/anti-bullying/bullied">
							<div class="thumb">
								<div class="table">
									<div class="cell">Watch Bullied</div>
								</div>
							</div>
						</a>
						<a data-track="watch-bully" data-src="http://ht.cdn.turner.com/tbseurope/big/CN_UK/videos/anti-bullying/bully">
							<div class="thumb">
								<div class="table">
									<div class="cell">Watch Bully</div>
								</div>
							</div>
						</a>
						<a data-track="watch-observer" data-src="http://ht.cdn.turner.com/tbseurope/big/CN_UK/videos/anti-bullying/observer">
							<div class="thumb">
								<div class="table">
									<div class="cell">Watch Observer</div>
								</div>
							</div>
						</a>
						<a data-track="watch-buddy-training" data-src="http://ht.cdn.turner.com/tbseurope/big/CN_UK/videos/anti-bullying/training">
							<div class="thumb">
								<div class="table">
									<div class="cell">Watch Buddy Training</div>
								</div>
							</div>
						</a>
					</div>
				</div>
			</div>

			<div class="page meet-celeb">
				<div class="background" data-preload="img/tom-daley.jpg" data-type="background"></div>
				<div class="inner">
					<h1>Meet the Ambassadors</h1>
					<h2>CN Buddy Network Ambassadors</h2>
					<?php /*<ul class="double-video">
						<li>
							<div class="wide-responsive">
								<div class="inline-player">
									<video id="inline-player-1" class="video-js vjs-default-skin" controls preload="auto" width="auto" height="auto" poster="" data-setup="{}">
										<source src="http://ht.cdn.turner.com/tbseurope/big/Adops/psa-tom-daley.mp4" type="video/mp4">
										<source src="http://ht.cdn.turner.com/tbseurope/big/Adops/psa-tom-daley.webm" type="video/webm">
									</video>
								</div>
							</div>
						</li><!--
						--><li>
							<div class="wide-responsive">
								<div class="inline-player">
									<video id="inline-player-3" class="video-js vjs-default-skin" controls preload="auto" width="auto" height="auto" poster="" data-setup="{}">
										<source src="http://ht.cdn.turner.com/tbseurope/big/Adops/qa-tom-daley.mp4" type="video/mp4">
										<source src="http://ht.cdn.turner.com/tbseurope/big/Adops/qa-tom-daley.webm" type="video/webm">
									</video>
								</div>
							</div>
						</li>
					</ul>
					<div class="arrows right"><i class="fa fa-angle-right"></i></div>
					<div class="arrows left"><i class="fa fa-angle-left"></i></div>*/ ?>
					<div class="videos">
						<a data-track="watch-tom-daley-psa" data-src="http://ht.cdn.turner.com/tbseurope/big/Adops/psa-tom-daley" style="background-image:url(img/ambassador-1.jpg)">
							<div class="thumb">
								<div class="table">
									<div class="cell">Tom Daly Interview</div>
								</div>
							</div>
						</a>
						<a data-track="watch-tom-daley-qa" data-src="http://ht.cdn.turner.com/tbseurope/big/Adops/qa-tom-daley" style="background-image:url(img/ambassador-2.jpg)">
							<div class="thumb">
								<div class="table">
									<div class="cell">Advice From Tom Daly</div>
								</div>
							</div>
						</a>
						<a data-track="watch-tinie-tempah-psa" data-src="http://ht.cdn.turner.com/tbseurope/big/CN_UK/videos/anti-bullying/celebrity" style="background-image:url(img/ambassador-3.jpg)">
							<div class="thumb">
								<div class="table">
									<div class="cell">Tinie Tempah Interview</div>
								</div>
							</div>
						</a>
						<a data-track="watch-tinie-tempah-qa" data-src="http://ht.cdn.turner.com/tbseurope/big/CN_UK/videos/anti-bullying/tinie_qa" style="background-image:url(img/ambassador-4.jpg)">
							<div class="thumb">
								<div class="table">
									<div class="cell">Advice from Tinie Tempah</div>
								</div>
							</div>
						</a>
					</div>
				</div>
			</div>

			<div class="page meet-anna">
				<div class="background" data-preload="img/anna.jpg" data-type="background"></div>
				<div class="inner">
					<h1>Advice From Childline</h1>
					<h2>Childline Counsellor</h2>
					<ul class="double-video">
						<li>
							<div class="wide-responsive">
								<div class="inline-player">
									<video id="inline-player-2" class="video-js vjs-default-skin" controls preload="auto" width="auto" height="auto" poster="" data-setup="{}">
										<source src="http://ht.cdn.turner.com/tbseurope/big/CN_UK/videos/anti-bullying/anna.mp4" type="video/mp4">
										<source src="http://ht.cdn.turner.com/tbseurope/big/CN_UK/videos/anti-bullying/anna.webm" type="video/webm">
									</video>
								</div>
							</div>
						</li><!--
						--><li>
							<div class="wide-responsive">
								<div class="inline-player">
									<video id="inline-player-4" class="video-js vjs-default-skin" controls preload="auto" width="auto" height="auto" poster="" data-setup="{}">
										<source src="http://ht.cdn.turner.com/tbseurope/big/CN_UK/videos/anti-bullying/anna_qa.mp4" type="video/mp4">
										<source src="http://ht.cdn.turner.com/tbseurope/big/CN_UK/videos/anti-bullying/anna_qa.webm" type="video/webm">
									</video>
								</div>
							</div>
						</li>
					</ul>
					<div class="arrows right"><i class="fa fa-angle-right"></i></div>
					<div class="arrows left"><i class="fa fa-angle-left"></i></div>
				</div>
			</div>

			<div class="page buddy-code">
				<div class="background" data-preload="img/page-background-2.png" data-type="background"></div>
				<div class="inner">
					<h1>CN Buddy Code</h1>
					<div class="body">
						<h4>01</h4>
						<h3>Be your own best friend first - treat others the way you would want to be treated</h3>
						<h4>02</h4>
						<h3>Be kind and considerate – don’t judge others, everyone needs a friend </h3>
						<h4>03</h4>
						<h3>Be honest and trustworthy</h3>
						<h4>04</h4>
						<h3>Be loyal and stick up for others when they need it</h3>
						<h4>05</h4>
						<h3>Be brave enough to say "I'm sorry" if you’ve made a mistake </h3>
						<h4>06</h4>
						<h3>Be supportive when someone’s having a bad day </h3>
						<h4>07</h4>
						<h3>Have fun with your buddies and invite others to have fun with you too!</h3>
					</div>
				</div>
			</div>

			<div class="page uk-partners">
				<div class="background" data-preload="img/white-90.png" data-type="background"></div>
				<div class="inner">
					<h1>Partners</h1>
					<div class="body">
						<a href="http://www.childline.org.uk/cartoon-network-anti-bullying" target="_blank"><img src="img/blank.gif" data-type="src" data-preload="img/logo-childline.png" alt="Childline" /></a>
					</div>
				</div>
			</div>

			<div class="page get-help">
				<div class="background" data-preload="img/page-background.png" data-type="background"></div>
				<div class="inner">
					<h1>Learn More<br/>&amp; Get Help</h1>
					<p>For more information about bullying or if you need immediate help, support or advice visit the ChildLine website at <a href="http://www.childline.org.uk/cartoon-network-anti-bullying" target="_blank">www.childline.org.uk</a> or you can always call <span class="pink">ChildLine on 0800 1111</span> to speak to someone who is there to listen and help you.</p>
				</div>
			</div>
		</div>

		<div class="mobile-nav">
			<a href="#/" class="active">Home</a><!--
			--><a href="#/what-is-bullying">What is Bullying</a><!--
			--><a href="#/what-can-i-do">What can I do</a><!--
			--><a href="#/watch-videos">Watch Videos</a><!--
			--><a href="#/meet-celeb">Meet the Ambassadors</a><!--
			--><a href="#/meet-anna">Advice From Childline</a><!--
			--><a href="#/buddy-code">Buddy Code</a><!--
			--><a href="#/uk-partners">UK Partners</a><!--
			--><a href="#/get-help">Get Help</a>

			<div class="close"><i class="fa fa-times"></i></div>
		</div>

		<div class="footer">
			<div class="links">
				<div class=""><a href="http://www.cartoonnetwork.co.uk/terms-and-conditions-of-use" target="_blank">Terms &amp; Conditions</a> <a href="http://www.cartoonnetwork.co.uk/privacy-policy" target="_blank">Privacy Policy</a> <a href="http://eucookies.turner.com/" target="_blank">Cookies Policy</a></div>
			</div>
			<span class="open">LEGALS</span>
			<span class="copy">Use of this site signifies your agreement to the Terms of Use. TM &amp; &copy <?php echo date('Y'); ?> Cartoon Network. A Time Warner Company. All Rights Reserved. CartoonNetwork.co.uk is part of the Turner Sports and Entertainment Digital Network</span>
			<a href="http://www.childline.org.uk/cartoon-network-anti-bullying" target="_blank" class="childline"><img src="img/blank.gif" data-type="src" data-preload="img/footer-childline.png" alt="" /></a>
			<a href="http://www.childline.org.uk/cartoon-network-anti-bullying" target="_blank" class="childline-sml"><img src="img/blank.gif" data-type="src" data-preload="img/footer-childline-sml.png" alt="" /></a>
		</div>

		<div class="video-player">
		</div>

		<?php /*<!-- SiteCatalyst code version: H.14.
		Copyright 1997-2008 Omniture, Inc. More info available at
		http://www.omniture.com -->
		<script language="JavaScript" src="js/s_code.min.js?v=<?php echo $_version; ?>"></script>
		<script language="JavaScript"><!--
		
		var s_code=s.t();if(s_code)document.write(s_code)//--></script>
		<script language="JavaScript"><!--
		if(navigator.appVersion.indexOf('MSIE')>=0)document.write(unescape('%3C')+'\!-'+'-')
		//--></script><noscript><a href="http://www.omniture.com" title="Web Analytics"><img
		src="http://turnerukfballuk.112.2O7.net/b/ss/turnerukfballuk/1/H.14--NS/0"
		height="1" width="1" border="0" alt="" /></a></noscript><!--/DO NOT REMOVE/-->
		<!-- End SiteCatalyst code version: H.14. -->*/ ?>
		<noscript>
			<a href="http://www.omniture.com" title="Web Analytics"><img src="http://turnerukfballuk.112.2O7.net/b/ss/turnerukfballuk/1/H.14--NS/0" height="1" width="1" border="0" alt="" /></a>
		</noscript>

		<script src="https://code.jquery.com/jquery-1.11.1.min.js"></script>
		<script src="js/jquery-ui.min.js"></script>
		<!--<script src="js/jquery.mobile.custom.min.js"></script>
		<script src="js/jquerymobile-swipeupdown.js"></script>-->
		<script src="js/antibully.min.js?v=<?php echo $_version; ?>"></script>
	</body>
</html>
<?php
	ob_flush();
?>