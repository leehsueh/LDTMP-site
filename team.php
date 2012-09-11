<?php require_once( 'couch/cms.php' ); ?>
<cms:template title='Team Page' />
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

</head>
<body>
	<!-- container -->
	<div class="container">
		<?php require_once('header.php'); ?>
		<div class="row">
			<div class="twelve columns">
				<div class="orbit-item" id="team-container">
					<h3 class="cloud-header light-green">Team</h3>
					<p><cms:editable name='team_blurb' type='text'>Feel free to email us with comments, questions, issues, bugs, etc!</cms:editable></p>
					<ul id="team-list">
				  		<li>
				  			<cms:editable name='hainlee_info' label='Hain-Lee' type='group' />
				  			<div class="img-container">
				  				<img src="images/hainlee.jpg" alt="Hain-Lee Hsueh">
				  			</div>
				  			<div class="team-info">
								
				  				<h3><cms:editable name='hainlee_name' type='text' group='hainlee_info'>Hain-Lee Hsueh</cms:editable></h3>
				  				<p class="team-title"><cms:editable name='hainlee_title' type='text' group='hainlee_info'>UX Designer and Software Engineer</cms:editable></p>
				  				<cms:editable name='hainlee_links' type='richtext' group='hainlee_info'>
				  				<ul class="link-list">
				  					<li><a href="http://leehsueh.com">Website</a></li>
				  					<li><a href="http://www.linkedin.com/in/leehsueh">LinkedIn</a></li>
				  				</ul>
				  				</cms:editable>
				  			</div>
				  		</li>
				  		<li>
				  			<cms:editable name='anna_info' label='Anna' type='group' />
				  			<div class="img-container">
				  				<img src="images/anna.jpg" alt="Anna Ly">
				  			</div>
				  			<div class="team-info">
				  				<h3><cms:editable name='anna_name' type='text' group='anna_info'>Anna Ly</cms:editable></h3>
				  				<p class="team-title"><cms:editable name='anna_title' type='text' group='anna_info'>UX and Visual Designer</cms:editable></p>
				  				<cms:editable name='anna_links' type='richtext' group='anna_info'>
				  				<ul class="link-list">
				  					<li><a href="http://otterdotter.tumblr.com">Website</a></li>
				  					<li><a href="http://www.linkedin.com/pub/anna-ly/1/284/856">LinkedIn</a></li>
				  				</ul>
				  				</cms:editable>
				  			</div>
				  		</li>
				  	</ul>
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