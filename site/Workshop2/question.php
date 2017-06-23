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
include("fr.php"); //J'importe fr.php, le contenue de toutes les questions posées
include("fonctions.php") // J'importe fonctions.php, toutes les fonctions utilisé dans ce jeu.

 ?>
<!DOCTYPE html>
<html>
	<head>
		<meta charset="utf-8" />
		<title>Choose</title>
		<link rel="stylesheet" href="css/main.css">
    <script type="text/javascript" src="js/jquery-3.1.1.min.js"></script>
    <script type="text/javascript" src="js/Swipe.js"></script>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" media="screen and (max-width: 1280px)" href="petite_resolution.css" />
	</head>

	<body>

		<?php
		if (isset($_POST['id'])){
			$id=$_POST['id'];
		}
		if (isset($_GET['id'])){
			$id=$_GET['id'];
		}
		if (isset($id)) {
				echo'
				<div id="contenu">
				<div id="left">
					<h2>'. $Questions[$id]['reponseGauche'] .'</h2>
				</div>
				<div id="main">
				<img src="'. $Questions[$id]['image'] .'">
				
				<h1>'. $Questions[$id]['intitule'] .'</h1>
				<div id="right>
					<h2>'. $Questions[$id]['reponseDroite'] .'<h2>
				</div>
				</div>
				</div>';
				/**Dans ce echo, on affiche dans l'ordre:
				* l'image en fond de la Question
				* L'intitulé de la question avec un fond noir transparant, pour faire l'effet block
				* la réponse droite et gauche.
				*/
			
		}
		// ceci est le script javascript qui permet de swiper à droite ou à gauche avec les fleches ou tactile
		// Selon le choix, il nous amène à la page réponse avec des arguments différents.
		// id pour l'id de la question et r=g ou r=d (gauche/droite) pour afficher le résultats du choix
		echo'<script>
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
	</body>
</html>
