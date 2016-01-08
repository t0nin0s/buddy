<?php
	ob_start('ob_gzhandler');
	header('X-UA-Compatible: IE=edge,chrome=1');
	error_reporting(E_ALL);
	ini_set('display_errors', 1);
	
	date_default_timezone_set('Africa/Johannesburg');

	if (!isset($_server)) $_server = $_SERVER['HTTP_HOST'];

	$_version = '1.0.2';
?>
<!DOCTYPE html>
<!--[if lt IE 7]>      <html class="no-js lt-ie9 lt-ie8 lt-ie7"> <![endif]-->
<!--[if IE 7]>         <html class="no-js lt-ie9 lt-ie8"> <![endif]-->
<!--[if IE 8]>         <html class="no-js lt-ie9"> <![endif]-->
<!--[if gt IE 8]><!--> <html class="no-js"> <!--<![endif]-->
	<head>
		<meta charset="utf-8">
		<title>Cartoon Network / Kanka ağı / Kanka ol.</title>
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
			<a href="http://www.cartoonnetwork.com.tr/" target="_blank"><div class="header-logo"></div></a>

			<nav class="main-nav">
				<a href="#/" class="intro"></a>
				<a href="#/zorbalik-nedir">ZORBALIK<br/>NEDİR?</a>
				<a href="#/ne-yapabilirim">NE<br/>YAPABİLİRİM?</a>
				<a href="#/videolari-izle">VİDEOLARI<br/>İZLE</a>
				<a href="#/gonullu-destekciler">GÖNÜLLÜ<br/>DESTEKÇİLER</a>
				<a href="#/uzman-tavsiyesi">UZMAN<br/>TAVSİYESİ</a>
				<a href="#/arkadaslik-kanunu">CARTOON NETWORK<br/>ARKADAŞLIK KANUNU</a>
			</nav>
		</div>

		<a class="audio-control noselect"><i class="fa fa-volume-up"></i></a>
		<a class="mobile-nav-btn noselect"><i class="fa fa-bars"></i></a>

		<div class="scroll"></div>

		<a href="http://www.cartoonnetwork.com.tr/" target="_blank"><img src="img/buddy-network.png" alt="Buddy Network" class="logo" /></a>

		<div class="backgrounds">
			<div class="background">
<?php
	$videos = array('Bully', 'bullied', 'Observer');
	$vid = $videos[array_rand($videos)];
?>
				<video loop id="background-video">
					<source src="http://ht.cdn.turner.com/tbseurope/big/CN_TR/videos/buddy/<?php echo $vid; ?>.webmhd.webm" type="video/webm">
					<source src="http://ht.cdn.turner.com/tbseurope/big/CN_TR/videos/buddy/<?php echo $vid; ?>.mp4.mp4" type="video/mp4">
				</video>
			</div>
		</div>

		<div class="scroller"></div>

		<div class="pages">
			<div class="page intro"></div>

			<div class="page zorbalik-nedir">
				<div class="background" data-preload="img/page-background.png" data-type="background"></div>
				<div class="inner">
					<h1>ZORBALIK NEDİR?</h1>
					<p>Zorbalık insanların birine karşı bilerek kaba davranması ya da ona zarar vermesidir. Zorbalık herkesin başına her yaşta gelebilir, okulda, oyun alanında, evde, internette. Birisi sizi itebilir, size vurabilir, sizinle dalga geçebilir, eşyalarınızı alabilir, size lakap takabilir, sizi bilerek görmezden gelip dışarıda bırakabilir ya da farklı olduğunuz için sizle dalga geçebilir.</p>
					<p>Zorbalık önemsiz değildir. Zorbalığa uğruyorsanız bu sizin hatanız değildir.</p>
				</div>
			</div>

			<div class="page ne-yapabilirim">
				<div class="background" data-preload="img/page-background-2.png" data-type="background"></div>
				<div class="inner">
					<h1>NE YAPABİLİRİM?</h1>
					<div class="body">
						<div class="panel">
							<div class="icon"><img src="img/blank.gif" data-type="src" data-preload="img/what-icon-1.png" alt="" /></div>
							<h2>NELER OLDUĞUNU BİRİLERİNE ANLAT</h2>
							<div class="copy">
								<p>Zorbalık asla birinin sessizce açı çekmek zorunda olduğu bir şey olmamalı. Bunu hemen güvendiğiniz birine anlatın, bu kişi bir arkadaş, öğretmen, aklı hocası ya da güvenilen bir yetişkin olabilir. Yalnız değilsiniz ve zorbalığa uğruyorsanız ya da diğerlerinin zorbalığa uğradığını görüyorsanız birine anlatmak çok önemlidir.</p>
							</div>
							<a class="button">Devamı</a>
						</div>
						<div class="panel">
							<div class="icon"><img src="img/blank.gif" data-type="src" data-preload="img/what-icon-2.png" alt="" /></div>
							<h2>ARKADAŞ CANLISI OL</h2>
							<div class="copy">
								<p>Zorbalığa uğrayan ya da zorbalık yapan biri de arkadaşa ve desteğe ihtiyaç duyar. Herkese karşı arkadaş canlısı olmak için fırsatlar yarat.</p>
							</div>
							<a class="button">Devamı</a>
						</div>
						<div class="panel">
							<div class="icon"><img src="img/blank.gif" data-type="src" data-preload="img/what-icon-3.png" alt="" /></div>
							<h2>CESUR OL VE SUSMA</h2>
							<div class="copy">
								<p>Karakterinize güvenin ve arkadaşlarınızı zorbalığa karşı durmaları ve bunu durdurmaları için cesaretlendirin, bunu yaşayanın siz ya da başkası olması önemli değil. Bu konudan konuşmanız sizin ispiyoncu olduğunuz anlamına gelmez. Birisine yardım ederek iyi bir şey yaptığınızı unutmayın.</p>
								<p>Zorbalığın sadece komik olduğunu düşünsen de, zorbalığa uğrayan çocuklar korkar ve üzülür. Birşey hakkında üzgün ya da kızgınsanız,başkalarını sorumlu tutmak yerine bu konu hakkında konuşun.</p>
							</div>
							<a class="button">Devamı</a>
						</div>
					</div>
				</div>
			</div>

			<div class="page videolari-izle">
				<div class="background" data-preload="img/page-background-3.png" data-type="background"></div>
				<div class="inner">
					<h1>VİDEOLARI İZLE</h1>
					<div class="videos">
						<a data-track="watch-bullied" data-src="http://ht.cdn.turner.com/tbseurope/big/CN_TR/videos/buddy/bullied">
							<div class="thumb">
								<div class="table">
									<div class="cell">MAĞDUR</div>
								</div>
							</div>
						</a>
						<a data-track="watch-bully" data-src="http://ht.cdn.turner.com/tbseurope/big/CN_TR/videos/buddy/Bully">
							<div class="thumb">
								<div class="table">
									<div class="cell">ZORBA</div>
								</div>
							</div>
						</a>
						<a data-track="watch-observer" data-src="http://ht.cdn.turner.com/tbseurope/big/CN_TR/videos/buddy/Observer">
							<div class="thumb">
								<div class="table">
									<div class="cell">SEYİRCİ</div>
								</div>
							</div>
						</a>
						<a data-track="watch-kankalik-videosu" data-src="http://ht.cdn.turner.com/tbseurope/big/Adops/kankavideosu" data-ext="no">
							<div class="thumb">
								<div class="table">
									<div class="cell">KANKALIK VIDEOSU</div>
								</div>
							</div>
						</a>
						<a data-track="watch-buddy-training" data-src="http://ht.cdn.turner.com/tbseurope/big/CN_TR/videos/buddy/Buddy%20Training%20Promo%20Final%20Version">
							<div class="thumb">
								<div class="table">
									<div class="cell">ZORBA OLMA KANKA OL</div>
								</div>
							</div>
						</a>
					</div>
				</div>
			</div>
			
			<div class="page gonullu-destekciler">
				<div class="background" data-preload="img/page-background.png" data-type="background"></div>
				<div class="inner">
					<h1>GÖNÜLLÜ DESTEKÇİLER</h1>
					<h2>3 ADAM’IN ÖNERİLERİ</h2>
					<ul class="single-video">
						<li>
							<div class="wide-responsive">
								<div class="inline-player">
									<video id="inline-player-1" class="video-js vjs-default-skin" controls preload="auto" width="auto" height="auto" poster="" data-setup="{}">
										<source src="http://ht.cdn.turner.com/tbseurope/big/Adops/zk.mp4.mp4" type="video/mp4">
										<source src="http://ht.cdn.turner.com/tbseurope/big/Adops/zk.webmsd.webm" type="video/webm">
									</video>
								</div>
							</div>
						</li>
					</ul>
				</div>
			</div>
			
			<div class="page uzman-tavsiyesi">
				<div class="background" data-preload="img/page-background.png" data-type="background"></div>
				<div class="inner">
					<h1>UZMAN TAVSİYESİ</h1>
					<h2>UZMAN GELİŞİM PSİKOLOĞU</h2>
					<ul class="single-video">
						<li>
							<div class="wide-responsive">
								<div class="inline-player">
									<video id="inline-player-2" class="video-js vjs-default-skin" controls preload="auto" width="auto" height="auto" poster="" data-setup="{}">
										<source src="http://ht.cdn.turner.com/tbseurope/big/Adops/ps3.mp4.mp4" type="video/mp4">
										<source src="http://ht.cdn.turner.com/tbseurope/big/Adops/ps3.webmsd.webm" type="video/webm">
									</video>
								</div>
							</div>
						</li>
					</ul>
				</div>
			</div>

			<div class="page arkadaslik-kanunu">
				<div class="background" data-preload="img/page-background-2.png" data-type="background"></div>
				<div class="inner">
					<h1>CARTOON NETWORK ARKADAŞLIK KANUNU</h1>
					<div class="body">
						<h4>01</h4>
						<h3>ÖNCE KENDİNİN EN İYİ ARKADAŞI OL, DİĞERLERİNE KENDİNE DAVRANILMASINI İSTEDİĞİN GİBİ DAVRAN.</h3>
						<h4>02</h4>
						<h3>KİBAR VE DÜŞÜNCELİ OL, DİĞERLERİNİ YARGILAMA, HERKESİN ARKADAŞA İHTİYACI VARDIR.</h3>
						<h4>03</h4>
						<h3>DÜRÜST VE GÜVENİLİR OL.</h3>
						<h4>04</h4>
						<h3>SADIK OL VE İHTİYACI OLANLARI SAVUN.</h3>
						<h4>05</h4>
						<h3>BİR HATA YAPARSAN ÖZÜR DİLEYECEK KADAR CESUR OL.</h3>
						<h4>06</h4>
						<h3>KÖTÜ BİR GÜN GEÇİREN BİRİNE DESTEK OL.</h3>
						<h4>07</h4>
						<h3>ARKADAŞLARINLA EĞLEN VE DİĞERLERİNİ DE BU EĞLENCEYE DAVET ET.</h3>
					</div>
				</div>
			</div>
		</div>

		<div class="mobile-nav">
			<a href="#/" class="active">Anasafya</a><!--
			--><a href="#/zorbalik-nedir">ZORBALIK NEDİR?</a><!--
			--><a href="#/ne-yapabilirim">NE YAPABİLİRİM?</a><!--
			--><a href="#/videolari-izle">VİDEOLARI İZLE</a><!--
			--><a href="#/gonullu-destekciler">GÖNÜLLÜ DESTEKÇİLER</a><!--
			--><a href="#/uzman-tavsiyesi">UZMAN TAVSİYESİ</a><!--
			--><a href="#/arkadaslik-kanunu">CARTOON NETWORK ARKADAŞLIK KANUNU</a>

			<div class="close"><i class="fa fa-times"></i></div>
		</div>

		<div class="footer">
			<div class="links">
				<div class=""><a href="http://www.cartoonnetwork.com.tr/kullan%C4%B1m-%C5%9Fartlar%C4%B1-ve-ko%C5%9Fullar%C4%B1" target="_blank">Hükümler ve Koşullar</a> <a href="http://www.cartoonnetwork.com.tr/gizlilik-politikas%C4%B1" target="_blank">Gizlilik Politikası</a> <a href="http://www.cartoonnetwork.com.tr/cookies-policy" target="_blank">Çerezler Politikası</a></div>
			</div>
			<span class="open">Kanuni Bilgi</span>
			<span class="copy"> Bu sitenin kullanımı kullanım şartlarını kabul ettiğinizi belirtir. TM @ 2015 Cartoon Network.</span>
			<?php /*<a href="http://www.childline.org.uk/cartoon-network-anti-bullying" target="_blank" class="childline"><img src="img/blank.gif" data-type="src" data-preload="img/footer-childline.png" alt="" /></a>
			<a href="http://www.childline.org.uk/cartoon-network-anti-bullying" target="_blank" class="childline-sml"><img src="img/blank.gif" data-type="src" data-preload="img/footer-childline-sml.png" alt="" /></a>*/ ?>
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