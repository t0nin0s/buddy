<?php
	ob_start('ob_gzhandler');
	header('X-UA-Compatible: IE=edge,chrome=1');
	error_reporting(E_ALL);
	ini_set('display_errors', 1);
	
	date_default_timezone_set('Africa/Johannesburg');

	if (!isset($_server)) $_server = $_SERVER['HTTP_HOST'];

	$_version = '1.0.13';
?>
<!DOCTYPE html>
<!--[if lt IE 7]>      <html class="no-js lt-ie9 lt-ie8 lt-ie7"> <![endif]-->
<!--[if IE 7]>         <html class="no-js lt-ie9 lt-ie8"> <![endif]-->
<!--[if IE 8]>         <html class="no-js lt-ie9"> <![endif]-->
<!--[if gt IE 8]><!--> <html class="no-js"> <!--<![endif]-->
	<head>
		<meta charset="utf-8">
		<title>Cartoon Network / Buddy Network / Wees een maatje geen pestkop</title>
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
			<a href="http://cartoonnetwork.nl" target="_blank"><div class="header-logo"></div></a>

			<nav class="main-nav">
				<a href="#/" class="intro"></a>
				<a href="#/wat-is-pesten">WAT IS<br/>PESTEN?</a>
				<a href="#/wat-kan-ik-doen">WAT KAN<br/>IK DOEN?</a>
				<a href="#/bekijk-videos">BEKIJK<br/>VIDEO'S</a>
				<a href="#/ambassadeurs">AMBASSADEURS</a>
				<a href="#/ontmoet-arie-en-tine">ONTMOET ARIE<br/>EN TINE</a>
				<a href="#/maatjes-code">MAATJES<br/>CODE</a>
				<a href="#/partners">Partners</a>
				<a href="#/vraag-om-hulp">VRAAG<br/>OM HULP</a>
			</nav>
		</div>

		<a class="audio-control noselect"><i class="fa fa-volume-up"></i></a>
		<a class="mobile-nav-btn noselect"><i class="fa fa-bars"></i></a>

		<div class="scroll"></div>

		<a href="http://cartoonnetwork.nl" target="_blank"><img src="img/buddy-network.png" alt="Buddy Network" class="logo" /></a>

		<div class="backgrounds">
			<div class="background">
<?php
	$videos = array('pester', 'mikpunt', 'toeschouwer');
	$vid = $videos[array_rand($videos)];
?>
				<video loop poster="http://ht.cdn.turner.com/tbseurope/big/CN_NL/videos/buddy/<?php echo $vid; ?>.jpg" id="background-video">
					<source src="http://ht.cdn.turner.com/tbseurope/big/CN_NL/videos/buddy/<?php echo $vid; ?>.webm" type="video/webm">
					<source src="http://ht.cdn.turner.com/tbseurope/big/CN_NL/videos/buddy/<?php echo $vid; ?>.mp4" type="video/mp4">
				</video>
			</div>
		</div>

		<div class="scroller"></div>

		<div class="pages">
			<div class="page intro"></div>

			<div class="page wat-is-pesten">
				<div class="background" data-preload="img/page-background.png" data-type="background"></div>
				<div class="inner">
					<h1>Wat is pesten?</h1>
					<p>Pesten gebeurt wanneer mensen voortdurend gemeen zijn tegen iemand of iemand met opzet pijn doen. Iedereen van elke leeftijd kan gepest worden. Het kan op school, in de speeltuin, thuis en online voorkomen en bestaan uit iemand die je een duw geeft, die je slaat, die je plaagt, die dingen van je afpakt, die je uitscheldt, die je met opzet negeert, je buiten spel zet of die de pik op je heeft omdat je anders bent.</p>
					<p>Pesten is niet oké. Als je gepest wordt, is dat niet jouw fout.</p>
				</div>
			</div>

			<div class="page wat-kan-ik-doen">
				<div class="background" data-preload="img/page-background-2.png" data-type="background"></div>
				<div class="inner">
					<h1>Wat kan ik doen?</h1>
					<div class="body">
						<div class="panel">
							<div class="icon"><img src="img/blank.gif" data-type="src" data-preload="img/what-icon-1.png" alt="" /></div>
							<h2>VERTEL IEMAND WAT ER AAN DE HAND IS</h2>
							<div class="copy">
								<p>Je moet erover praten als je gepest wordt. Vertel het meteen aan iemand die je vertrouwt. Dat kan een vriend zijn, een leraar, een mentor of een betrouwbare volwassene. Je bent niet alleen en het is belangrijk om iemand te laten weten dat je gepest wordt of ziet dat anderen gepest worden.</p>
							</div>
							<a class="button">LEES VERDER</a>
						</div>
						<div class="panel">
							<div class="icon"><img src="img/blank.gif" data-type="src" data-preload="img/what-icon-2.png" alt="" /></div>
							<h2>WEES AARDIG</h2>
							<div class="copy">
								<p>Iemand die gepest wordt, heeft een vriend en steun nodig en iemand die anderen pest ook. Probeer tegen iedereen aardig te zijn.</p>
							</div>
							<a class="button">LEES VERDER</a>
						</div>
						<div class="panel">
							<div class="icon"><img src="img/blank.gif" data-type="src" data-preload="img/what-icon-3.png" alt="" /></div>
							<h2>DURF EROVER TE PRATEN</h2>
							<div class="copy">
								<p>Wees zeker van jezelf en moedig je vrienden aan om iets te doen tegen pesten. Probeer er een eind aan te maken, of het nou om jezelf gaat of een ander overkomt. Als je erover praat, ben je geen verrader of klikspaan. Je doet iets goeds, omdat je iemand helpt. Ook als je denkt dat pesten maar een grapje is, kunnen kinderen die gepest worden bang en overstuur zijn. Als je van streek of boos bent over iets, praat er dan over en maak een ander er niet de dupe van.</p>
							</div>
							<a class="button">LEES VERDER</a>
						</div>
					</div>
				</div>
			</div>

			<div class="page bekijk-videos">
				<div class="background" data-preload="img/page-background-3.png" data-type="background"></div>
				<div class="inner">
					<h1>BEKIJK VIDEO'S</h1>
					<div class="videos">
						<a data-track="watch-bullied" data-src="http://ht.cdn.turner.com/tbseurope/big/CN_NL/videos/buddy/mikpunt">
							<div class="thumb">
								<div class="table">
									<div class="cell">Bekijk het Mikpunt</div>
								</div>
							</div>
						</a>
						<a data-track="watch-bully" data-src="http://ht.cdn.turner.com/tbseurope/big/CN_NL/videos/buddy/pester">
							<div class="thumb">
								<div class="table">
									<div class="cell">Bekijk de Pester</div>
								</div>
							</div>
						</a>
						<a data-track="watch-observer" data-src="http://ht.cdn.turner.com/tbseurope/big/CN_NL/videos/buddy/toeschouwer">
							<div class="thumb">
								<div class="table">
									<div class="cell">Bekijk de Toeschouwer</div>
								</div>
							</div>
						</a>
						<a data-track="watch-buddy-training" data-src="http://ht.cdn.turner.com/tbseurope/big/CN_NL/videos/buddy/buddy-traning">
							<div class="thumb">
								<div class="table">
									<div class="cell">Bekijk de Buddy Training</div>
								</div>
							</div>
						</a>
					</div>
				</div>
			</div>

			<div class="page ambassadeurs">
				<div class="background" data-preload="img/page-background-2.png" data-type="background"></div>
				<div class="inner">
					<h1>AMBASSADEURS</h1>
					<div class="wide-responsive">
						<div class="inline-player">
							<video id="inline-player-1" class="video-js vjs-default-skin" controls preload="auto" width="auto" height="auto" data-setup="{}">
								<source src="http://ht.cdn.turner.com/tbseurope/big/CN_NL/videos/buddy/20150202_cn_tvc_anti-bullying.mp4.mp4" type="video/mp4">
								<source src="ht.cdn.turner.com/tbseurope/big/CN_NL/videos/buddy/20150202_cn_tvc_anti-bullying.webmhd.webm" type="video/webm">
							</video>
						</div>
					</div>
					<?php /*<ul class="double-video">
						<li>
							<div class="wide-responsive">
								<div class="inline-player">
									<video id="inline-player-1" class="video-js vjs-default-skin" controls preload="auto" width="auto" height="auto" poster="" data-setup="{}">
										<source src="http://ht.cdn.turner.com/tbseurope/big/CN_UK/videos/anti-bullying/celebrity.mp4" type="video/mp4">
										<source src="http://ht.cdn.turner.com/tbseurope/big/CN_UK/videos/anti-bullying/celebrity.webm" type="video/webm">
									</video>
								</div>
							</div>
						</li><!--
						--><li>
							<div class="wide-responsive">
								<div class="inline-player">
									<video id="inline-player-3" class="video-js vjs-default-skin" controls preload="auto" width="auto" height="auto" poster="" data-setup="{}">
										<source src="http://ht.cdn.turner.com/tbseurope/big/CN_UK/videos/anti-bullying/tinie_qa.mp4" type="video/mp4">
										<source src="http://ht.cdn.turner.com/tbseurope/big/CN_UK/videos/anti-bullying/tinie_qa.webm" type="video/webm">
									</video>
								</div>
							</div>
						</li>
					</ul>
					<div class="arrows right"><i class="fa fa-angle-right"></i></div>
					<div class="arrows left"><i class="fa fa-angle-left"></i></div>*/ ?>
				</div>
			</div>

			<div class="page ontmoet-arie-en-tine">
				<div class="background" data-preload="img/arie.jpg" data-type="background" data-alt="img/tine.jpg"></div>
				<div class="inner">
					<h1>ONTMOET ARIE<br/>EN TINE</h1>
					<!--<h2>Childline Counsellor</h2>-->
					<ul class="double-video">
						<li>
							<div class="text-block">
								<h2>Tine Embrechts</h2>
								<p>Tine Embrechts is een Vlaamse televisie- en theateractrice. Je kent haar wellicht van haar leuke rollen in programma’s als Quiz Me Quick, Click - ID en Het Peulengaleis en natuurlijk van haar geslaagde imitaties in Tegen De Sterren Op! Ze speelde ook al in enkele films mee, zoals Labyrinthus, Despicable Me 2 en Brasserie Romantiek. Bovendien mocht Tine in 2013 op het gala van de Vlaamse Televisiesterren de award voor Beste Actrice in ontvangst nemen, een hele eer!</p>
							</div>

							<?php /*<div class="wide-responsive">
								<div class="inline-player">
									<video id="inline-player-2" class="video-js vjs-default-skin" controls preload="auto" width="auto" height="auto" poster="" data-setup="{}">
										<source src="http://ht.cdn.turner.com/tbseurope/big/CN_UK/videos/anti-bullying/anna.mp4" type="video/mp4">
										<source src="http://ht.cdn.turner.com/tbseurope/big/CN_UK/videos/anti-bullying/anna.webm" type="video/webm">
									</video>
								</div>
							</div>*/ ?>
						</li><!--
						--><li>
							<div class="text-block">
								<h2>Arie Koomen</h2>
								<p>Arie Koomen (1968) is een stand-up comedian en grafisch vormgever. Samen met Silvester Zwaneveld vormde hij het komische duo Arie & Silvester dat zich richtte op improvisatie. Verder was hij te zien in de TV-show De Lama’s en comedy programma’s zoals Tequila en Doe Maar Normaal. Hij was ook het gezicht van een veelbesproken reclamespot voor een grote electronicaketen. Tegenwoordig treedt hij op samen met Edo Brunner.</p>
							</div>

							<?php /*<div class="wide-responsive">
								<div class="inline-player">
									<video id="inline-player-4" class="video-js vjs-default-skin" controls preload="auto" width="auto" height="auto" poster="" data-setup="{}">
										<source src="http://ht.cdn.turner.com/tbseurope/big/CN_UK/videos/anti-bullying/anna_qa.mp4" type="video/mp4">
										<source src="http://ht.cdn.turner.com/tbseurope/big/CN_UK/videos/anti-bullying/anna_qa.webm" type="video/webm">
									</video>
								</div>
							</div>*/ ?>
						</li>
					</ul>
					<div class="arrows right"><i class="fa fa-angle-right"></i></div>
					<div class="arrows left"><i class="fa fa-angle-left"></i></div>
				</div>
			</div>

			<div class="page maatjes-code">
				<div class="background" data-preload="img/page-background-2.png" data-type="background"></div>
				<div class="inner">
					<h1>MAATJES CODE</h1>
					<div class="body">
						<h4>01</h4>
						<h3>Gedraag je als je eigen beste vriend - behandel anderen zoals jij behandeld wilt worden</h3>
						<h4>02</h4>
						<h3>Wees aardig en zorgzaam - veroordeel anderen niet, iedereen heeft een vriend nodig</h3>
						<h4>03</h4>
						<h3>Wees eerlijk en betrouwbaar</h3>
						<h4>04</h4>
						<h3>Wees loyaal en kom voor anderen op als ze dat nodig hebben</h3>
						<h4>05</h4>
						<h3>Durf 'Het spijt me' te zeggen als je een fout hebt gemaakt</h3>
						<h4>06</h4>
						<h3>Steun een ander als die een slechte dag heeft</h3>
						<h4>07</h4>
						<h3>Maak plezier met je vrienden en nodig anderen uit om ook mee te doen!</h3>
					</div>
				</div>
			</div>

			<div class="page partners">
				<div class="background" data-preload="img/white-90.png" data-type="background"></div>
				<div class="inner">
					<h1>Partners</h1>
					<div class="body">
						<a href="http://www.kindertelefoon.nl/" target="_blank"><img src="img/blank.gif" data-type="src" data-preload="img/logo-dekindertelefoon.png" alt="kindertelefoon" /></a>
						<a href="http://www.awel.be/" target="_blank"><img src="img/blank.gif" data-type="src" data-preload="img/logo-awel.png" alt="Awel" /></a>
					</div>
				</div>
			</div>

			<div class="page vraag-om-hulp">
				<div class="background" data-preload="img/page-background.png" data-type="background"></div>
				<div class="inner">
					<h1>KOM MEER TE<br/>WETEN EN ZOEK HULP</h1>
					<p>Voor meer informatie over pesten of als je direct hulp, steun of advies nodig hebt, kijk in Nederland op de website van De Kindertelefoon, <a href="http://www.dekindertelefoon.nl" target="_blank">www.dekindertelefoon.nl</a>, of bel naar <span class="pink">0800 0432</span> om met iemand te praten die er voor je is, om naar je te luisteren en je te helpen. In Vlaanderen kan je terecht bij Awel op <a href="http://www.awel.be" target="_blank">www.awel.be</a> of door te bellen naar <span class="pink">102</span>.</p>
				</div>
			</div>
		</div>

		<div class="mobile-nav">
			<a href="#/" class="active">Home</a><!--
			--><a href="#/wat-is-pesten">WAT IS PESTEN?</a><!--
			--><a href="#/wat-kan-ik-doen">WAT KAN IK DOEN?</a><!--
			--><a href="#/bekijk-videos">BEKIJK VIDEO'S</a><!--
			--><a href="#/ambassadeurs">AMBASSADEURS</a><!--
			--><a href="#/ontmoet-arie-en-tine">ONTMOET ARIE EN TINE</a><!--
			--><a href="#/maatjes-code">MAATJES CODE</a><!--
			--><a href="#/partners">Partners</a><!--
			--><a href="#/vraag-om-hulp">VRAAG OM HULP</a>

			<div class="close"><i class="fa fa-times"></i></div>
		</div>

		<div class="footer">
			<div class="links">
				<div class=""><a href="http://www.cartoonnetwork.nl/gebruiksvoorwaarden" target="_blank">Gebruiksvoorwaarden</a> <a href="http://www.cartoonnetwork.nl/privacybeleid" target="_blank">Privacybeleid</a> <a href="http://www.cartoonnetwork.nl/cookies-policy" target="_blank">Cookiebeleid</a></div>
			</div>
			<span class="open">WETTELIJKE BEPALINGEN</span>
			<span class="copy">Door deze website te bezoeken, ga je akkoord met onze gebruiksvoorwaarden. TM &amp; &copy; 2015 Cartoon Network. Een Time Warner Company. Alle rechten voorbehouden. CartoonNetwork.nl is een onderdeel van Turner Sports and Entertainment Digital Network.</span>
			<?php /*<a href="http://www.kindertelefoon.nl/" target="_blank" class="childline"><img src="img/blank.gif" data-type="src" data-preload="img/footer-dekindertelefoon.png" alt="" /></a>
			<a href="http://www.kindertelefoon.nl/" target="_blank" class="childline-sml"><img src="img/blank.gif" data-type="src" data-preload="img/footer-dekindertelefoon-sml.png" alt="" /></a>*/ ?>
			<div class="logos">
				<img src="img/blank.gif" data-type="src" data-preload="img/footer.png" alt="" usemap="#bigmap" />
				<map name="bigmap">
					<area shape="rect" coords="0,0,173,120" href="http://www.kindertelefoon.nl/" target="_blank" alt="kindertelefoon">
					<area shape="rect" coords="192,0,312,120" href="http://www.awel.be/" target="_blank" alt="awel">
				</map>
			</div>
			<div class="logos-sml">
				<img src="img/blank.gif" data-type="src" data-preload="img/footer-sml.png" alt="" usemap="#smallmap" />
				<map name="smallmap">
					<area shape="rect" coords="0,0,116,80" href="http://www.kindertelefoon.nl/" target="_blank" alt="kindertelefoon">
					<area shape="rect" coords="135,0,215,80" href="http://www.awel.be/" target="_blank" alt="awel">
				</map>
			</div>
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