<?php
session_start();
if(isset($_GET['lang'])){
	$_SESSION['lang'] = $_GET['lang'];
}
elseif (!$_SESSION['lang']){
	$_SESSION['lang'] = 'en';
}
include ('lang_'.$_SESSION['lang'].'.php');
?>
<!DOCTYPE HTML>
<!--
	Stellar by HTML5 UP
	html5up.net | @ajlkn
	Free for personal and commercial use under the CCA 3.0 license (html5up.net/license)
-->
<html>
	<head>
		<title>Stellar by HTML5 UP</title>
		<meta charset="utf-8" />
		<meta name="viewport" content="width=device-width, initial-scale=1, user-scalable=no" />
		<link rel="stylesheet" href="assets/css/main.css" />
		<noscript><link rel="stylesheet" href="assets/css/noscript.css" /></noscript>
	</head>
	<body class="is-preload">

		<!-- Wrapper -->
			<div id="wrapper">

				<!-- Header -->
					<header id="header" class="alt">
						<?php echo constant("web_label_changelang"); ?>
					<select id='select_lang' onchange='change_lang(this.value)'>
						<option value="" selected><?php echo constant("web_option_select"); ?></option>
						<option value="en">English-USA</option>
						<option value="es">Espanol-MX</option>
					</select>
						<span class="logo"><img src="images/logo.svg" alt="" /></span>
						<h1><?php echo constant("web_theme_title"); ?></h1>
						<?php echo constant('web_theme_message'); ?>
					</header>

				<!-- Nav -->
					<nav id="nav">
						<ul>
							<li><a href="#intro" class="active"><?php echo constant('nav_title_intro'); ?></a></li>
							<li><a href="#first"><?php echo constant('nav_title_first'); ?></a></li>
							<li><a href="#second"><?php echo constant('nav_title_second'); ?></a></li>
							<li><a href="#cta"><?php echo constant('nav_title_getstart'); ?></a></li>
						</ul>
					</nav>

				<!-- Main -->
					<div id="main">

						<!-- Introduction -->
							<section id="intro" class="main">
								<div class="spotlight">
									<div class="content">
										<header class="major">
											<h2><?php echo constant('intro_title'); ?></h2>
										</header>
										<p><?php echo constant('intro_body');?></p>
										<ul class="actions">
											<li><a href="#" class="button"><?php echo constant('intro_btn');?></a></li>
										</ul>
									</div>
									<span class="image"><img src="images/pic01.jpg" alt="" /></span>
								</div>
							</section>

						<!-- First Section -->
							<section id="first" class="main special">
								<header class="major">
									<h2><?php echo constant('intro_title'); ?></h2>
								</header>
								<ul class="features">
									<li>
										<span class="icon solid major style1 fa-code"></span>
										<p><?php echo constant('first_body'); ?></p>
									</li>
								</ul>
								<footer class="major">
									<ul class="actions special">
										<li><a href="#" class="button"><?php echo constant('intro_btn');?></a></li>
									</ul>
								</footer>
							</section>

						<!-- Second Section -->
							<section id="second" class="main special">
								<header class="major">
									<h2><?php echo constant('second_title'); ?></h2>
									<p><?php echo constant('second_body'); ?></p>
								</header>
								<ul class="statistics">
									<li class="style1">
										<span class="icon solid fa-code-branch"></span>
										<strong>5,120</strong> <?php echo constant('second_li_code'); ?>
									</li>
									<li class="style2">
										<span class="icon fa-folder-open"></span>
										<strong>8,192</strong> <?php echo constant('second_li_files'); ?>
									</li>
									<li class="style3">
										<span class="icon solid fa-signal"></span>
										<strong>2,048</strong> <?php echo constant('second_li_estadistic'); ?>
									</li>
									<li class="style4">
										<span class="icon solid fa-laptop"></span>
										<strong>4,096</strong> <?php echo constant('second_li_pc'); ?>
									</li>
									<li class="style5">
										<span class="icon fa-gem"></span>
										<strong>1,024</strong> <?php echo constant('second_li_diamond'); ?>
									</li>
								</ul>
								<footer class="major">
									<ul class="actions special">
										<li><a href="#" class="button"><?php echo constant('intro_btn');?></a></li>
									</ul>
								</footer>
							</section>

						<!-- Get Started -->
							<section id="cta" class="main special">
								<header class="major">
									<h2><?php echo constant('getstarted_title'); ?></h2>
									<p><?php echo constant('getstarted_body'); ?></p>
								</header>
								<footer class="major">
									<ul class="actions special">
										<li><a href="#" class="button primary"><?php echo constant('getstarted_btn_getstart'); ?></a></li>
										<li><a href="#" class="button"><?php echo constant('getstarted_btn'); ?></a></li>
									</ul>
								</footer>
							</section>

					</div>

				<!-- Footer -->
					<footer id="footer">
						<section>
							<h2><a target="_blank" href="https://github.com/irenteria0617">@Ismael</a></h2>
							<p><a target="_blank" href="https://www.ideas2code.io" >www.ideas2code.io</a></p>
							<ul class="actions">
								<li><a href="#" class="button"><?php echo constant('fotter_whoami_btn'); ?></a></li>
							</ul>
						</section>
						<section>
							<h2><?php echo constant('fotter_whoami_postalmail'); ?></h2>
							<dl class="alt">
								<dt><?php echo constant('fotter_whoami_address'); ?></dt>
								<dd>USA</dd>
								<dt><?php echo constant('fotter_whoami_phone'); ?></dt>
								<dd>(000) 000-0000 x 0000</dd>
								<dt><?php echo constant('fotter_whoami_email'); ?></dt>
								<dd><a href="mailto:hello@ideas2code.io">hello@ideas2code.io</a></dd>
								<dt><?php echo constant('fotter_website'); ?></dt>
								<dd><a target="_blank" href="https://www.ideas2code.io">https://www.ideas2code.io</a></dd>
							</dl>
							<ul class="icons">
								<li><a target="_blank" href="https://github.com/ideas2codeweb" class="icon brands fa-github alt"><span class="label">GitHub</span></a></li>
							</ul>
						</section>
						<p class="copyright">&copy; Design: <a target="_blank" href="https://html5up.net">HTML5 UP</a>.</p>
					</footer>

			</div>

		<!-- Scripts -->
			<script>
				function change_lang(value){
					window.location.replace("?lang="+value);
				}
			</script>
			<script src="assets/js/jquery.min.js"></script>
			<script src="assets/js/jquery.scrollex.min.js"></script>
			<script src="assets/js/jquery.scrolly.min.js"></script>
			<script src="assets/js/browser.min.js"></script>
			<script src="assets/js/breakpoints.min.js"></script>
			<script src="assets/js/util.js"></script>
			<script src="assets/js/main.js"></script>

	</body>
</html>