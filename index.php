<?php require_once( 'couch/cms.php' ); ?>
<cms:template title='Index Page' />
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
	<link href="http://fonts.googleapis.com/css?family=Architects Daughter&subset=latin" rel="stylesheet" type="text/css">
	<link rel="stylesheet" href="stylesheets/foundation.min.css">
	<link rel="stylesheet" href="stylesheets/app.css">
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

	<!-- fancybox -->
	<link rel="stylesheet" href="javascripts/fancybox2/jquery.fancybox.css?v=2.1.0" type="text/css" media="screen" />


</head>
<body>

	<!-- container -->
	<div class="container">
		<?php require_once('header.php'); ?>
		<div class="row">
			<div class="six columns">
				<a href="<cms:link masterpage='kinect.php' />"><div class="product-container" id="memu-kinect-container">
					<img src="images/kinect/memu_logo_kinect.png" alt="Me.Mu for Kinect">
					<p><cms:editable name='memu_description' type='text'>A pair of mini-games using Kinect&trade; for Windows</cms:editable></p>
				</div></a>
			</div>
			<div class="six columns">
				<a href="<cms:link masterpage='emotionary.php' />"><div class="product-container" id="emotionary-container">
					<img src="images/emotionary/emotionarybanner.png" alt="Emotionary for iPad">
					<p><cms:editable name='emotionary_description' type='text'>An emotion diary iPad app</cms:editable></p>
				</div></a>
			</div>
		</div>
		<div class="row">
			<div class="six columns centered">
				<a class="fancybox-media" id="watch-video-link" href="http://vimeo.com/48105631/">Watch Our Video</a>
			</div>
		</div>

		<?php require_once("footer.php"); ?>
		
	</div>
	<!-- container -->

	<!-- Included JS Files -->
	<script src="javascripts/jquery.min.js"></script>
	<script src="javascripts/foundation.min.js"></script>
	<script src="javascripts/fancybox2/jquery.fancybox.js"></script>
	<script src="javascripts/fancybox2/helpers/jquery.fancybox-media.js"></script>
	<script src="javascripts/app.js"></script>
	</script>

</body>
</html>
<?php COUCH::invoke(); ?>