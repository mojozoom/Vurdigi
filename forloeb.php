<!DOCTYPE HTML>
<html>
<head>
<meta charset="utf-8">
<title>CFU - Didaktisk Model - Forl&oslash;b</title>
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

<body class="forloeb">

			<header class="clearfix">
					<nav class="centerfix clearfix">
						<a href="index.php" id="logo">
							<img src="images/logo_small.png" alt="" />
							<h1>CFU - Didaktisk Model</h1>
						</a>
						<ul class="main_navigation">
							<li class="portal"><a href="portal.php"><i class="icon-desktop"></i></a></li>
							<li class="forloeb"><a class="active_main_nav" href="forloeb.php"><i class="icon-th-large"></i></a></li>
							<li class="apps"><a href="apps.php"><i class="icon-tablet"></i></a></li>
							<li class="resource"><a href="delelement.php"><i class="icon-lightbulb"></i></a></li>
						</ul>
					</nav>
			</header>

	<ul class="navigation">
		<h3>Forløb</h3>
		<li data-slide="1">Indholdskvalitet</li>
		<li data-slide="2">Brugervenlighed</li>
		<li data-slide="3">Differentiering</li>
		<li data-slide="4">Læringsudbytte</li>
		<li data-slide="5">Genbrugelighed</li>
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
				   <li><p>Stemmer indholdet overens med <span class="tooltip-marker" title="Fagets faghæfte">gældende mål</span> for faget og dine mål som lærer i faget? </p></li>
				  <li><p>Hvor <span class="tooltip-marker" title="I forhold til faglig forskning">centralt</span> er indholdet for faget eller væsentlige områder af faget?</p></li>
				  <li>Hvor centralt eller <span class="tooltip-marker" title="I forhold til fagfaglige mål, pædagogiske mål og forløbsbeskrivelse">relevant</span> er indholdet for dine elever i forhold til deres nutid og fremtid?</li>
				</ol>
				<span class="collapse show btn">Ekstra Spørgsmål</span>
				<ol class="circle-list extras">
				  <li><p>Formidler læremidlet det faglige stof, så eleverne kan få overblik og ny viden om et fagligt område?</p></li>
				</ol>
		</section>
		<a class="button" data-slide="2" title=""></a>
	</div><!--End Slide 1-->


	<div class="slide clearfix" id="slide2" data-slide="2">
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
		
		<a class="button" data-slide="3" title=""></a>
	</div><!--End Slide 2-->


	<div class="slide clearfix" id="slide3" data-slide="3" data-stellar-background-ratio="0.5">
		<span class="slideno">Differentiering</span>
		<section class="question_wrapper centerfix clearfix">
				<h2>Differentiering</h2>
				<ol class="circle-list">
				  <li>
				  	<p>Understøtter læremidlet <span class="tooltip-marker" title="Feks. i form af tekstoplæsning, anden type hjælp der kan klikkes til eller fra, eller det samme indhold præsenteret på forskellige måder.">differentieret undervisning</span>?</p>
				  </li>
				  <li>
				  	<p>Understøtter læremidlet undervisning af elever med forskellige <span class="tooltip-marker" title="I forhold til faglige niveauer eller feks. evner til at afkode forskellige typer medietekster">kompetencer</span>?</p>
				  </li>
				  <li>
				  	<p>Giver læremidlet mulighed for at lære på <span class="tooltip-marker" title="At kunne arbejde med indholdet på forskellige måder inden for eller under for læremidlets rammer.">forskellige måder</span>?</p>
				  </li>
				</ol>
				<span class="collapse show btn">Ekstra Spørgsmål</span>
				<ol class="circle-list extras">
				  <li><p>Er der hjælp og vejledning til lærerrollen i læremidlet?</p>
				   </li>
				    <li><p>Sikrer læremidlet, at den enkelte elev <span class="tooltip-marker" title="Feks. via varierede eksempler, eller muligheder for interaktion med indholdet.">motiveres</span> på forskellige måder?</p>
					</li>
				      <li><p>Kan mange lære samtidigt, men struktureret og organiseret på forskellige måder</p>
				</ol>
		</section>
		<a class="button" data-slide="4" title=""></a>
	</div><!--End Slide 3-->


	<div class="slide" id="slide4" data-slide="4" data-stellar-background-ratio="0">
		<span class="slideno">Læringsudbytte</span>
				<section class="question_wrapper centerfix clearfix">
				<h2>Læringsudbytte</h2>
				<ol class="circle-list">
				  <li><p>Bidrager læremidlet til, at læreren kan arbejde videre i andre sammenhænge med elevernes nyerhvervede viden og forståelse?</p>
				  </li>
				  <li>
				  	<p>Giver læremidlet mulighed for at arbejde med flere <span class="tooltip-marker" title="I form af udvikling af viden fra at kunne huske og regelfølge mod at forstå, anvende, analysere og fortolke og i sidste ende at kunne vurdere, kritisere, skabe og konstruere.">læringsniveauer</span>?
					</p>
				  </li>
				  <li>
				  	<p>Sikrer læremidlet, at eleverne reflekterer over deres nyerhvervede viden og forståelse?</p>
				  </li>
				</ol>
				<span class="collapse show btn">Ekstra Spørgsmål</span>
				<ol class="circle-list extras">
				  <li><p>Er der målfastsatte rammer som sikrer en tydelig <span class="tooltip-marker" title="F.eks. ved at læremidlet sikrer løbende evaluering af målsætninger og arbejdsprocesser">progression</span> for både lærer og elev?</p>
				   </li>
				    <li><p>Giver læremidlet bud på hvordan den nyerhvervede viden kan bruges i andre undervisningssammenhænge?</p>
					</li>
				</ol>
		</section>
		<a class="button" data-slide="5" title=""></a>
	</div><!--End Slide 4-->


	<div class="slide" id="slide5" data-slide="5" data-stellar-background-ratio="0">
		<span class="slideno">Genbrugelighed</span>
			<section class="question_wrapper centerfix clearfix">
				<h2>Genbruglighed</h2>
				<ol class="circle-list">
				  <li><p>Har eleverne mulighed for at <span class="tooltip-marker" title="F.eks. ved at UNI-login gemmer elevens profil fra gang til gang.">gemme</span> deres arbejde og finde det igen?</p>
				  </li>
				  <li><p>Hvor <span class="tooltip-marker" title="F.eks. ved at blive hjulpet til at kunne overføre produktioner eller evalueringer til andre læremidler eller platforme.">let</span> er det at bruge forløbet sammen med skolens andre digitale værktøjer?</p>
				  </li>
				  <li><p>Er der mulighed for at bruge skolens eksisterende intranet sammen med læremidlet?</p>
				  </li>
				</ol>
				<span class="collapse show btn">Ekstra Spørgsmål</span>
				<ol class="circle-list extras">
				  <li><p>Kan eleverne tilføje billeder, tekster og animationer eller andre medier til læremidlet?</p></li>
				  <li><p>Kan læremidlets produkter downloades eller på anden vis bruges andre <span class="tooltip-marker" title="Gennem andre læremidler eller direkte på elevernes computere">steder</span>?</p></li>
				  <li><p>Hvor længe er der adgang til læremidlet?</p>
				  </li>
				</ol>
			</section>

	</div><!--End Slide 5-->

<?php include 'footer.php'; ?>
