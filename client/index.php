<!DOCTYPE html>
<!--[if lt IE 7 ]><html class="ie ie6" lang="en"> <![endif]-->
<!--[if IE 7 ]><html class="ie ie7" lang="en"> <![endif]-->
<!--[if IE 8 ]><html class="ie ie8" lang="en"> <![endif]-->
<!--[if (gte IE 9)|!(IE)]><!--><html lang="en"> <!--<![endif]-->
<head>

	<!-- Basic Page Needs
  ================================================== -->
	<meta charset="utf-8">
	<title>Guess That Track</title>
	<meta name="description" content="Facebook Hackday App">
	<meta name="author" content="Cohaesus">

	<!-- Mobile Specific Metas
  ================================================== -->
	<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">

	<!-- CSS
  ================================================== -->
	<link rel="stylesheet" href="stylesheets/base.css">
	<link rel="stylesheet" href="stylesheets/skeleton.css">
	<link rel="stylesheet" href="stylesheets/layout.css">
	<link rel="stylesheet" href="stylesheets/font-awesome.css" type="text/css" media="screen" />

	<!--[if lt IE 9]>
		<script src="http://html5shim.googlecode.com/svn/trunk/html5.js"></script>
	<![endif]-->

	<!-- Favicons
	================================================== -->
	<link rel="shortcut icon" href="images/favicon.ico">
	<link rel="apple-touch-icon" href="images/apple-touch-icon.png">
	<link rel="apple-touch-icon" sizes="72x72" href="images/apple-touch-icon-72x72.png">
	<link rel="apple-touch-icon" sizes="114x114" href="images/apple-touch-icon-114x114.png">

	<script src="js/libs/jquery.js"></script>
	<script src="js/libs/pusher.js"></script>
	<script src="js/buzz.js"></script>
	<script src="js/client.js"></script>
</head>
<body>



	<!-- Primary Page Layout
	================================================== -->

	<!-- Delete everything in this .container and get started on your own site! -->

	<div class="container">
		<header class="sixteen columns">
			<h1>Guess That Track</h1>
			<h2>As quick as you can!</h2>
		</header>

		<div class="login">
			<div id="fb-root"></div>
			<script>
			window.fbAsyncInit = function() {
			  FB.init({
			    appId      : '145963522215015', // App ID
			    channelUrl : '//http://guess-that-track.herokuapp.com/channel.html', // Channel File
			    status     : true, // check login status
			    cookie     : true, // enable cookies to allow the server to access the session
			    xfbml      : true  // parse XFBML
			  });
			  // Additional initialization code here
			};
			// Load the SDK Asynchronously
			(function(d){
			   var js, id = 'facebook-jssdk', ref = d.getElementsByTagName('script')[0];
			   if (d.getElementById(id)) {return;}
			   js = d.createElement('script'); js.id = id; js.async = true;
			   js.src = "//connect.facebook.net/en_US/all.js";
			   ref.parentNode.insertBefore(js, ref);
			 }(document));
			</script>

			<div class="fb-login-button" scope="">Login with Facebook</div>
		</div>

		<div class="sixteen columns game">
			<span class="countdown go">Go!</span>
			<div class="countdown-bar"><div class="amount"></div></div>
			<div id="player">
			</div>
		</div>

		<div class="sixteen columns players">
			<h2>Who is playing</h2>
		</div>

		<div class="two columns user">
			<div class="placeholder">
				<i class="icon-music"></i>
			</div>
		</div>

		<div class="two columns user">
			<div class="placeholder">
				<i class="icon-music"></i>
			</div>
		</div>

		<div class="two columns user">
			<div class="placeholder">
				<i class="icon-music"></i>
			</div>
		</div>

		<div class="two columns user">
			<div class="placeholder">
				<i class="icon-music"></i>
			</div>
		</div>

		<div class="two columns user">
			<div class="placeholder">
				<i class="icon-music"></i>
			</div>
		</div>

		<div class="two columns user">
			<div class="placeholder">
				<i class="icon-music"></i>
			</div>
		</div>

		<div class="two columns user">
			<div class="placeholder">
				<i class="icon-music"></i>
			</div>
		</div>

		<div class="two columns user">
			<div class="placeholder">
				<i class="icon-music"></i>
			</div>
		</div>

		<div class="two columns user">
			<div class="placeholder">
				<i class="icon-music"></i>
			</div>
		</div>

		<div class="two columns user">
			<div class="placeholder">
				<i class="icon-music"></i>
			</div>
		</div>

		<div class="two columns user">
			<div class="placeholder">
				<i class="icon-music"></i>
			</div>
		</div>

		<div class="two columns user">
			<div class="placeholder">
				<i class="icon-music"></i>
			</div>
		</div>

		<div class="two columns user">
			<div class="placeholder">
				<i class="icon-music"></i>
			</div>
		</div>

		<div class="two columns user">
			<div class="placeholder">
				<i class="icon-music"></i>
			</div>
		</div>

		<div class="two columns user">
			<div class="placeholder">
				<i class="icon-music"></i>
			</div>
		</div>

		<div class="two columns user">
			<div class="placeholder">
				<i class="icon-music"></i>
			</div>
		</div>

		<div class="sixteen columns guess">
			<h2>What is playing?</h2>
			<ul>
				<li><a data-track-id="1">Track</a></li>
				<li><a data-track-id="2">Track</a></li>
				<li><a data-track-id="3">Track</a></li>
				<li><a data-track-id="4">Track</a></li>
			</ul>
		</div>

	</div><!-- container -->


<!-- End Document
================================================== -->
</body>
</html>
