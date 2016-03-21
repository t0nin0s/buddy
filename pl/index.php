<?php
	ob_start('ob_gzhandler');
	header('X-UA-Compatible: IE=edge,chrome=1');
	error_reporting(E_ALL);
	ini_set('display_errors', 1);
	
	date_default_timezone_set('Africa/Johannesburg');

	if (!isset($_server)) $_server = $_SERVER['HTTP_HOST'];

	$_version = '1.1.7';
?>
<!DOCTYPE html>
<!--[if lt IE 7]>      <html class="no-js lt-ie9 lt-ie8 lt-ie7"> <![endif]-->
<!--[if IE 7]>         <html class="no-js lt-ie9 lt-ie8"> <![endif]-->
<!--[if IE 8]>         <html class="no-js lt-ie9"> <![endif]-->
<!--[if gt IE 8]><!--> <html class="no-js"> <!--<![endif]-->
	<head>
		<meta charset="utf-8">
		<title>Cartoon Network / Przyjazna sieć / Zostań przyjacielem</title>
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
			<a href="http://www.cartoonnetwork.pl/" target="_blank"><div class="header-logo"></div></a>

			<nav class="main-nav">
				<a href="#/" class="intro"></a>
				<a href="#/czym-jest-dokuczanie">CZYM JEST<br/>DOKUCZANIE?</a>
				<a href="#/co-mozesz-zrobic">CO MOŻESZ<br/>ZROBIĆ?</a>
				<a href="#/zobacz-filmy">ZOBACZ<br/>FILMY</a>
				<a class="three" href="#/poznaj-marcina-gortata">Poznaj<br/>Naszych<br/>Ambasadorów</a>
				<a href="#/poznaj-malgosie">POZNAJ<br/>MAŁGOSIĘ</a>
				<a href="#/kodeks-kumpla">KODEKS<br/>KUMPLA</a>
				<a class="one" href="#/porady">PORADY</a>
				<a class="one" href="#/partnerzy">PARTNERZY</a>
				<a href="#/znajdz-pomoc">ZNAJDŹ<br/>POMOC</a>
			</nav>
		</div>

		<a class="audio-control noselect"><i class="fa fa-volume-up"></i></a>
		<a class="mobile-nav-btn noselect"><i class="fa fa-bars"></i></a>

		<div class="scroll"></div>

		<a href="http://www.cartoonnetwork.pl/" target="_blank"><img src="img/buddy-network.png" alt="Buddy Network" class="logo" /></a>

		<div class="backgrounds">
			<div class="background">
<?php
	$videos = array('bully', 'bullied', 'observer');
	$vid = $videos[array_rand($videos)];
?>
				<video loop poster="<?php /*http://ht.cdn.turner.com/tbseurope/big/CN_PL/videos/buddy/<?php echo $vid; ?>.jpg*/ ?>" id="background-video">
					<source src="http://ht.cdn.turner.com/tbseurope/big/CN_PL/videos/buddy/<?php echo $vid; ?>.webm" type="video/webm">
					<source src="http://ht.cdn.turner.com/tbseurope/big/CN_PL/videos/buddy/<?php echo $vid; ?>.mp4" type="video/mp4">
				</video>
			</div>
		</div>

		<div class="scroller"></div>

		<div class="pages">
			<div class="page intro"></div>

			<div class="page czym-jest-dokuczanie">
				<div class="background" data-preload="img/page-background.png" data-type="background"></div>
				<?php /*<div class="inner">
					<h1>CZYM JEST DOKUCZANIE?</h1>
					<p>Dokuczanie to powtarzające się złe traktowanie innych lub celowe ich ranienie. Dokuczanie może zdarzyć się każdemu. Może mieć miejsce w szkole, na placu zabaw, w domu lub w internecie. Może polegać na szturchaniu, biciu, wyśmiewaniu, zabieraniu rzeczy, przezywaniu, celowym ignorowaniu lub pomijaniu, a także wytykaniu z powodu odmienności.</p>
					<p>Dokuczanie nigdy nie jest w porządku. To nie Twoja wina, jeśli ktoś Cię krzywdzi.</p>
					<p><a href="img/infographic_conclusions_of_the_study.png" target="_blank" class="yellow" data-scroller="czym-jest-dokuczanie">WNIOSKI Z BADAŃ</a></p>
				</div>*/ ?>
				<div class="img-scroller"><img src="img/blank.gif" data-type="src" data-preload="img/infographic_conclusions_of_the_study.png" alt="" /></div>
			</div>

			<div class="page co-mozesz-zrobic">
				<div class="background" data-preload="img/page-background-2.png" data-type="background"></div>
				<div class="inner">
					<h1>CO MOŻESZ ZROBIĆ?</h1>
					<div class="body">
						<div class="panel">
							<div class="icon"><img src="img/blank.gif" data-type="src" data-preload="img/what-icon-1.png" alt="" /></div>
							<h2>POWIEDZ KOMUŚ, CO SIĘ DZIEJE</h2>
							<div class="copy">
								<p>Jeśli ktoś krzywdzi Ciebie lub kogoś innego, jak najszybciej powiedz o tym komuś, komu ufasz. Może to być kumpel, przyjaciel, nauczyciel, brat lub siostra, rodzic lub inny dorosły. Pamiętaj, nie jesteś sam! Dlatego to ważne, byś powiedział komuś o tym, co się dzieje.</p>
							</div>
							<a class="button">DOWIEDZ SIĘ WIĘCEJ</a>
						</div>
						<div class="panel">
							<div class="icon"><img src="img/blank.gif" data-type="src" data-preload="img/what-icon-2.png" alt="" /></div>
							<h2>BĄDŹ PRZYJAZNY</h2>
							<div class="copy">
								<p>Ktoś, komu dokuczają, a nawet ktoś, kto sam dokucza, także potrzebuje przyjaciela i wsparcia. Staraj się być przyjaznym dla każdego.</p>
							</div>
							<a class="button">DOWIEDZ SIĘ WIĘCEJ</a>
						</div>
						<div class="panel">
							<div class="icon"><img src="img/blank.gif" data-type="src" data-preload="img/what-icon-3.png" alt="" /></div>
							<h2>BĄDŹ ODWAŻNY, MÓW OTWARCIE</h2>
							<div class="copy">
								<p>Bądź pewny siebie. Zachęcaj swoich przyjaciół i znajomych, by sprzeciwiali się dokuczaniu i starali się je powstrzymać - niezależnie, czy ktoś krzywdzi Ciebie czy kogoś innego. Mówienie głośno o tym, że ktoś komuś dokucza, nie oznacza, że jesteś donosicielem czy skarżypytą. Pomagasz komuś, więc robisz coś dobrego! </p>
								<p>Dokuczanie to nie zabawa. Każdy, komu ktoś dokucza, czuje złość i smutek. Jeśli coś Cię smuci lub złości, porozmawiaj o tym, zamiast krzywdzić innych.</p>
							</div>
							<a class="button">DOWIEDZ SIĘ WIĘCEJ</a>
						</div>
					</div>
				</div>
			</div>

			<div class="page zobacz-filmy">
				<div class="background" data-preload="img/page-background-3.png" data-type="background"></div>
				<div class="inner">
					<h1>ZOBACZ FILMY<br/>O TYM, JAK:</h1>
					<div class="videos">
						<a data-track="watch-bullied" data-src="http://ht.cdn.turner.com/tbseurope/big/CN_PL/videos/buddy/bullied">
							<div class="thumb">
								<div class="table">
									<div class="cell">KOMUŚ DOKUCZAJĄ</div>
								</div>
							</div>
						</a><!--
						--><a data-track="watch-bully" data-src="http://ht.cdn.turner.com/tbseurope/big/CN_PL/videos/buddy/bully">
							<div class="thumb">
								<div class="table">
									<div class="cell">KTOŚ DOKUCZA</div>
								</div>
							</div>
						</a><!--
						--><a data-track="watch-observer" data-src="http://ht.cdn.turner.com/tbseurope/big/CN_PL/videos/buddy/observer">
							<div class="thumb">
								<div class="table">
									<div class="cell">KTOŚ OBSERWUJE</div>
								</div>
							</div>
						</a><!--
						--><a data-track="watch-przyjazn" data-src="http://ht.cdn.turner.com/tbseurope/big/Adops/Polish%20Anti%20Bullying%20Frienship">
							<div class="thumb">
								<div class="table">
									<div class="cell">PRZYJAŹŃ</div>
								</div>
							</div>
						</a>
					</div>
				</div>
			</div>

			<div class="page poznaj-marcina-gortata">
				<div class="background" data-preload="img/ambassadors.jpg" data-type="background"></div>
				<div class="inner">
					<h1>Poznaj Naszych Ambasadorów</h1>
					<div class="videos">
						<a data-track="watch-spot-promocyjny" data-src="http://ht.cdn.turner.com/tbseurope/big/Adops/42417_CN_Anti-Bullying_POL_Promo_v3" style="background-image:url(img/ambassador-1.jpg)">
							<div class="thumb">
								<div class="table">
									<div class="cell">Spot promocyjny</div>
								</div>
							</div>
						</a>
						<a data-track="watch-krotka-pilka" data-src="http://ht.cdn.turner.com/tbseurope/big/Adops/pol_qa_4" style="background-image:url(img/ambassador-2.jpg)">
							<div class="thumb">
								<div class="table">
									<div class="cell">Krótka piłka</div>
								</div>
							</div>
						</a>
						<a data-track="watch-making-of" data-src="http://ht.cdn.turner.com/tbseurope/big/Adops/42417_CN_Anti-Bullying_POL_%20MakingOf" style="background-image:url(img/ambassador-3.jpg)">
							<div class="thumb">
								<div class="table">
									<div class="cell">Making-of</div>
								</div>
							</div>
						</a>
						<a data-track="watch-promo-marcin-gortat" data-src="http://ht.cdn.turner.com/tbseurope/big/CN_PL/videos/buddy/APEL" style="background-image:url(img/ambassador-4.jpg)">
							<div class="thumb">
								<div class="table">
									<div class="cell">“Bądź kumplem, nie dokuczaj!” 2015</div>
								</div>
							</div>
						</a>
					</div>
				</div>
			</div>

			<div class="page poznaj-malgosie">
				<div class="background" data-preload="img/malgosie.jpg" data-type="background"></div>
				<div class="inner">
					<h1>POZNAJ MAŁGOSIĘ</h1>
					<h2>PSYCHOLOG I DZIENNIKARKA</h2>
					<ul class="double-video">
						<li>
							<div class="wide-responsive">
								<div class="inline-player">
									<video id="inline-player-2" class="video-js vjs-default-skin" controls preload="auto" width="auto" height="auto" poster="http://ht.cdn.turner.com/tbseurope/big/CN_PL/videos/buddy/OHME_VID1.jpg" data-setup="{}">
										<source src="http://ht.cdn.turner.com/tbseurope/big/CN_PL/videos/buddy/OHME_VID1.mp4" type="video/mp4">
										<source src="http://ht.cdn.turner.com/tbseurope/big/CN_PL/videos/buddy/OHME_VID1.webm" type="video/webm">
									</video>
								</div>
							</div>
						</li><!--
						--><li>
							<div class="wide-responsive">
								<div class="inline-player">
									<video id="inline-player-4" class="video-js vjs-default-skin" controls preload="auto" width="auto" height="auto" poster="http://ht.cdn.turner.com/tbseurope/big/CN_PL/videos/buddy/OHME_VID2_OK.jpg" data-setup="{}">
										<source src="http://ht.cdn.turner.com/tbseurope/big/CN_PL/videos/buddy/OHME_VID2_OK.mp4" type="video/mp4">
										<source src="http://ht.cdn.turner.com/tbseurope/big/CN_PL/videos/buddy/OHME_VID2_OK.webm" type="video/webm">
									</video>
								</div>
							</div>
						</li>
					</ul>
					<div class="arrows right"><i class="fa fa-angle-right"></i></div>
					<div class="arrows left"><i class="fa fa-angle-left"></i></div>
				</div>
			</div>

			<div class="page kodeks-kumpla">
				<div class="background" data-preload="img/page-background-2.png" data-type="background"></div>
				<div class="inner">
					<h1>KODEKS KUMPLA</h1>
					<div class="body">
						<h4>01</h4>
						<h3>Bądź swoim własnym najlepszym przyjacielem - traktuj innych tak, jak sam chciałbyś być traktowany</h3>
						<h4>02</h4>
						<h3>Bądź miły dla innych, nie osądzaj ich - każdy potrzebuje dobrego kumpla</h3>
						<h4>03</h4>
						<h3>Bądź uczciwy i godny zaufania</h3>
						<h4>04</h4>
						<h3>Bądź lojalny i wstawiaj się za innymi, jeśli tego potrzebują</h3>
						<h4>05</h4>
						<h3>Miej odwagę powiedzieć "przepraszam", jeśli popełnisz błąd</h3>
						<h4>06</h4>
						<h3>Bądź wsparciem, gdy ktoś ma zły dzień</h3>
						<h4>07</h4>
						<h3>Baw się dobrze ze swoimi kumplami i pozwól innym bawić się dobrze z Tobą!</h3>
					</div>
				</div>
			</div>

			<div class="page porady">
				<div class="background" data-preload="img/page-background.png" data-type="background"></div>
				<div class="inner">
				<?php /*
					<h1>ZAGRAJ W KOSZA Z MARCINEM GORTATEM!</h1>
					<h2>porady rusza już w najbliższą środę.</h2>
					<div class="body">
						<p>Odwiedź nas 11 lutego i zawalcz o niesamowite nagrody!</p>
					</div>*/ ?>
					<a href="porady_dla_dzieci.php" target="_blank" class="yellow" data-scroller="porady">
						<img src="img/blank.gif" data-preload="img/for-kids.png" data-type="src" alt="Porady dla dzieci" />
						<h4>Porady dla dzieci</h4>
						<div class="button">kliknij tutaj</div>
					</a>
					
					<a href="porady_dla_rodzicow.php" target="_blank" class="yellow" data-scroller="porady">
						<img src="img/blank.gif" data-preload="img/for-parents.png" data-type="src" alt="Porady dla rodziców" />
						<h4>Porady dla rodziców</h4>
						<div class="button">kliknij tutaj</div>
					</a>
					
					<div class="block">
						<img src="img/blank.gif" data-preload="img/for-teachers.png" data-type="src" alt="Dla nauczycieli" />
						<h4>PORADY DLA NAUCZYCIELI</h4>
						<p>
							<strong>WSKAZÓWKI DLA NAUCZYCIELI</strong> <a href="pdf/Wskazowki_dla_nauczycieli.pdf" target="_blank" class="pink">POBIERZ</a>
						</p>
						<p>
							<strong>SCENARIUSZE LEKCJI</strong><br/>
							Scenariusz dla klas I-III: <a href="pdf/Scenariusz_dla_klas_I-III.pdf" target="_blank" class="pink">POBIERZ</a><br/>
							Scenariusz dla klas IV-VI: <a href="pdf/Scenariusz_dla_klas_IV-VI.pdf" target="_blank" class="pink">POBIERZ</a>
						</p>
					</div>
				</div>
			</div>

			<div class="page partnerzy">
				<div class="background" data-preload="img/white-90.png" data-type="background"></div>
				<div class="inner">
					<h1>Partnerzy</h1>
					<div class="body">
						<div class="logo-set">
							<h3>Patronat honorowy</h3>
							<a href="http://brpd.gov.pl/" target="_blank"><img src="img/logo-rzecznikprawdziecka.png" alt="" /></a>
						</div>
						<div class="logo-set">
							<h3>Partnerzy</h3>
							<a href="http://fdn.pl/" target="_blank"><img src="img/logo-fundacja.png" alt="" /></a>
							<a href="http://www.ibe.edu.pl/pl/" target="_blank"><img src="img/logo-ibe.png" alt="" /></a>
						</div>
						<div class="logo-set-full">
							<h3>Patroni medialni</h3>
							<a href="http://dzieci.pl/" target="_blank"><img src="img/logo-wp.png" alt="" /></a>
							<a href="http://parenting.pl/" target="_blank"><img src="img/logo-parenting.png" alt="" /></a>
							<a href="http://czasdzieci.pl/" target="_blank"><img src="img/logo-czas.png" alt="" /></a>
							<a href="http://edunews.pl/" target="_blank"><img src="img/logo-edu.png" alt="" /></a>
							<a href="http://ohme.pl/" target="_blank"><img src="img/logo-ohme.png" alt="" /></a>
						</div>
					</div>
				</div>
			</div>

			<div class="page znajdz-pomoc">
				<div class="background" data-preload="img/page-background.png" data-type="background"></div>
				<div class="inner">
					<h1>DOWIEDZ SIĘ WIĘCEJ <br />I ZNAJDŹ POMOC</h1>
					<p>Chcesz dowiedzieć się więcej o dokuczaniu, potrzebujesz pomocy, wsparcia lub rady? Dzwoń pod numery:</p>
					<p><strong class="yellow">116 111</strong> – telefon zaufania dla dzieci i młodzieży<br/>
					<strong class="yellow">800 100 100</strong> - telefonu dla rodziców i nauczycieli<br/>
					lub napisz na <a href="http://www.116111.pl/napisz" target="_blank">www.116111.pl/napisz</a><br/>
					Tu znajdziesz kogoś, kto Cię zrozumie, wysłucha i będzie mógł Ci pomóc.</p>
				</div>
			</div>
		</div>

		<div class="mobile-nav">
			<a href="#/" class="active">Home</a><!--
			--><a href="#/czym-jest-dokuczanie">CZYM JEST DOKUCZANIE?</a><!--
			--><a href="#/co-mozesz-zrobic">CO MOŻESZ ZROBIĆ?</a><!--
			--><a href="#/zobacz-filmy">ZOBACZ FILMY</a><!--
			--><a href="#/poznaj-marcina-gortata">Poznaj Naszych Ambasadorów</a><!--
			--><a href="#/poznaj-malgosie">POZNAJ MAŁGOSIĘ</a><!--
			--><a href="#/kodeks-kumpla">KODEKS KUMPLA</a><!--
			--><a href="#/porady">PORADY</a><!--
			--><a href="#/partnerzy">PARTNERZY</a><!--
			--><a href="#/znajdz-pomoc">ZNAJDŹ POMOC</a>

			<div class="close"><i class="fa fa-times"></i></div>
		</div>

		<div class="footer">
			<div class="links">
				<div class=""><a href="http://www.cartoonnetwork.pl/warunki-korzystania" target="_blank">Regulamin</a> <a href="http://www.cartoonnetwork.pl/polityka-prywatno%C5%9Bci" target="_blank">Polityka Prywatności</a> <a href="http://www.cartoonnetwork.pl/cookies-policy" target="_blank">Polityka dotycząca plików cookie</a></div>
			</div>
			<span class="open">KWESTIE PRAWNE</span>
			<span class="copy">Jeśli korzystasz z niniejszej strony, akceptujesz postanowienia Regulaminu. Znak towarowy i &copy; 2015 Cartoon Network. A Time Warner Company. Wszelkie prawa zastrzeżone. CartoonNetwork.pl jest częścią sieci cyfrowej Turner Sports and Entertainment Digital Network.</span>
			<a href="#/partnerzy" class="childline"><img src="img/blank.gif" data-type="src" data-preload="img/footer-logos.gif?v=2" alt="" /></a>
			<a href="#/partnerzy" class="childline-sml"><img src="img/blank.gif" data-type="src" data-preload="img/footer-logos-sml.gif?v=2" alt="" /></a>
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