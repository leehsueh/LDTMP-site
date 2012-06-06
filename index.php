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

	<title>Me.Mu - Social Learning Through Playful Movement</title>
  
	<!-- Included CSS Files -->
	<link href="http://fonts.googleapis.com/css?family=Architects Daughter&subset=latin" rel="stylesheet" type="text/css">
	<link rel="stylesheet" href="stylesheets/foundation.css">
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

</head>
<body>

	<!-- container -->
	<div class="container">
		<div class="row banner">
			<div class="eight columns centered">
				<header>
					<h1>Me<span>.</span>Mu</h1>
					<p><cms:editable name='tagline' type='text'>social learning through playful movement</cms:editable></p>
					<img class="logo" src="images/SmileyFace.png" alt="Me.Mu">
				</header>
			</div>
		</div>
		<div class="row">
			<div class="eight columns centered">
				<nav class="row">
					<cms:editable name='home_nav' type='richtext'>
					<ul>
						<li class="four columns"><a href="#"><span>Games</span></a></li>
						<li class="four columns"><a href="#"><span>About</span></a></li>
						<li class="four columns"><a href="#"><span>Process</span></a></li>
					</ul>
					</cms:editable>
				</nav>
			</div>
		</div>

		<!--<div class="row">
			<div class="eight columns">
				<h3>Tabs</h3>
				<dl class="tabs">
					<dd><a href="#simple1" class="active">Simple Tab 1</a></dd>
					<dd><a href="#simple2">Simple Tab 2</a></dd>
					<dd><a href="#simple3">Simple Tab 3</a></dd>
				</dl>

				<ul class="tabs-content">
					<li class="active" id="simple1Tab">This is simple tab 1's content. Pretty neat, huh?</li>
					<li id="simple2Tab">This is simple tab 2's content. Now you see it!</li>
					<li id="simple3Tab">This is simple tab 3's content. It's, you know...okay.</li>
				</ul>

				<h3>Buttons</h3>
				
				<div class="row">
					<div class="six columns">
						<p><a href="#" class="small blue button">Small Blue Button</a></p>
						<p><a href="#" class="blue button">Medium Blue Button</a></p>
						<p><a href="#" class="large blue button">Large Blue Button</a></p>
		
						<p><a href="#" class="nice radius small blue button">Nice Blue Button</a></p>
						<p><a href="#" class="nice radius blue button">Nice Blue Button</a></p>
						<p><a href="#" class="nice radius large blue button">Nice Blue Button</a></p>
					</div>
					<div class="six columns">
						<p><a href="#" class="small red button">Small Red Button</a></p>
						<p><a href="#" class="green button">Medium Green Button</a></p>
						<p><a href="#" class="large white button">Large White Button</a></p>
		
						<p><a href="#" class="nice radius small red button">Nice Red Button</a></p>
						<p><a href="#" class="nice radius green button">Nice Green Button</a></p>
						<p><a href="#" class="nice radius large white button">Nice White Button</a></p>
					</div>
				</div>
			</div>

			<div class="four columns">			
				<h4>Getting Started</h4>
				<p>We're stoked you want to try Foundation! To get going, this file (index.html) includes some basic styles you can modify, play around with, or totally destroy to get going.</p>

				<h4>Other Resources</h4>
				<p>Once you've exhausted the fun in this document, you should check out:</p>
				<ul class="disc">
					<li><a href="http://foundation.zurb.com/docs">Foundation Documentation</a><br />Everything you need to know about using the framework.</li>
					<li><a href="http://github.com/zurb/foundation">Foundation on Github</a><br />Latest code, issue reports, feature requests and more.</li>
					<li><a href="http://twitter.com/foundationzurb">@foundationzurb</a><br />Ping us on Twitter if you have questions. If you build something with this we'd love to see it (and send you a totally boss sticker).</li>
				</ul>
			</div>
		</div>-->

	</div>
	<!-- container -->




	<!-- Included JS Files -->
	<script src="javascripts/jquery.min.js"></script>
	<script src="javascripts/foundation.js"></script>
	<script src="javascripts/app.js"></script>

</body>
</html>
<?php COUCH::invoke(); ?>