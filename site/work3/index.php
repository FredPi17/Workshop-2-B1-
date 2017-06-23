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
unset($_SESSION['question']);	//Je supprime les variables sessions pour les rénitialiser
unset($_SESSION['profil']);


include("fonctions.php");//J'importe mes fonctions utilisées
if (isset($_GET['lg'])) {
	if ($_GET['lg'] == 'eng') {
		include("en.php");//J'importe les informations des questions en anglais
		include("profilEn.php"); // J'importe les informations de fins en anglais
	} else {
		include("fr.php");//J'importe les informations des questions en français
		include("profilFr.php"); // J'importe les informations de fins en français
	}
	$_SESSION['taille'] = count($_SESSION['question']); // Je créer une variable session taille,
																												//	si un jour je rajoute des questions cela se change automatiquement
	$id=Random($_SESSION['question']);/* génère un random (0, 30)
	* pour aller à la question id et commencer le jeu */

//J'initialise des variables sessions des jauges et du compteur pour la fin
	$_SESSION['compteur'] = 0;
	$_SESSION['competitivite'] = 50;
	$_SESSION['impact'] = 50;
	$_SESSION['social'] = 50;
	$_SESSION['environnement'] = 50;

	//Je redirige le joueur vers sa première question
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
		<style> body{background-image: url(images/choose.jpg);background-repeat: no-repeat;background-size: 100% auto;}
		</style>
	</head>
	 <!-- Ceci est un echo qui affiche le titre du menu, et le choix de langue. -->

<div id="contenu">
<div id="title">
	<h1>Menu</h1>
</div>

<div id="gauche">
	<h2>"<=== Jouer en français"</h2>
</div>

<div id="droite">
	<h2>"Play in english ===>"</h2>
</div>
<div id="tuto">
Ce serious game est basé sur le fonctionnement de Tinder, il faut donc utiliser les flèches de gauche
et droite et sur téléphone il faut faire glisser sur les parties grise à droite ou à gauche afin de choisir une réponse.
 Par exemple dans le menu vous pouvez choisir entre jouer en anglais ou jouer en français. Tout au long de votre expérience,
  des jauges vous permettront de suivre la santé de votre entreprise soyez vigilant.

</br>
This serious game is based on the Tinder app,  you have to use the left and right arrows and on the phone you have to swipe left or right on the gray squares to choose an answer.
This functionality will also be used in the menu so you can choose to either play in English or play in French.
Throughout the game, your 4 life bars will allow you to observe the health status of your company, remember stay vigilant!
</br><button id="leBoutton">Ok</button>
</div>
<script>
	$(function(){
		$('#leBoutton').click(function(){
			$('#tuto').toggle(500)
		});
	});

</script>
</div>

<!-- // ceci est le script javascript qui permet de swiper à droite ou à gauche avec les fleches ou tactile
// Selon le choix, il nous amène à la page index avec les arguments en anglais ou francais.
// r=g ou r=d (gauche/droite) pour afficher le résultats du choix -->

<script>
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

</script>
