<?php
/**
* \file          fr.php
* \author    les4G / Grenoble
* \version   0.1
* \date       08/03/2017
* \brief       Initialise les informations de chaque question dans un tableau
*               qui centralise tout
*
* \details    Dans le détails il y a dans l'ordre: L'intitulé de la question
*           L'image de la question, la réponse quand on glisse à droite,
*           la réponse quand on glisse à gauche, le commentaire si on glisse à droite,
*         le commentaire si on glisse à gauche et les les jauges qui sont modifiées
*           si on slide à droite ou à gauche. On répète cela 30 fois,
*               le nombre de questions dans le jeu
*
*/
$_SESSION['question'][] = Array();
$Question['intitule'] = "Une danceuse Russe dans un hôtel vous fait de l'oeil. Acceptez vous de monter avec elle dans la chambre?";
$Question['image'] = "images/russie.jpg";
$Question['reponseDroite'] = "J'y vais !";
$Question['reponseGauche'] = "C'est pas mon genre";
$Question['commentaireDroite'] = "Vous découvrez que la Demoiselle a une relation plus qu'amicale avec un riche russe";
$Question['commentaireGauche'] = "Un journaliste vous a vu décliner son invitation et vous fait une réputation d'insociable";
$Question['environnementDroite'] = 0;
$Question['environnementGauche'] = 0;
$Question['impactDroite'] = +6;
$Question['impactGauche'] = 0;
$Question['competitiviteDroite'] = +5;
$Question['competitiviteGauche'] = 0;
$Question['socialDroite'] = 0;
$Question['socialGauche'] = -4;
$Question['Next'] = "suivant";
$_SESSION['question'][] = $Question;

$Question['intitule'] = "Les actionnaires veulent une opération de licenciement du personnel pour des raisons financières";
$Question['image'] = "images/licencié.jpg";
$Question['reponseDroite'] = "J'en licencie 40";
$Question['reponseGauche'] = "J’en licencie 10";
$Question['commentaireDroite'] = "C'est radical mais dangereux pour la santé sociale de l'entreprise";
$Question['commentaireGauche'] = "Vous avez choisi de jouer sur le social, vos employés vous en remercie";
$Question['environnementDroite'] = 0;
$Question['environnementGauche'] = 0;
$Question['impactDroite'] = 0;
$Question['impactGauche'] = 0;
$Question['competitiviteDroite'] = +10;
$Question['competitiviteGauche'] = +5;
$Question['socialDroite'] = -8;
$Question['socialGauche'] = -4;
$Question['Next'] = "suivant";
$_SESSION['question'][] = $Question;

$Question['intitule'] = "Vous êtes accusé de détournement de fonds";
$Question['image'] = "images/dicaprio.jpg";
$Question['reponseDroite'] = "Je déments";
$Question['reponseGauche'] = "Je déments et use de mon compte en banque pour m'en sortir";
$Question['commentaireDroite'] = "Bravo vous avez été honnête et ça a payé";
$Question['commentaireGauche'] = "Ton compte en banque t'a encore sauvé";
$Question['environnementDroite'] = 0;
$Question['environnementGauche'] = 0;
$Question['impactDroite'] = +6;
$Question['impactGauche'] = +6;
$Question['competitiviteDroite'] = 0;
$Question['competitiviteGauche'] = 0;
$Question['socialDroite'] = +4;
$Question['socialGauche'] = +4;
$Question['Next'] = "suivant";
$_SESSION['question'][] = $Question;

$Question['intitule'] = "Vous êtes accusé de détournement de fond";
$Question['image'] = "images/dicaprio.jpg";
$Question['reponseDroite'] = "Je déments";
$Question['reponseGauche'] = "Je déments et use de mon compte en banque pour m'en sortir";
$Question['commentaireDroite'] = "Les gens ne croient pas en vos mensonges";
$Question['commentaireGauche'] = "Ton compte en banque ne t'a pas sauvé cette fois-ci";
$Question['environnementDroite'] = 0;
$Question['environnementGauche'] = 0;
$Question['impactDroite'] = -6;
$Question['impactGauche'] = -6;
$Question['competitiviteDroite'] = 0;
$Question['competitiviteGauche'] = 0;
$Question['socialDroite'] = -4;
$Question['socialGauche'] = -4;
$Question['Next'] = "suivant";
$_SESSION['question'][] = $Question;

$Question['intitule'] = "L'entreprise a une opportunité de délocalisation en Afrique";
$Question['image'] = "images/afrique.jpg";
$Question['reponseDroite'] = "J'accepte";
$Question['reponseGauche'] = "Je refuse";
$Question['commentaireDroite'] = "Vous sacrifiez des emplois pour gagner un peu d’argent, ça ne pousse pas vos employés  à dévoiler le meilleurs d’eux-mêmes.";
$Question['commentaireGauche'] = "Tes employés organisent une petite fête pour te remercier";
$Question['environnementDroite'] = 0;
$Question['environnementGauche'] = 0;
$Question['impactDroite'] = +6;
$Question['impactGauche'] = 0;
$Question['competitiviteDroite'] = +10;
$Question['competitiviteGauche'] = 0;
$Question['socialDroite'] = -8;
$Question['socialGauche'] = +8;
$Question['Next'] = "suivant";
$_SESSION['question'][] = $Question;

$Question['intitule'] = "Faut-il acheter des appareils électroniques fait avec des matières premières d'origine inconnues?";
$Question['image'] = "images/electronique.jpg";
$Question['reponseDroite'] = "Oui j'achète";
$Question['reponseGauche'] = "Non ce n’est pas nécessaire";
$Question['commentaireDroite'] = "La production d’une batterie a le même impact sur l’environnement qu’un pet de vache !";
$Question['commentaireGauche'] = "Captain planète est fier de toi";
$Question['environnementDroite'] = -14;
$Question['environnementGauche'] = +7;
$Question['impactDroite'] = 0;
$Question['impactGauche'] = 0;
$Question['competitiviteDroite'] = +5;
$Question['competitiviteGauche'] = 0;
$Question['socialDroite'] = -4;
$Question['socialGauche'] = +4;
$Question['Next'] = "suivant";
$_SESSION['question'][] = $Question;

$Question['intitule'] = "Investissement dans la R&D c’est risqué !!";
$Question['image'] = "images/r&d.jpg";
$Question['reponseDroite'] = "Oui je veux investir";
$Question['reponseGauche'] = "Non cela ne m'intéresse pas";
$Question['commentaireDroite'] = "Bravo, tu as perdu la moitié de ton argent, il faudrait mieux investir autre part ? ";
$Question['commentaireGauche'] = "T’es pas très courageux";
$Question['environnementDroite'] = 0;
$Question['environnementGauche'] = 0;
$Question['impactDroite'] = +6;
$Question['impactGauche'] = 0;
$Question['competitiviteDroite'] = 0;
$Question['competitiviteGauche'] = 0;
$Question['socialDroite'] = +4;
$Question['socialGauche'] = 0;
$Question['Next'] = "suivant";
$_SESSION['question'][] = $Question;

$Question['intitule'] = "La concurrence dit qu'une usine de l'entreprise présente une menace chimique sur les
habitations environnantes.";
$Question['image'] = "images/usine.jpg";
$Question['reponseDroite'] = "Je finance l'enquête";
$Question['reponseGauche'] = "J'ai confiance en mon usine";
$Question['commentaireDroite'] = "La concurrence mentait, dommage pour votre compte en banque !";
$Question['commentaireGauche'] = "La concurrence disait vraie, comment peux-tu dormir la nuit ?? Les gens demandent la
réparation de l’usine";
$Question['environnementDroite'] = +7;
$Question['environnementGauche'] = -14;
$Question['impactDroite'] = 0;
$Question['impactGauche'] = -6;
$Question['competitiviteDroite'] = -5;
$Question['competitiviteGauche'] = -10;
$Question['socialDroite'] = +4;
$Question['socialGauche'] = -4;
$Question['Next'] = "suivant";
$_SESSION['question'][] = $Question;

$Question['intitule'] = "Une entreprise concurrente développe une nouvelle technologie dans ses laboratoires";
$Question['image'] = "images/smartphone.jpg";
$Question['reponseDroite'] = "Je fais de l’espionnage industriel";
$Question['reponseGauche'] = "Je ne fais rien";
$Question['commentaireDroite'] = "C’est vrai que l’argent c’est super important";
$Question['commentaireGauche'] = "Utiliser ses compétences personnelles c'est bien";
$Question['environnementDroite'] = 0;
$Question['environnementGauche'] = 0;
$Question['impactDroite'] = 0;
$Question['impactGauche'] = 0;
$Question['competitiviteDroite'] = +5;
$Question['competitiviteGauche'] = 0;
$Question['socialDroite'] = -4;
$Question['socialGauche'] = +4;
$Question['Next'] = "suivant";
$_SESSION['question'][] = $Question;

$Question['intitule'] = "Voulez-vous aider financièrement des employés en difficulté ?";
$Question['image'] = "images/argent.jpg";
$Question['reponseDroite'] = "Oui";
$Question['reponseGauche'] = "Non";
$Question['commentaireDroite'] = "L’argent ne fait pas le bonheur… mais ça aide";
$Question['commentaireGauche'] = "C’est pas très humaniste tout ça";
$Question['environnementDroite'] = 0;
$Question['environnementGauche'] = 0;
$Question['impactDroite'] = 0;
$Question['impactGauche'] = 0;
$Question['competitiviteDroite'] = -5;
$Question['competitiviteGauche'] = 0;
$Question['socialDroite'] = +4;
$Question['socialGauche'] = -8;
$Question['Next'] = "suivant";
$_SESSION['question'][] = $Question;

$Question['intitule'] = "La cantine de l'entreprise ne convient pas à certains employés car ils font des allergies";
$Question['image'] = "images/cantine.jpg";
$Question['reponseDroite'] = "J'adapte les repas pour les salariés";
$Question['reponseGauche'] = "Ils doivent se débrouiller";
$Question['commentaireDroite'] = "Un bon repas et le cerveau est reparti";
$Question['commentaireGauche'] = "On ne change pas une cantine qui gagne";
$Question['environnementDroite'] = 0;
$Question['environnementGauche'] = 0;
$Question['impactDroite'] = 0;
$Question['impactGauche'] = 0;
$Question['competitiviteDroite'] = +5;
$Question['competitiviteGauche'] = 0;
$Question['socialDroite'] = +4;
$Question['socialGauche'] = -8;
$Question['Next'] = "suivant";
$_SESSION['question'][] = $Question;

$Question['intitule'] =  "Voulez-vous vous lancer dans une nouvelle activité de production d’électricité tournée vers les énergies propres ? Risqué";
$Question['image'] = "images/eolienne.jpg";
$Question['reponseDroite'] = "Oui";
$Question['reponseGauche'] = "Je refuse";
$Question['commentaireDroite'] = "Cet investissement va mettre du temps à être rentable mais ça vaut le coup";
$Question['commentaireGauche'] = "Les poissons à trois yeux ça rend bien dans l’aquarium";
$Question['environnementDroite'] = +14;
$Question['environnementGauche'] = -14;
$Question['impactDroite'] = +6;
$Question['impactGauche'] = -6;
$Question['competitiviteDroite'] = -5;
$Question['competitiviteGauche'] = +5;
$Question['socialDroite'] = +4;
$Question['socialGauche'] = -4;
$Question['Next'] = "suivant";
$_SESSION['question'][] = $Question;

$Question['intitule'] = "Une entreprise vous propose une machine révolutionnaire pour être plus performant dans
votre usine";
$Question['image'] = "images/machine.jpg";
$Question['reponseDroite'] = "J'accepte l'offre à condition d'être livré rapidement";
$Question['reponseGauche'] = "Je refuse et je fais de la mauvaise publicité pour cette entreprise";
$Question['commentaireDroite'] = "Il faut être exigeant";
$Question['commentaireGauche'] = "Ce n’est pas nous qui provoquons le jugement dernier (terminator)";
$Question['environnementDroite'] = 0;
$Question['environnementGauche'] = 0;
$Question['impactDroite'] = 0;
$Question['impactGauche'] = 0;
$Question['competitiviteDroite'] = +5;
$Question['competitiviteGauche'] = -5;
$Question['socialDroite'] = -4;
$Question['socialGauche'] = -4;
$Question['Next'] = "suivant";
$_SESSION['question'][] = $Question;

$Question['intitule'] = "Des étudiants dans une école d'ingénierie informatique souhaitent faire de l'alternance";
$Question['image'] = "images/etudiants.jpg";
$Question['reponseDroite'] = "Je veux bien des alternants dans l'entreprise";
$Question['reponseGauche'] = "Je ne veux pas d'alternant dans l'entreprise";
$Question['commentaireDroite'] = "Les jeunes c’est l’avenir";
$Question['commentaireGauche'] = "On ne fait pas confiance à des personnes sans expérience";
$Question['environnementDroite'] = 0;
$Question['environnementGauche'] = 0;
$Question['impactDroite'] = +6;
$Question['impactGauche'] = -6;
$Question['competitiviteDroite'] = +5;
$Question['competitiviteGauche'] = 0;
$Question['socialDroite'] = +4;
$Question['socialGauche'] = -8;
$Question['Next'] = "suivant";
$_SESSION['question'][] = $Question;

$Question['intitule'] = "Un groupe de salariés manifeste pour avoir une augmentation de salaire";
$Question['image'] = "images/salaire.jpg";
$Question['reponseDroite'] = "Je décide de les augmenter";
$Question['reponseGauche'] = "Je vais y réfléchir";
$Question['commentaireDroite'] = "C’est grâce à eux que tout ce petit monde tourne, faut bien les encourager !";
$Question['commentaireGauche'] = "Sale communiste !";
$Question['environnementDroite'] = 0;
$Question['environnementGauche'] = 0;
$Question['impactDroite'] = +6;
$Question['impactGauche'] = 0;
$Question['competitiviteDroite'] = 0;
$Question['competitiviteGauche'] = 0;
$Question['socialDroite'] = +4;
$Question['socialGauche'] = -4;
$Question['Next'] = "suivant";
$_SESSION['question'][] = $Question;

$Question['intitule'] = "Un chercheur vous rend visite pour vous vendre des nouvelles batteries de téléphone plus
performantes";
$Question['image'] = "images/batterie.jpg";
$Question['reponseDroite'] = "J’achète";
$Question['reponseGauche'] = "Je ne suis pas intéressé";
$Question['commentaireDroite'] = "Elles se vendent bien c’est sur. Mais elles explosent bien aussi.";
$Question['commentaireGauche'] = "Tu as bien fait c'était du samsung";
$Question['environnementDroite'] = -14;
$Question['environnementGauche'] = 0;
$Question['impactDroite'] = -6;
$Question['impactGauche'] = +6;
$Question['competitiviteDroite'] = +10;
$Question['competitiviteGauche'] = 0;
$Question['socialDroite'] = 0;
$Question['socialGauche'] = +4;
$Question['Next'] = "suivant";
$_SESSION['question'][] = $Question;

$Question['intitule'] = "Une association vous appelle pour vous demander si vous voulez faire une donation, pour la
lutte contre les maladies rares";
$Question['image'] = "images/donation.jpg";
$Question['reponseDroite'] = "Je crée une division de recherche pour créer des vaccins";
$Question['reponseGauche'] = "Je fais un don significatif";
$Question['commentaireDroite'] = "On va sauver le monde !";
$Question['commentaireGauche'] = "C’est ma bonne action de la journée";
$Question['environnementDroite'] = 0;
$Question['environnementGauche'] = 0;
$Question['impactDroite'] = +12;
$Question['impactGauche'] = +12;
$Question['competitiviteDroite'] = -5;
$Question['competitiviteGauche'] = -5;
$Question['socialDroite'] = +4;
$Question['socialGauche'] = +4;
$Question['Next'] = "suivant";
$_SESSION['question'][] = $Question;

$Question['intitule'] = "Un nouveau type de panneau photovoltaïque vous est proposé pour votre usine 100% verte";
$Question['image'] = "images/panneau.jpg";
$Question['reponseDroite'] = "J’investis !";
$Question['reponseGauche'] = "C’est pas rentable financièrement";
$Question['commentaireDroite'] = "Depuis que Yannick Noah a commencé la musique, j’ai acheté tous ses CD !";
$Question['commentaireGauche'] = "On a bien besoin du réchauffement climatique, regardez il fait que 6°!";
$Question['environnementDroite'] = +14;
$Question['environnementGauche'] = -14;
$Question['impactDroite'] = +6;
$Question['impactGauche'] = -6;
$Question['competitiviteDroite'] = -5;
$Question['competitiviteGauche'] = +5;
$Question['socialDroite'] = +4;
$Question['socialGauche'] = -4;
$Question['Next'] = "suivant";
$_SESSION['question'][] = $Question;

$Question['intitule'] = "Un journaliste a publié un article faisant scandale sur les conditions de travail des employés
dans vos infrastructures à l’étranger.";
$Question['image'] = "images/journal.jpg";
$Question['reponseDroite'] = "Y a moyen de s’arranger ?";
$Question['reponseGauche'] = "J’organise une conférence de presse";
$Question['commentaireDroite'] = "Dommage ça n’a pas marché !";
$Question['commentaireGauche'] = "Tu es salué par la critique";
$Question['environnementDroite'] = 0;
$Question['environnementGauche'] = 0;
$Question['impactDroite'] = -6;
$Question['impactGauche'] = -6;
$Question['competitiviteDroite'] = -5;
$Question['competitiviteGauche'] = 0;
$Question['socialDroite'] = -4;
$Question['socialGauche'] = +4;
$Question['Next'] = "suivant";
$_SESSION['question'][] = $Question;

$Question['intitule'] = "Lors d’une conférence de presse vous dites un propos raciste sur les japonais";
$Question['image'] = "images/japon.jpg";
$Question['reponseDroite'] = "Je ne fais pas de commentaire dessus";
$Question['reponseGauche'] = "Je m’excuse";
$Question['commentaireDroite'] = "Des investisseurs Chinois ont adoré, ils vous font une offre.";
$Question['commentaireGauche'] = "Des investisseurs Chinois pensaient que vous seriez leur nouvel ami, ils voulaient vous faire
une offre";
$Question['environnementDroite'] = 0;
$Question['environnementGauche'] = 0;
$Question['impactDroite'] = +6;
$Question['impactGauche'] = -6;
$Question['competitiviteDroite'] = +10;
$Question['competitiviteGauche'] = -10;
$Question['socialDroite'] = -4;
$Question['socialGauche'] = +4;
$Question['Next'] = "suivant";
$_SESSION['question'][] = $Question;

$Question['intitule'] = "Votre secrétaire a prévu un rendez-vous avec un actionnaire au bureau alors qu’au même
moment vous avez une partie de golf avec le directeur d’une entreprise partenaire.";
$Question['image'] = "images/reunion_golf.jpg";
$Question['reponseDroite'] = "Je reçois l’actionnaire";
$Question['reponseGauche'] = "Je vais au golf";
$Question['commentaireDroite'] = "Business is Business";
$Question['commentaireGauche'] = "Je n’allais pas manquer une journée au golf ! Soyons sérieux !";
$Question['environnementDroite'] = 0;
$Question['environnementGauche'] = 0;
$Question['impactDroite'] = +6;
$Question['impactGauche'] = 0;
$Question['competitiviteDroite'] = 0;
$Question['competitiviteGauche'] = 0;
$Question['socialDroite'] = 0;
$Question['socialGauche'] = +4;
$Question['Next'] = "suivant";
$_SESSION['question'][] = $Question;

$Question['intitule'] = "Un hacker a réussi à voler des informations stratégiques dans l’entreprise, il pourrait les
diffuser à tout moment.";
$Question['image'] = "images/hacker.jpg";
$Question['reponseDroite'] = "J’engage une équipe d’informaticiens pour le retrouver";
$Question['reponseGauche'] = "Je paye la rançon";
$Question['commentaireDroite'] = "Les actionnaires ont peur et partent dommage";
$Question['commentaireGauche'] = "Tes concurrents prennent un malin plaisir à se moquer";
$Question['environnementDroite'] = 0;
$Question['environnementGauche'] = 0;
$Question['impactDroite'] = 0;
$Question['impactGauche'] = -12;
$Question['competitiviteDroite'] = -10;
$Question['competitiviteGauche'] = -10;
$Question['socialDroite'] = -4;
$Question['socialGauche'] = -4;
$Question['Next'] = "suivant";
$_SESSION['question'][] = $Question;

$Question['intitule'] = "Une entreprise de dégraissant pour machine vous propose un produit pour améliorer la
durée de vie de vos équipements";
$Question['image'] = "images/entretien.jpg";
$Question['reponseDroite'] = "J’accepte";
$Question['reponseGauche'] = "Je refuse";
$Question['commentaireDroite'] = "La rivière qui passe à côté est devenu orange mais ça doit pas être ta faute";
$Question['commentaireGauche'] = "Je ne veux pas détruire la nature";
$Question['environnementDroite'] = -14;
$Question['environnementGauche'] = +7;
$Question['impactDroite'] = -6;
$Question['impactGauche'] = +6;
$Question['competitiviteDroite'] = +5;
$Question['competitiviteGauche'] = -10;
$Question['socialDroite'] = -4;
$Question['socialGauche'] = +4;
$Question['Next'] = "suivant";
$_SESSION['question'][] = $Question;

$Question['intitule'] = "Les syndicats bloquent l’accès à l’entrée d’une usine.";
$Question['image'] = "images/greve.jpg";
$Question['reponseDroite'] = "Ne pas agir ils partiront tôt ou tard";
$Question['reponseGauche'] = "Agir ! Je leur donne rendez-vous dans mon bureau";
$Question['commentaireDroite'] = "Ils partiront tôt ou tard";
$Question['commentaireGauche'] = "Je leur donne rendez-vous dans mon bureau";
$Question['environnementDroite'] = 0;
$Question['environnementGauche'] = 0;
$Question['impactDroite'] = -6;
$Question['impactGauche'] = 0;
$Question['competitiviteDroite'] = -10;
$Question['competitiviteGauche'] = -5;
$Question['socialDroite'] = -4;
$Question['socialGauche'] = +4;
$Question['Next'] = "suivant";
$_SESSION['question'][] = $Question;

$Question['intitule'] = "Le CA de ce mois-ci a grandement baissé. Les investisseurs pensent que les coûts de
production des téléphones sont trop élevés.";
$Question['image'] = "images/faillite.jpg";
$Question['reponseDroite'] = "J’augmente le prix des téléphones de 20%";
$Question['reponseGauche'] = "J’augmente le prix des téléphones de 50%";
$Question['commentaireDroite'] = "C’est raisonnable et ça marche";
$Question['commentaireGauche'] = "Plus personne n’achète vos téléphones";
$Question['environnementDroite'] = 0;
$Question['environnementGauche'] = 0;
$Question['impactDroite'] = 0;
$Question['impactGauche'] = 0;
$Question['competitiviteDroite'] = +5;
$Question['competitiviteGauche'] = -5;
$Question['socialDroite'] = 0;
$Question['socialGauche'] = 0;
$Question['Next'] = "suivant";
$_SESSION['question'][] = $Question;

$Question['intitule'] = "Il se trouve que le directeur du service comptabilité se permet de regarder vos mails.";
$Question['image'] = "images/mail.jpg";
$Question['reponseDroite'] = "Je le licencie";
$Question['reponseGauche'] = "Je lui fais comprendre qu’il ne doit pas continuer, sinon il risque sa place";
$Question['commentaireDroite'] = "Ici on me respecte, il faut montrer qui c’est le chef !";
$Question['commentaireGauche'] = "C’est un bon comptable puis on fait tous des erreurs!";
$Question['environnementDroite'] = 0;
$Question['environnementGauche'] = 0;
$Question['impactDroite'] = 0;
$Question['impactGauche'] = 0;
$Question['competitiviteDroite'] = -5;
$Question['competitiviteGauche'] = 0;
$Question['socialDroite'] = 0;
$Question['socialGauche'] = +4;
$Question['Next'] = "suivant";
$_SESSION['question'][] = $Question;

$Question['intitule'] = "Le CE demande une subvention de l’entreprise pour les vacances d’hiver.";
$Question['image'] = "images/neige.jpg";
$Question['reponseDroite'] = "J’accepte";
$Question['reponseGauche'] = "Je refuse";
$Question['commentaireDroite'] = "Faut bien se détendre de temps en temps et puis ça boostera leur motivation";
$Question['commentaireGauche'] = "L’argent tombe pas du ciel";
$Question['environnementDroite'] = 0;
$Question['environnementGauche'] = 0;
$Question['impactDroite'] = 0;
$Question['impactGauche'] = 0;
$Question['competitiviteDroite'] = -5;
$Question['competitiviteGauche'] = 0;
$Question['socialDroite'] = +4;
$Question['socialGauche'] = -4;
$Question['Next'] = "suivant";
$_SESSION['question'][] = $Question;

$Question['intitule'] = "Le trie des déchets dans toutes les usines !";
$Question['image'] = "images/trie.jpg";
$Question['reponseDroite'] = "oui";
$Question['reponseGauche'] = "non";
$Question['commentaireDroite'] = "Green peace for ever";
$Question['commentaireGauche'] = "Faut pas exagérer on va quand même pas se mettre à venir pieds nus au boulot";
$Question['environnementDroite'] = +14;
$Question['environnementGauche'] = -14;
$Question['impactDroite'] = 0;
$Question['impactGauche'] = -6;
$Question['competitiviteDroite'] = 0;
$Question['competitiviteGauche'] = 0;
$Question['socialDroite'] = 0;
$Question['socialGauche'] = 0;
$Question['Next'] = "suivant";
$_SESSION['question'][] = $Question;

$Question['intitule'] = "Récupérer l’eau de pluie pour alimenter les toilettes et le système de nettoyage des
véhicules";
$Question['image'] = "images/eau.jpg";
$Question['reponseDroite'] = "Oui";
$Question['reponseGauche'] = "Non";
$Question['commentaireDroite'] = "Ya beaucoup d’eau autant l’utiliser!";
$Question['commentaireGauche'] = "Cela demande trop de réflexion, non merci";
$Question['environnementDroite'] = +7;
$Question['environnementGauche'] = -14;
$Question['impactDroite'] = +6;
$Question['impactGauche'] = -12;
$Question['competitiviteDroite'] = 0;
$Question['competitiviteGauche'] = 0;
$Question['socialDroite'] = 0;
$Question['socialGauche'] = 0;
$Question['Next'] = "suivant";
$_SESSION['question'][] = $Question;

$Question['intitule'] = "Un employé s’est retrouvé dans une vidéo virale sur les réseaux sociaux, son image est salie.";
$Question['image'] = "images/giphy.gif";
$Question['reponseDroite'] = "Vite montre la photo pour que je la partage !";
$Question['reponseGauche'] = "C’est une insulte à la personne, il faut bloquer l’image !";
$Question['commentaireDroite'] = "Elle est géniale!!! Faut que le reste du monde la voit!";
$Question['commentaireGauche'] = "A l’entreprise on est là pour travailler pas pour rigoler!";
$Question['environnementDroite'] = 0;
$Question['environnementGauche'] = 0;
$Question['impactDroite'] = 0;
$Question['impactGauche'] = 0;
$Question['competitiviteDroite'] = 0;
$Question['competitiviteGauche'] = 0;
$Question['socialDroite'] = -4;
$Question['socialGauche'] = +4;
$Question['Next'] = "suivant";
$_SESSION['question'][] = $Question;

$Question['intitule'] = "Le salon des nouvelles technologies arrive à grands pas, le téléphone que vous deviez
présenter a encore beaucoup de bugs.";
$Question['image'] = "images/salon.jpg";
$Question['reponseDroite'] = "Même avec les bugs vous présentez le smartphone au public.";
$Question['reponseGauche'] = "Non, cela abimerait l’image de l’entreprise.";
$Question['commentaireDroite'] = "Je suis enfin devenu le Steve Jobs moderne personne ne pourra m'arrêter .";
$Question['commentaireGauche'] = "On n’est pas des menteurs, la concurrence a présenté un téléphone qui a conquis le public !";
$Question['environnementDroite'] = 0;
$Question['environnementGauche'] = 0;
$Question['impactDroite'] = 0;
$Question['impactGauche'] = 0;
$Question['competitiviteDroite'] = +5;
$Question['competitiviteGauche'] = -5;
$Question['socialDroite'] = -4;
$Question['socialGauche'] = +4;
$Question['Next'] = "suivant";
$_SESSION['question'][] = $Question;

?>
