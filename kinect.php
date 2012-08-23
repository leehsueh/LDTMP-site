<?php require_once( 'couch/cms.php' ); ?>
<!DOCTYPE html>

<!-- paulirish.com/2008/conditional-stylesheets-vs-css-hacks-answer-neither/ -->
<!--[if lt IE 7]> <html class="no-js lt-ie9 lt-ie8 lt-ie7" lang="en"> <![endif]-->
<!--[if IE 7]>    <html class="no-js lt-ie9 lt-ie8" lang="en"> <![endif]-->
<!--[if IE 8]>    <html class="no-js lt-ie9" lang="en"> <![endif]-->
<!--[if gt IE 8]><!--> <html class="no-js" lang="en"> <!--<![endif]-->
<head>
	<meta charset="utf-8" />

	<!-- Set the viewport width to device width for mobile -->
	<meta name="viewport" content="width=device-width" />

	<title>Me.Mu - Socio-emotional Learning Through Play and Reflection</title>
  
	<!-- Included CSS Files -->
	<link rel="stylesheet" href="stylesheets/foundation.min.css">
	<link rel="stylesheet" href="stylesheets/kinect.css">
	<!-- <link rel="stylesheet/less" type="text/css" href="stylesheets/app.less"> -->


	<!--[if lt IE 9]>
		<link rel="stylesheet" href="stylesheets/ie.css">
	<![endif]-->
	
	<script src="javascripts/modernizr.foundation.js"></script>
	<!--<script type="text/javascript" src="javascripts/less-1.3.0.min.js"></script>-->

	<!-- IE Fix for HTML5 Tags -->
	<!--[if lt IE 9]>
		<script src="http://html5shiv.googlecode.com/svn/trunk/html5.js"></script>
	<![endif]-->

</head>
<body>

	<!-- container -->
	<div class="container">
		<div class="row banner">
			<div class="twelve columns">
				<h1 class="memu-text"><a href="index.php">Me<span>.</span>Mu</a></h1>
			</div>
		</div>
		<div class="row">
			<div class="three columns">
				<p><strong>Under Construction!</strong></p>
				<p>Me.Mu for Kinect for Windows is a pair of mini-games to help children with autism practice social skills while developing general motor coordination.</p>
			</div>
			<div class="nine columns">
				<div class="flex-video widescreen vimeo">
					<iframe src="http://player.vimeo.com/video/48102302" width="500" height="281" frameborder="0" webkitAllowFullScreen mozallowfullscreen allowFullScreen></iframe> <p><a href="http://vimeo.com/48102302">Me.Mu for Kinect for Windows</a> from <a href="http://vimeo.com/user11570905">Hain-Lee Hsueh</a> on <a href="http://vimeo.com">Vimeo</a>.</p>
				</div>
			</div>
		</div>

	</div>
	<!-- container -->




	<!-- Included JS Files -->
	<script src="javascripts/jquery.min.js"></script>
	<script src="javascripts/foundation.min.js"></script>
	<script src="javascripts/app.js"></script>

</body>
</html>
<?php COUCH::invoke(); ?>