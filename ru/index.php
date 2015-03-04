<?php
	ob_start('ob_gzhandler');
	header('X-UA-Compatible: IE=edge,chrome=1');
	error_reporting(E_ALL);
	ini_set('display_errors', 1);
	
	date_default_timezone_set('Africa/Johannesburg');

	if (!isset($_server)) $_server = $_SERVER['HTTP_HOST'];

	$_version = '1.0.4';
?>
<!DOCTYPE html>
<!--[if lt IE 7]>      <html class="no-js lt-ie9 lt-ie8 lt-ie7"> <![endif]-->
<!--[if IE 7]>         <html class="no-js lt-ie9 lt-ie8"> <![endif]-->
<!--[if IE 8]>         <html class="no-js lt-ie9"> <![endif]-->
<!--[if gt IE 8]><!--> <html class="no-js"> <!--<![endif]-->
	<head>
		<meta charset="utf-8">
		<title>Cartoon Network / Место для друзей / Заводи друзей</title>
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
			<a href="http://www.cartoonnetwork.ru" target="_blank"><div class="header-logo"></div></a>

			<nav class="main-nav">
				<a href="#/" class="intro"></a>
				<a href="#/what-is-bullying">Что такое<br/>буллинг?</a>
				<a href="#/what-can-i-do">ЧТО ЖЕ<br/>ДЕЛАТЬ?</a>
				<a href="#/watch-videos">СМОТРЕТЬ<br/>ВИДЕО</a>
				<a href="#/meet-celeb">Галина<br/>Солдатова</a>
				<?php //<a href="#/meet-anna">Meet<br/>Anna</a>*/ ?>
				<a href="#/buddy-code">КОДЕКС<br/>ЧЕСТИ</a>
				<a href="#/partners" class="one">ПАРТНЕРЫ</a>
				<a href="#/get-help">ПОПРОСИТЬ<br/>О ПОМОЩИ</a>
			</nav>
		</div>

		<a class="audio-control noselect"><i class="fa fa-volume-up"></i></a>
		<a class="mobile-nav-btn noselect"><i class="fa fa-bars"></i></a>

		<div class="scroll"></div>

		<a href="http://www.cartoonnetwork.ru" target="_blank"><img src="img/buddy-network.png" alt="Buddy Network" class="logo" /></a>

		<div class="backgrounds">
			<div class="background">
<?php
	$videos = array('Bully_RUS 16x9', 'Bullied_RUS 16x9', 'Observer_RUS 16x9');
	$vid = $videos[array_rand($videos)];
?>
				<video loop poster="" id="background-video">
					<source src="http://ht.cdn.turner.com/tbseurope/big/CN_RU/videos/buddy/<?php echo $vid; ?>.webmhd.webm" type="video/webm">
					<source src="http://ht.cdn.turner.com/tbseurope/big/CN_RU/videos/buddy/<?php echo $vid; ?>.mp4.mp4" type="video/mp4">
				</video>
			</div>
		</div>

		<div class="scroller"></div>

		<div class="pages">
			<div class="page intro"></div>

			<div class="page what-is-bullying">
				<div class="background" data-preload="img/page-background.png" data-type="background"></div>
				<div class="inner">
					<h1>Что такое буллинг?</h1>
					<?php /*<p>Человек проявляет агрессию, когда грубо обращается с другим человеком или специально причиняет ему вред. Стать жертвой агрессии может кто угодно и в любом возрасте. Такое случается в школе, на детской площадке, дома и даже в Интернете. Если человек тебя толкает, бьет, дразнит, обзывает, отбирает вещи, намеренно игнорирует или смеется над тем, что ты не похож на остальных, он ведет себя агрессивно.</p>
					<p>Агрессия — это неправильно. Если кто-то проявляет ее по отношению к тебе, в этом нет твоей вины.</p>*/ ?>
					<p>Если кто-то намеренно и постоянно обижает тебя: причиняет вред тебе или твоим вещам, бьёт, толкает, дразнит, оскорбляет или смеётся над тобой – это буллинг или травля! Травля может происходить где угодно: в школе, на детской площадке, дома и даже в Интернете. Жертвой буллинга может стать каждый независимо от возраста и пола. Если кто-то травит тебя, в этом нет твоей вины.</p>
					<p>Как правило, обидчик выбирает в качестве жертвы того, кто не в состоянии сам постоять за себя! Буллинг – это плохо!</p>
				</div>
			</div>

			<div class="page what-can-i-do">
				<div class="background" data-preload="img/page-background-2.png" data-type="background"></div>
				<div class="inner">
					<h1>ЧТО ЖЕ ДЕЛАТЬ?</h1>
					<div class="body">
						<div class="panel">
							<div class="icon"><img src="img/blank.gif" data-type="src" data-preload="img/what-icon-1.png" alt="" /></div>
							<h2>РАССКАЖИ О ПРОБЛЕМЕ</h2>
							<div class="copy">
								<p>Если кто-то травит тебя, не терпи, а сразу же обратись за помощью. Сразу же сообщи об этом кому-нибудь, кому доверяешь: другу, учителю, воспитателю или другому взрослому, заслуживающему доверия. Тебе обязательно помогут, главное — рассказать о буллинге по отношению к тебе или кому-то другому.</p>
								<p>Каждый нуждается в друзьях и поддержке: и обдичик, и его жертвы. Постарайся вести себя дружелюбно со всеми.</p>
							</div>
							<a class="button">ПОДРОБНЕЕ</a>
						</div>
						<div class="panel">
							<div class="icon"><img src="img/blank.gif" data-type="src" data-preload="img/what-icon-2.png" alt="" /></div>
							<h2>БУДЬ ДРУЖЕЛЮБЕН</h2>
							<div class="copy">
								<p>Каждый нуждается в друзьях и поддержке: и тот, кто ведет себя агрессивно, и его жертвы. Постарайся вести себя дружелюбно со всеми.</p>
							</div>
							<a class="button">ПОДРОБНЕЕ</a>
						</div>
						<div class="panel">
							<div class="icon"><img src="img/blank.gif" data-type="src" data-preload="img/what-icon-3.png" alt="" /></div>
							<h2>ПРОЯВИ ХРАБРОСТЬ И СУМЕЙ ПОСТОЯТЬ ЗА СЕБЯ</h2>
							<div class="copy">
								<p>Если ты или кто-то из твоих друзей стал жертвой травли, будь уверен в себе и уговори друзей дать отпор обидчикам. Если ты расскажешь обо всем взрослым, это вовсе не сделает тебя стукачом или предателем. Наоборот, ты поступишь правильно и поможешь кому-то в беде.</p>
								<p>Даже если ты сам обижаешь кого-то в шутку, этот человек чувствует испуг и обиду. Не стоит вымещать плохое настроение и злость на окружающих — лучше об этом с кем-то поговорить.</p>
							</div>
							<a class="button">ПОДРОБНЕЕ</a>
						</div>
					</div>
				</div>
			</div>

			<div class="page watch-videos">
				<div class="background" data-preload="img/page-background-3.png" data-type="background"></div>
				<div class="inner">
					<h1>СМОТРЕТЬ ВИДЕО</h1>
					<div class="videos">
						<a data-track="watch-bullied" data-src="http://ht.cdn.turner.com/tbseurope/big/CN_RU/videos/buddy/Bullied_RUS 16x9">
							<div class="thumb">
								<div class="table">
									<div class="cell">Жертва</div>
								</div>
							</div>
						</a>
						<a data-track="watch-bully" data-src="http://ht.cdn.turner.com/tbseurope/big/CN_RU/videos/buddy/Bully_RUS 16x9">
							<div class="thumb">
								<div class="table">
									<div class="cell">Обидчик</div>
								</div>
							</div>
						</a>
						<a data-track="watch-observer" data-src="http://ht.cdn.turner.com/tbseurope/big/CN_RU/videos/buddy/Observer_RUS 16x9">
							<div class="thumb">
								<div class="table">
									<div class="cell">Свидетель</div>
								</div>
							</div>
						</a>
						<a data-track="watch-buddy-training" data-src="http://ht.cdn.turner.com/tbseurope/big/CN_RU/videos/buddy/Training Promo_RUS 16x9">
							<div class="thumb">
								<div class="table">
									<div class="cell">Будь сильнее – будь другом!</div>
								</div>
							</div>
						</a>
					</div>
				</div>
			</div>
			<div class="page meet-celeb">
				<div class="background" data-preload="img/celebrity.jpg" data-type="background"></div>
				<div class="inner">
					<h1>Галина Солдатова</h1>
					<p style="max-width:600px">Профессор кафедры психологии личности факультета психологии МГУ имени М.В. Ломоносова, доктор психологических наук, член-корреспондент Российской Академии образования, лауреат Премии Правительства Российской Федерации в области образования (2010).</p>
				</div>
			</div>

			<?php /*<div class="page meet-anna">
				<div class="background" data-preload="img/anna.jpg" data-type="background"></div>
				<div class="inner">
					<h1>Meet Anna Williamson</h1>
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
			</div>*/?>

			<div class="page buddy-code">
				<div class="background" data-preload="img/page-background-2.png" data-type="background"></div>
				<div class="inner">
					<h1>КОДЕКС ЧЕСТИ CARTOON NETWORK</h1>
					<div class="body">
						<h4>01</h4>
						<h3>Всегда поступай с другими только так, как хочешь, чтобы поступали с тобой.</h3>
						<h4>02</h4>
						<h3>Веди себя доброжелательно и дружелюбно, ведь друзья нужны всем.</h3>
						<h4>03</h4>
						<h3>Веди себя честно и открыто.</h3>
						<h4>04</h4>
						<h3>Заступайся за других, когда им нужна помощь.</h3>
						<h4>05</h4>
						<h3>Найди в себе смелость попросить прощения, если сделал что-то неправильно.</h3>
						<h4>06</h4>
						<h3>Поддержи того, у кого плохое настроение.</h3>
						<h4>07</h4>
						<h3>Веселись вместе с друзьями и приглашай в свою компанию остальных!</h3>
					</div>
				</div>
			</div>

			<div class="page partners">
				<div class="background" data-preload="img/white-90.png" data-type="background"></div>
				<div class="inner">
					<h1>ПАРТНЕРЫ</h1>
					<div class="body">
						<p>Фонд Развития Интернет более пяти лет занимается проблемой буллинга в России. Фонд организовал всероссийскую Линию помощи «Дети Онлайн», на которую могут обратиться все, кто пострадал от травли в школе, на улице или в Интернете. Операторы линии всегда помогут разобраться в проблеме и подскажут пути её решения.</p>
						<a href="http://detionline.com/" target="_blank"><img src="img/blank.gif" data-type="src" data-preload="img/logo-partner.png" alt="detionline" /></a>
					</div>
				</div>
			</div>

			<div class="page get-help">
				<div class="background" data-preload="img/page-background.png" data-type="background"></div>
				<div class="inner">
					<h1>УЗНАЙ БОЛЬШЕ И ПОПРОСИ О ПОМОЩИ</h1>
					<p>Чтобы узнать больше о буллинге и немедленно получить помощь, поддержку или совет, посети сайт детской службы поддержки по адресу detionline.com или позвони по телефону <span class="pink">8 800 25 000 15</span>. Тебя обязательно выслушают и помогут.</p>
				</div>
			</div>
		</div>

		<div class="mobile-nav">
			<a href="#/" class="active">ГЛАВНАЯ</a><!--
			--><a href="#/what-is-bullying">Что такое буллинг?</a><!--
			--><a href="#/what-can-i-do">ЧТО ЖЕ ДЕЛАТЬ?</a><!--
			--><a href="#/watch-videos">СМОТРЕТЬ ВИДЕО</a><!--
			--><a href="#/meet-celeb">Галина Солдатова</a><!--
			<a href="#/meet-anna">Meet Anna</a>
			--><a href="#/buddy-code">КОДЕКС ЧЕСТИ</a><!--
			--><a href="#/partners">ПАРТНЕРЫ</a><!--
			--><a href="#/get-help">ПОПРОСИТЬ О ПОМОЩИ</a>

			<div class="close"><i class="fa fa-times"></i></div>
		</div>

		<div class="footer">
			<div class="links">
				<div class=""><a href="http://www.cartoonnetwork.ru/%D1%83%D1%81%D0%BB%D0%BE%D0%B2%D0%B8%D1%8F-%D0%B8%D1%81%D0%BF%D0%BE%D0%BB%D1%8C%D0%B7%D0%BE%D0%B2%D0%B0%D0%BD%D0%B8%D1%8F" target="_blank">Правила и условия</a> <a href="http://www.cartoonnetwork.ru/%D0%BF%D0%BE%D0%BB%D0%B8%D1%82%D0%B8%D0%BA%D0%B0-%D0%BA%D0%BE%D0%BD%D1%84%D0%B8%D0%B4%D0%B5%D0%BD%D1%86%D0%B8%D0%B0%D0%BB%D1%8C%D0%BD%D0%BE%D1%81%D1%82%D0%B8" target="_blank">Политика конфиденциальности</a> <a href="http://www.cartoonnetwork.ru/cookies-policy" target="_blank">Политика использования файлов cookie</a></div>
			</div>
			<span class="open">ЮРИДИЧЕСКАЯ ИНФОРМАЦИЯ</span>
			<span class="copy">Использование данного сайта означает согласие с Условиями использования. TM и &copy; 2015 Cartoon Network. A Time Warner Company. Все права защищены. <a href="http://www.cartoonnetwork.ru" target="_blank">CartoonNetwork.ru</a> является частью Turner Sports and Entertainment Digital Network.</span>
			<a href="http://detionline.com/" target="_blank" class="childline"><img src="img/blank.gif" data-type="src" data-preload="img/footer-logo.png" alt="" /></a>
			<a href="http://detionline.com/" target="_blank" class="childline-sml"><img src="img/blank.gif" data-type="src" data-preload="img/footer-logo-sml.png" alt="" /></a>
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