<?php
include("fr.php");
include("fonctions.php");
session_start();

$id=Random($Questions);
echo' <form method="post" action="question.php">
   <label name="commencer">Commencer
     <input type="submit" name="commencer" value="Commencer">
     <input type="hidden" name="id" value="'. $id .'">
   </label>
 </form>
';
 ?>
