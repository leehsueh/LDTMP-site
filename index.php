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
		<div class="row banner">
			<header class="twelve columns centered">
				<div class="six columns memu-banner">
					<img class="logo" src="images/SmileyFace.png" alt="Me.Mu">
					<h1>Me<span>.</span>Mu</h1>
				</div>
				<div class="six columns"><p><cms:editable name='tagline' type='text'>socio-emotional learning through playful movement</cms:editable></p></div>
			</header>
		</div>
		<div class="row">
			<div class="seven columns">
				<div id="masthead">
					<p>Me.Mu is a project whose aim is to develop innovative solutions to facilitate socio-emotional development in individuals with autism and similar mental disorders.</p>
					<p>Currently the project consists of two products - one for the Kinect, and another for the iPad.</p>
				</div>
			</div>
			<div class="five columns">
				<div id="products-container">
					<div id="memu-kinect-container">
						<a href="kinect/"><img src="images/memu_1big.png" alt="Me.Mu for Kinect"></a>
					</div>
					<div id="emotionary-container">
						<a href="emotionary/"><img src="images/emotionary/emotionarybanner.png" alt="Emotionary for iPad"></a>
					</div>
				</div>
			</div>
		</div>
		<div class="row faded-panel">
			<dl class="tabs contained">
			  <dd class="active"><a href="#simpleContained1">Our Story</a></dd>
			  <dd><a href="#simpleContained2">Acknowledgments</a></dd>
			  <dd class="hide-on-phones"><a href="#simpleContained3">Team</a></dd>
			</dl>
			<ul class="tabs-content contained">
			  <li class="active" id="simpleContained1Tab">
			  	<p>This project grew out of Stanford University's Learning, Design, and Technology program in the School of Education. <a class="fancybox fancybox.iframe" href="http://www.youtube.com/embed/OzAzSYp_7rc?autoplay=1">Watch our video</a> that describes our design process and approach. If you're interested in more details, you can read our master's project report.</p>
			  </li>
			  <li id="simpleContained2Tab">
			  	<p>This project would not have been possible without the following.</p>
			  	<ul>
			  		<li>Olivia Krakower, Silvia Pinto, Kurt Ohlfs, and Beth Harmon at the Pacific Autism Center for Education (PACE)</li>
			  		<li>Michelle Fong at Associated Learning and Language Specialists (ALLSINC)</li>
			  		<li>Rebecca Berry, Diana Smith, and Camille Castillo Leach at Developmental Pathways for Kids (DPK)</li>
			  		<li>All students who tested our project!</li>
			  		<li>Microsoft for awarding us a Kinect as part of the Imagine Cup Kinect Fun Labs Challenge Competition</li>
			  		<li>Generous financial support from Mr. Reece Duca</li>
			  		<li>Wendy MacKay and David Jaffe for their guidance in relevant design coursework</li>
			  		<li>Our LDT faculty advisors Daniel Schwartz, John Willinsky, and Paulo Blikstein</li>
			  	</ul>
			  </li>
			  <li id="simpleContained3Tab">
			  	<ul id="team-list">
			  		<li>
			  			<h3>Hain-Lee Hsueh</h3>
			  			<p>Hain-Lee graduated from Cornell University with a B.S. in Electrical and Computer Engineering and a minor in Computer Science in 2009. He worked as an applications engineer at Oracle for two years developing enterprise applications. On the side he also dabbled in various web technologies and frameworks.
			  			</p>
			  			<p>Hain-Lee decided to enroll in the LDT program to apply his technical skills to what he felt was a more meaningful domain, namely education. His interest is in designing and prototyping web and mobile software that is informed by educational research to facilitate teaching and learning in productive and innovative ways.</p>
			  		</li>
			  		<li>
			  			<h3>Anna Ly</h3>
			  		</li>
			  	</ul>
			  </li>
			</ul>
		</div>

		<!-- <div class="row">
			<div class="ten columns centered">
				<nav class="row">
					<ul>
						<li class="four columns"><a href="#"><span>Games</span></a></li>
						<li class="four columns"><a href="#"><span>About</span></a></li>
						<li class="four columns"><a href="#"><span>Process</span></a></li>
					</ul>
				</nav>
			</div>
		</div> -->
		<div class="row">
			<footer>
			<p>Copyright &copy;2012 Me.Mu</p>
			</footer>
		</div>
		
	</div>
	<!-- container -->

	<!-- modal -->
	<div class="reveal-modal" id="video-modal">
		<div class="flex-video widescreen">
			<iframe width="560" height="315" src="http://www.youtube.com/embed/OzAzSYp_7rc" frameborder="0" allowfullscreen></iframe>
		</div>
		<a class="close-reveal-modal">&#215;</a>
	</div>

	<!-- Included JS Files -->
	<script src="javascripts/jquery.min.js"></script>
	<script src="javascripts/foundation.min.js"></script>
	<script src="javascripts/fancybox2/jquery.fancybox.js"></script>
	<script src="javascripts/app.js"></script>
	</script>

</body>
</html>
<?php COUCH::invoke(); ?>