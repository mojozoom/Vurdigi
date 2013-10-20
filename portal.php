<!DOCTYPE HTML>
<html>
<head>
<meta charset="utf-8">
<title>CFU - Didaktisk Model - Portal</title>
<meta name="description" content="Værktøj til vurdering af digitale læremidler - CFU" />

<link href="http://netdna.bootstrapcdn.com/font-awesome/3.1.1/css/font-awesome.css" rel="stylesheet">
<link rel="stylesheet" type="text/css" href="css/style.css">
<link rel="shortcut icon" href="favicon.ico">

<!--jQuery + jQuery Tools -->
<script src="http://cdn.jquerytools.org/1.2.7/full/jquery.tools.min.js"></script>

<!--Parralax -->
<script type="text/javascript" src="js/js.js"></script>
<script type="text/javascript" src="js/jquery.stellar.min.js"></script>
<script type="text/javascript" src="js/waypoints.min.js"></script>
<script type="text/javascript" src="js/jquery.easing.1.3.js"></script>

</head>

<body class="portal">

			<header class="clearfix">
					<nav class="centerfix clearfix">
						<a href="index.php" id="logo">
							<img src="images/logo_small.png" alt="" />
							<h1>CFU - Didaktisk Model</h1>
						</a>
						<ul class="main_navigation">
							<li class="portal"><a class="active_main_nav" href="portal.php"><i class="icon-desktop"></i></a></li>
							<li class="forloeb"><a href="forloeb.php"><i class="icon-th-large"></i></a></li>
							<li class="apps"><a href="apps.php"><i class="icon-tablet"></i></a></li>
							<li class="resource"><a href="delelement.php"><i class="icon-lightbulb"></i></a></li>
						</ul>
					</nav>
			</header>

	<ul class="navigation">
		<h3>Portal</h3>
		<li data-slide="1">Indholdskvalitet</li>
		<li data-slide="2">Omfang</li>
		<li data-slide="3">Brugervenlighed</li>
	</ul>
	
<script>

$(document).ready(function() {
    
    //Show Banner
    $(".extras").hide(); //Show Banner
   
    //Toggle Teaser
    $("span.collapse").click(function(){
        $(this).next().slideToggle();
        $(this).toggleClass("show");
    });


});//Close Function  

</script>


	<div class="slide clearfix" id="slide1" data-slide="1">
		<span class="slideno">Indholdskvalitet</span>
		<section class="question_wrapper centerfix clearfix">
				<h2>Indholdskvalitet</h2>
				<ol class="circle-list">
				  <li><p>Stemmer indholdet overens med <span class="tooltip-marker" title="fagets faghæfte">gældende mål</span> for faget og dine mål som lærer i faget? </p></li>
				  <li><p>Hvor <span class="tooltip-marker" title="i forhold til faglig forskning">centralt</span> er indholdet for faget eller væsentlige områder af faget?</p></li>
				  <li>Hvor centralt eller <span class="tooltip-marker" title="i forhold til fagfaglige mål, pædagogiske mål og forløbsbeskrivelse">relevant</span> er indholdet for dine elever i forhold til deres nutid og fremtid?</li>
				</ol>
				<span class="collapse show btn">Ekstra Spørgsmål</span>
				<ol class="circle-list extras">
				  <li><p>Formidler læremidlet det faglige stof, så eleverne kan få overblik og ny viden om et fagligt område?</p></li>
				  
				</ol>
		</section>
		<a class="button" data-slide="2" title=""></a>
	</div><!--End Slide 1-->


	<div class="slide clearfix" id="slide2" data-slide="2">
		<span class="slideno">Omfang</span>
		<section class="question_wrapper centerfix clearfix">
				<h2>Omfang</h2>
				<ol class="circle-list">
				  <li>
				  	<p>Er omfanget rimeligt dækkende eller <span class="tooltip-marker" title="at der er nok indhold til arbejde med over adskillige forløb?">fyldestgørende</span> i forhold til et fag eller fagligt område?</p>
				  </li>
				  <li>
				  	<p>Er der en <span class="tooltip-marker" title="som kan gøre indholdets anvendelse ensformigt eller metodisk ensidigt for eleverne.">overvægt</span> af en bestemt type indhold eller aktiviteter?</p>
				  </li>
				  <li>
				  	<p>Er der en klar <span class="tooltip-marker" title="at læreren kan danne sig et hurtigt overblik af portalens omfang. Hvad kan man? Og får man hjælp til at finde indholdet?">kobling</span> mellem indhold på portalen og lærerens handlemuligheder?</p>
				  </li>
				</ol>
				<span class="collapse show btn">Ekstra Spørgsmål</span>
				<ol class="circle-list extras">
				  <li><p>Er det muligt at planlægge en varieret undervisning ud fra indholdet?</p></li>
				  <li><p>Er der mulighed for, at for læreren kan sammensætte egne undervisningsforløb på <span class="tooltip-marker" title="f.eks, at kunne bruge forskellige metoder i planlægningen af undervisningsforløb">varierede</span> måder?</p></li>
				  <li><p>Tager læremidlet hensyn til, forskellige elevers <span class="tooltip-marker" title="f.eks. i forhold til indholdstyper og metoder.">behov og forudsætninger</span>?</p></li>
				</ol>
		</section>
		<a class="button" data-slide="3" title=""></a>
	</div><!--End Slide 2-->


	<div class="slide clearfix" id="slide3" data-slide="3" data-stellar-background-ratio="0.5">
		<span class="slideno">Brugervenlighed</span>
		<section class="question_wrapper centerfix clearfix">
				<h2>Brugervenlighed</h2>
			<ol class="circle-list">
				  <li><p>Er det tilpas <span class="tooltip-marker" title="I relation til om det er det indlysende og inspirerende at undersøge og udforske. Og er der hjælp at hente, hvis man farer vild?">udfordrende</span> for eleverne at finde rundt i læremidlet?</p></li>
				  <li><p>Kan man hurtigt og let få <span class="tooltip-marker" title="Rr det indlysende, hvordan man finder rundt i en evt. lærervejledning i relation til resten af indholdet?">overblik</span> over, hvad læremidlet indeholder?</p></li>
				  <li><p>Er det faglige stof <span class="tooltip-marker" title="Er centrale ting ved faget fremhævet ved hjælp af gode illustrationer, grafik og andre ting, man kan se eller trykke på?">præsenteret</span> på en måde, der giver mening i forhold til Fælles Mål?</p></li>
				</ol>
				<span class="collapse show btn">Ekstra Spørgsmål</span>
				<ol class="circle-list extras">
				  <li>
				  	<p>Er det klart, hvordan man finder rundt i en eventuel lærervejledning og læremidlets øvrige indhold?</p></li>
				  <li><p>Er læremidlet spændende og <span class="tooltip-marker" title="F.eks. gode overskrifter, lækker grafik, gode illustrationer.">inspirerende</span> for eleverne at kigge på?</p></li>
				  <li><p>Udnytter læremidlet <span class="tooltip-marker" title="F.eks. ved at eleverne kan producere sig til viden, eller at det gør en reel læringsmæssig forskel for eleven.">interaktionsmuligheder</span> med indholdet som tilgodeser læring?</p></li>
				</ol>
		</section>
	</div><!--End Slide 3-->


<?php include 'footer.php'; ?>

