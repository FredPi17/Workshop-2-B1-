<?php
/**
* \file          reponse.php
* \author    les4G / Grenoble
* \version   0.1
* \date       08/03/2017
* \brief       Ceci est la page réponse,
*									 elle affiche la conséquence de la réponse choisis
* \details 		Pour rentrer dans cette page, il faut l'id de la question
*							posée précédemment, ensuite, on va afficher la réponse
*							selon le choix que l'on a fait.
*/

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
include("fr.php");
include("fonctions.php");//J'importe les fonctions du jeu
$id=$_GET['id'];//J'initialise id

if (isset($_GET['r'])){ //Si on a l'argument r= quelquechose dans l'URL
	if ($_GET['r']=='d'){/*Si r=d, on affiche le commentaire de droite
												* puisque le joueur à slide à droite*/
		echo'
				<img src="'. $Questions[$id]['image'] .'">
				<div id="contenu">
				<h2>'. $Questions[$id]['commentaireDroite'] .'</h2>
				</div>';
	}
	if($_GET['r']=='g'){/*Si r=d, on affiche le commentaire de gauche
												* puisque le joueur à slide à gauche*/
		echo'
				<img src="'. $Questions[$id]['image'] .'">
				<div id="contenu">
				<h2>'. $Questions[$id]['commentaireGauche'] .'</h2>
				</div>';
	}
	}

$id=random($Questions);//On génère un nouveau id random
echo'<script>
$(document).keydown(function (e) {
	// Flèche gauche : 37


	// Flèche droite : 39
	if (e.keyCode == 39) {
		window.location = "question.php?id='. $id .'";
	}
});

$("#contenu").touchwipe({
	wipeRight: function () {
		window.location = "question.php?id='. $id .'";
	}, wipeLeft: function () {
		window.location = "question.php?id='. $id .'";

	},
	preventDefaultEvents: false
});

</script>';

?>
</body>
<!--afficher les jauges dans question si ecran grand (ordi) et sur reponse quand ecran petit (telephone )
supprimer la ligne du tableau id
regénérer random()
renvoyer sur la page question.php avec id=random() et commencer=play-->
