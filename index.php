<!doctype html>
<!-- paulirish.com/2008/conditional-stylesheets-vs-css-hacks-answer-neither/ -->
<!--[if lt IE 7]> <html class="no-js lt-ie9 lt-ie8 lt-ie7" lang="en"> <![endif]-->
<!--[if IE 7]>    <html class="no-js lt-ie9 lt-ie8" lang="en"> <![endif]-->
<!--[if IE 8]>    <html class="no-js lt-ie9" lang="en"> <![endif]-->
<!-- Consider adding a manifest.appcache: h5bp.com/d/Offline -->
<!--[if gt IE 8]><!--> <html class="no-js" lang="en"> <!--<![endif]-->
<head>
  <meta charset="utf-8">

  <!-- Use the .htaccess and remove these lines to avoid edge case issues.
       More info: h5bp.com/i/378 -->
  <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">

  <title></title>
  <meta name="description" content="">

  <!-- Mobile viewport optimized: h5bp.com/viewport -->
  <meta name="viewport" content="width=device-width">

  <!-- Place favicon.ico and apple-touch-icon.png in the root directory: mathiasbynens.be/notes/touch-icons -->

  <link rel="stylesheet" href="css/bootstrap.min.css">
  <link rel="stylesheet" href="css/style.css">

  <!-- More ideas for your <head> here: h5bp.com/d/head-Tips -->

</head>
<body>
  <!-- Prompt IE 6 users to install Chrome Frame. Remove this if you support IE 6.
       chromium.org/developers/how-tos/chrome-frame-getting-started -->
  <!--[if lt IE 7]><p class=chromeframe>Your browser is <em>ancient!</em> <a href="http://browsehappy.com/">Upgrade to a different browser</a> or <a href="http://www.google.com/chromeframe/?redirect=true">install Google Chrome Frame</a> to experience this site.</p><![endif]-->
  <header>

  </header>
	<div id="home" class="container current">
		<br />
		<i class="icon-screenshot"></i> <span id="location">...</span>
		<br />
		<button id="placemessage" data-to="customize" class="btn btn-large btn-primary">Place Message Here</button>
		
	</div>
	<div id="customize" class="container">
		<form class="form-horizontal">
			<div class="control-group">
				<label class="control-label" for="name">Subject</label>
				<div class="controls">
					<input class="input-xlarge" id="name">
					<p class="help-block">(visible)</p>
				</div>
			</div>
			<div class="control-group">
				<label class="control-label" for="message">Message</label>
				<div class="controls">
					 <textarea id="message"></textarea>
					<p class="help-block"></p>
				</div>
			</div>
			<div class="control-group">
				<div class="controls">
					 <a id="save" class="btn btn-primary" data-to="share">Save</a>
					<p class="help-block"></p>
				</div>
			</div>
		
	</div>
	<div id="share" class="container">
		Copy the address below and send it to your friends!<br />
		<input id="link" value="http://">
		&nbsp;
		<button class="btn btn-primary" data-to="home">Done</button>
	</div>
	<div id="hotcold" class="container">
		<h1><span id="dist">500m</span> away</h1>
		<h2>...</h2>
		<button class="btn btn-primary" data-to="home">Exit</button>
	</div>
  <footer>

  </footer>


  <!-- JavaScript at the bottom for fast page loading -->

  <!-- Grab Google CDN's jQuery, with a protocol relative URL; fall back to local if offline -->
  

  <!-- scripts concatenated and minified via build script -->
  <script type="text/javascript" src="js/jquery.js"></script>
  <script type="text/javascript" src="http://code.jquery.com/ui/1.8.13/jquery-ui.min.js"></script>
  <script src="js/bootstrap.min.js"></script>
  <script src="js/plugins.js"></script>
  <script src="js/script.js"></script>
  <!-- end scripts -->

  <!-- Asynchronous Google Analytics snippet. Change UA-XXXXX-X to be your site's ID.
       mathiasbynens.be/notes/async-analytics-snippet -->
  <script>
    var _gaq=[['_setAccount','UA-XXXXX-X'],['_trackPageview']];
    (function(d,t){var g=d.createElement(t),s=d.getElementsByTagName(t)[0];
    g.src=('https:'==location.protocol?'//ssl':'//www')+'.google-analytics.com/ga.js';
    s.parentNode.insertBefore(g,s)}(document,'script'));
  </script>
</body>
</html>