<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title>MythiGame</title>
	<!-- CSS vh vw fallback -->
	<script src="js/lib/vunit-0.2.0.min.js"></script>
	<script>
		new vUnit({
			CSSMap: {
				'.vh': {
					property: 'max-height',
					reference: 'vh'
				},
				'.vw': {
					property: 'max-width',
					reference: 'vw'
				}
			}
		}).init();
	</script>
	<!-- Disable css cache -->
	<script type="text/javascript">
		document.write('<link rel="stylesheet" href="css/sleek.css?'+Math.random()+'">');
	</script>
	<!-- Enable css cache -->
	<!-- <link rel="stylesheet" href="css/sleek.css"> -->
</head>
<body>
	<div id="player"></div>
	<div id="overlay"></div>
	<div id="header">
		<div id="title"></div>
		<div id="subtitle">
			Vous rejoignez actuellement un <b>SCP:RP</b> sur <span id="map"></span>
		</div>
	</div>
	<div id="status-container">
		<div id="status">Récupération des informations du serveur...</div>
		<div id="loading">
			<div id="loading-progress"></div>
		</div>
		<div id="messages"></div>
	</div>
	<div id="music">
		Vous écoutez<div id="music-name"></div>
	</div>
	<div id="enable-audio">Click ici pour écouter la musique</div>
	<div id="error-box"></div>
	<div id="warn">
			<h1>Oops! Something went wrong!</h1>
			<p>Looks like the config file is broken.</p>
			<p>Probably it is just a missing/misplaced comma, quote or bracket.</p>
			<p>Check the browser console for further details.</p>
		</div>
	<script src="js/lib/jquery-2.1.1.min.js"></script>
	<script src="js/lib/jquery.backstretch.min.js"></script>
	<!-- Disable javascript cache -->
	<script type="text/javascript">
		document.write('<script src="js/config.js?'+Math.random()+'"><\/script>');
		document.write('<script src="js/check.js?'+Math.random()+'"><\/script>');
		document.write('<script src="js/sleek.js?'+Math.random()+'"><\/script>');
	</script>
	<!-- Enable javascript cache -->
	<!-- <script src="js/config.js"></script> -->
	<!-- <script src="js/sleek.js"></script> -->
</body>
</html>