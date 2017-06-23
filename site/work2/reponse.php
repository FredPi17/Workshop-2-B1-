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
session_start();

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
include("fonctions.php");     //J'importe les fonctions du jeu
$id=$_GET['id'];              //J'initialise id

if (isset($_GET['r'])){        //Si on a l'argument r= quelquechose dans l'URL
	if ($_GET['r']=='d'){        /*Si r=d, on affiche le commentaire de droite
											        * puisque le joueur à slide à droite*/
		echo'
<style> body{background-image: url('. $_SESSION['question'][$id]['image'] .');background-repeat: no-repeat;background-size: 100% auto;}
</style>
<div id="contenu">
		<div id="r">'. $_SESSION['question'][$id]['commentaireGauche'] .'</div>
</div>';
	}
	if($_GET['r']=='g'){          /*Si r=d, on affiche le commentaire de gauche
												        * puisque le joueur à slide à gauche*/
		echo'
<style> body{background-image: url('. $_SESSION['question'][$id]['image'] .');background-repeat: no-repeat;background-size: 100% auto;}
</style>
		<div id="contenu">
			<div id="r">'. $_SESSION['question'][$id]['commentaireDroite'] .'</div>
		</div> 
		<div id="next">'.$_SESSION['question'][$id]['Next'].'</div>	
		</div>';
	}
	}

if ($id == 3 || $id == 4) {
  unset($_SESSION['question'][3]);
  unset($_SESSION['question'][4]);
}
else {
  unset($_SESSION['question'][$id]);
}

$id=getNextId($_SESSION['question']);
echo'<script>
$(document).keydown(function (e) {
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
