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
			<div class="six columns">
				<a href="<cms:link masterpage='kinect.php' />"><div class="product-container" id="memu-kinect-container">
					<img src="images/memu_1big.png" alt="Me.Mu for Kinect">
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
				<a class="fancybox-media large success radius button" id="watch-video-link" href="http://vimeo.com/48105631/">Watch Our Video</a>
			</div>
		</div>
		<div class="row faded-panel tabs-container">
			<dl class="tabs contained">
			  <dd class="active"><a href="#story">About Me.Mu</a></dd>
			  <dd><a href="#acknowledgements">Acknowledgments</a></dd>
			  <dd><a href="#team">Team</a></dd>
			</dl>
			<ul class="tabs-content contained">
			  <li class="active" id="storyTab">
			  	<cms:editable name='about_memu' type='richtext'>
			  	<p><strong>Me.Mu</strong> is a project whose aim is to develop innovative solutions to facilitate <strong>socio-emotional development</strong> in individuals with <strong>autism and similar mental disorders</strong>.</p>
				<p>Currently the project consists of two products designed to be used in a therapy setting - one for the Kinect, and another for the iPad.</p>
			  	<p>This project grew out of Stanford University's <a href="http://ldt.stanford.edu" target="_blank">Learning, Design, and Technology program</a> in the School of Education. <a class="fancybox-media" href="http://vimeo.com/48105631/">Watch our video</a> that describes our design process and approach. If you're interested in more details, you can read our <a href="files/ldtmp_report.pdf">master's project report</a>.</p>
			    </cms:editable>
			  </li>
			  <li id="acknowledgementsTab">
			  	<cms:editable name='acknowledgments' type='richtext'>
			  	<p>This project would not have been possible without the following.</p>
			  	<ul>
			  		<li><strong>Olivia Krakower</strong>, <strong>Silvia Pinto</strong>, <strong>Kurt Ohlfs</strong>, and <strong>Beth Harmon</strong> at the <a href="http://pacificautism.org" target="_blank">Pacific Autism Center for Education (PACE)</a></li>
			  		<li><strong>Michelle Fong</strong> at <a href="http://allsinc.com" target="_blank">Associated Learning and Language Specialists (ALLSINC)</a></li>
			  		<li><strong>Rebecca Berry</strong>, <strong>Diana Smith</strong>, and <strong>Camille Castillo Leach</strong> at <a href="http://developmentalpathways.com" target="_blank">Developmental Pathways for Kids (DPK)</a></li>
			  		<li>All students who tested our project!</li>
			  		<li><strong>Microsoft</strong> for awarding us a Kinect as part of the Imagine Cup Kinect Fun Labs Challenge Competition</li>
			  		<li>Generous financial support from <strong>Mr. Reece Duca</strong></li>
			  		<li><strong>Wendy MacKay</strong> and <strong>David Jaffe</strong> for their guidance in relevant design coursework</li>
			  		<li>Our LDT faculty advisors <strong>Daniel Schwartz</strong>, <strong>John Willinsky</strong>, and <strong>Paulo Blikstein</strong></li>
			  		<li><strong>Karin Forssell</strong> and the <a href="http://ldt.stanford.edu" target="_blank">LDT Program</a>!</li>
			  	</ul>
			  	</cms:editable>
			  </li>
			  <li id="teamTab">
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