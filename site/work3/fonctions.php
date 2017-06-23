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
  /**
  *\author Les 4G
  *\verificator Equipe 4G
  *\brief Renvoie le prochain id d'une question qui n'a pas été utilisé
  * Son paramètre est le tableaux de questions.
  *\return l'id d'une question à utiliser
  */
  do { // Faire tant que id généré aléatoirement ne soit pas dans le tableaux
    $id=Random($tab);
  } while (! isset($tab[$id]));
  return $id; // Si je renvoie l'id qui n'a pas été dans le tableau
}
function ChangeGauge($droite, $id){
  /**
  *\author Les 4G
  *\verificator Equipe 4G
  *\brief On change les variables sessions des jauges, avec les points de la réponse droite ou gauche
  * Son paramètre est un boolean, pour savoir si on est à la reponse droite ou non.
  *\elle ne renvoie rien, mais elle change les valeurs des variables sessions.
  */
  if ($droite) {  /*Si j'ai fait la réponse droite, j'aditionne les sessions, avec les jauges droites de mon profil
                    * Certaines jauges droite sont à 0 donc on peut faire +0 */
    $_SESSION['competitivite'] +=  $_SESSION['question'][$id]['competitiviteDroite'];
    $_SESSION['impact'] +=  $_SESSION['question'][$id]['impactDroite'];
    $_SESSION['social'] +=  $_SESSION['question'][$id]['socialDroite'];
    $_SESSION['environnement'] +=  $_SESSION['question'][$id]['environnementDroite'];
  }
  else /* Sinon on a choisit la réponse gauche */
  {
    $_SESSION['competitivite'] +=  $_SESSION['question'][$id]['competitiviteGauche'];
    $_SESSION['impact'] +=  $_SESSION['question'][$id]['impactGauche'];
    $_SESSION['social'] +=  $_SESSION['question'][$id]['socialGauche'];
    $_SESSION['environnement'] +=  $_SESSION['question'][$id]['environnementGauche'];
}
}
function IsFin(){
  /**
  *\author Les 4G
  *\verificator Equipe 4G
  *\brief Cette fonction regarde si on est à la fin ou si on continu de jouer.
  * Pas de paramètres
  *\return Elle ne renvoie rien, elle redirige le joueur vers la page fin si il rentre dans des conditions
  */

  /* Ici, il y a plusieurs conditions qui se ressemblent.
  *si la variable session d'une jauge passe en dessous de 0 on redirige le joueur vers une page de fin spécifique à la jauge  */
  if ($_SESSION['competitivite'] < 0) {
    header('Location: fin.php?fin=competitivite');
    die();
  }

  if ($_SESSION['impact'] < 0) {
    header('Location: fin.php?fin=impact');
    die();
  }

  if ($_SESSION['social'] < 0) {
    header('Location: fin.php?fin=social');
    die();
  }

  if ($_SESSION['environnement'] < 0) {
    header('Location: fin.php?fin=environnement');
    die();
  }
  //En revanche si il n'est pas tomber à 0 et qu'il est resté bon jusqu'à 15 questions, il va vers la fin "Gagné""
  if ($_SESSION['compteur'] == 15) {
    header('Location: fin.php?fin=gg');
    die();
  }

}
function RD(){
  /**
  *\author Les 4G
  *\verificator Equipe 4G
  *\brief Si la fonction est appelée, la compétitivité se divise par deux
  * Pas de paramètre on utilise une variable session.
  *\return Pas de return, on utilise une variable session
  */
  $_SESSION['competitivite'] = $_SESSION['competitivite'] / 2; // On divise par 2 la variable session competitivite
}
 ?>
