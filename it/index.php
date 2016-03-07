<?php
	ob_start('ob_gzhandler');
	header('X-UA-Compatible: IE=edge,chrome=1');
	error_reporting(E_ALL);
	ini_set('display_errors', 1);
	
	date_default_timezone_set('Europe/Rome');

	if (!isset($_server)) $_server = $_SERVER['HTTP_HOST'];

	$_version = '1.1.0';
?>
<!DOCTYPE html>
<!--[if lt IE 7]>      <html class="no-js lt-ie9 lt-ie8 lt-ie7"> <![endif]-->
<!--[if IE 7]>         <html class="no-js lt-ie9 lt-ie8"> <![endif]-->
<!--[if IE 8]>         <html class="no-js lt-ie9"> <![endif]-->
<!--[if gt IE 8]><!--> <html class="no-js"> <!--<![endif]-->
	<head>
		<meta charset="utf-8">
		<title>Cartoon Network / Stop Bullismo / Parla</title>
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
			<a href="http://www.cartoonnetwork.it" target="_blank"><div class="header-logo"></div></a>

			<nav class="main-nav">
				<a href="#/" class="intro"></a>
				<a href="#/cos-e-il-bullismo">Cos'è Il<br/>Bullismo?</a>
				<a href="#/cosa-posso-fare">COSA POSSO<br/>FARE?</a>
				<a href="#/guarda-i-video">GUARDA I<br/>VIDEO</a>
				<a href="#/il-codice-dellamicizia">IL CODICE<br/>DELL'AMICIZIA</a>
				<a href="#/partner">Partner</a>
				<a href="#/chiedi-aiuto">CHIEDI<br/>AIUTO</a>
			</nav>
		</div>

		<a class="audio-control noselect"><i class="fa fa-volume-up"></i></a>
		<a class="mobile-nav-btn noselect"><i class="fa fa-bars"></i></a>

		<div class="scroll"></div>

		<a href="http://www.cartoonnetwork.co.uk" target="_blank"><img src="img/buddy-network.png" alt="Buddy Network" class="logo" /></a>

		<div class="backgrounds">
			<div class="background">
<?php
	$cdn = 'http://ht.cdn.turner.com/tbseurope/big/CN_IT/videos/parla/';
	$videos = array('bullo', 'vittima', 'osservatore');
	$vid = $cdn.$videos[array_rand($videos)];
?>
				<video loop poster="<?php echo $vid; ?>.jpg" id="background-video">
					<source src="<?php echo $vid; ?>.webm" type="video/webm">
					<source src="<?php echo $vid; ?>.mp4" type="video/mp4">
				</video>
			</div>
		</div>

		<div class="scroller"></div>

		<div class="pages">
			<div class="page intro"></div>

			<div class="page cos-e-il-bullismo">
				<div class="background" data-preload="img/page-background.png" data-type="background"></div>
				<div class="inner">
					<h1>COS'È IL BULLISMO?</h1>
					<p>"Il bullismo è ciò che avviene quando qualcuno ferisce o minaccia  ripetutamente un’altra persona di proposito. Il bullismo assume varie forme più o meno subdole. Il bullismo può essere commesso di persona, ma anche tramite parole scritte, on-line, sui cellulari. Può succedere ovunque: a scuola,  sull’autobus, a casa, per strada... Il bullismo non è un normale rito di passaggio, produce serie conseguenze che segnano  profondamente chi lo subisce.</p>
					<p>Il bullismo NON è accettabile e va fermato.</p>
				</div>
			</div>

			<div class="page cosa-posso-fare">
				<div class="background" data-preload="img/page-background-2.png" data-type="background"></div>
				<div class="inner">
					<h1>COSA POSSO FARE?</h1>
					<div class="body">
						<div class="panel">
							<div class="icon"><img src="img/blank.gif" data-type="src" data-preload="img/what-icon-1.png" alt="" /></div>
							<h2>NON SOFFRIRE IN SILENZIO, PARLA</h2>
							<div class="copy">
								<p>Racconta tutto e subito a qualcuno di cui ti fidi: un amico, un insegnante, un familiare. Ricorda che non sei mai solo, chi ti vuole bene saprà come aiutarti.</p>
							</div>
							<a class="button">LEGGI TUTTO</a>
						</div>
						<div class="panel">
							<div class="icon"><img src="img/blank.gif" data-type="src" data-preload="img/what-icon-2.png" alt="" /></div>
							<h2>DIVENTA AMICO DI CHI NE HA BISOGNO</h2>
							<div class="copy">
								<p>Qualcuno che viene infastidito o che infastidisce gli altri ha bisogno di un amico. Cerca di essere sempre amichevole con tutti.</p>
							</div>
							<a class="button">LEGGI TUTTO</a>
						</div>
						<div class="panel">
							<div class="icon"><img src="img/blank.gif" data-type="src" data-preload="img/what-icon-3.png" alt="" /></div>
							<h2>CORAGGIO, FAI SENTIRE LA TUA VOCE</h2>
							<div class="copy">
								<p>Abbi fiducia in te stesso e incoraggia anche i tuoi amici ad opporsi al bullismo. Non importa se accade a te o agli altri, l'importante è non restare in silenzio. Se parli, non significa che sei uno spione. Anzi, fai bene perché aiuti gli altri.</p>
								<p>Il bullismo non è una cosa da ridere. E se ti senti turbato o sei arrabbiato, parlane invece di prendertela con qualcuno. Perché parlare è l'unica arma per sconfiggere il bullismo.</p>
							</div>
							<a class="button">LEGGI TUTTO</a>
						</div>
					</div>
				</div>
			</div>

			<div class="page guarda-i-video">
				<div class="background" data-preload="img/page-background-3.png" data-type="background"></div>
				<div class="inner">
					<h1>GUARDA I VIDEO</h1>
					<div class="videos">
						<a data-track="watch-bullied" data-src="<?php echo $cdn; ?>vittima">
							<div class="thumb">
								<div class="table">
									<div class="cell">Stop Bullismo - Vittima</div>
								</div>
							</div>
						</a>
						<a data-track="watch-bully" data-src="<?php echo $cdn; ?>bullo">
							<div class="thumb">
								<div class="table">
									<div class="cell">Stop Bullismo - Bullo</div>
								</div>
							</div>
						</a>
						<a data-track="watch-observer" data-src="<?php echo $cdn; ?>osservatore">
							<div class="thumb">
								<div class="table">
									<div class="cell">Stop Bullismo - Osservatore</div>
								</div>
							</div>
						</a>
					</div>
				</div>
			</div>

			<div class="page il-codice-dellamicizia">
				<div class="background" data-preload="img/page-background-2.png" data-type="background"></div>
				<div class="inner">
					<h1>IL CODICE DELL'AMICIZIA</h1>
					<div class="body">
						<h4>01</h4>
						<h3>Tratta gli altri come vuoi che gli altri trattino te. </h3>
						<h4>02</h4>
						<h3>Non giudicare gli altri, rivolgiti a loro con gentilezza e rispetto.</h3>
						<h4>03</h4>
						<h3>Cerca sempre di essere onesto e affidabile. </h3>
						<h4>04</h4>
						<h3>Ricordati di essere leale e prendi le difese di chi è in difficoltà.</h3>
						<h4>05</h4>
						<h3>Se ti accorgi di aver fatto del male a qualcuno, chiedi scusa e cerca di rimediare.</h3>
						<h4>06</h4>
						<h3>Aiuta chi ne ha bisogno e chi è triste.</h3>
						<h4>07</h4>
						<h3>Non smettere mai di cercare nuovi amici. Chi ha tanti amici non si sente mai solo. </h3>
					</div>
				</div>
			</div>

			<div class="page partner">
				<div class="background" data-preload="img/white-90.png" data-type="background"></div>
				<div class="inner">
					<h1>Partner</h1>
					<div class="body">
						<a href="http://www.azzurro.it/" target="_blank"><img src="img/blank.gif" data-type="src" data-preload="img/partner-azzurro.png" alt="Telefono Azzurro" /></a>&nbsp;
						<a href="http://www.amicocharly.it/" target="_blank"><img src="img/blank.gif" data-type="src" data-preload="img/logo-charly.png" alt="Amico Charly" /></a>
					</div>
				</div>
			</div>

			<div class="page chiedi-aiuto">
				<div class="background" data-preload="img/page-background.png" data-type="background"></div>
				<div class="inner">
					<h1>PER APPROFONIDERE<br/>E CHIEDERE AIUTO</h1>
					<p>Per avere maggiori informazioni sul bullismo o se hai bisogno di un aiuto immediato, supporto o consigli visita il sito <a href="http://www.azzurro.it" target="_blank">www.azzurro.it</a>, chiama il Telefono Azzurro al numero <span class="yellow">1.96.96</span> o contattaci a questo indirizzo <a href="http://www.azzurro.it/it/cosa-facciamo/chat" target="_blank">www.azzurro.it/it/cosa-facciamo/chat</a> per parlare con qualcuno che ti potrà ascoltare e aiutare.</p>
					<p><img src="img/contact-azzurro.png" alt="1.96.96" /></p>
				</div>
			</div>
		</div>

		<div class="mobile-nav">
			<a href="#/" class="active">Home</a><!--
			--><a href="#/cos-e-il-bullismo">Cos'è Il Bullismo?</a><!--
			--><a href="#/cosa-posso-fare">COSA POSSO FARE?</a><!--
			--><a href="#/guarda-i-video">GUARDA I VIDEO</a><!--
			--><a href="#/il-codice-dellamicizia">IL CODICE DELL'AMICIZIA</a><!--
			--><a href="#/partner">Partner</a><!--
			--><a href="#/chiedi-aiuto">CHIEDI AIUTO</a>
			<div class="close"><i class="fa fa-times"></i></div>
		</div>

		<div class="footer">
			<div class="links">
				<div class=""><a href="http://www.cartoonnetwork.it/condizioni-di-utilizzo-del-sito-e-dei-servizi-di-cartoon-network" target="_blank">Termini di utilizzo</a> <a href="http://www.cartoonnetwork.it/privacy-policy-sito-community-e-servizi-cartoon-network" target="_blank">Informativa sulla privacy</a> <a href="http://www.cartoonnetwork.it/cookies-policy" target="_blank">Informativa sui cookie</a></div>
			</div>
			<span class="open">INFO LEGALI</span>
			<span class="copy">L'uso di questa applicazione implica l'accettazione dei Termini di Utilizzo. TM &amp; &copy; <?php echo date('Y'); ?> Cartoon Network. Società del gruppo Time Warner. Tutti i diritti riservati. CartoonNetwork.it fa parte del Turner Sport and Entertainment Digital Network.</span>
			<a href="http://www.azzurro.it/" target="_blank" class="childline"><img src="img/blank.gif" data-type="src" data-preload="img/footer-azzurro.png" alt="" /></a>
			<a href="http://www.azzurro.it/" target="_blank" class="childline-sml"><img src="img/blank.gif" data-type="src" data-preload="img/footer-azzurro-sml.png" alt="" /></a>
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