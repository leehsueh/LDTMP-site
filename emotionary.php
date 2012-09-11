<?php require_once( 'couch/cms.php' ); ?>
<cms:template title='Emotionary' />
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
	<link rel="stylesheet" href="stylesheets/emotionary.css">
	<!-- fancybox -->
	<link rel="stylesheet" href="javascripts/fancybox2/jquery.fancybox.css?v=2.1.0" type="text/css" media="screen" />
	<link rel="stylesheet" href="javascripts/fancybox2/helpers/jquery.fancybox-thumbs.css?v=2.1.0" type="text/css" media="screen" />

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
		<div class="row banner">
			<div class="twelve columns centered">
				<!-- <header>
					<img id="smiley" src="images/SmileyFace.png" alt="Me.Mu">
					<p id="memu-text"><a href="<cms:link masterpage='index.php' />">Me<span>.</span>Mu</a></p>
					<p id="introduces-text">introduces...</p>
					<img id="emotionary-banner" src="images/emotionary/emotionarybanner.png" alt="emotionary">
				</header> -->
				<p><img id="emotionary-banner" src="images/emotionary/emotionarybanner.png" alt="emotionary"></p>
				<div id="screenshot-gallery">
					<ul class="link-list">
						<li><a href="images/emotionary/screenshots/home_screen.jpg" class="fancybox-thumbs" data-fancybox-group="screenshots" title="The home screen presents two main options - creating an entry and viewing entries."><img src="images/emotionary/screenshots/home_screen.jpg" alt="Home screen"></a></li>
						<li><a href="images/emotionary/screenshots/select_student.jpg" class="fancybox-thumbs" data-fancybox-group="screenshots" title="Select which student you'll be working with."><img src="images/emotionary/screenshots/select_student.jpg" alt=""></a></li>
						<li><a href="images/emotionary/screenshots/entry_step1.jpg" class="fancybox-thumbs" data-fancybox-group="screenshots" title="First the student chooses how he/she is feeling"><img src="images/emotionary/screenshots/entry_step1.jpg" alt=""></a></li>
						<li><a href="images/emotionary/screenshots/entry_step2_audio.jpg" class="fancybox-thumbs" data-fancybox-group="screenshots" title="The student practices expressing why they feel a certain emotion."><img src="images/emotionary/screenshots/entry_step2_audio.jpg" alt=""></a></li>
						<li><a href="images/emotionary/screenshots/entry_step2_type.jpg" class="fancybox-thumbs" data-fancybox-group="screenshots" title="If a student is nonverbal, he/she can type a response."><img src="images/emotionary/screenshots/entry_step2_type.jpg" alt=""></a></li>
						<li><a href="images/emotionary/screenshots/edit_student.jpg" class="fancybox-thumbs" data-fancybox-group="screenshots" title="Adding or editing a student."><img src="images/emotionary/screenshots/edit_student.jpg" alt=""></a></li>
					</ul>
				</div>
			</div>
		</div>
		<div class="row faded-panel">
			<div class="three columns">
				<p><a href="http://itunes.apple.com/us/app/emotionary-by-me.mu/id555381720?ls=1&amp;mt=8"><img src="images/app_store_badge_250px.png" alt="Download from the app store"></a></p>
				<ul class="link-list">
					<li>iPad only</li>
					<li>iOS 5.0+</li>
				</ul>
			</div>
			<div class="nine columns">
				<cms:editable name='placeholder_content' type='richtext'>
				<p><strong>Emotionary by Me.Mu</strong> is an emotion diary tool for iPad. It's designed for therapists to help children and adolescents with autism or similar mental disorders understand emotions in the context of their own lives.</p>
				<p><a class="nice button success" href="http://itunes.apple.com/us/app/emotionary-by-me.mu/id555381720?ls=1&amp;mt=8">Get the Free App</a></p>
				</cms:editable>
			</div>
		</div>
		<?php require_once("footer.php"); ?>
	</div>
	<!-- container -->




	<!-- Included JS Files -->
	<script src="javascripts/jquery.min.js"></script>
	<script src="javascripts/foundation.min.js"></script>
	<script src="javascripts/fancybox2/jquery.fancybox.js"></script>
	<script src="javascripts/fancybox2/helpers/jquery.fancybox-thumbs.js"></script>
	<script src="javascripts/app.js"></script>

</body>
</html>
<?php COUCH::invoke(); ?>