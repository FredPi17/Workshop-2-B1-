<?php
/**
* \file          question.php
* \author    les4G / Grenoble
* \version   0.1
* \date       09/03/2017
* \brief       Affiche l'image, le texte et le retour index.
*
* \details    Elle include fonctions.php, profilFr.php et profilEn.php.
*/
session_start();
include("fonctions.php"); //J'importe fonctions.php, toutes les fonctions utilisé dans ce jeu.
if ($_GET['fin'] == "competitivite") {
	echo'
	<style> body{background-image: url('. $_SESSION['profil'][0]['image'] .');background-repeat: no-repeat;background-size: 100% auto;}
	</style>
	<div id="contenu">
	<div id="title">
		<h1>'. $_SESSION['profil'][0]['intitule'] .'</br> '. $_SESSION['profil'][0]['Desciption'] .'</h1>
	</div>

	<div id="gauche">
		<h2>'. $_SESSION['profil'][0]['reponseGauche'] .'<h2>
	</div>

	<div id="droite">
	<h2>'. $_SESSION['profil'][0]['reponseDroite'] .'<h2>
	</div>
	</div>
	';
}
if ($_GET['fin'] == "impact") {
	echo'
	<style> body{background-image: url('. $_SESSION['profil'][3]['image'] .');background-repeat: no-repeat;background-size: 100% auto;}
	</style>
	<div id="contenu">
	<div id="title">
		<h1>'. $_SESSION['profil'][3]['intitule'] .'</br> '. $_SESSION['profil'][3]['Desciption'] .'</h1>
	</div>

	<div id="gauche">
		<h2>'. $_SESSION['profil'][3]['reponseGauche'] .'<h2>
	</div>

	<div id="droite">
	<h2>'. $_SESSION['profil'][3]['reponseDroite'] .'<h2>
	</div>
	</div>';
}
if ($_GET['fin'] == "social") {
	echo'
	<style> body{background-image: url('. $_SESSION['profil'][1]['image'] .');background-repeat: no-repeat;background-size: 100% auto;}
	</style>
	<div id="contenu">
	<div id="title">
		<h1>'. $_SESSION['profil'][1]['intitule'] .'</br> '. $_SESSION['profil'][1]['Desciption'] .'</h1>
	</div>

	<div id="gauche">
		<h2>'. $_SESSION['profil'][1]['reponseGauche'] .'<h2>
	</div>

	<div id="droite">
	<h2>'. $_SESSION['profil'][1]['reponseDroite'] .'<h2>
	</div>
	</div>';
}
if ($_GET['fin'] == "environnement") {
	echo'
	<style> body{background-image: url('. $_SESSION['profil'][2]['image'] .');background-repeat: no-repeat;background-size: 100% auto;}
	</style>
	<div id="contenu">
	<div id="title">
		<h1>'. $_SESSION['profil'][2]['intitule'] .'</br> '. $_SESSION['profil'][2]['Desciption'] .'</h1>
	</div>

	<div id="gauche">
		<h2>'. $_SESSION['profil'][2]['reponseGauche'] .'<h2>
	</div>

	<div id="droite">
	<h2>'. $_SESSION['profil'][2]['reponseDroite'] .'<h2>
	</div>
	</div>';
}
if ($_GET['fin'] == "gg") {
	echo'
	<style> body{background-image: url('. $_SESSION['profil'][4]['image'] .');background-repeat: no-repeat;background-size: 100% auto;}
	</style>
	<div id="contenu">
	<div id="title">
		<h1>'. $_SESSION['profil'][4]['intitule'] .'</br> '. $_SESSION['profil'][4]['Desciption'] .'</h1>
	</div>

	<div id="gauche">
		<h2>'. $_SESSION['profil'][4]['reponseGauche'] .'<h2>
	</div>

	<div id="droite">
	<h2>'. $_SESSION['profil'][4]['reponseDroite'] .'<h2>
	</div>
	</div>
	';
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
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
	</head>

	<body>

<?php
echo'<script>
$(document).keydown(function (e) {
	// Flèche gauche : 37
	if (e.keyCode == 37) {
		window.location = "index.php";
	}

	// Flèche droite : 39
	if (e.keyCode == 39) {
		window.location = "index.php";
	}
});

$("#contenu").touchwipe({
	wipeRight: function () {
		window.location = "index.php";
	}, wipeLeft: function () {
		window.location = "index.php";

	},
	preventDefaultEvents: false
});

</script>';

		?>
	</body>
</html>
