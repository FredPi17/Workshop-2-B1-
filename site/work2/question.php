<?php
/**
* \file          question.php
* \author    les4G / Grenoble
* \version   0.1
* \date       08/03/2017
* \brief       Affiche l'image, la question et les réponses d'une question.
*
* \details    Elle include fonctions.php et fr.php, vérifie si on a commecé le jeu,
*                  Si on a généré aléatoirement la question posée sur cette page,
*									 Affiche le contenue de la question, et un script pour swiper à droite ou à gauche
*/
session_start();
include("fonctions.php"); // J'importe fonctions.php, toutes les fonctions utilisé dans ce jeu.
$_SESSION['compteur'] += 1;

if ($_SESSION['compteur'] == 16) {
  header('Location: fin.php');
}

 ?>
<!DOCTYPE html>
<html>
	<head>
		<meta charset="utf-8" />
		<title>Choose</title>
		<link rel="stylesheet" href="css/main.css">
    <script type="text/javascript" src="js/jquery-3.1.1.min.js"></script>
    <script type="text/javascript" src="js/Swipe.js"></script>
    <script src="js/raphael-2.1.4.min.js"></script>
    <script src="js/justgage.js"></script>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" media="screen and (max-width: 1280px)" href="petite_resolution.css" />
	</head>

	<body>

		<?php

		if (isset($_POST['id'])){//Si on a un id en post
			$id=$_POST['id'];// On initialise Id
		}
		if (isset($_GET['id'])){ //Si on a un id en get
			$id=$_GET['id'];// On initialise id
		}
		if (isset($id)) { //Si id existe:
      /* On affiche dans l'ordre:
      * l'image en fond de la Question
      * L'intitulé de la question avec un fond noir transparant, pour faire l'effet block
      * la réponse droite et gauche.
      */
      // <img src="'. $_SESSION['question'][$id]['image'] .'">
echo'
<style> body{background-image: url('. $_SESSION['question'][$id]['image'] .');background-repeat: no-repeat;background-size: 100% auto;}</style>

<div id="title">
  <h1>'. $_SESSION['question'][$id]['intitule'] .'</h1>
</div>

<div id="contenu">
<div id="gauche">
		      <div id="r1"><--'. $_SESSION['question'][$id]['reponseGauche'] .'"</div>	
  </div>
  
  <div id="droite">
		      <div id="r1">'. $_SESSION['question'][$id]['reponseDroite'] .'--></div>
  </div>

  
</div>';

		}
		// ceci est le script javascript qui permet de swiper à droite ou à gauche avec les fleches ou tactile
		// Selon le choix, il nous amène à la page réponse avec des arguments différents.
		// id pour l'id de la question et r=g ou r=d (gauche/droite) pour afficher le résultats du choix
echo'
<script>
$(document).keydown(function (e) {
	// Flèche gauche : 37
	if (e.keyCode == 37) {
		window.location = "reponse.php?id='. $id .'&r=g";
	}

	// Flèche droite : 39
	if (e.keyCode == 39) {
		window.location = "reponse.php?id='. $id .'&r=d";
	}
});

$("#contenu").touchwipe({
	wipeRight: function () {
		window.location = "reponse.php?id='. $id .'&r=d";
	}, wipeLeft: function () {
		window.location = "reponse.php?id='. $id .'&r=g";

	},
	preventDefaultEvents: false
});

</script>';

		?>
    <aside>
		<div id="charts">
			<div class="chart">
				<div class="container"></div>
	        	<div id="g1" class="gauge">
	        	</div>
	        	<script>
				    var g1;
				    document.addEventListener("DOMContentLoaded", function(event) {
				        g1 = new JustGage({
				            id: "g1",
				            value: 10,
				            min: 0,
				            max: 100,
				            donut: true,
				            gaugeWidthScale: 0.6,
				            counter: true,
				            hideInnerShadow: true,
				            title: "Graph 1"
				        });
				    });
				</script>
        	</div>

        	<div class="chart">
	        	<div class="container"></div>
	        	<div id="g2" class="gauge">
	        	</div>
	        	<script>
	        		var g2;
				    document.addEventListener("DOMContentLoaded", function(event) {
				        g2 = new JustGage({
				            id: "g2",
				            value: 30,
				            min: 0,
				            max: 100,
				            donut: true,
				            gaugeWidthScale: 0.6,
				            counter: true,
				            hideInnerShadow: true,
				            title: "Graph 2"
				        });
				    });
	        	</script>
        	</div>

        	<div class="chart">
	        	<div class="container"></div>
	        	<div id="g3" class="gauge">
	        	</div>
	        	<script>
		        	var g3;
				    document.addEventListener("DOMContentLoaded", function(event) {
				        g3 = new JustGage({
				            id: "g3",
				            value: 90,
				            min: 0,
				            max: 100,
				            donut: true,
				            gaugeWidthScale: 0.6,
				            counter: false,
				            hideInnerShadow: false,
				            title: "Graph 3"
				        });
				    });
			    </script>
        	</div>

        	<div class="chart">
	        	<div class="container"></div>
	        	<div id="g4" class="gauge"></div>
	        	<script>
		        	var g4;
				    document.addEventListener("DOMContentLoaded", function(event) {
				        g4 = new JustGage({
				            id: "g4",
				            value: 100,
				            min: 0,
				            max: 100,
				            donut: true,
				            gaugeWidthScale: 0.6,
				            counter: true,
				            hideInnerShadow: true,
				            title: "Graph 4"
				        });
				    });
			    </script>
			</div>
			</div>
		</aside>
	</body>
</html>
