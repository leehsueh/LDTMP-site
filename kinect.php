<?php require_once( 'couch/cms.php' ); ?>
<cms:template title='Me.Mu Kinect' />
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
		<?php require_once('header.php'); ?>
		<div class="row">
			<div class="twelve columns">
				<div class="flex-video widescreen vimeo">
					<iframe src="http://player.vimeo.com/video/48102302" width="500" height="281" frameborder="0" webkitAllowFullScreen mozallowfullscreen allowFullScreen></iframe> <p><a href="http://vimeo.com/48102302">Me.Mu for Kinect for Windows</a> from <a href="http://vimeo.com/user11570905">Hain-Lee Hsueh</a> on <a href="http://vimeo.com">Vimeo</a>.</p>
				</div>
			</div>
		</div>
		<div class="row">
			<div class="seven columns">
				<div class="faded-panel">
					<cms:editable name='memu_description' type='richtext'>
					<h3>Under Construction</h3>
					<p>Me.Mu for Kinect for Windows is a pair of mini-games to help children with autism practice social skills while developing general motor coordination.</p>
					</cms:editable>
				</div>
			</div>
			<div class="five columns">
				<div class="faded-panel">
					<h3>Get Me.Mu</h3>
					<p><button class="nice large primary button disabled" disabled="disabled">Download Coming Soon</button></p>
					<ul id="download-instructions" class="link-list">
						<li><a href="#" data-reveal-id="requirements-modal">Requirements</a></p></li>
						<li><a href="#" data-reveal-id="instructions-modal">Setup Instructions</a></li>
					</ul>
				</div>
			</div>
		</div>
		<?php require_once("footer.php"); ?>
	</div>
	<!-- container -->

	<!-- modal dialog -->
	<div class="reveal-modal" id="requirements-modal">
		<cms:editable name='requirements' type='richtext'>
		<h3 class="subheader">Requirements</h3>
		<ul>
			<li>A Microsoft <a href="http://www.microsoft.com/en-us/kinectforwindows/purchase/" target="_blank" title="Purchase Kinect for Windows">Kinect for Windows sensor</a> (Note: an XBox Kinect sensor is not compatible. Ask Microsoft why)</li>
			<li>Windows machine running Windows 7 or later</li>
			<li><a href="http://www.microsoft.com/en-us/kinectforwindows/develop/developer-downloads.aspx" target="_blank">Kinect for Windows SDK</a> v1.0 or later installed</li>
			<li>A large display (projector setup may be ideal for groups)</li>
			<li>A large enough space</li>
		</ul>
		</cms:editable>
		<a class="close-reveal-modal">&#215;</a>
	</div>
	<div class="reveal-modal" id="instructions-modal">
		<cms:editable name='instructions' type='richtext'>
		<h3 class="subheader">Instructions</h3>
		<ol>
			<li>Make sure you have all the <a href="#" data-reveal-id="requirements-modal">requirements</a> met</li>
			<li>Download the zip file to your Windows computer</li>
			<li>Extract the contents to a desired location; there should be a .exe file and one other folder</li>
			<li>Plug in your Kinect for Windows sensor via USB; make sure you plug in the power adapter too</li>
			<li>Double-click the .exe file to launch the application</li>
			<li>On the dialog that comes up, select a screen size and quality level, depending on how fast your machine is; the defaults should be fine</li>
			<li>After the application finishes loading, the main menu should be displayed</li>
		</ol>
		</cms:editable>
		<a class="close-reveal-modal">&#215;</a>
	</div>


	<!-- Included JS Files -->
	<script src="javascripts/jquery.min.js"></script>
	<script src="javascripts/foundation.min.js"></script>
	<script src="javascripts/app.js"></script>

</body>
</html>
<?php COUCH::invoke(); ?>