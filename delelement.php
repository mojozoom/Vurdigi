<!DOCTYPE HTML>
<html>
<head>
<meta charset="utf-8">
<title>CFU - Didaktisk Model - Delelement</title>
<meta name="description" content="Vurdigi.dk - Værktøj til vurdering af digitale læremidler - CFU" />

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

<body class="delelement">

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
							<li class="resource"><a class="active_main_nav" href="delelement.php"><i class="icon-lightbulb"></i></a></li>
						</ul>
					</nav>
			</header>

	<ul class="navigation">
		<h3>Lærings<br />ressource</h3>
		<li data-slide="1">Effektivitet</li>
		<li data-slide="2">Samarbejde</li>
		<li data-slide="3">Tilgængelighed</li>
		<li data-slide="4">Genbrugelighed</li>
		<li data-slide="5">Brugervenlighed</li>
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
		<span class="slideno">Effektivitet</span>
		<section class="question_wrapper centerfix clearfix">
				<h2>Effektivitet</h2>
				<ol class="circle-list">
				  <li><p>Hjælper ressourcen til at løse den  <span class="tooltip-marker" title="F.eks. i forhold til udførelsen af et undervisningsforløb.">aktuelle opgave</span> <span class="tooltip-marker" title="Om det er let at gemme og finde produkter. Er der hjælp til at løse tekniske problemer?">nemt</span>, effektivt og kvalificeret?</p></li>
				  <li><p>Støtter og <span class="tooltip-marker" title="F.eks. ved øge kvaliteten af proces og produkt">optimerer</span> ressourcen arbejdsprocessen?</p></li>
				  <li><p>Fungerer ressourcen <span class="tooltip-marker" title="F.eks om det er let og ukompliceret at logge ind, kræver trådløst netværk for at virke eller andet der kan begrænse brugen.">teknisk</span>?</p>				  	  
				  </li>
				</ol>
				<span class="collapse show btn">Ekstra Spørgsmål</span>
				<ol class="circle-list extras">
				  <li><p>Er der fleksible muligheder for personlige indstillinger, som huskes fra gang til gang?</p></li>
				</ol>
		</section>
		<a class="button" data-slide="2" title=""></a>
	</div><!--End Slide 1-->


	<div class="slide clearfix" id="slide2" data-slide="2">
		<span class="slideno">Samarbejde</span>
		<section class="question_wrapper centerfix clearfix">
				<h2>Samarbejde</h2>
				<ol class="circle-list">
				  <li><p>Tilbyder ressourcen fordeling af <span class="tooltip-marker" title="F.eks, at man kan arbejde med opponentgrupper. Eller der kan tildeles forskellige grader af rettigheder i et skrive- og produktionsperspektiv.">forskellige roller</span> til eleverne</p></li>
				  <li><p>Kan eleverne arbejde <span class="tooltip-marker" title="F.eks. ved at flere kan producere indhold i en ressource på en gang og/eller samtidigt.">sammen samtidigt</span> via ressourcen? </p></li>
				  <li><p>Kan man kommunikere gennem ressourcen elev til elev og elev til lærer?</p></li>
				</ol>
				<span class="collapse show btn">Ekstra Spørgsmål</span>
				<ol class="circle-list extras">
				  <li><p>Er der mulighed for at spole tilbage i arbejdsprocessen og arbejde videre derfra?</p></li>
				  <li><p>Giver ressourcen elever og lærere mulighed for at dele produktioner med hinanden?</p></li>
				</ol>
		</section>
		<a class="button" data-slide="3" title=""></a>
	</div><!--End Slide 2-->


	<div class="slide clearfix" id="slide3" data-slide="3" data-stellar-background-ratio="0.5">
		<span class="slideno">Tilgængelighed</span>
		<section class="question_wrapper centerfix clearfix">
				<h2>Tilgængelighed</h2>
				<ol class="circle-list">
				  <li><p>Virker ressourcen <span class="tooltip-marker" title="F.eks. i relation til målgruppe, elevernes alder, forudsætninger eller interesser.">nem</span> at bruge for elever?</p>
				  </li>
				  <li><p>Er det klart, hvad man <span class="tooltip-marker" title="Altså den umiddelbare tilgang til ressourcen.">kan og skal</span> bruge ressourcen til?</p>
				  </li>
				  <li><p>Bliver man <span class="tooltip-marker" title="F.eks. gennem indbyggede hjælpeassistenter, grafiske ikoner eller trin for trin hjælp.">hjulpet</span> på vej i processen med forskellige forklaringer?</p>
				  </li>
				</ol>
				<span class="collapse show btn">Ekstra Spørgsmål</span>
				<ol class="circle-list extras">
				  <li><p>Skal man gøre det <span class="tooltip-marker" title="Og virker det som en styrke eller svaghed ved ressourcen?">samme</span> fra gang til gang?</p>
				   </li>
				    <li><p>Er ressourcen på dansk, eller kan man indstille den til andre sprog?</p>
					</li>
				</ol>
		</section>
		<a class="button" data-slide="4" title=""></a>
	</div><!--End Slide 3-->


	<div class="slide" id="slide4" data-slide="4" data-stellar-background-ratio="0">
		<span class="slideno">Genbrugelighed</span>
				<section class="question_wrapper centerfix clearfix">
				<h2>Genbrugelighed</h2>
				<ol class="circle-list">
				  <li><p>Fungerer ressourcen sammen med andre læremidler eller læringsressourcer?</p>
				  </li>
				  <li><p>Kan man overføre ressourcens resultater, dataindsamlinger eller produktioner til andre <span class="tooltip-marker" title="Feks. Skoleintra, Skoletube eller lignende?">læremidler</span>?</p></li>
				  <li><p>Kan man tildele forskellige <span class="tooltip-marker" title="F.eks. så andre brugere via ressourcen også kan bruge disse?">rettigheder</span> til elevers produktioner, dataindsamlinger eller resultater?</p>
				  	</li>
				</ol>
				<span class="collapse show btn">Ekstra Spørgsmål</span>
				<ol class="circle-list extras">
				  <li><p>Kan eleverne tage deres resultater, dataindsamlinger eller produktioner <span class="tooltip-marker" title="F.eks. til en anden skole eller ungdomsuddannelse?">med videre</span>?</p>
				</ol>
		</section>
		<a class="button" data-slide="5" title=""></a>
	</div><!--End Slide 4-->


	<div class="slide" id="slide5" data-slide="5" data-stellar-background-ratio="0">
		<span class="slideno">Brugervenlighed</span>
			<section class="question_wrapper centerfix clearfix">
				<h2>Brugervenlighed</h2>
				<ol class="circle-list">
				  <li><p>Har ressourcen en <span class="tooltip-marker" title="Er det klart hvordan ressourcens dele hænger sammen?">forståelig</span> brugerflade?</p></li>
				  <li><p>Er der <span class="tooltip-marker" title="F.eks. ved at det interaktive element gør en meningsfuld forskel for brugeren, så det bliver let at bruge.">interaktive</span> elementer, som virker brugbare og relevante?</p>
				  </li>
				  <li><p>Er der indbyggede og <span class="tooltip-marker" title="F.eks. hjælp, man kan klikke til eller fra, afhængig af ens erfaring med ressourcen.">fleksible</span> hjælpefunktioner eller vejledninger, som virker brugbare?</p>
				  </li>
				</ol>
				<span class="collapse show btn">Ekstra Spørgsmål</span>
				<ol class="circle-list extras">
				  <li><p>Kan man nemt orientere sig i grafik, layout og design?</p></li>
				  <li><p>Kan man let finde sine resultater, dataindsamlinger eller produktioner og gemme dem?</p></li>
				</ol>
			</section>

	</div><!--End Slide 5-->

<?php include 'footer.php'; ?>
