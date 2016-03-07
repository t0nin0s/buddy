<?php
	ob_start('ob_gzhandler');
	header('X-UA-Compatible: IE=edge,chrome=1');
	error_reporting(E_ALL);
	ini_set('display_errors', 1);
	
	date_default_timezone_set('Africa/Johannesburg');

	if (!isset($_server)) $_server = $_SERVER['HTTP_HOST'];

	$_version = '1.0.5';
?>
<!DOCTYPE html>
<!--[if lt IE 7]>      <html class="no-js lt-ie9 lt-ie8 lt-ie7"> <![endif]-->
<!--[if IE 7]>         <html class="no-js lt-ie9 lt-ie8"> <![endif]-->
<!--[if IE 8]>         <html class="no-js lt-ie9"> <![endif]-->
<!--[if gt IE 8]><!--> <html class="no-js"> <!--<![endif]-->
	<head>
		<meta charset="utf-8">
		<title>Cartoon Network / Clubul prieteniei / Fii prietenos</title>
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
			<a href="http://www.cartoonnetwork.ro/" target="_blank"><div class="header-logo"></div></a>

			<nav class="main-nav">
				<a href="#/" class="intro"></a>
				<a href="#/ce-este-hartuirea">CE ESTE<br/>HĂRŢUIREA?</a>
				<a href="#/ce-pot-face">CE POT<br/>FACE?</a>
				<a href="#/urmareste-videoclipuri">URMĂREŞTE<br/>VIDEOCLIPURI</a>
				<a href="#/inna" class="one">INNA</a>
				<a href="#/telefonul-copilului">TELEFONUL<br/>COPILULUI</a>
				<a href="#/codul-prieteniei">CODUL<br/>PRIETENIEI</a>
				<a href="#/parteneri" class="one">PARTENERI</a>
				<a href="#/primeste-ajutor">PRIMEŞTE<br/>AJUTOR</a>
			</nav>
		</div>

		<a class="audio-control noselect"><i class="fa fa-volume-up"></i></a>
		<a class="mobile-nav-btn noselect"><i class="fa fa-bars"></i></a>

		<div class="scroll"></div>

		<a href="http://www.cartoonnetwork.ro/" target="_blank"><img src="img/buddy-network.png" alt="Buddy Network" class="logo" /></a>

		<div class="backgrounds">
			<div class="background">
<?php
	$videos = array('Bully_ROM%2016x9', 'Bullied_ROM 16x9', 'Observer_ROM 16x9');
	$vid = $videos[array_rand($videos)];
?>
				<video loop id="background-video">
					<source src="http://ht.cdn.turner.com/tbseurope/big/CN_RO/videos/buddy/<?php echo $vid; ?>.webmhd.webm" type="video/webm">
					<source src="http://ht.cdn.turner.com/tbseurope/big/CN_RO/videos/buddy/<?php echo $vid; ?>.mp4.mp4" type="video/mp4">
				</video>
			</div>
		</div>

		<div class="scroller"></div>

		<div class="pages">
			<div class="page intro"></div>

			<div class="page ce-este-hartuirea">
				<div class="background" data-preload="img/page-background.png" data-type="background"></div>
				<div class="inner">
					<h1>CE ESTE HĂRŢUIREA?</h1>
					<p>Hărţuirea este atunci când o persoană se poartă urât în repetate rânduri cu o altă persoană sau o face dinadins să sufere. Oricine poate fi victima hărţuirii, indiferent de vârstă. Ea poate avea loc la şcoală, acasă sau online şi poate însemna că cineva te împinge, te loveşte, te tachinează, îţi ia lucrurile, îţi dă porecle, te ignoră intenţionat sau se ia de tine pentru că eşti altfel.</p>
					<p>Hărţuirea nu este acceptabilă. Dacă eşti hărţuit, nu este vina ta.</p>
				</div>
			</div>

			<div class="page ce-pot-face">
				<div class="background" data-preload="img/page-background-2.png" data-type="background"></div>
				<div class="inner">
					<h1>CE POT FACE?</h1>
					<div class="body">
						<div class="panel">
							<div class="icon"><img src="img/blank.gif" data-type="src" data-preload="img/what-icon-1.png" alt="" /></div>
							<h2>SPUNE CUIVA CE SE ÎNTÂMPLĂ</h2>
							<div class="copy">
								<p>Nimeni nu trebuie să sufere vreodată în tăcere din cauza hărţuirii. Spune-i imediat cuiva de încredere - fie că este un prieten, un profesor, un mentor sau un adult în care ai încredere. Nu eşti singur şi este important să spui cuiva dacă eşti hărţuit sau dacă vezi alţi copii care sunt hărţuiţi.</p>
							</div>
							<a class="button">MAI MULTE</a>
						</div>
						<div class="panel">
							<div class="icon"><img src="img/blank.gif" data-type="src" data-preload="img/what-icon-2.png" alt="" /></div>
							<h2>FII PRIETENOS</h2>
							<div class="copy">
								<p>Cineva care este hărţuit sau care îi hărţuieşte pe alţii are nevoie la rândul său de un prieten şi de sprijin. Creează ocazii pentru a-ţi arăta prietenia faţă de toţi.</p>
							</div>
							<a class="button">MAI MULTE</a>
						</div>
						<div class="panel">
							<div class="icon"><img src="img/blank.gif" data-type="src" data-preload="img/what-icon-3.png" alt="" /></div>
							<h2>AI CURAJ ŞI VORBEŞTE</h2>
							<div class="copy">
								<p>Ai încredere în cine eşti şi încurajează-ţi prietenii să se împotrivească hărţuirii şi să treacă la acţiune pentru a o opri, fie că ţi se întâmplă ţie sau altora. Faptul că spui cuiva nu înseamnă că eşti un turnător sau un pârâcios. Faci un bine, ajutând pe cineva.</p>
								<p>Chiar dacă ai impresia că hărțuirea e doar în glumă, copiii hărţuiţi se simt speriaţi şi supăraţi. Dacă te supără sau te enervează ceva, nu te răzbuna, spune-i unui adult. </p>
							</div>
							<a class="button">MAI MULTE</a>
						</div>
					</div>
				</div>
			</div>

			<div class="page urmareste-videoclipuri">
				<div class="background" data-preload="img/page-background-3.png" data-type="background"></div>
				<div class="inner">
					<h1>URMĂREŞTE VIDEOCLIPURI</h1>
					<div class="videos">
						<a data-track="watch-bullied" data-src="http://ht.cdn.turner.com/tbseurope/big/CN_RO/videos/buddy/Bullied_ROM 16x9">
							<div class="thumb">
								<div class="table">
									<div class="cell">Urmărește spotul SPUNE TARE</div>
								</div>
							</div>
						</a>
						<a data-track="watch-bully" data-src="http://ht.cdn.turner.com/tbseurope/big/CN_RO/videos/buddy/Bully_ROM%2016x9">
							<div class="thumb">
								<div class="table">
									<div class="cell">Urmărește spotul FII PRIETENOS</div>
								</div>
							</div>
						</a>
						<a data-track="watch-observer" data-src="http://ht.cdn.turner.com/tbseurope/big/CN_RO/videos/buddy/Observer_ROM 16x9">
							<div class="thumb">
								<div class="table">
									<div class="cell">Urmărește spotul OBSERVATOR</div>
								</div>
							</div>
						</a>
						<a data-track="watch-buddy-training" data-src="http://ht.cdn.turner.com/tbseurope/big/CN_RO/videos/buddy/Training Promo_ROM 16x9">
							<div class="thumb">
								<div class="table">
									<div class="cell">Urmărește spotul CUM SĂ FIM PRIETENOȘI</div>
								</div>
							</div>
						</a>
						<a data-track="watch-friendship" data-src="http://ht.cdn.turner.com/tbseurope/big/Adops/FRIENDSHIP_ROMANIAN_HD_STEREO" data-ext="0">
							<div class="thumb">
								<div class="table">
									<div class="cell">URMĂREȘTE SPOTUL PRIETENIE</div>
								</div>
							</div>
						</a>
					</div>
				</div>
			</div>

			<div class="page inna">
				<div class="background" data-preload="img/inna-left.jpg?c=1" data-type="background" style="background-position: left bottom"></div>
				<div class="inner">
					<?php /*<h1 class="blue">FĂ CUNOȘTINȚĂ<br/>CU INNA</h1>*/ ?>
					<div class="wide-responsive">
						<div class="inline-player">
							<video id="inline-player-1" class="video-js vjs-default-skin" controls preload="auto" width="auto" height="auto" poster="img/inna-poster.jpg" data-setup="{}">
								<source src="http://ht.cdn.turner.com/tbseurope/big/Adops/CN%20Inna%20CC%20footage%20final.mp4" type="video/mp4">
								<source src="http://ht.cdn.turner.com/tbseurope/big/Adops/CN%20Inna%20CC%20footage%20final.webm" type="video/webm">
							</video>
						</div>
					</div>
				</div>
			</div>

			<div class="page telefonul-copilului">
				<div class="background" data-preload="img/page-background.png" data-type="background"></div>
				<div class="inner">
					<h1>FĂ CUNOȘTINȚĂ CU ASOCIAȚIA TELEFONUL COPILULUI</h1>
					<ul class="double-video">
						<li>
							<img src="img/leaflet.png" alt="" />
						</li><!--
						--><li>
							<h2>Caută ajutor pentru orice problemă care nu îți dă pace!</h2>
							<p>Sună la Telefonul Copilului: 116 111! Noi te ascultăm! Oricând și pentru orice problemă!</p>
 							<p>Telefonul Copilului 116 111 este singura linie telefonica de asistență, la nivel național, dedicată copiilor și adolescenților. Telefonul Copilului este un serviciu oferit de Asociația Telefonul Copilului, iar apelul către 116 111 este gratuit în rețelele Telekom Romania sau apelabil de la orice telefon public fără a introduce cartela.</p>
 							<p>Ai o problema și nu găsești nicio soluție? Nu ai la cine sa apelezi? Ești îngrijorat de situația unui alt copil care are probleme și nu știi cum să-i vii în ajutor? Îți este rușine să vorbești despre problemele tale? Îți este teamă că nu vei fi tratat cu seriozitate sau nu vei fi înțeles? Ești îngrijorat că și altcineva va afla despre ceea ce te preocupă, iar tu nu îți doresti acest lucru? Îți este greu să vorbești?</p>
 							<p>Problemele, însă, nu dispar dacă le ignori. Mai mult, uneori ai nevoie de cineva care să te susțină și să te ajute să le rezolvi. O problemă împărtășită este pe jumătate rezolvată. De aceea, este bine să nu te închizi în tine, să nu te izolezi, pentru că nu ești singur/ă!</p>
 							<p>Noi înțelegem cât îți este de greu să vorbești cu cineva despre unele dintre problemele tale. De aceea, suntem aici să te facem să te simți mai bine. Cu noi poți să vorbești despre orice! Cu noi ai tot timpul din lume! Suntem aici pentru a-ți oferi o opțiune. În loc să încerci să te descurci singur/ă când ai o problema, ne poți suna pe noi! Împreună putem găsi soluții și, astfel, poți hotarî să schimbi ceva!</p>
 							<p>Toate apelurile sunt confidențiale și nimeni nu va afla că ne-ai sunat dacă tu nu dorești acest lucru. Dar trebuie să știi că dacă viața ta este pusă în pericol, trebuie să solicitam sprijin pentru tine! Ne poti contacta în fiecare zi, din zori și până-n miez de noapte (08.00 – 00.00), iar consultanții pregătiți sunt gata să îți ofere sprijin, asistență și îndrumare.</p>
 							<p>Dacă îți este mai usor, ne poti scrie la telefonulcopilului@telefonulcopilului.ro !</p>
						</li>
					</ul>
					<div class="arrows right"><i class="fa fa-angle-right"></i></div>
					<div class="arrows left"><i class="fa fa-angle-left"></i></div>
				</div>
			</div>

			<div class="page codul-prieteniei">
				<div class="background" data-preload="img/page-background-2.png" data-type="background"></div>
				<div class="inner">
					<h1>CODUL PRIETENIEI CN</h1>
					<div class="body">
						<h4>01</h4>
						<h3>Fii prietenul tău cel mai bun - poartă-te cu alţii aşa cum vrei să se poarte alţii cu tine</h3>
						<h4>02</h4>
						<h3>Fii îngăduitor şi atent - nu judeca oamenii, toată lumea are nevoie de un prieten</h3>
						<h4>03</h4>
						<h3>Fii sincer şi de încredere</h3>
						<h4>04</h4>
						<h3>Fii loial şi rămâi alături de alţii la nevoie</h3>
						<h4>05</h4>
						<h3>Ai curajul să spui "Îmi pare rău" dacă ai făcut o greşeală</h3>
						<h4>06</h4>
						<h3>Fii gata să ajuţi atunci când cineva are o zi dificilă</h3>
						<h4>07</h4>
						<h3>Distrează-te cu prietenii şi invită şi alţi copii să se distreze cu voi!</h3>
					</div>
				</div>
			</div>

			<div class="page parteneri">
				<div class="background" data-preload="img/white-90.png" data-type="background"></div>
				<div class="inner">
					<h1>PARTENERI</h1>
					<div class="body">
						<a href="http://www.telefonulcopilului.ro" target="_blank"><img src="img/blank.gif" data-type="src" data-preload="img/logo-atc.png" alt="Asociația Telefonul Copilului" /></a>
						<p>Mai multe informații despre Asociația Telefonul Copilului găsești <a href="http://www.telefonulcopilului.ro/ce-se-intampla-116111" target="_blank" class="pink" style="margin: 0px;">aici</a>!</p>
					</div>
				</div>
			</div>

			<div class="page primeste-ajutor">
				<div class="background" data-preload="img/page-background.png" data-type="background"></div>
				<div class="inner">
					<h1>AFLĂ MAI MULTE ŞI PRIMEŞTE AJUTOR</h1>
					<p>Pentru mai multe informaţii despre hărţuire sau dacă ai nevoie imediat de ajutor, sprijin sau de un sfat, vizitează website-ul Asociația Telefonul Copilului la <a href="http://www.telefonulcopilului.ro" target="_blank">www.telefonulcopilului.ro</a> sau contactează Asociația Telefonul Copilului la <span class="pink">116 111</span> pentru a vorbi cu cineva gata să asculte şi să te ajute.</p>
				</div>
			</div>
		</div>

		<div class="mobile-nav">
			<a href="#/" class="active">Home</a><!--
			--><a href="#/ce-este-hartuirea">CE ESTE HĂRŢUIREA?</a><!--
			--><a href="#/ce-pot-face">CE POT FACE?</a><!--
			--><a href="#/urmareste-videoclipuri">URMĂREŞTE VIDEOCLIPURI</a><!--
			--><a href="#/inna">INNA</a><!--
			--><a href="#/telefonul-copilului">TELEFONUL COPILULUI</a><!--
			--><a href="#/codul-prieteniei">CODUL PRIETENIEI</a><!--
			--><a href="#/parteneri">PARTENERI</a><!--
			--><a href="#/primeste-ajutor">PRIMEŞTE AJUTOR</a>

			<div class="close"><i class="fa fa-times"></i></div>
		</div>

		<div class="footer">
			<div class="links">
				<div class=""><a href="http://www.cartoonnetwork.ro/terms-of-use" target="_blank">Termeni şi condiţii</a> <a href="http://www.cartoonnetwork.ro/privacy-policy" target="_blank">Politică de confidenţialitate</a> <a href="http://www.cartoonnetwork.ro/cookies-policy" target="_blank">Politica de cookie-uri</a></div>
			</div>
			<span class="open">PREVEDERI LEGALE</span>
			<span class="copy">Utilizarea acestui site înseamnă că ai acceptat Termenii şi Condiţiile. TM &amp; &copy; 2015 Cartoon Network. O companie Time Warner. Toate drepturile rezervate. CartoonNetwork.ro este parte din Turner Sports and Entertainment Digital Network</span>
			<a href="http://www.telefonulcopilului.ro" target="_blank" class="childline"><img src="img/blank.gif" data-type="src" data-preload="img/footer-atc.png" alt="" /></a>
			<a href="http://www.telefonulcopilului.ro" target="_blank" class="childline-sml"><img src="img/blank.gif" data-type="src" data-preload="img/footer-atc-sml.png" alt="" /></a>
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