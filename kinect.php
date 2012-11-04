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

	<!-- fancybox -->
	<link rel="stylesheet" href="javascripts/fancybox2/jquery.fancybox.css?v=2.1.0" type="text/css" media="screen" />

	<?php include_once('ga.php'); ?>

</head>
<body>

	<!-- container -->
	<div class="container">
		<?php require_once('header.php'); ?>
		<div class="row">
			<div class="six columns">
				<a class="fancybox-media" id="watch-video-link" href="http://vimeo.com/48102302/">
					<img src="images/kinect/video1_thumb.png" alt="Me.Mu Kinect for Windows">
				</a>
				
			</div>
			<div class="six columns">
				<div id="download-header">
					<p><a class="nice large primary button" href="http://dl.dropbox.com/u/9815502/Memu_v1.0.zip">Download Me.Mu v1.0</a></p>
					<ul id="download-modals">
						<li><a href="#" data-reveal-id="requirements-modal">Requirements</a></li>
						<li><a href="#" data-reveal-id="instructions-modal">Setup Instructions</a></li>
					</ul>
				</div>
				
				<cms:editable name='memu_description' type='richtext'>
				<p>
					<strong>Me.Mu for Kinect for Windows</strong> is a pair of mini-games to help children with autism practice social skills while developing general motor coordination.
				</p>
				</cms:editable>
				<ul class="link-list" id="game-links">
					<li><a class="scroll-link" href="#falling-faces-bookmark">Falling Faces</a></li>
					<li><a class="scroll-link" href="#hello-park-wrapper">Hello Park</a></li>
				</ul>
				
			</div>
		</div>

		<div class="row">
			<div class="twelve columns">
				<hr id="falling-faces-bookmark" style="visibility:hidden">
			</div>
		</div>

		<div class="row">
			<div class="twelve columns">
				<div id="falling-faces-wrapper">
					<h3 class="cloud-header">Falling Faces</h3>
					<div id="falling-faces-orbit">
						<cms:editable name='falling_faces_info' label='Falling Faces Orbit' type='group' />
						<div class="game-orbit-item">
							<p><a href="images/kinect/menu_ff.png" class="fancybox"><img src="images/kinect/menu_ff.png" alt="choosing one of the levels of Falling Faces from the main menu"></a></p>
							<cms:editable type='richtext' name='falling_faces_1' group='falling_faces_info'>
							<p>Falling Faces is a game consisting of three levels that introduces facial emotions. The desired learning outcome is for the player to pay more attention to facial expressions rather than fixate on other peripheral cues. It also aims to increase the processing speed for recognizing emotions.</p>
							</cms:editable>
						</div>
						<div class="game-orbit-item">
							<p><a href="images/kinect/ff_level1_prompt.png" class="fancybox"><img src="images/kinect/ff_level1_prompt.png" alt="Prompt to burst faces"></a>
								<a href="images/kinect/ff_level1.png" class="fancybox"><img src="images/kinect/ff_level1.png" alt="First level of Falling Faces"></a></p>
							<cms:editable type='richtext' name='falling_faces_2' group='falling_faces_info'>
							<p>The core mechanic of this game entails choosing between two balls that fall from the sky. A choice is made by touching one of the balls with the avatar's body. In the first level, players learn to focus on general facial expressions by popping the balls with faces and ignoring the balls that are blank. </p>
							</cms:editable>
						</div>
						<div class="game-orbit-item">
							<p><a class="fancybox" href="images/kinect/ff_level23_prompt.png"><img src="images/kinect/ff_level23_prompt.png" alt="Prompt to burst a particular emotion"></a>
								<a class="fancybox" href="images/kinect/ff_level2.png"><img src="images/kinect/ff_level2.png" alt="First level of Falling Faces"></a></p>
							<cms:editable type='richtext' name='falling_faces_3' group='falling_faces_info'>
							<p>In the second level of the game, the player is given a target emotion and must distinguish between two facial expressions. The target emotion is selected at random, and each emotion has three corresponding facial expressions of varying degree.</p>
							</cms:editable>
						</div>
						<div class="game-orbit-item">
							<p><a class="fancybox" href="images/kinect/ff_level3.png"><img src="images/kinect/ff_level3.png" alt="Distinguishing emotions with black and white faces"></a></p>
							<cms:editable type='richtext' name='falling_faces_4' group='falling_faces_info'>
							<p>The third level is the same as the second level, but the colors are removed from the faces. This ensures that players are focusing on the facial expressions themselves, and not on other unrelated stimuli such as color.</p>
							</cms:editable>
						</div>
						<div class="game-orbit-item">
							<p><a class="fancybox" href="images/kinect/ff_explosion.png"><img src="images/kinect/ff_explosion.png" alt="Prompt to burst faces"></a><a class="fancybox" href="images/kinect/ff_no_negative_feedback.png"><img src="images/kinect/ff_no_negative_feedback.png" alt="First level of Falling Faces"></a></p>
							<cms:editable type='richtext' name='falling_faces_5' group='falling_faces_info'>
							<p>Rewarding feedback in the form of an explosion is given when the player chooses correctly. If the player chooses incorrectly, there is no explosion or animation aside from the balls just move quickly towards the bottom of the screen. This is because learners may find negative feedback rewarding, and thus become distracted from the learning goal.</p>
							</cms:editable>
						</div>
					</div>
				</div>
			</div>
		</div>

		<div class="row">
			<div class="twelve columns">
				<div id="hello-park-wrapper">
					<h3 class="cloud-header">Hello Park</h3>
					<div id="hello-park-orbit">
						<cms:editable name='hello_park_info' label='Hello Park Orbit' type='group' />
						<div class="game-orbit-item">
							<p><a class="fancybox" href="images/kinect/menu_hp.png"><img src="images/kinect/menu_hp.png" alt="choosing Hello Park from the main menu"></a></p>
							<cms:editable type='richtext' name='hello_park_1' group='hello_park_info'>
							<p>Hello Park is designed to help the player learn how to greet people by waving his/her hand. A proper handwave consists of raising one's hand so that it is above the elbow, and pivoting one's hand back and forth from the elbow. The idea is that with repeated practice, the player can comfortably perform a more natural greeting to others with less anxiety.</p>
							</cms:editable>
						</div>
						<div class="game-orbit-item">
							<p><a class="fancybox" href="images/kinect/hp_prompt.png"><img src="images/kinect/hp_prompt.png" alt="Hello Park prompt"></a></p>
							<cms:editable type='richtext' name='hello_park_2' group='hello_park_info'>
							<p>The player is situated in a park scene. At the beginning of the activity a prompt is displayed showing the particular character that the player needs to wave to. Then the prompt goes away and people begin walking towards the player in the park. The player needs to learn to remember important cues and exercise memory and matching in order to determine who he/she needs to wave to.</p>
							</cms:editable>
						</div>
						<div class="game-orbit-item">
							<p><a class="fancybox" href="images/kinect/hp_james_wave.png"><img src="images/kinect/hp_james_wave.png" alt="Waving to the right person"></a></p>
							<cms:editable type='richtext' name='hello_park_3' group='hello_park_info'>
							<p>When the player waves to the correct person, the character waves back to the player. </p>
							</cms:editable>
						</div>
						<div class="game-orbit-item">
							<p><a class="fancybox" href="images/kinect/hp_no_negative_feedback.png"><img src="images/kinect/hp_no_negative_feedback.png" alt="No exciting negative feedback"></a></p>
							<cms:editable type='richtext' name='hello_park_4' group='hello_park_info'>
							<p>Currently, if the player waves to the wrong person, nothing happens except that the character walks faster off screen. This is in alignment with our principle of not implementing blatant/exciting negative feedback that might distract from the learning goal.</p>
							</cms:editable>
						</div>
					</div>
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
	<script src="javascripts/jquery-ui-1.8.16.custom.min.js"></script>
	<script src="javascripts/foundation.min.js"></script>
	<script src="javascripts/fancybox2/jquery.fancybox.js"></script>
	<script src="javascripts/fancybox2/helpers/jquery.fancybox-media.js"></script>
	<script src="javascripts/app.js"></script>

</body>
</html>
<?php COUCH::invoke(); ?>