<?php
/**
* \file          index.php
* \author    les4G / Grenoble
* \version   0.1
* \date       08/03/2017
* \brief       Ceci est la page d'accueil du jeu Choose
*
* \details    Elle demande à l'utilisateur quelle est la langue du jeu.
*               Il faut glisser à droite ou flèche de droite pour le français
*                Ou glisser à gauche ou fleche de gauche pour l'anglais
*/

session_start();//Je fais un session_start() pour utiliser les variables de type SESSION
unset($_SESSION['question']);


include("fonctions.php");//J'importe mes fonctions utilisées
if (isset($_GET['lg'])) {
	if ($_GET['lg'] == 'eng') {
		include("en.php");//J'importe la langue en
	} else {
		include("fr.php");//J'importe la langue FR
	}
	$_SESSION['taille'] = count($_SESSION['question']);
	$id=Random($_SESSION['question']);/* génère un random (0, 30)
	* pour aller à la question id et commencer le jeu */

	$_SESSION['compteur'] = 0;
	header('Location: question.php?id='. $id);
	die();
}
?>
<!DOCTYPE html>
<html>
	<head>
		<meta charset="utf-8" />
		<title>Choose | Index</title>
		<link rel="stylesheet" href="css/main.css">
    <script type="text/javascript" src="js/jquery-3.1.1.min.js"></script>
    <script type="text/javascript" src="js/Swipe.js"></script>
	</head>
	<body>
<?php

echo'

<div id="contenu">
<style> body{background-image: url(images/choose.jpg);background-repeat: no-repeat;background-size: 100% auto;}
</style>

<div id="title">
	<h1>Menu</h1>
</div>

<div id="gauche">
	<h2><-- Jouer en français<h2>

</div>

<div id="droite">
	<h2>Play in english --></h2>
</div></div>';

/**Dans ce echo, on affiche dans l'ordre:
* l'image de l'accueil
* Le nom de la page
* un choix droite gauche pour aller au jeu en anglais ou en français.
*/


                        /* Je fais un formulaire invisible en html, si on a slide
                        * on va à la page question.php avec l'id généré précédemment */
/*}*/
// ceci est le script javascript qui permet de swiper à droite ou à gauche avec les fleches ou tactile
// Selon le choix, il nous amène à la page jeu en anglais ou en français.
// r=g ou r=d (gauche/droite) pour afficher le résultats du choix

echo'<script>
$(document).keydown(function (e) {
	// Flèche gauche : 37
	if (e.keyCode == 37) {
		window.location = "index.php?lg=fr";
	}

	// Flèche droite : 39
	if (e.keyCode == 39) {
		window.location = "index.php?lg=eng";
	}
});

$("#contenu").touchwipe({
	wipeRight: function () {
		window.location = "index.php?lg=eng";
	}, wipeLeft: function () {
		window.location = "index.php?lg=fr";

	},
	preventDefaultEvents: false
});

</script>';
 ?>
 </body>
