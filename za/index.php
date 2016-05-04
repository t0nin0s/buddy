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
			<a href="http://www.cartoonnetworkhq.com/" target="_blank"><div class="header-logo"></div></a>

			<nav class="main-nav">
				<a href="#/" class="intro"></a>
				<a href="#/what-is-bullying">What is<br/>Bullying</a>
				<a href="#/what-can-i-do">What can<br/>I do</a>
				<a href="#/watch-videos">Watch<br/>Videos</a>
				<a href="#/meet-celeb">Meet Wayde<br/>van Niekerk</a>
				<a href="#/advice-from-childline">Advice From<br/>Childline</a>
				<a href="#/how-to-help">How to<br/>help?</a>
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
	$videos = array('observer-promo', 'bully-promo', 'bullied-promo');
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
					<p>Bullying refers to repeated, aggressive behaviour with the intention to hurt another person, physically or mentally. This may include name calling, exclusion from activities, physical aggression, intimidation and manipulation into doing things or mocking the victim.</p>
					<p>Bullying can occur on school grounds, on the way between school and home, over the telephone, through any type of electronic or instant messaging, or via any type of social media.</p>
					<p>NO-ONE DESERVES to be BULLIED. If you’re being bullied it is not your fault. Speak up!</p>
				</div>
			</div>

			<div class="page what-can-i-do">
				<div class="background" data-preload="img/page-background-2.png" data-type="background"></div>
				<div class="inner">
					<div class="flick-container">
						<div class="arrows right"><i class="fa fa-angle-right"></i></div>
						<div class="arrows left"><i class="fa fa-angle-left"></i></div>
						<div class="flick-mask">
							<div class="flick-page">
								<h1>If I'm being Bullied?</h1>
								<div class="body">
									<div class="panel">
										<h2>Don't fight back or use physical force</h2>
										<div class="copy">
											<p>You can never be sure how the bully will react. You could get hurt or in trouble!</p>
										</div>
										<a class="button">READ MORE</a>
									</div>
									<div class="panel">
										<h2>Don’t get angry</h2>
										<div class="copy">
											<p>If you're in a situation where you can’t walk away and have to deal with the bully, don't get mad. Try using humour or even being friendly. It shows that you’re not scared and it can throw the bully totally off guard.</p>
										</div>
										<a class="button">READ MORE</a>
									</div>
									<div class="panel">
										<h2>Do tell someone</h2>
										<div class="copy">
											<p>Refer to a  teacher, your parents,caregiver, a friend or even Childline — anyone who can give you the support you need!</p>
										</div>
										<a class="button">READ MORE</a>
									</div>
									<div class="panel">
										<h2>Do Keep a diary</h2>
										<div class="copy">
											<p>Save any nasty SMS or emails that have been sent to you. Write down everything that happened, the dates, who was involved, any witnesses, etc. Also check your school’s anti-bullying policy. This will tell you what your school should do about the bullying - and by keeping a diary you have evidence.</p>
										</div>
										<a class="button">READ MORE</a>
									</div>
								</div>
							</div>
							<div class="flick-page">
								<h1>If my child is being bullied?</h1>
								<div class="body">
									<div class="panel">
										<h2>Prevent bullying</h2>
										<div class="copy">
											<p>Children should know that you expect them not to bully others: teach them to be helpful and kind with their peers, or to offer support to children who are bullied. Teach them to report bullying that they experience or witness, to you or other adults.</p>
										</div>
										<a class="button">READ MORE</a>
									</div>
									<div class="panel">
										<h2>Be watchful and supportive</h2>
										<div class="copy">
											<p>If you suspect your child is being bullied, show that you are concerned about him/her and ask questions. Make them feel safe to talk about their feelings and what has happened to them. Give them your support and gather information about the bullying.</p>
										</div>
										<a class="button">READ MORE</a>
									</div>
									<div class="panel">
										<h2>Take immediate action </h2>
										<div class="copy">
											<p>If you child is being bullied, contact his/her teacher and/or principal and share your concerns. Do not contact the parents of the child who bullied your child – it may make matters worse. It is the school officials that should inform the parents of the bully.</p>
										</div>
										<a class="button">READ MORE</a>
									</div>
								</div>
							</div>
							<div class="flick-page">
								<h1>If my student is being bullied?</h1>
								<div class="body">
									<div class="panel">
										<h2>Develop awareness for your students</h2>
										<div class="copy">
											<p>Bullying takes place in all types of schools; public and private.  As a teacher it is your responsibility to create a bully-proof classroom. Talk to you student about bullying, give them guidance about how they might appropriately intervene or get help if they witness bullying.</p>
										</div>
										<a class="button">READ MORE</a>
									</div>
									<div class="panel">
										<h2>Check on your students</h2>
										<div class="copy">
											<p>By taking questionnaires from the learners, school personnel can discover the hotspots for bullying. Once this information is available, look for creative ways to increase an adults’ presence in these locations. Make students realise they should avoid risky areas or situations.</p>
										</div>
										<a class="button">READ MORE</a>
									</div>
									<div class="panel">
										<h2>Give your support</h2>
										<div class="copy">
											<p>Support the bullied child in a way that allows him or her to “save face,” feel supported and safe. Don’t ask questions about the incident in front of other learners. Follow-up afterwards.</p>
										</div>
										<a class="button">READ MORE</a>
									</div>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>

			<div class="page watch-videos">
				<div class="background" data-preload="img/page-background-3.png" data-type="background"></div>
				<div class="inner">
					<h1>Discover the Be A Buddy attitude</h1>
					<div class="videos">
						<a data-track="watch-bullied" data-src="http://ht.cdn.turner.com/tbseurope/big/Adops/bullied-promo" style="background-image:url(img/watch-bullied.jpg)">
							<div class="thumb">
								<div class="table">
									<div class="cell">Watch Bullied</div>
								</div>
							</div>
						</a>
						<a data-track="watch-bully" data-src="http://ht.cdn.turner.com/tbseurope/big/Adops/bully-promo" style="background-image:url(img/watch-bully.jpg)">
							<div class="thumb">
								<div class="table">
									<div class="cell">Watch Bully</div>
								</div>
							</div>
						</a>
						<a data-track="watch-observer" data-src="http://ht.cdn.turner.com/tbseurope/big/Adops/observer-promo" style="background-image:url(img/watch-observer.jpg)">
							<div class="thumb">
								<div class="table">
									<div class="cell">Watch Observer</div>
								</div>
							</div>
						</a>
					</div>
				</div>
			</div>

			<div class="page meet-celeb">
				<div class="background" data-preload="img/meet-wayde.jpg" data-type="background"></div>
				<div class="inner">
					<h1>Meet Wayde van Niekerk</h1>
					<h2>CN Buddy Network Ambassador</h2>
					<div class="videos">
						<a data-track="watch-advise-from-wayde" data-src="http://ht.cdn.turner.com/tbseurope/big/Adops/advice-from-wayde-van-niekerk" style="background-image:url(img/wayde-video-1.jpg)">
							<div class="thumb">
								<div class="table">
									<div class="cell">Advice from Wayde van Niekerk</div>
								</div>
							</div>
						</a>
						<a data-track="watch-waydes-story" data-src="http://ht.cdn.turner.com/tbseurope/big/Adops/wayde-van-niekerks-story" style="background-image:url(img/wayde-video-2.jpg)">
							<div class="thumb">
								<div class="table">
									<div class="cell">Wayde van Niekerk’s story</div>
								</div>
							</div>
						</a>
						<a data-track="watch-wayde-answer-questions" data-src="http://ht.cdn.turner.com/tbseurope/big/Adops/wayde-answers-questions-on-bullying" style="background-image:url(img/wayde-video-3.jpg)">
							<div class="thumb">
								<div class="table">
									<div class="cell">Wayde answers questions on bullying</div>
								</div>
							</div>
						</a>
					</div>
				</div>
			</div>
			<div class="page advice-from-childline">
				<div class="background" data-preload="img/videos.jpg" data-type="background"></div>
				<div class="inner">
					<h1 class="pink">Advice From Childline</h1>
					<div class="videos">
						<a data-track="watch-childline-tips-sotho" data-src="http://ht.cdn.turner.com/tbseurope/big/Adops/cn_sotho" style="background-image:url(img/tips-sotho.jpg)">
							<div class="thumb">
								<div class="table">
									<div class="cell">Childline’s Tips - Sotho</div>
								</div>
							</div>
						</a>
						<a data-track="watch-childline-tips-zulu" data-src="http://ht.cdn.turner.com/tbseurope/big/Adops/cn_zulu" style="background-image:url(img/tips-zulu.jpg)">
							<div class="thumb">
								<div class="table">
									<div class="cell">Childline’s Tips - Zulu</div>
								</div>
							</div>
						</a>
						<a data-track="watch-childline-tips-afrikaans" data-src="http://ht.cdn.turner.com/tbseurope/big/Adops/cn_afrik." style="background-image:url(img/tips-afrikaans.jpg)">
							<div class="thumb">
								<div class="table">
									<div class="cell">Childline’s Tips - Afrikaans</div>
								</div>
							</div>
						</a>
						<a data-track="watch-childline-tips-english" data-src="http://ht.cdn.turner.com/tbseurope/big/Adops/cn_english" style="background-image:url(img/tips-english.jpg)">
							<div class="thumb">
								<div class="table">
									<div class="cell">Childline’s Tips – English</div>
								</div>
							</div>
						</a>
					</div>
				</div>
			</div>

			<div class="page how-to-help">
				<div class="background" data-preload="img/page-background-2.png" data-type="background"></div>
				<div class="inner">
					<h1>What to do when you’re a bystander?</h1>
					<div class="body">
						<h4>01</h4>
						<h3>Never laugh or join in with the bullying - if you do you are a part of the problem.</h3>
						<h4>02</h4>
						<h3>Speak up but don’t fight the one who bullies. Inform someone or tell the bully that you don’t support his/her behavior. </h3>
						<h4>03</h4>
						<h3>Be a friend to the person that is being bullied. Believe what he/she says.</h3>
						<h4>04</h4>
						<h3>Let the victim know you are sorry about the situation. Help him/her understand it is certainly not his/her fault.</h3>
						<h4>05</h4>
						<h3>Encourage the victim to talk to an adult about it. Maybe even offer to go along with them if they’re scared.</h3>
					</div>
				</div>
			</div>

				<div class="page get-help">
				<div class="background" data-preload="img/page-background.png" data-type="background"></div>
				<div class="inner">
					<h1>Learn More<br/>&amp; Get Help</h1>
					<p>For more information about bullying or if you need immediate help, support or advice visit the <a href="http://www.childlinesa.org.za/" target="_blank" class="pink">Childline website</a> or you can always call Childline on <span class="pink no-wrap">08000 55 555</span> to speak to someone who is there to listen and help you.</p>
					<p><a href="http://goo.gl/forms/IPr9O2l2ln " target="_blank" class="yellow">Order the Childline How to Deal with Bullies booklet here.</a></p>
				</div>
			</div>
		</div>

		<div class="mobile-nav">
			<a href="#/" class="active">Home</a><!--
			--><a href="#/what-is-bullying">What is Bullying</a><!--
			--><a href="#/what-can-i-do">What can I do</a><!--
			--><a href="#/watch-videos">Watch Videos</a><!--
			--><a href="#/meet-celeb">Meet Wayde van Niekerk</a><!--
			--><a href="#/advice-from-childline">Advice From Childline</a><!--
			--><a href="#/how-to-help">How to help?</a><!--
			--><a href="#/get-help">Get Help</a>

			<div class="close"><i class="fa fa-times"></i></div>
		</div>

		<div class="footer">
			<div class="links">
				<div class=""><a href="http://www.cartoonnetworkhq.com/terms-of-use" target="_blank">Terms &amp; Conditions</a> <a href="http://www.cartoonnetworkhq.com/privacy-policy" target="_blank">Privacy Policy</a> <a href="http://www.cartoonnetworkhq.com/cookies-policy" target="_blank">Cookies Policy</a></div>
			</div>
			<span class="open">LEGALS</span>
			<span class="copy">Use of this site signifies your agreement to the Terms of Use. TM &amp; &copy <?php echo date('Y'); ?> Cartoon Network. A Time Warner Company. All Rights Reserved. CartoonNetwork.co.uk is part of the Turner Sports and Entertainment Digital Network</span>
			<a href="http://www.childlinesa.org.za/" target="_blank" class="childline"><img src="img/blank.gif" data-type="src" data-preload="img/footer-childline.png" alt="" /></a>
			<a href="http://www.childlinesa.org.za/" target="_blank" class="childline-sml"><img src="img/blank.gif" data-type="src" data-preload="img/footer-childline-sml.png" alt="" /></a>
		</div>

		<div class="video-player"></div>
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