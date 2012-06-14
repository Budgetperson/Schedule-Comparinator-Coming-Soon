<?php
// default values; TODO: backend implementation
$numUsers = 123;
$hasError = false;
$error = 'Please enter a valid email address below.';
?>
<!DOCTYPE html>
<html lang="en" itemscope itemtype="http://schema.org/Product">
	<head>
		<title>Schedule Comparinator... coming soon</title>
		<meta charset="utf8">
		<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
		<meta itemprop="name" content="Schedule Comparinator">
<meta name="google-site-verification" content="Sx7DClwrkz_sbo94k3eVctKfrVeLeiB5SrN4wqkU5zY" />
		<meta itemprop="description" content="A more convenient way to compare schedules">
		
		<link rel="stylesheet" type="text/css" href="comingsoon.css">
		<link rel="stylesheet" type="text/css" media="screen and (max-device-width: 800px)" href="comingsoon.smallscreen.css">
		<?php
		if( strstr($_SERVER['HTTP_USER_AGENT'],'Android') ||
			strstr($_SERVER['HTTP_USER_AGENT'],'webOS') ||
			strstr($_SERVER['HTTP_USER_AGENT'],'iPhone') ||
			strstr($_SERVER['HTTP_USER_AGENT'],'iPod')) { 
			// send mobile css
		?>
		<link rel="stylesheet" type="text/css" href="comingsoon.m.css">
		<?php
		}
		?>
		<link rel="stylesheet" type="text/css" href="css/google-buttons.css">
		
		<script type="text/javascript" src="js/jquery-1.7.2.min.js"></script>
		<script type="text/javascript" src="js/Hyphenator.js"></script>
		<script type="text/javascript" src="comingsoon.js"></script>
		
		<!--[if gte IE 9]>
		  <style type="text/css">
			body {
			   filter: none;
			}
		  </style>
		<![endif]-->
		<!--[if lte IE 8]>
			<link rel="stylesheet" type="text/css" href="comingsoon.ie8.css">
		<![endif]-->
	</head>
	<body>
		<div id="fb-root"></div>
		
		<div id="title1" class="nosel" unselectable="on">Schedule&nbsp;&nbsp;&nbsp;&nbsp;</div>
		<div id="title2" class="nosel" unselectable="on">Comparinator</div>
		<hr id="titlesep" class="nosel" unselectable="on">
		<div id="text2012" class="nosel" unselectable="on">2&#x2009;012&nbsp;</div>
		<div id="container">
			<table id="authors"><tbody><tr><td id="yash">YASH AGGARWAL</td><td id="max">MAX CIOTTI</td><td id="xuming">XUMING ZENG</td></tr></tbody></table>
			<div id="desc">Schedule Comparinator 2012 is a free service that allows you to compare your schedule for this coming year with everybody else without spamming everybody's Facebook newsfeed. We are currently working very hard to make this service the best possible experience, and it will be available for public use shortly. This will only work if you tell all of your friends, so please share!</div>	
			<form action="http://schedulecomparinator.us5.list-manage1.com/subscribe/post?u=e368b1b1ec527c4fe57ecac19&amp;id=c5746142b2" method="post" id="mc-embedded-subscribe-form" name="mc-embedded-subscribe-form" class="validate" id="signup" target="_blank">
				<p id="signup-text"><span class="highlight">Quickly</span> and <span class="highlight">easily</span> compare schedules. Coming Soon.</p>
				<div>
					<?php if ($hasError) { ?>
					<div id="error"><?php echo $error; ?></div>
					<?php } ?>
					<span id="email-label">Email:</span><input type="email" value="" name="EMAIL" class="required email" id="mce-EMAIL">
					<input type="submit" id="submit" class="g-button blue" name="subscribe" id="mc-embedded-subscribe" value="Remind me!"><br>

					<span id="disc">Enter your email to be notified on launch. No worries, we won't spam you :).</span>
				</div>
			</form>
			<div id="social">
				<div class="fb-like" data-send="false" data-layout="button_count" data-width="10" data-show-faces="false" data-action="like" data-font="arial"></div>
				<div class="g-plusone" data-size="medium"></div>
				<a href="https://twitter.com/share" class="twitter-share-button" data-lang="en" data-count="horizontal">Tweet</a>
				<a href="http://www.tumblr.com/share/link?url=<?php echo urlencode('http://schedulecomparinator.com/') ?>&name=<?php echo urlencode('Schedule Comparinator') ?>&description=<?php echo urlencode('It\'s an easier way to compare schedules!') ?>" title="Share on Tumblr" style="line-height: 200px; display:inline-block; text-indent:-9999px; overflow:hidden; width:129px; height:20px; background:url('http://platform.tumblr.com/v1/share_1.png') top left no-repeat transparent;">Share on Tumblr</a>
			</div>
			<div class="threecol">
				<h3>WHAT IS THIS?</h3>
				<p class="hyphenate text">Schedule Comparinator 2012 is a web service to compare schedules of those attending a high school in the Round Rock Independent School District. It does so by comparing your schedule with other schedules that other users have entered in.</p>
			</div>
			<div class="threecol">
				<h3>HOW DO I BENEFIT?</h3>
				<p class="hyphenate text">By eliminating the need to constantly scan Facebook for other people's schedules, Schedule Comparinator 2012 streamlines your online workflow and lets you do whatever else you usually do to procrastinate summer homework.</p>
			</div>
			<div class="threecol">
				<h3>WHO IS MAKING IT?</h3>
				<p class="hyphenate text">We are students like you who have a passion for our school and our school district. We want to create applications that will make your academic life more convenient, and we are starting here with the Schedule Comparinator.</p>
			</div>
			<div id="footer">
				Copyright &copy; 2012 by Yash Aggarwal, Max Ciotti, and Xuming Zeng. Logo design by Justin Lai.<br>
				This webpage is released under a <a href="http://creativecommons.org/licenses/by-sa/3.0/us/">Creative Commons Attribution-ShareAlike 3.0 United States</a> license.<br>
				<span id="hearts">&hearts;</span>
			</div>
		</div>
	</body>
</html>
