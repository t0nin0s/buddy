<?php
	ob_start('ob_gzhandler');
	header('X-UA-Compatible: IE=edge,chrome=1');
?>
<!DOCTYPE html>
<html>
	<head>
		<meta charset="UTF-8">
		<title>Porady dla rodziców</title>
		<meta name="description" content="<?php echo $description; ?>">
		<meta name="keywords" content="">
		<meta name="format-detection" content="telephone-no">
		<meta name="viewport" content="initial-scale=1.0, maximum-scale=1.0, user-scalable=no, width=device-width">
		<meta name="apple-mobile-web-app-capable" content="yes" />
		<link rel="icon" type="image/gif" href="../img/favicon_0.ico">
		
		<style>
			body, html {
				margin: 0px;
			}
			img {
				width: 100%;
				height: auto;
			}
		</style>
	</head>
	<body>
		<img src="img/infographic_for_parents.png" alt="" />
	</body>
</html>
<?php
	ob_flush();
?>