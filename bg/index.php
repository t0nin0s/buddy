<?php
	ob_start('ob_gzhandler');
	header('X-UA-Compatible: IE=edge,chrome=1');
	error_reporting(E_ALL);
	ini_set('display_errors', 1);
	
	date_default_timezone_set('Africa/Johannesburg');

	if (!isset($_server)) $_server = $_SERVER['HTTP_HOST'];

	$_version = '1.0.11';
?>
<!DOCTYPE html>
<!--[if lt IE 7]>      <html class="no-js lt-ie9 lt-ie8 lt-ie7"> <![endif]-->
<!--[if IE 7]>         <html class="no-js lt-ie9 lt-ie8"> <![endif]-->
<!--[if IE 8]>         <html class="no-js lt-ie9"> <![endif]-->
<!--[if gt IE 8]><!--> <html class="no-js"> <!--<![endif]-->
	<head>
		<meta charset="utf-8">
		<title>Cartoon Network / Имаш силата / Бъди приятел</title>
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
			<a href="http://www.cartoonnetwork.bg" target="_blank"><div class="header-logo"></div></a>

			<nav class="main-nav">
				<a href="#/" class="intro"></a>
				<a href="#/what-is-bullying" class="three">КАКВО<br/>ПРЕДСТАВЛЯВА<br/>ХУЛИГАНСТВОТО?</a>
				<a href="#/what-can-i-do">КАКВО МОЖЕШ ДА<br/>НАПРАВИШ ЛИ?</a>
				<a href="#/watch-videos">ГЛЕДАЙ<br/>КЛИПЧЕТА</a>
				<a href="#/meet-celeb">ЗАПОЗНАЙ<br/>СЕ С VENZY</a>
				<?php //<a href="#/meet-anna">Meet<br/>Anna</a>*/ ?>
				<a href="#/buddy-code">CN КОДЕКС НА<br/>ДРУГАРСТВОТО</a>
				<a href="#/partners">НАШИЯТ<br/>ПАРТНЬОР</a>
				<a href="#/get-help">ОБЪРНИ СЕ<br/>ЗА ПОМОЩ</a>
			</nav>
		</div>

		<a class="audio-control noselect"><i class="fa fa-volume-up"></i></a>
		<a class="mobile-nav-btn noselect"><i class="fa fa-bars"></i></a>

		<div class="scroll"></div>

		<a href="http://www.cartoonnetwork.bg" target="_blank"><img src="img/buddy-network.png" alt="Buddy Network" class="logo" /></a>

		<div class="backgrounds">
			<div class="background">
<?php
	$videos = array('bullied_bg', 'bully_bg', 'observer_bg');
	$vid = $videos[array_rand($videos)];
?>
				<video loop poster="" id="background-video">
					<source src="http://ht.cdn.turner.com/tbseurope/big/CN_BG/videos/buddy/<?php echo $vid; ?>.webm" type="video/webm">
					<source src="http://ht.cdn.turner.com/tbseurope/big/CN_BG/videos/buddy/<?php echo $vid; ?>.mp4" type="video/mp4">
				</video>
			</div>
		</div>

		<div class="scroller"></div>

		<div class="pages">
			<div class="page intro"></div>

			<div class="page what-is-bullying">
				<div class="background" data-preload="img/page-background.png" data-type="background"></div>
				<div class="inner">
					<h1>КАКВО ПРЕДСТАВЛЯВА ХУЛИГАНСТВОТО?</h1>
					<p>Хулиганство е когато някой нееднократно се държи зле с друг човек, или умишлено го наранява. Всеки може да бъде обект на хулиганска проява - без значение от възрастта и мястото на проявата - тя може да се случи в училище, на площадката за игра, вкъщи, или докато си онлайн. Хулиганството има много различни проявления - може някой да те блъска, удря, тормози, да си присвоява твои вещи, да те нарича с обидни имена, да те игнорира умишлено, да опитва да те изолира, или да ти се подиграва, защото смята, че си различен.</p>
					<p>Хулиганството е лошо поведение. Ако си бил обект на хулигански прояви, това в никакъв случай не е по твоя вина.</p>
				</div>
			</div>

			<div class="page what-can-i-do">
				<div class="background" data-preload="img/page-background-2.png" data-type="background"></div>
				<div class="inner">
					<h1>КАКВО МОЖЕШ ДА НАПРАВИШ ЛИ?</h1>
					<div class="body">
						<div class="panel">
							<div class="icon"><img src="img/blank.gif" data-type="src" data-preload="img/what-icon-1.png" alt="" /></div>
							<h2>РАЗКАЖИ НА НЯКОГО КАКВО СЕ Е СЛУЧИЛО</h2>
							<div class="copy">
								<p>Хулиганството не е нещо, което трябва да понасяме тихо. Веднага разкажи на доверен човек за това, което се е случило. Това може да е твой родител приятел, учител или друг възрастен, комуто имаш доверие. Ти не си сам и затова е важно да споделиш с някого, че ти или друг човек сте обект на хулиганско поведение.</p>
							</div>
							<a class="button">ПРОЧЕТИ ОЩЕ</a>
						</div>
						<div class="panel">
							<div class="icon"><img src="img/blank.gif" data-type="src" data-preload="img/what-icon-2.png" alt="" /></div>
							<h2>БЪДИ ПРИЯТЕЛСКИ НАСТРОЕН С ВСИЧКИ</h2>
							<div class="copy">
								<p>Хората, които са обект на хулиганство, както и тези, които се държат хулигански с другите също имат нужда от приятел и разбиране. Бъди приятелски настроен с всички.</p>
							</div>
							<a class="button">ПРОЧЕТИ ОЩЕ</a>
						</div>
						<div class="panel">
							<div class="icon"><img src="img/blank.gif" data-type="src" data-preload="img/what-icon-3.png" alt="" /></div>
							<h2>БЪДИ СМЕЛ И ГОВОРИ ЗА ПРОБЛЕМА</h2>
							<div class="copy">
								<p>Бъди уверен в себе си и вдъхвай кураж и на приятелите си да застанат твърдо против хулиганството и да му противодействат, без значение дали е насочено към теб, или към друг. Да споделиш за такива случаи не те прави доносник, или клюкар. Това е добра постъпка, която ще помогне някому.</p>
								<p>Ако ти смяташ, че хулиганското поведение е забавно или е просто за майтап, то, помисли, че децата, които е насочено се страхуват и потискат от това. Ако самият ти си ядосан от нещо, говори за това, но не си "го изкарвай" върху друг.</p>
							</div>
							<a class="button">ПРОЧЕТИ ОЩЕ</a>
						</div>
					</div>
				</div>
			</div>

			<div class="page watch-videos">
				<div class="background" data-preload="img/page-background-3.png" data-type="background"></div>
				<div class="inner">
					<h1>ГЛЕДАЙ КЛИПЧЕТА</h1>
					<div class="videos">
						<a data-track="watch-bullied" data-src="http://ht.cdn.turner.com/tbseurope/big/CN_BG/videos/buddy/bullied_bg">
							<div class="thumb">
								<div class="table">
									<div class="cell">ОБЕКТЪТ НА ХУЛИГАНСТВО</div>
								</div>
							</div>
						</a><!--
						--><a data-track="watch-bully" data-src="http://ht.cdn.turner.com/tbseurope/big/CN_BG/videos/buddy/bully_bg">
							<div class="thumb">
								<div class="table">
									<div class="cell">ХУЛИГАНЪТ</div>
								</div>
							</div>
						</a><!--
						--><a data-track="watch-observer" data-src="http://ht.cdn.turner.com/tbseurope/big/CN_BG/videos/buddy/observer_bg">
							<div class="thumb">
								<div class="table">
									<div class="cell">ПАСИВНИЯТ НАБЛЮДАТЕЛ</div>
								</div>
							</div>
						</a><!--
						--><a data-track="watch-buddy-training" data-src="http://ht.cdn.turner.com/tbseurope/big/CN_BG/videos/buddy/full_bg">
							<div class="thumb">
								<div class="table">
									<div class="cell">ТРЕНИРОВКА "БЪДИ ПРИЯТЕЛ"</div>
								</div>
							</div>
						</a>
					</div>
				</div>
			</div>
			<div class="page meet-celeb">
				<div class="background" data-preload="img/celebrity.jpg" data-type="background"></div>
				<div class="inner">
					<h1>ЗАПОЗНАЙ<br/>СЕ С VENZY</h1>
					<ul class="double-video">
						<li>
							<div class="wide-responsive">
								<div class="inline-player">
									<video id="inline-player-1" class="video-js vjs-default-skin" controls preload="auto" width="auto" height="auto" poster="" data-setup="{}">
										<source src="http://ht.cdn.turner.com/tbseurope/big/CN_BG/videos/buddy/bg_ambassadors.mp4.mp4" type="video/mp4">
										<source src="http://ht.cdn.turner.com/tbseurope/big/CN_BG/videos/buddy/bg_ambassadors.webm" type="video/webm">
									</video>
								</div>
							</div>
						</li><!--
						--><li>
							<p>VenZy е един от най-известните и разпознаваеми лица на музикалната сцена в момента, заради вродения му талант на певец и автор, естествената му музикалност и позитивното му отношение. Още от дебютното си парче „Опасно близки" с Михаела Филева, талантливият певец печели многобройни фенове и последователи. Кариерата му продължава със самостоятелните „Под открито небе", „Щом ти си до мен", „Мога да ти вярвам", както и тоталните хитове „А, дано, ама надали" с Графа и Михаела Филева и „Въпрос на време" с Дивна.</p>
					<p>VenZy споделя: "Радвам се да подкрепя Cartoon Network и да вдъхна кураж на децата да се изправят срещу тормоза.Важно е децата да разберат, че това не е приемливо и че е ОК да се открият и да говорят за преживяванията. Всички ние можем да помогнем, просто като сме приятели, мили и внимателни към другите."</p>
						</li>
					</ul>
					<div class="arrows right"><i class="fa fa-angle-right"></i></div>
					<div class="arrows left"><i class="fa fa-angle-left"></i></div>
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
					<h1>CN КОДЕКС НА ДРУГАРСТВОТО</h1>
					<div class="body">
						<h4>01</h4>
						<h3>Бъди приятел на самия себе си - отнасяй се с другите така, както искаш те да се отнасят с теб.</h3>
						<h4>02</h4>
						<h3>Бъди вежлив и се отнасяй с разбиране - не съди другите, защото всеки има нужда от приятел.</h3>
						<h4>03</h4>
						<h3>Бъди честен и предан.</h3>
						<h4>04</h4>
						<h3>Бъди лоялен и подай ръка на този, който има нужда от подкрепа.</h3>
						<h4>05</h4>
						<h3>Бъди силен, за да кажеш "извинявай", ако си допуснал грешка.</h3>
						<h4>06</h4>
						<h3>Дай рамо на някой, който има лош ден</h3>
						<h4>07</h4>
						<h3>Забавлявай се със своите приятели и приобщавайте и другите деца.</h3>
					</div>
				</div>
			</div>

			<div class="page partners">
				<div class="background" data-preload="img/white-90.png" data-type="background"></div>
				<div class="inner">
					<h1>НАШИЯТ ПАРТНЬОР</h1>
					<div class="body">
						<p>Всяко дете или възрастен се сблъсква с най-различни проблеми, които включват силни емоции като тъга, гняв, срам, страх, завист и т.н. С някои от тях се справяме сами. За други обаче – имаме нужда от подкрепата на психолог или психотерапевт, който да ни помогне да се почувстваме по-добре или да намерим нови стратегии за справяне с проблемите. Фондация „Асоциация Анимус” предлага различни възможности, от които децата могат да се възползват тогава, когато се намират в трудна ситуация или просто имат нужда да споделят с някого това, което преживяват.</p>
 						<p>Можеш да се обадиш на Националната телефонна линия за деца <span class="pink">116 111</span>, която е безплатна и денонощна. Номерът <span class="pink">116 111</span> се избира без код от цялата страна.</p>
					</div>
				</div>
			</div>

			<div class="page get-help">
				<div class="background" data-preload="img/page-background.png" data-type="background"></div>
				<div class="inner">
					<h1>НАУЧИ ОЩЕ И ПОТЪРСИ ПОМОЩ</h1>
					<p>Можеш да се обадиш на Националната телефонна линия за деца <span class="pink">116 111</span>, която е безплатна и денонощна. Номерът <span class="pink">116 111</span> се избира без код от цялата страна.</p>
					<p>Можеш да се обадиш на номер <span class="pink">02 983 52 05</span>, за да се срещнеш с психолог/психотерапевт.</p>
					<p>Ако ситуацията, в която се намираш ти или твой близък, е спешна и изисква да бъдеш настанен някъде, където да се погрижат за теб, е важно да знаеш, че Фондация „Асоциация Анимус” разполага с Кризисен център. За повече информация избери номер: <span class="pink">02 983 52 05</span>.</p>
				</div>
			</div>
		</div>

		<div class="mobile-nav">
			<a href="#/" class="active">ГЛАВНАЯ</a><!--
			--><a href="#/what-is-bullying">КАКВО ПРЕДСТАВЛЯВА ХУЛИГАНСТВОТО?</a><!--
			--><a href="#/what-can-i-do">КАКВО МОЖЕШ ДА НАПРАВИШ ЛИ?</a><!--
			--><a href="#/watch-videos">ГЛЕДАЙ КЛИПЧЕТА</a><!--
			--><a href="#/meet-celeb">ЗАПОЗНАЙ СЕ С VENZY </a><!--
			<a href="#/meet-anna">Meet Anna</a>
			--><a href="#/buddy-code">CN КОДЕКС НА ДРУГАРСТВОТО</a><!--
			--><a href="#/partners">НАШИЯТ ПАРТНЬОР</a><!--
			--><a href="#/get-help">ОБЪРНИ СЕ ЗА ПОМОЩ</a>

			<div class="close"><i class="fa fa-times"></i></div>
		</div>

		<div class="footer">
			<div class="links">
				<div class=""><a href="http://www.cartoonnetwork.bg/terms-of-use" target="_blank">Правила и условия</a> <a href="http://www.cartoonnetwork.bg/privacy-policy" target="_blank">Декларация за поверителност</a> <a href="http://www.cartoonnetwork.bg/cookies-policy" target="_blank">Политика по отношение на бисквитките</a></div>
			</div>
			<span class="open">ЗАКОНОВИ ПОЛОЖЕНИЯ</span>
			<span class="copy">С използването на този уебсайт вие приемате и се съгласявате с Условията за използване. TM &amp; &copy; <?php echo date('Y'); ?> Cartoon Network. Една компания на Time Warner Company. Всички права запазени. CartoonNetwork.bg е част от Turner Sports and Entertainment Digital Network.</span>
			<a href="http://www.116111.bg" target="_blank" class="childline"><img src="img/blank.gif" data-type="src" data-preload="img/footer-116111-sq.png" alt="" /></a>
			<a href="http://www.116111.bg" target="_blank" class="childline-sml"><img src="img/blank.gif" data-type="src" data-preload="img/footer-116111-sq-sml.png" alt="" /></a>
		</div>

		<div class="video-player">
		</div>

		<noscript>
			<a href="http://www.omniture.com" title="Web Analytics"><img src="http://turnerukfballuk.112.2O7.net/b/ss/turnerukfballuk/1/H.14--NS/0" height="1" width="1" border="0" alt="" /></a>
		</noscript>

		<script src="https://code.jquery.com/jquery-1.11.1.min.js"></script>
		<script src="js/jquery-ui.min.js"></script>
		<script src="js/antibully.min.js?v=<?php echo $_version; ?>"></script>
	</body>
</html>
<?php
	ob_flush();
?>