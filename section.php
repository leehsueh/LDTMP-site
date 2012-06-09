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

	<title>Me.Mu - Social Learning Through Playful Movement</title>
  
	<!-- Included CSS Files -->
	<link href="http://fonts.googleapis.com/css?family=Architects Daughter&subset=latin" rel="stylesheet" type="text/css">
	<link rel="stylesheet" href="stylesheets/foundation.css">
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

</head>
<body>
	<div class="fixed-bar">
		<div class="header-container">
		<header>
			<h1><a href="index.php">Me<span>.</span>Mu</a></h1>
			<img class="logo" src="images/SmileyFace.png" alt="Me.Mu">
			<!-- <img src="images/memu_1big.png" alt=""> -->
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
	</div>
	<!-- container -->
	<div class="container content-container">
		<div class="row">
			<div class="ten columns centered">
				<div class="row">
					<div class="twelve columns">
						<cms:do_shortcodes><cms:show section_content /></cms:do_shortcodes>
					</div>
				</div>
			</div>
		</div>

	</div>
	<!-- container -->


	<!-- Included JS Files -->
	<script src="javascripts/jquery.min.js"></script>
	<script src="javascripts/foundation.js"></script>
	<script src="javascripts/app.js"></script>

</body>
</html>
<?php COUCH::invoke(); ?>