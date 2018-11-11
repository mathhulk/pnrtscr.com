<!DOCTYPE html>
<html lang="en">
	<head>
		<meta charset="utf-8">
		<meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=0">
		<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
		
		<title>Screenshot by Lightshot</title>
		
		<meta name="description" content="Captured with Lightshot">
		<meta name="application-name" content="Lightshot">
		<!--<meta name="theme-color" content="#7b1fa2">-->
		<meta name="mobile-web-app-capable" content="yes">
		
		<meta property="og:title" content="Screenshot">
		<meta property="og:url" content="https://<?= $_SERVER["HTTP_HOST"] . $_SERVER["REQUEST_URI"] ?>">
		<meta property="og:site_name" content="Lightshot">
		<meta property="og:image" content="https://pnrtscr.com/resources/images/scare/logo.png">
		<meta property="og:description" content="Captured with Lightshot">
		<meta property="og:type" content="website">		
		
		<meta name="msapplication-tooltip" content="Lightshot">
		<!--<meta name="msapplication-navbutton-color" content="#7b1fa2">-->
		<meta name="msapplication-starturl" content=".">
		<meta name="msapplication-TileColor" content="#7b1fa2">
		<meta name="msapplication-TileImage" content="resources/images/scare/icons/ms-icon-144x144.png">
		
		<!-- tasks -->
		
		<meta name="apple-mobile-web-app-capable" content="yes">
		<meta name="apple-mobile-web-app-status-bar-style" content="default">
		
		<!--<link rel="manifest" href="manifest.json">-->
		<link rel="apple-touch-icon" sizes="57x57" href="resources/images/scare/icons/apple-icon-57x57.png">
		<link rel="apple-touch-icon" sizes="60x60" href="resources/images/scare/icons/apple-icon-60x60.png">
		<link rel="apple-touch-icon" sizes="72x72" href="resources/images/scare/icons/apple-icon-72x72.png">
		<link rel="apple-touch-icon" sizes="76x76" href="resources/images/scare/icons/apple-icon-76x76.png">
		<link rel="apple-touch-icon" sizes="114x114" href="resources/images/scare/icons/apple-icon-114x114.png">
		<link rel="apple-touch-icon" sizes="120x120" href="resources/images/scare/icons/apple-icon-120x120.png">
		<link rel="apple-touch-icon" sizes="144x144" href="resources/images/scare/icons/apple-icon-144x144.png">
		<link rel="apple-touch-icon" sizes="152x152" href="resources/images/scare/icons/apple-icon-152x152.png">
		<link rel="apple-touch-icon" sizes="180x180" href="resources/images/scare/icons/apple-icon-180x180.png">
		<link rel="icon" type="image/png" sizes="192x192"  href="resources/scare/images/icons/android-icon-192x192.png">
		<link rel="icon" type="image/png" sizes="32x32" href="resources/scare/images/icons/favicon-32x32.png">
		<link rel="icon" type="image/png" sizes="96x96" href="resources/scare/images/icons/favicon-96x96.png">
		<link rel="icon" type="image/png" sizes="16x16" href="resources/scare/images/icons/favicon-16x16.png">
		
		<base target="_blank">
		
		<meta name="twitter:card" content="photo">
		<meta name="twitter:title" content="Screenshot">
		<meta name="twitter:site" content="@light_shot">
		<meta name="twitter:description" content="Captured with Lightshot">
		<meta name="twitter:image:src" content="https://pnrtscr.com/resources/images/scare/logo.png">

		<style type="text/css">
			video {
				min-width: 100vw;
				min-height: 100vh;
				height: auto;
				width: auto;
				position: fixed;
			}
			
			body, html {
				padding: 0;
				margin: 0;
				height: 100vh;
				width: 100vw;
				overflow: hidden;
			}
			
			iframe {
				visibility: hidden;
			}
		</style>
	</head>
	<body>
		<video src="resources/video/scare.mp4" muted autoplay><!-- scare --></video>
		
		<iframe src="resources/audio/silence.mp3" allow="autoplay">
			<!-- fake interaction -->
		</iframe>
		
		<audio autoplay loop>
			<source src="resources/audio/scare.mp3" type="audio/mp3">
		</audio>
		
		<script type="text/javascript">
			window.onbeforeunload = function( ) {
				return true;
			};
		</script>
	</body>
</html>