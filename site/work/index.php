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

include("fr.php");//J'importe la langue FR
include("fonctions.php");//J'importe mes fonctions utilisées
session_start();//Je fais un session_start() pour utiliser les variables de type SESSION
$_SESSION['question'] = $Questions;
?>
<!DOCTYPE html>
<html>
	<head>
		<meta charset="utf-8" />
		<title>Choose | Index</title>
		<link rel="stylesheet" href="css/main.css">
    <script type="text/javascript" src="js/jquery-3.1.1.min.js"></script>
    <script type="text/javascript" src="js/Swipe.js"></script>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" media="screen and (max-width: 1280px)" href="petite_resolution.css" />
	</head>
<?php
$id=Random($Questions);/* génère un random (0, 30)
                          * pour aller à la question id et commencer le jeu */

                        /* Je fais un formulaire invisible en html, si on a slide
                        * on va à la page question.php avec l'id généré précédemment */
echo' <form method="post" action="question.php">
   <label name="commencer">Commencer
     <input type="submit" name="commencer" value="Commencer">
     <input type="hidden" name="id" value="'. $id .'">
   </label>
 </form>
';
 ?>
