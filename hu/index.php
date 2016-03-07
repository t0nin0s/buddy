<?php
	ob_start('ob_gzhandler');
	header('X-UA-Compatible: IE=edge,chrome=1');
	error_reporting(E_ALL);
	ini_set('display_errors', 1);
	
	date_default_timezone_set('Africa/Johannesburg');

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
		<title>Cartoon Network / Aki ver, az nem haver</title>
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
				<a href="#/what-is-bullying">MI A<br/>BÁNTALMAZÁS?</a>
				<a href="#/what-can-i-do">MIT<br/>TEHETEK?</a>
				<a href="#/watch-videos">NÉZD MEG<br/>A VIDEÓKAT!</a>
				<a href="#/meet-celeb">Íme a<br/>nagykövetünk</a>
				<!--<a href="#/az-ebreszto-ora-program">AZ ÉBRESZTŐM<br/>ÓRA PROGRAM</a>-->
				<a href="#/buddy-code">HAVER-<br/>KÓD</a>
				<a href="#/partners" class="one">PARTNEREK</a>
				<a href="#/get-help">KÉRJ<br/>SEGÍTSÉGET!</a>
			</nav>
		</div>

		<a class="audio-control noselect"><i class="fa fa-volume-up"></i></a>
		<a class="mobile-nav-btn noselect"><i class="fa fa-bars"></i></a>

		<div class="scroll"></div>

		<a href="http://www.cartoonnetwork.co.uk" target="_blank"><img src="img/buddy-network.png" alt="Buddy Network" class="logo" /></a>

		<div class="backgrounds">
			<div class="background">
<?php
	$videos = array('BULLY_HUNGARIAN_HD_STEREO', 'BULLIED_HUNGARIAN_HD_STEREO', 'OBSERVER_HUNGARIAN_HD_STEREO');
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
					<h1>MI A BÁNTALMAZÁS?</h1>
					<p>A bántalmazás az, ha valaki szándékosan bánt testileg vagy lelkileg valakit. Ez bárkivel megtörténhet, kortól és helyszíntől, szituációtól függetlenül: bántalmazás érhet valakit az iskolában, a játszótéren, az utcán, otthon vagy akár az interneten. A bántalmazás jelenthet lökdösést, ütést, kötekedést, lopást, megfélemlítést, fenyegetést vagy csúfolódást és kiközösítést csak azért, mert valamiben más vagy, mint a többiek. Ez nem helyes. Ha emiatt bántalmaznak, az nem a te hibád.</p>
				</div>
			</div>

			<div class="page what-can-i-do">
				<div class="background" data-preload="img/page-background-2.png" data-type="background"></div>
				<div class="inner">
					<h1>MIT TEHETEK?</h1>
					<div class="body">
						<div class="panel">
							<div class="icon"><img src="img/blank.gif" data-type="src" data-preload="img/what-icon-1.png" alt="" /></div>
							<h2>MONDD EL VALAKINEK, MI TÖRTÉNT!</h2>
							<div class="copy">
								<p>A bántalmazást senkinek sem kell csendben tűrnie. Ha bántalmazás áldozatául esel, azonnal mondd el valakinek, akiben megbízol! Ez lehet barát, családtag, tanácsadó vagy megbízható felnőtt. Tudd, hogy nem vagy egyedül és fontos, hogy elmondd azt, ha bántanak és azt is, ha látod, hogy mást bántanak.</p>
							</div>
							<a class="button">RÉSZLETEK</a>
						</div>
						<div class="panel">
							<div class="icon"><img src="img/blank.gif" data-type="src" data-preload="img/what-icon-2.png" alt="" /></div>
							<h2>LÉGY BARÁTSÁGOS!</h2>
							<div class="copy">
								<p>A bántalmazónak és a bántalmazottnak egyaránt segítségre és barátokra van szüksége. Igyekezz mindenkivel barátságosnak lenni!</p>
							</div>
							<a class="button">RÉSZLETEK</a>
						</div>
						<div class="panel">
							<div class="icon"><img src="img/blank.gif" data-type="src" data-preload="img/what-icon-3.png" alt="" /></div>
							<h2>LÉGY BÁTOR, ÉS ÁLLJ KI!</h2>
							<div class="copy">
								<p>"Légy biztos magadban és bátorítsd a barátaidat, hogy ők is lépjenek fel a bántalmazás ellen, tegyenek valamit, ha téged vagy másokat bántanak! Beszélni a bántalmazókról nem jelenti azt, hogy árulkodós vagy. Jót teszel azzal, ha segítesz.</p>
								<p>Még ha tréfásnak is látszik a bántalmazás, az áldozatul esett gyerekek cseppet sem gondolják ezt - sőt, inkább az ellenkezőjét. Ha csalódott vagy mérges vagy, beszéld meg valakivel, ahelyett hogy másokon töltenéd ki a rosszkedvedet!"</p>
							</div>
							<a class="button">RÉSZLETEK</a>
						</div>
					</div>
				</div>
			</div>

			<div class="page watch-videos">
				<div class="background" data-preload="img/page-background-3.png" data-type="background"></div>
				<div class="inner">
					<h1>NÉZD MEG A VIDEÓKAT!</h1>
					<div class="videos">
						<a data-track="watch-animatic" data-src="http://ht.cdn.turner.com/tbseurope/big/Adops/FRIENDSHIP_HUNGARIAN_HD_STEREO">
							<div class="thumb">
								<div class="table">
									<div class="cell">NÉZD MEG: LÉGY HAVER!</div>
								</div>
							</div>
						</a>
						<a data-track="watch-bullied" data-src="http://ht.cdn.turner.com/tbseurope/big/Adops/BULLIED_HUNGARIAN_HD_STEREO">
							<div class="thumb">
								<div class="table">
									<div class="cell">NÉZD MEG: A BÁNTALMAZOTT</div>
								</div>
							</div>
						</a>
						<a data-track="watch-bully" data-src="http://ht.cdn.turner.com/tbseurope/big/Adops/BULLY_HUNGARIAN_HD_STEREO">
							<div class="thumb">
								<div class="table">
									<div class="cell">NÉZD MEG: A BÁNTALMAZÓ</div>
								</div>
							</div>
						</a>
						<a data-track="watch-observer" data-src="http://ht.cdn.turner.com/tbseurope/big/Adops/OBSERVER_HUNGARIAN_HD_STEREO">
							<div class="thumb">
								<div class="table">
									<div class="cell">NÉZD MEG: A MEGFIGYELŐ</div>
								</div>
							</div>
						</a>
						<!--<a data-track="watch-buddy-training" data-src="http://ht.cdn.turner.com/tbseurope/big/CN_UK/videos/anti-bullying/training">
							<div class="thumb">
								<div class="table">
									<div class="cell">NÉZD MEG: HAVERSULI</div>
								</div>
							</div>
						</a>-->
					</div>
				</div>
			</div>

			<div class="page meet-celeb">
				<div class="background" data-preload="img/celeb.jpg" data-type="background"></div>
				<div class="inner">
					<h1>A CN HAVER KLUB NAGYKÖVETE</h1>
					<h2>ERDEI ZSOLT, VILÁGBAJNOK ÖKÖLVíVÓ</h2>
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
						<a data-track="watch-tom-daley-qa" data-src="http://ht.cdn.turner.com/tbseurope/big/Adops/4_3%20BUDDY%2060sec" style="background-image:url(img/ambassador-2.jpg)">
							<div class="thumb">
								<div class="table">
									<div class="cell">TANÁCSOK ERDEI ZSOLTTÓL</div>
								</div>
							</div>
						</a>
						<a data-track="watch-tom-daley-psa" data-src="http://ht.cdn.turner.com/tbseurope/big/Adops/buddy%20long%203.0-HD" style="background-image:url(img/ambassador-1.jpg)">
							<div class="thumb">
								<div class="table">
									<div class="cell">INTERJÚ ERDEI ZSOLTTAL</div>
								</div>
							</div>
						</a>
					</div>
				</div>
			</div>

			<?php /*<div class="page az-ebreszto-ora-program">
				<div class="background" data-preload="img/anna.jpg" data-type="background"></div>
				<div class="inner">
					<h1>SZAKÉRTŐI TANÁCSOK</h1>
					<!--<h2>Childline Counsellor</h2>-->
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
			</div>*/ ?>

			<div class="page buddy-code">
				<div class="background" data-preload="img/page-background-2.png" data-type="background"></div>
				<div class="inner">
					<h1>CN HAVER-KÓD</h1>
					<div class="body">
						<h4>01</h4>
						<h3>ELŐSZÖR LÉGY ÖNMAGAD LEGJOBB BARÁTJA – ÚGY BÍZZ MÁSOKBAN, AHOGY SZERETNÉD, HOGY BENNED BÍZZANAK!</h3>
						<h4>02</h4>
						<h3>LÉGY KEDVES ÉS TAPINTATOS – NE ÍTÉLD EL AZOKAT, AKIK MÁSOK VALAMIBEN! MINDENKI SZERETNE BARÁTOT.</h3>
						<h4>03</h4>
						<h3>LÉGY BECSÜLETES ÉS MEGBÍZHATÓ!</h3>
						<h4>04</h4>
						<h3>LÉGY HŰ ÉS KAROLD FEL AZOKAT, AKIKNEK SZÜKSÉGE VAN ERRE!</h3>
						<h4>05</h4>
						<h3>LÉGY ELÉG BÁTOR AHHOZ, HOGY BOCSÁNATOT KÉRJ, HA HIBÁZTÁL!</h3>
						<h4>06</h4>
						<h3>TÁMOGASD AZT, AKINEK ROSSZ NAPJA VAN!</h3>
						<h4>07</h4>
						<h3>ÉREZD JÓL MAGAD A HAVERJAIDDAL ÉS NE FELEJTS EL MÁSOKAT IS BEVONNI A MÓKÁBA! </h3>
					</div>
				</div>
			</div>

			<div class="page partners">
				<div class="background" data-preload="img/white-90.png" data-type="background"></div>
				<div class="inner">
					<h1>PARTNEREK</h1>
					<div class="body">
						<a href="http://ebresztoora.unicef.hu/" target="_blank"><img src="img/blank.gif" data-type="src" data-preload="img/logo-unicef-new.png" alt="unicef" /></a><br/>
						<a href="http://www.mindennapipszichologia.hu/" target="_blank"><img src="img/blank.gif" data-type="src" data-preload="img/logo-mindennapi.png" alt="mindennapi" /></a>
						<a href="http://www.unicef.hu/helpapp/" target="_blank"><img src="img/blank.gif" data-type="src" data-preload="img/logo-unicef-helpapp.png" alt="helpapp" /></a>
					</div>
				</div>
			</div>

			<div class="page get-help">
				<div class="background" data-preload="img/page-background.png" data-type="background"></div>
				<div class="inner">
					<h1>TUDJ MEG TÖBBET ÉS KÉRJ SEGÍTSÉGET!</h1>
					<p>Az UNICEF Magyarország „Ébresztő-óra” programjának célja, hogy növelje a gyermekjogok ismertségét az iskolákban, és az UNICEF gyermekjogi-gyermekvédelmi tevékenységének bemutatásával érzékenyítse a gyermekeket a fejlődő világ, a fenntartható fejlődés és a globalizált világ problémái iránt. Ha a gyerekek megismerik jogaikat, saját jogaikon keresztül tapasztalják meg az őket körülvevő világ működését. Az Ébresztő-óra ráébreszti a gyermekeket arra, hogy meddig mehetnek el másokkal szemben, és milyen védelem illeti meg őket. A program játékos, interaktív formában, a gyermekek életkorához igazodva ad át ismereteket. A program részeként országszerte, immár több mint 100 képzett, UNICEF önkéntes tréner előadásokat tart „rendhagyó” iskolai tanórákon vagy rendezvényeken 10-18 éves diákok számára. A programra az ország bármely területéről lehet ingyenesen jelentkezni a <a href="http://ebresztoora.unicef.hu/" target="_blank">ebresztoora.unicef.hu</a> oldalon.</p><p>Az UNICEF hisz abban, hogy mindenkinek joga van az erőszakmentes gyermekkorhoz, hogy minden gyermeket megillet a védelem a fizikai, az érzelmi erőszaktól és az elhanyagolástól. A gyermekbántalmazás teljes mértékben megelőzhető! A HelpAPP mobil alkalmazás segít az erőszakos helyzetek felismerésében, elkerülésében és kezelésében. Az alapvető funkciók mellett (segélyhívó, pánik gomb, helyzetjelzés) az applikáció segítségével elsajátíthatóak az erőszakmentes megoldások és konfliktusrendezési technikák is.</p>
				</div>
			</div>
		</div>

		<div class="mobile-nav">
			<a href="#/" class="active">KEZDŐLAP</a><!--
			--><a href="#/what-is-bullying">MI A BÁNTALMAZÁS?</a><!--
			--><a href="#/what-can-i-do">MIT TEHETEK?</a><!--
			--><a href="#/watch-videos">NÉZD MEG A VIDEÓKAT!</a><!--
			--><a href="#/meet-celeb">Íme a nagykövetünk</a><!--
			<a href="#/az-ebreszto-ora-program">AZ ÉBRESZTŐ ÓRA PROGRAM</a>
			--><a href="#/buddy-code">HAVER-KÓD</a><!--
			--><a href="#/partners">PARTNEREK</a><!--
			--><a href="#/get-help">KÉRJ SEGÍTSÉGET!</a>
			<div class="close"><i class="fa fa-times"></i></div>
		</div>

		<div class="footer">
			<div class="links">
				<div class=""><a href="http://www.cartoonnetwork.hu/terms-of-use" target="_blank">Felhasználási feltételek</a> <a href="http://www.cartoonnetwork.hu/privacy-policy" target="_blank">Adatvédelmi nyilatkozat</a> <a href="http://www.cartoonnetwork.hu/cookies-policy" target="_blank">Nyilatkozat a sütikről</a></div>
			</div>
			<span class="open">SZABÁLYZAT</span>
			<span class="copy">Az oldal használatával elfogadod a felhasználási feltételeket. &trade; &amp; &copy; 2015 Cartoon Network. A Time Warner Company. Minden jog fenntartva. A CartoonNetwork.hu része a Turner Sports and Entertainment Digital Networknek.</span>
			<a href="http://ebresztoora.unicef.hu/" target="_blank" class="unicef"><img src="img/blank.gif" data-type="src" data-preload="img/logo-unicef-new.png" alt="" /></a>
			<a href="http://ebresztoora.unicef.hu/" target="_blank" class="unicef-sml"><img src="img/blank.gif" data-type="src" data-preload="img/logo-unicef-new.png" alt="" /></a>
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