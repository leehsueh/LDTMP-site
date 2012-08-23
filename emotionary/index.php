<?php require_once( '../couch/cms.php' ); ?>
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
	<link rel="stylesheet" href="../stylesheets/foundation.min.css">
	<link rel="stylesheet" href="../stylesheets/emotionary.css">
	<!-- <link rel="stylesheet/less" type="text/css" href="stylesheets/app.less"> -->


	<!--[if lt IE 9]>
		<link rel="stylesheet" href="stylesheets/ie.css">
	<![endif]-->
	
	<script src="../javascripts/modernizr.foundation.js"></script>
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
			<div class="ten columns centered">
				<header>
					<img id="smiley" src="../images/SmileyFace.png" alt="Me.Mu">
					<p id="memu-text"><a href="../">Me<span>.</span>Mu</a></p>
					<p id="introduces-text">introduces...</p>
					<img src="../images/emotionary/emotionarybanner.png" alt="emotionary">

				</header>
				
			</div>
		</div>
		<div class="row">
			<div class="ten columns centered">
				<p id="coming-soon-text">Coming soon!</p>
				<p>Emotionary by Me.Mu is an emotion diary tool for iPad. It's designed for therapists to help children and adolescents with autism or similar mental disorders understand emotions in the context of their own lives.</p>
			</div>
		</div>

	</div>
	<!-- container -->




	<!-- Included JS Files -->
	<script src="../javascripts/jquery.min.js"></script>
	<script src="../javascripts/foundation.min.js"></script>
	<script src="../javascripts/app.js"></script>

</body>
</html>
<?php //COUCH::invoke(); ?>