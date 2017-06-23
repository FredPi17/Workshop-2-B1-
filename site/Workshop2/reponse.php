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
include("fonctions.php");
$id=$_GET['id'];
if (isset($_GET['r'])){
	if ($_GET['r']=='d'){
		echo'
				<img src="'. $Questions[$id]['image'] .'">
				<div id="contenu">
				<h2>'. $Questions[$id]['commentaireDroite'] .'</h2>
				</div>';
	}
	if($_GET['r']=='g'){
		echo'
				<img src="'. $Questions[$id]['image'] .'">
				<div id="contenu">
				<h2>'. $Questions[$id]['commentaireGauche'] .'</h2>
				</div>';
	}
	}

unset($Questions[$id]);
$id=random($Questions);

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
<!--afficher les jauges dans question si ecran grand (ordi) et sur reponse quand ecran petit (telephone )
supprimer la ligne du tableau id 
regénérer random()
renvoyer sur la page question.php avec id=random() et commencer=play-->


