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
			<a href="http://www.cartoonnetwork.fr/" target="_blank"><div class="header-logo"></div></a>

			<nav class="main-nav">
				<a href="#/" class="intro"></a>
				<a href="#/le-harcelement-cest-quoi">Le harcèlement,<br/>c'est quoi ?</a>
				<a href="#/a-toi-dagir">À toi<br/>d'agir</a>
				<a href="#/regarde-les-videos">Regarde<br/>les vidéos</a>
				<a href="#/la-video-golden-moustache">La vidéo<br/>Golden Moustache</a>
				<a href="#/le-code-des-copains">Le code<br/>des copains</a>
				<a href="#/partenaire" class="one">Partenaire</a>
				<a href="#/obtenir-de-laide">Obtenir<br/>de l'aide</a>
			</nav>
		</div>

		<a class="audio-control noselect"><i class="fa fa-volume-up"></i></a>
		<a class="mobile-nav-btn noselect"><i class="fa fa-bars"></i></a>

		<div class="scroll"></div>

		<a href="http://www.cartoonnetwork.fr/" target="_blank"><img src="img/buddy-network.png" alt="Buddy Network" class="logo" /></a>

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

			<div class="page le-harcelement-cest-quoi">
				<div class="background" data-preload="img/page-background.png" data-type="background"></div>
				<div class="inner">
					<h1>Le harcèlement, c'est quoi ?</h1>
					<p>Le harcèlement se définit comme une violence répétée qui peut être verbale, physique ou psychologique. N'importe qui peut être harcelé, à n'importe quel âge et n'importe où. Cela peut arriver à l'école, dans la cour de récréation, à la maison ou même sur Internet. Le harcèlement peut prendre plusieurs formes, par exemple, si quelqu'un te bouscule, te frappe, te taquine en permanence, te prends tes affaires, te donne des surnoms ou se moque de toi parce que tu es différent.</p>
					<p>Si tu te fais harceler, ce n'est pas de ta faute.</p>
				</div>
			</div>

			<div class="page a-toi-dagir">
				<div class="background" data-preload="img/page-background-2.png" data-type="background"></div>
				<div class="inner">
					<h1>À toi d'agir</h1>
					<div class="body">
						<div class="panel">
							<div class="icon"><img src="img/blank.gif" data-type="src" data-preload="img/what-icon-1.png" alt="" /></div>
							<h2>Parles-en autour de toi</h2>
							<div class="copy">
								<p>Le harcèlement, c'est quelque chose que personne ne devrait supporter en silence. Si tu en es victime, parles-en autour de toi immédiatement à un ami, un professeur, ou un adulte en qui tu as confiance. Tu n'es pas seul. Il est très importan d'en parler à quelqu'un si tu es harcelé ou si tu es témoin.</p>
							</div>
							<a class="button">En savoir plus</a>
						</div>
						<div class="panel">
							<div class="icon"><img src="img/blank.gif" data-type="src" data-preload="img/what-icon-2.png" alt="" /></div>
							<h2>Sois un bon copain</h2>
							<div class="copy">
								<p>Quelqu'un qui est victime de harcèlement ou qui harcèle les autres a aussi besoin d'un ami et de soutien. Essaye d'être copain avec tout le monde.</p>
							</div>
							<a class="button">En savoir plus</a>
						</div>
						<div class="panel">
							<div class="icon"><img src="img/blank.gif" data-type="src" data-preload="img/what-icon-3.png" alt="" /></div>
							<h2>Sois fort ! À toi de parler !</h2>
							<div class="copy">
								<p>Aie confiance en toi ! Encourage tes amis à se dresser contre le harcèlement et agissez ensemble pour l'arrêter, que vous soyez ou non victimes. Parler ne fera pas de toi un raporteur. Tu fais quelque chose de bien en aidant quelqu'un. Même si tu penses que le harcèlement c'est juste pour rire, en vérité, les enfants qui en sont victimes ont peur et sont malheureux. Même si tu es triste ou en colère à cause de quelque chose, parles-en à tes proches au lieu de te défouler sur quelqu'un d'autre.</p>
							</div>
							<a class="button">En savoir plus</a>
						</div>
					</div>
				</div>
			</div>

			<div class="page regarde-les-videos">
				<div class="background" data-preload="img/page-background-3.png" data-type="background"></div>
				<div class="inner">
					<h1>Regarde les vidéos</h1>
					<div class="videos">
						<!-- <a data-track="watch-animatic" data-src="http://ht.cdn.turner.com/tbseurope/big/Adops/beabuddy_season2">
							<div class="thumb">
								<div class="table">
									<div class="cell">Watch Be a Buddy</div>
								</div>
							</div>
						</a> -->
						<a data-track="je-suis-victime" data-src="http://ht.cdn.turner.com/tbseurope/big/CN_UK/videos/anti-bullying/bullied">
							<div class="thumb">
								<div class="table">
									<div class="cell">Je suis Victime</div>
								</div>
							</div>
						</a>
						<a data-track="jharcele" data-src="http://ht.cdn.turner.com/tbseurope/big/CN_UK/videos/anti-bullying/bully">
							<div class="thumb">
								<div class="table">
									<div class="cell">J'harcèle</div>
								</div>
							</div>
						</a>
						<a data-track="je-suis-temoin" data-src="http://ht.cdn.turner.com/tbseurope/big/CN_UK/videos/anti-bullying/observer">
							<div class="thumb">
								<div class="table">
									<div class="cell">Je suis Témoin</div>
								</div>
							</div>
						</a>
						<!-- <a data-track="watch-buddy-training" data-src="http://ht.cdn.turner.com/tbseurope/big/CN_UK/videos/anti-bullying/training">
							<div class="thumb">
								<div class="table">
									<div class="cell">Watch Buddy Training</div>
								</div>
							</div>
						</a> -->
					</div>
				</div>
			</div>

			<div class="page la-video-golden-moustache">
				<div class="background" data-preload="img/tom-daley.jpg" data-type="background"></div>
				<div class="inner">
					<h1>La vidéo Golden Moustache</h1>
					<?php /*<h2>CN Buddy Network Ambassadors</h2>
					<ul class="double-video">
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
									<div class="cell">Tom Daley Interview</div>
								</div>
							</div>
						</a>
						<a data-track="watch-tom-daley-qa" data-src="http://ht.cdn.turner.com/tbseurope/big/Adops/qa-tom-daley" style="background-image:url(img/ambassador-2.jpg)">
							<div class="thumb">
								<div class="table">
									<div class="cell">Advice From Tom Daley</div>
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

			<div class="page le-code-des-copains">
				<div class="background" data-preload="img/page-background-2.png" data-type="background"></div>
				<div class="inner">
					<h1>Le code des copains Cartoon Network</h1>
					<div class="body">
						<h4>01</h4>
						<h3>Pour commencer, deviens ton meilleur copain - Traite les autres de la façon dont tu souhaiterai être traité.</h3>
						<h4>02</h4>
						<h3>Sois gentil et aimable - Ne juge pas les autres, tout le monde a besoin d'un ami.</h3>
						<h4>03</h4>
						<h3>Sois honnête et digne de confiance.</h3>
						<h4>04</h4>
						<h3>Sois loyal et défends les autres lorsqu'ils en ont besoin.</h3>
						<h4>05</h4>
						<h3>Trouve le courage de dire "Je suis désolé" si tu as fait une erreur.</h3>
						<h4>06</h4>
						<h3>Soutiens tes amis qui ont passé une mauvaise journée.</h3>
						<h4>07</h4>
						<h3>Amuse-toi avec tes copains et invite les autres pour s'amuser avec vous aussi !</h3>
					</div>
				</div>
			</div>

			<div class="page partenaire">
				<div class="background" data-preload="img/white-90.png" data-type="background"></div>
				<div class="inner">
					<h1>Partenaire</h1>
					<div class="body">
						<a href="http://www.nonauharcelement.education.gouv.fr/" target="_blank"><img src="img/blank.gif" data-type="src" data-preload="img/non-au-harcelement.jpg" alt="non au harcelement" /></a>
					</div>
				</div>
			</div>

			<div class="page obtenir-de-laide">
				<div class="background" data-preload="img/page-background.png" data-type="background"></div>
				<div class="inner">
					<h1>En savoir plus &amp; obtenir de l'aide</h1>
					<p>Pour plus d'informations sur le harcèlement ou si tu as besoin d'aide immédiatement, consulte le site <a href="http://www.nonauharcelement.education.gouv.fr" target="_blank">www.nonauharcelement.education.gouv.fr</a> ou appelle le <span class="pink">3020</span> pour parler avec quelqu'un qui est là pour t'écouter et pour t'aider.</p>
				</div>
			</div>
		</div>

		<div class="mobile-nav">
			<a href="#/" class="active">Accueil</a><!--
			--><a href="#/le-harcelement-cest-quoi">Le harcèlement, c'est quoi ?</a><!--
			--><a href="#/a-toi-dagir">À toi d'agir</a><!--
			--><a href="#/regarde-les-videos">Regarde les vidéos</a><!--
			--><a href="#/la-video-golden-moustache">La vidéo Golden Moustache</a><!--
			--><a href="#/le-code-des-copains">Le code des copains</a><!--
			--><a href="#/partenaire">Partenaire</a><!--
			--><a href="#/obtenir-de-laide">Obtenir de l'aide</a>

			<div class="close"><i class="fa fa-times"></i></div>
		</div>

		<div class="footer">
			<div class="links">
				<div class=""><a href="http://www.cartoonnetwork.fr/terms-of-use" target="_blank">Conditions d'utilisation</a> <a href="http://www.cartoonnetwork.fr/privacy-policy" target="_blank">Politique de confidentialité</a> <a href="http://www.cartoonnetwork.fr/cookies-policy" target="_blank">Politique relative aux cookies</a></div>
			</div>
			<span class="open">Mentions légales</span>
			<span class="copy">En utilisant ce site, tu acceptes les Conditions d'utilisation. TM &amp; &copy; 2016 Cartoon Network. Une société Time Warner. Tous droits réservés. <a href="http://CartoonNetwork.fr" target="_blank">CartoonNetwork.fr</a> fait partie du Turner Sports and Entertainment Digital Network.</span>
			<a href="http://www.nonauharcelement.education.gouv.fr/" target="_blank" class="childline"><img src="img/blank.gif" data-type="src" data-preload="img/footer-harcelement.png" alt="" /></a>
			<a href="http://www.nonauharcelement.education.gouv.fr/" target="_blank" class="childline-sml"><img src="img/blank.gif" data-type="src" data-preload="img/footer-harcelement-sml.png" alt="" /></a>
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