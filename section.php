<?php require_once( 'couch/cms.php' ); ?>
<cms:template title='Section Page' clonable='1'>
	<cms:editable name='section_content' type='richtext' />
</cms:template>
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

	<title>Me.Mu - Socio-emotional Learning through Play and Reflection</title>
  
	<!-- Included CSS Files -->
	<link rel="stylesheet" href="stylesheets/foundation.min.css">
	<!-- <link rel="stylesheet" href="stylesheets/app.css"> -->
	<link rel="stylesheet" href="stylesheets/detail.css">
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

	<?php include_once('ga.php'); ?>
</head>
<body>
	<!-- <div class="fixed-bar">
		<div class="header-container">
		<header>
			<h1><a href="index.php">Me<span>.</span>Mu</a></h1>
			<img class="logo" src="images/SmileyFace.png" alt="Me.Mu">
		</header>
		<nav>
			<ul>
				<li><a <cms:if k_page_title == 'About'>class="active"</cms:if> href="section.php?p=2"><span>About</span></a></li>
				<li><a <cms:if k_page_title == 'Games'>class="active"</cms:if> href="section.php?p=3"><span>Games</span></a></li>
				<li><a <cms:if k_page_title == 'Process'>class="active"</cms:if> href="section.php?p=4"><span>Process</span></a></li>
				<li><a <cms:if k_page_title == 'Team'>class="active"</cms:if> href="section.php?p=5"><span>Team</span></a></li>
			</ul>
		</nav>
		</div>
	</div> -->
	<!-- container -->
	<div class="container">
		<?php require_once('header.php'); ?>
		<div class="row">
			<div class="twelve columns">
				<div class="orbit-item">
					<cms:do_shortcodes><cms:show section_content /></cms:do_shortcodes>
				</div>
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

</body>
</html>
<?php COUCH::invoke(); ?>