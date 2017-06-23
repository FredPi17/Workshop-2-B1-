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
 ?>
