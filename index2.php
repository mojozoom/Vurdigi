<!DOCTYPE html>
<html lang="da">
	<head>
		<meta charset="UTF-8" />
		<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1"> 
		<meta name="viewport" content="width=device-width, initial-scale=1.0"> 
		<title>Vurdigi Oversigt - Vurdering af Digitale Læremidler </title>
		<meta name="description" content="Oversigt - Værktøj til vurdering af digitale læremidler - CFU" />


		<link href="http://netdna.bootstrapcdn.com/font-awesome/3.1.1/css/font-awesome.css" rel="stylesheet">
		<link rel="stylesheet" type="text/css" href="css/style.css">
		<link rel="shortcut icon" href="favicon.ico">
		<script src="js/modernizr.custom.js"></script>

		<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.9.1/jquery.min.js"></script>
	</head>
	<body id="index2">
	
			<header class="clearfix">
					<nav class="centerfix clearfix">
						<a href="index.php" id="logo">
							<img src="images/logo_small.png" alt="" />
							<h1>CFU - Didaktisk Model</h1>
						</a>
						<ul class="main_navigation">
							<li class="portal"><a href="portal.php"><i class="icon-desktop"></i></a></li>
							<li class="forloeb"><a href="forloeb.php"><i class="icon-th-large"></i></a></li>
							<li class="apps"><a href="apps.php"><i class="icon-tablet"></i></a></li>
							<li class="resource"><a href="delelement.php"><i class="icon-lightbulb"></i></a></li>
						</ul>
					</nav>
			</header>
			<div class="container clearfix">	
			<div class="main">
				<ul id="og-grid" class="og-grid">
					<li>
						<a href="portal.php" data-largesrc="http://player.vimeo.com/video/69224726?byline=0&amp;portrait=0&amp;autoplay=1" data-title="Portal" data-description="En didaktiseret hjemmeside bestående af flere forløb.">
							<img src="images/placeholder.gif" alt=""/>
							<div class="icon-wrapper">
								<i class="icon-desktop"></i>
								<h2>Portaler</h2>
							</div>
							<span>+info</span>
						</a>

					</li>
					<li>
						<a href="forloeb.php" data-largesrc="http://player.vimeo.com/video/69224523?byline=0&amp;portrait=0&amp;autoplay=1" data-title="Forløb" data-description="Et undervisningsforløb fra en didaktiseret hjemmeside.">
							<img src="images/placeholder.gif" alt=""/>
							<div class="icon-wrapper">
								<i class="icon-th-large"></i>
								<h2>Forløb</h2>
							</div>
							<span>+info</span>
						</a>
					</li>
					<li>
						<span class="apps_placeholder">
							<img src="images/placeholder.gif" alt=""/>
							<img id="coming-soon" src="images/coming-soon.png" alt=""/>
							<div class="icon-wrapper">
								<i class="icon-tablet"></i>
								<h2>Apps</h2>
							</div>
							<span>+info</span>
						</span>
					</li>
					<li>
						<a href="delelement.php" data-largesrc="http://player.vimeo.com/video/69224727?byline=0&amp;portrait=0&amp;autoplay=1" data-title="Læringsressource" data-description="Digitale ressourcer, der kan benyttes i undervisningsforløb.">
							<img src="images/placeholder.gif" alt=""/>
							<div class="icon-wrapper">
								<i class="icon-lightbulb"></i>
								<h2>Læringsressourcer</h2>
							</div>
							<span>+info</span>
						</a>
					</li>
					<img class="tuborg" src="images/tuborg.png" alt=""/>
				</ul>

			</div>
		</div><!-- /container -->
		<script src="js/grid.js"></script>
		<script>
			$(function() {
				Grid.init();
			});
		</script>
<?php include 'footer.php'; ?>	