<!DOCTYPE html>
<html lang="da">
   <head>
      <meta charset="utf-8">
      <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1"> 

      <title>Vurdigi - Værktøj til Vurdering af Digitale Læremidler</title>
      <meta name="description" content="Vurdigi.dk - Værktøj til vurdering af digitale læremidler - CFU" />

      <!-- optimize mobile versions -->
      <meta name="viewport" content="width=device-width, initial-scale=1.0">

      <link href="http://netdna.bootstrapcdn.com/font-awesome/3.1.1/css/font-awesome.css" rel="stylesheet">
    	<link rel="stylesheet" type="text/css" href="css/style.css">
      <link rel="shortcut icon" href="favicon.ico">
      <!-- jquery lib -->
      <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.9.1/jquery.min.js"></script>
      <!--jQuery + jQuery Tools -->
      <script src="http://cdn.jquerytools.org/1.2.7/full/jquery.tools.min.js"></script>
   </head>
<body>
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
   
   <!-- the player -->
   <div id="splashvideo" class="clearfix">
        <iframe src="//player.vimeo.com/video/72767111?title=0&amp;byline=0&amp;portrait=0&amp;color=c72b26" width="500" height="281" frameborder="0" webkitallowfullscreen mozallowfullscreen allowfullscreen></iframe>
   </div>

      <div class="call-to-action clearfix">
         <a href="index2.php" class="start"><i class="icon-signin"></i>Start</a>
         <a href="#" class="more modalInput" rel="#yesno"><i class="icon-info-sign"></i>Læs Mere</a>
      </div>

         <div class="modal" id="yesno">
           <h2>Indføring i værktøjet.</h2>
              <p>Når du skal i gang med at vurdere et digitalt læremiddel med værktøjet her på siden, skal du foretage nogle valg. Du skal først afgøre om læremidlet indeholder didaktiseret indhold, eller om det ikke gør. 
              Hvis det er didaktiseret indhold, skal du afgøre om det, du kigger på, er en portal, som kan indeholde forløb eller temaer, eller om det er decideret forløb rettet mod undervisning, du skal kigge på.</p>

              <p>Hvis læremidlet ikke indeholder didaktiseret indhold, kalder vi det en læringsressource, og så skal du vælge det spor for at gå videre med din vurdering. </p>

              <p>Inden du går i gang, kan det betale sig at undersøge, om portalen eller et forløb henvender sig direkte til læreren. </p>

              <p>Det kan være hensigtsmæssigt at få afklaret, hvad læremidlet beskriver om sig selv i forhold til læringssyn, pædagogiske overvejelser, fagsyn og opbygning i øvrigt - og have det in mente, når man går i gang med det egentlige vurderingsarbejde.</p>
          
           <!-- yes/no buttons -->
           <div class="clearfix call-to-action">
              <a href="index2.php" class="start"><i class="icon-signin"></i>Start</a>
              <a href="index.php" class="more"><i class="icon-resize-small"></i> Tilbage</a>
           </div>
         </div>
      </div><!-- /container -->

            <!--Modal Overlay -->
      <script>
      $(document).ready(function() {
          var triggers = $(".modalInput").overlay({

               // some mask tweaks suitable for modal dialogs
               mask: {
                 color: '#000',
                 loadSpeed: 200,
                 opacity: 0.4
               },

               closeOnClick: true
           });
        });
      </script>

<?php include 'footer.php'; ?>

