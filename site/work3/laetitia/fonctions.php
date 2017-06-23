<?php
  function Random($Questions){
    /**
    *\author Les 4G
    *\verificator Equipe 4G
    *\brief génère un random entre 0 et la taille du tableau en argument -1 (à cause du 0)
    * Son paramètre est le tableaux, pour connaitre sa taille.
    *\return un entier qui correspond à l'id d'une cellule du tableau
    */

    $nb=rand(1, $_SESSION['taille']);// Je génère le nombre entre 0 et la tailleTableau -1
    return($nb); //Je renvoie le nombre généré
  }
function getNextId($tab){
  do {
    $id=Random($tab);
  } while (! isset($tab[$id]));
  return $id;
}
function ChangeGauge($droite, $id){
  if ($droite) {
    $_SESSION['competitivite'] +=  $_SESSION['question'][$id]['competitiviteDroite'];
    $_SESSION['impact'] +=  $_SESSION['question'][$id]['impactDroite'];
    $_SESSION['social'] +=  $_SESSION['question'][$id]['socialDroite'];
    $_SESSION['environnement'] +=  $_SESSION['question'][$id]['environnementDroite'];
  }
    $_SESSION['competitivite'] +=  $_SESSION['question'][$id]['competitiviteGauche'];
    $_SESSION['impact'] +=  $_SESSION['question'][$id]['impactGauche'];
    $_SESSION['social'] +=  $_SESSION['question'][$id]['socialGauche'];
    $_SESSION['environnement'] +=  $_SESSION['question'][$id]['environnementGauche'];
}
function IsFin(){
  if ($_SESSION['competitivite'] < 0) {
    header('Location: fin.php?fin=competitivite');
  }

  if ($_SESSION['impact'] < 0) {
    header('Location: fin.php?fin=impact');
  }

  if ($_SESSION['social'] < 0) {
    header('Location: fin.php?fin=social');
  }

  if ($_SESSION['environnement'] < 0) {
    header('Location: fin.php?fin=environnement');
  }
}

 ?>
