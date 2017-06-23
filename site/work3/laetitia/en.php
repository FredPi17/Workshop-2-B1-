<?php
/**
* \file          en.php
* \author    les4G / Grenoble
* \version   0.1
* \date       08/03/2017
* \brief       Initialise the information of each question in the array
*              which centralises everything
*
* \details    Details in order : Name of the question.
*           Image of the question, the awnser when you swipe right,
*           the awnser when you swipe left , the comment when you swipe right,
*         the comment if you swipe left and the gauges that are modified
*           if you swipe right or left. we then repeat the process 30 times,
*               the number of questions in the game
*
*/

$Questions = Array();
$Question['intitule'] = "A russian dancer in a hotel is making eyecontact with you. Do you accept to go into her room?";
$Question['image'] = "images/russie.jpg";
$Question['reponseDroite'] = "I'll go!";
$Question['reponseGauche'] = "Not my type";
$Question['commentaireDroite'] = "You discover that the damsel has a relationship with a rich russian man.";
$Question['commentaireGauche'] = "A journalist see's that you declined the invitation and gives you a sociopath reputation.";
$Question['environnementDroite'] = 0;
$Question['environnementGauche'] = 0;
$Question['impactDroite'] = +6;
$Question['impactGauche'] = 0;
$Question['competitiviteDroite'] = +5;
$Question['competitiviteGauche'] = 0;
$Question['socialDroite'] = 0;
$Question['socialGauche'] = -4;
$_SESSION['question'][] = $Question;


$Questions = Array();
$Question['intitule'] = "The shareholders of the company want you to lay off workers for financial reasons.";
$Question['image'] = "images/licencié.jpg";
$Question['reponseDroite'] = "Lay off 40";
$Question['reponseGauche'] = "Lay off 10";
$Question['commentaireDroite'] = "That's a lot of people that just got fired workers are now very worried about job security.";
$Question['commentaireGauche'] = "The workers understand your reasons for what you did, nobody holds a grudge against you.";
$Question['environnementDroite'] = 0;
$Question['environnementGauche'] = 0;
$Question['impactDroite'] = 0;
$Question['impactGauche'] = 0;
$Question['competitiviteDroite'] = +10;
$Question['competitiviteGauche'] = +5;
$Question['socialDroite'] = -8;
$Question['socialGauche'] = -4;
$_SESSION['question'][] = $Question;


$Questions = Array();
$Question['intitule'] = "You are accused of company embezzlement of funds.";
$Question['image'] = "images/dicaprio.jpg";
$Question['reponseDroite'] = "I deny the allegations.";
$Question['reponseGauche'] = "I deny the allegations and pay the right people to stop talking.";
$Question['commentaireDroite'] = "That's great! You were honest!";
$Question['commentaireGauche'] = "Your bank account saved your life! You can always trust money.";
$Question['environnementDroite'] = 0;
$Question['environnementGauche'] = 0;
$Question['impactDroite'] = 0;
$Question['impactGauche'] = 0;
$Question['competitiviteDroite'] = +10;
$Question['competitiviteGauche'] = +5;
$Question['socialDroite'] = -8;
$Question['socialGauche'] = -4;
$_SESSION['question'][] = $Question;

$Question['intitule'] = "You are accused of company embezzlement of funds.";
$Question['image'] = "images/dicaprio.jpg";
$Question['reponseDroite'] = "I deny the allegations.";
$Question['reponseGauche'] = "I deny the allegations and pay the right people to stop talking.";
$Question['commentaireDroite'] = "The public eye does not believe your lies.";
$Question['commentaireGauche'] = "Your bank account did not save your life this time! money isn't always the solution.";
$Question['environnementDroite'] = 0;
$Question['environnementGauche'] = 0;
$Question['impactDroite'] = 0;
$Question['impactGauche'] = 0;
$Question['competitiviteDroite'] = +10;
$Question['competitiviteGauche'] = +5;
$Question['socialDroite'] = -8;
$Question['socialGauche'] = -4;
$_SESSION['question'][] = $Question;


$Question['intitule'] = "Your company has an opportunity to go off-shore in Africa!";
$Question['image'] = "images/afrique.jpg";
$Question['reponseDroite'] = "I accept!";
$Question['reponseGauche'] = "I decline.";
$Question['commentaireDroite'] = "You are laying off people with families to have a little money, it isn't really great either for employees to work hard...";
$Question['commentaireGauche'] = "Your employees are very happy that you declined! They threw you a party to thank-you.";
$Question['environnementDroite'] = 0;
$Question['environnementGauche'] = 0;
$Question['impactDroite'] = +6;
$Question['impactGauche'] = 0;
$Question['competitiviteDroite'] = +10;
$Question['competitiviteGauche'] = 0;
$Question['socialDroite'] = -8;
$Question['socialGauche'] = +8;
$_SESSION['question'][] = $Question;


$Question['intitule'] = "Should we buy electronical components from unknown origines?";
$Question['image'] = "images/electronique.jpg";
$Question['reponseDroite'] = "Sure let me buy some.";
$Question['reponseGauche'] = "No i don't really need them.";
$Question['commentaireDroite'] = "The production of one of these batteries has the same effect on the planet then a cow when it farts!";
$Question['commentaireGauche'] = "Captain Planet is proud of you...";
$Question['environnementDroite'] = -14;
$Question['environnementGauche'] = +7;
$Question['impactDroite'] = 0;
$Question['impactGauche'] = 0;
$Question['competitiviteDroite'] = +5;
$Question['competitiviteGauche'] = 0;
$Question['socialDroite'] = -4;
$Question['socialGauche'] = +4;
$_SESSION['question'][] = $Question;


$Question['intitule'] = "Investing in R&D is pretty risky!! Do you want to invest??";
$Question['image'] = "images/r&d.png";
$Question['reponseDroite'] = "Yes i'll invest";
$Question['reponseGauche'] = "No i'm not interrested";
$Question['commentaireDroite'] = "Every 2 turns you now have a 1/2 chance to gain competitivity!";
$Question['commentaireGauche'] = "You're a pussy-cat!";
$Question['environnementDroite'] = 0;
$Question['environnementGauche'] = 0;
$Question['impactDroite'] = +6;
$Question['impactGauche'] = 0;
$Question['competitiviteDroite'] = 0;
$Question['competitiviteGauche'] = 0;
$Question['socialDroite'] = +4;
$Question['socialGauche'] = 0;
$_SESSION['question'][] = $Question;


$Question['intitule'] = "The competing companies are saying that one of our sites is presenting a chemical threat to local residents.";
$Question['image'] = "images/usine.jpg";
$Question['reponseDroite'] = "Let me prove that there are no risks.(Start an investigation)";
$Question['reponseGauche'] = "I fully trust the company(Do nothing)";
$Question['commentaireDroite'] = "The competing companies were lying that's gonna hurt your wallet";
$Question['commentaireGauche'] = "The competitors were right, how can you sleep at night?? Are you a human being ?? People are demanding you to pay for damages claims ";
$Question['environnementDroite'] = +7;
$Question['environnementGauche'] = -14;
$Question['impactDroite'] = 0;
$Question['impactGauche'] = -6;
$Question['competitiviteDroite'] = -5;
$Question['competitiviteGauche'] = -10;
$Question['socialDroite'] = +4;
$Question['socialGauche'] = -4;
$_SESSION['question'][] = $Question;


$Question['intitule'] = "Une entreprise concurrentehe competition is developing a new techonlogie in their labs.";
$Question['image'] = "images/smartphone.jpg";
$Question['reponseDroite'] = "Let me do some industrial espionage";
$Question['reponseGauche'] = "I don't care";
$Question['commentaireDroite'] = "It's true who cares about working when others can do it for you?";
$Question['commentaireGauche'] = "Using your own team to expect to do something better shows that you are a good CEO";
$Question['environnementDroite'] = 0;
$Question['environnementGauche'] = 0;
$Question['impactDroite'] = 0;
$Question['impactGauche'] = 0;
$Question['competitiviteDroite'] = +5;
$Question['competitiviteGauche'] = 0;
$Question['socialDroite'] = -4;
$Question['socialGauche'] = +4;
$_SESSION['question'][] = $Question;


$Question['intitule'] = "Do you want to help employees that are in financial need?";
$Question['image'] = "images/argent.jpg";
$Question['reponseDroite'] = "Yes";
$Question['reponseGauche'] = "No";
$Question['commentaireDroite'] = "Money may not lead to happinness but you still need it!";
$Question['commentaireGauche'] = "Well that isn't very humanist!";
$Question['environnementDroite'] = 0;
$Question['environnementGauche'] = 0;
$Question['impactDroite'] = 0;
$Question['impactGauche'] = 0;
$Question['competitiviteDroite'] = -5;
$Question['competitiviteGauche'] = 0;
$Question['socialDroite'] = +4;
$Question['socialGauche'] = -8;
$_SESSION['question'][] = $Question;


$Question['intitule'] = "The lunch room isn't convenient for certain employees because of some allergies!";
$Question['image'] = "images/cantine.jpg";
$Question['reponseDroite'] = "Let's adapt food for the emplyees!";
$Question['reponseGauche'] = "They're adults let them figure it out!";
$Question['commentaireDroite'] = "We need our employees in top shape!";
$Question['commentaireGauche'] = "Gordon ramsy made the menu's it would be an insult to change them";
$Question['environnementDroite'] = 0;
$Question['environnementGauche'] = 0;
$Question['impactDroite'] = 0;
$Question['impactGauche'] = 0;
$Question['competitiviteDroite'] = +5;
$Question['competitiviteGauche'] = 0;
$Question['socialDroite'] = +4;
$Question['socialGauche'] = -8;
$_SESSION['question'][] = $Question;


$Question['intitule'] = "Do yo want to start an activity in renewable enrgies? (Risky!!)";
$Question['image'] = "images/eolienne.jpg";
$Question['reponseDroite'] = "Yes";
$Question['reponseGauche'] = "No";
$Question['commentaireDroite'] = "It's going to take time to reimburse it and to start generating money but it will have been worth it!";
$Question['commentaireGauche'] = "I think that three eyed fish are pretty!";
$Question['environnementDroite'] = +14;
$Question['environnementGauche'] = -14;
$Question['impactDroite'] = +6;
$Question['impactGauche'] = -6;
$Question['competitiviteDroite'] = -5;
$Question['competitiviteGauche'] = +5;
$Question['socialDroite'] = +4;
$Question['socialGauche'] = -4;
$_SESSION['question'][] = $Question;


$Question['intitule'] = "A company wants to sell you a revelutionnary machine to be more performent in your company!";
$Question['image'] = "images/machine.jpg";
$Question['reponseDroite'] = "Let's get the machine but it 	has to be here in two days!";
$Question['reponseGauche'] = "Refuse and give a bad rep to the company!";
$Question['commentaireDroite'] = "You nee to be demanding if not nothing ever gets done!";
$Question['commentaireGauche'] = "I don't want it to be our fault that skynet launches!";
$Question['environnementDroite'] = 0;
$Question['environnementGauche'] = 0;
$Question['impactDroite'] = 0;
$Question['impactGauche'] = 0;
$Question['competitiviteDroite'] = +5;
$Question['competitiviteGauche'] = -5;
$Question['socialDroite'] = -4;
$Question['socialGauche'] = -4;
$_SESSION['question'][] = $Question;


$Question['intitule'] = "Students from M.I.T want an internship.";
$Question['image'] = "images/etudiants.jpg";
$Question['reponseDroite'] = "Let them have an internship";
$Question['reponseGauche'] = "I don't want them to get an internship";
$Question['commentaireDroite'] = "Young people create the world of toomorow!";
$Question['commentaireGauche'] = "They have no experience of working in a company.";
$Question['environnementDroite'] = 0;
$Question['environnementGauche'] = 0;
$Question['impactDroite'] = +6;
$Question['impactGauche'] = -6;
$Question['competitiviteDroite'] = +5;
$Question['competitiviteGauche'] = 0;
$Question['socialDroite'] = +4;
$Question['socialGauche'] = -8;
$_SESSION['question'][] = $Question;


$Question['intitule'] = "A group of workers in the company are protesting to get a pay raise.";
$Question['image'] = "images/salaire.jpg";
$Question['reponseDroite'] = "I'll raise the pay-check";
$Question['reponseGauche'] = "I'll think about it";
$Question['commentaireDroite'] = "If it were not for them this company wouldn't be able to function properly";
$Question['commentaireGauche'] = "Communist scum!!";
$Question['environnementDroite'] = 0;
$Question['environnementGauche'] = 0;
$Question['impactDroite'] = +6;
$Question['impactGauche'] = 0;
$Question['competitiviteDroite'] = 0;
$Question['competitiviteGauche'] = 0;
$Question['socialDroite'] = +4;
$Question['socialGauche'] = -4;
$_SESSION['question'][] = $Question;


$Question['intitule'] = "A researcher comes to you to sell very performent batteries!";
$Question['image'] = "images/batterie.jpg";
$Question['reponseDroite'] = "Buy";
$Question['reponseGauche'] = "Not interrested";
$Question['commentaireDroite'] = "They sell really well for sure but they also know how to make a big BOOM to.";
$Question['commentaireGauche'] = "You did well it was samsung";
$Question['environnementDroite'] = -14;
$Question['environnementGauche'] = 0;
$Question['impactDroite'] = -6;
$Question['impactGauche'] = +6;
$Question['competitiviteDroite'] = +10;
$Question['competitiviteGauche'] = 0;
$_SESSION['question'][] = $Question;


$Question['intitule'] = "An association is asking for donations to fund research against rare diseases";
$Question['image'] = "images/donation.jpg";
$Question['reponseDroite'] = "Create a division to research rare diseases";
$Question['reponseGauche'] = "Give money to the cause!";
$Question['commentaireDroite'] = "We're going to save the world !";
$Question['commentaireGauche'] = "It's my good deed of the day!";
$Question['environnementDroite'] = 0;
$Question['environnementGauche'] = 0;
$Question['impactDroite'] = +12;
$Question['impactGauche'] = +12;
$Question['competitiviteDroite'] = -5;
$Question['competitiviteGauche'] = -5;
$Question['socialDroite'] = +4;
$Question['socialGauche'] = +4;
$_SESSION['question'][] = $Question;


$Question['intitule'] = "A seller comes to you to sell you a new type of solar panels that just came out.";
$Question['image'] = "images/panneau.jpg";
$Question['reponseDroite'] = "Invest";
$Question['reponseGauche'] = "It's really not finnancialy worth it.";
$Question['commentaireDroite'] = "GREENPEACE4EVR!";
$Question['commentaireGauche'] = "A little global warming can only do good. I'm freezing!";
$Question['environnementDroite'] = +14;
$Question['environnementGauche'] = -14;
$Question['impactDroite'] = +6;
$Question['impactGauche'] = -6;
$Question['competitiviteDroite'] = -5;
$Question['competitiviteGauche'] = +5;
$Question['socialDroite'] = +4;
$Question['socialGauche'] = -4;
$_SESSION['question'][] = $Question;


$Question['intitule'] = "A journalist made an article on the deplorable conditions your employees are treated off-shore, it risks to spark controversy!";
$Question['image'] = "images/journal.jpg";
$Question['reponseDroite'] = "Pay the journalist to falsify the article?";
$Question['reponseGauche'] = "Tell the truth to the press.";
$Question['commentaireDroite'] = "A shame it didn't work!";
$Question['commentaireGauche'] = "You are praised bu the press because you told the truth.";
$Question['environnementDroite'] = 0;
$Question['environnementGauche'] = 0;
$Question['impactDroite'] = -6;
$Question['impactGauche'] = -6;
$Question['competitiviteDroite'] = -5;
$Question['competitiviteGauche'] = 0;
$Question['socialDroite'] = -4;
$Question['socialGauche'] = +4;
$_SESSION['question'][] = $Question;


$Question['intitule'] = "At a press conference you make a racist slur on the japanese, journalists take notice.";
$Question['image'] = "images/japon.jpg";
$Question['reponseDroite'] = "No comment.";
$Question['reponseGauche'] = "Excuse yourself.";
$Question['commentaireDroite'] = "The chinnese investors were very happy about the comments you made they now want to start doing buisness with you!";
$Question['commentaireGauche'] = "Chineese investors wanted to be your new freinds, they were going to make a new offer.";
$Question['environnementDroite'] = 0;
$Question['environnementGauche'] = 0;
$Question['impactDroite'] = +6;
$Question['impactGauche'] = -6;
$Question['competitiviteDroite'] = +10;
$Question['competitiviteGauche'] = -10;
$Question['socialDroite'] = -4;
$Question['socialGauche'] = +4;
$_SESSION['question'][] = $Question;


$Question['intitule'] = "Your secretary scheduled a meeting with a shareholder but you had already scheduled to play golf at the same moment with a CEO of a partner company.";
$Question['image'] = "images/reunion_golf.jpg";
$Question['reponseDroite'] = "Meet the shareholder.";
$Question['reponseGauche'] = "Play golf.";
$Question['commentaireDroite'] = "Business first!";
$Question['commentaireGauche'] = "I already work very hard, i can miss a meeting to play golf";
$Question['environnementDroite'] = 0;
$Question['environnementGauche'] = 0;
$Question['impactDroite'] = +6;
$Question['impactGauche'] = 0;
$Question['competitiviteDroite'] = 0;
$Question['competitiviteGauche'] = 0;
$Question['socialDroite'] = 0;
$Question['socialGauche'] = +4;
$_SESSION['question'][] = $Question;


$Question['intitule'] = "A hacker managed to steal buisness plans in the company he could put it online at any moment a ransom is given to get the information back!";
$Question['image'] = "images/hacker.jpg";
$Question['reponseDroite'] = "Pay a team of engineers to try and find the hacker.";
$Question['reponseGauche'] = "Pay the ransom.";
$Question['commentaireDroite'] = "Many shareholders are scared and decide to leave.";
$Question['commentaireGauche'] = "Your competitors take it as an opportunity to mock you.";
$Question['environnementDroite'] = 0;
$Question['environnementGauche'] = 0;
$Question['impactDroite'] = 0;
$Question['impactGauche'] = -12;
$Question['competitiviteDroite'] = -10;
$Question['competitiviteGauche'] = -10;
$Question['socialDroite'] = -4;
$Question['socialGauche'] = -4;
$_SESSION['question'][] = $Question;


$Question['intitule'] = "A company selling cleaning products wants to sell you a product to make your equipement more durable.";
$Question['image'] = "images/entretien.jpg";
$Question['reponseDroite'] = "Accept";
$Question['reponseGauche'] = "Decline";
$Question['commentaireDroite'] = "The river next to the company's HQ becomes orange but hey it's probably not your fault!";
$Question['commentaireGauche'] = "I don't want to hurt mother nature.";
$Question['environnementDroite'] = -14;
$Question['environnementGauche'] = +7;
$Question['impactDroite'] = -6;
$Question['impactGauche'] = +6;
$Question['competitiviteDroite'] = +5;
$Question['competitiviteGauche'] = -10;
$Question['socialDroite'] = -4;
$Question['socialGauche'] = +4;
$_SESSION['question'][] = $Question;

$Question['intitule'] = "The labor union are blocking the way in to the company!";
$Question['image'] = "images/greve.jpg";
$Question['reponseDroite'] = "Do nothing";
$Question['reponseGauche'] = "Set a meeting in your office.";
$Question['commentaireDroite'] = "They'll leave sooner or later!";
$Question['commentaireGauche'] = "These guys work hard it's the least i can do!";
$Question['environnementDroite'] = 0;
$Question['environnementGauche'] = 0;
$Question['impactDroite'] = -6;
$Question['impactGauche'] = 0;
$Question['competitiviteDroite'] = -10;
$Question['competitiviteGauche'] = -5;
$Question['socialDroite'] = -4;
$Question['socialGauche'] = +4;
$_SESSION['question'][] = $Question;


$Question['intitule'] = "The percentage of sales acheived this month has greatly decreased. Invesstors think it's because the price of production of smartphones that are to high.";
$Question['image'] = "images/faillite.jpg";
$Question['reponseDroite'] = "Increase the price of phones by 20%";
$Question['reponseGauche'] = "Increase the price of phones by 50%";
$Question['commentaireDroite'] = "It's a reasonable price your sales soar!";
$Question['commentaireGauche'] = "Your phones are to expensive nobody bus them anymore.";
$Question['environnementDroite'] = 0;
$Question['environnementGauche'] = 0;
$Question['impactDroite'] = 0;
$Question['impactGauche'] = 0;
$Question['competitiviteDroite'] = +5;
$Question['competitiviteGauche'] = -5;
$Question['socialDroite'] = 0;
$Question['socialGauche'] = 0;
$_SESSION['question'][] = $Question;


$Question['intitule'] = "The accounting director is revealed to be snooping through your mails!";
$Question['image'] = "images/mail.jpg";
$Question['reponseDroite'] = "Fire him.";
$Question['reponseGauche'] = "Make him understand to not continue and that he will be fired if he continues.";
$Question['commentaireDroite'] = "I'm the boss of this company everybody must respect me!";
$Question['commentaireGauche'] = "He's a good accountant and everybody makes mistakes!";
$Question['environnementDroite'] = 0;
$Question['environnementGauche'] = 0;
$Question['impactDroite'] = 0;
$Question['impactGauche'] = 0;
$Question['competitiviteDroite'] = -5;
$Question['competitiviteGauche'] = 0;
$Question['socialDroite'] = 0;
$Question['socialGauche'] = +4;
$_SESSION['question'][] = $Question;


$Question['intitule'] = "The work council wants subventions to be able to have a winter vacation!";
$Question['image'] = "images/neige.jpg";
$Question['reponseDroite'] = "Accept";
$Question['reponseGauche'] = "decline";
$Question['commentaireDroite'] = "They need to get some rest and it'll be a good way to give them motivation!";
$Question['commentaireGauche'] = "If i were able to go on vacation every time i wanted to there would be no company!";
$Question['environnementDroite'] = 0;
$Question['environnementGauche'] = 0;
$Question['impactDroite'] = 0;
$Question['impactGauche'] = 0;
$Question['competitiviteDroite'] = -5;
$Question['competitiviteGauche'] = 0;
$Question['socialDroite'] = +4;
$Question['socialGauche'] = -4;
$_SESSION['question'][] = $Question;


$Question['intitule'] = "Do you want to start recycling garbage in all your different sites?";
$Question['image'] = "images/trie.jpg";
$Question['reponseDroite'] = "Yes";
$Question['reponseGauche'] = "No";
$Question['commentaireDroite'] = "GREENPEACE4EVR";
$Question['commentaireGauche'] = "No way! what's next? we come working without shoes on and start singing kumbaya?";
$Question['environnementDroite'] = +14;
$Question['environnementGauche'] = -14;
$Question['impactDroite'] = 0;
$Question['impactGauche'] = -6;
$Question['competitiviteDroite'] = 0;
$Question['competitiviteGauche'] = 0;
$Question['socialDroite'] = 0;
$Question['socialGauche'] = 0;
$_SESSION['question'][] = $Question;

$Question['intitule'] = "Do you want to recover rainwater to power toilets and use it for the cleaning system of vehicules?";
$Question['image'] = "images/eau.jpg";
$Question['reponseDroite'] = "Yes";
$Question['reponseGauche'] = "No";
$Question['commentaireDroite'] = "Ther's a lot of water as well use it!!";
$Question['commentaireGauche'] = "This demands to much time and effort.";
$Question['environnementDroite'] = +7;
$Question['environnementGauche'] = -14;
$Question['impactDroite'] = +6;
$Question['impactGauche'] = -12;
$Question['competitiviteDroite'] = 0;
$Question['competitiviteGauche'] = 0;
$Question['socialDroite'] = 0;
$Question['socialGauche'] = 0;
$_SESSION['question'][] = $Question;


$Question['intitule'] = "An employee has been found in a viral video on social networks, his image is degraded.";
$Question['image'] = "images/giphy.gif";
$Question['reponseDroite'] = "Quick show me the video so i can share it!";
$Question['reponseGauche'] = "It's an insult to the employee we need to block access to the video!";
$Question['commentaireDroite'] = "It's AMAZING!!! The rest of te world needs to see it!";
$Question['commentaireGauche'] = "While we are at the company we are here to work not to laugh!";
$Question['environnementDroite'] = 0;
$Question['environnementGauche'] = 0;
$Question['impactDroite'] = 0;
$Question['impactGauche'] = 0;
$Question['competitiviteDroite'] = 0;
$Question['competitiviteGauche'] = 0;
$Question['socialDroite'] = -4;
$Question['socialGauche'] = +4;
$_SESSION['question'][] = $Question;

$Question['intitule'] = "The new technology convention is coming very fast, the phone we are supposed to present still has a lot of bugs.";
$Question['image'] = "images/salon.jpg";
$Question['reponseDroite'] = "Let's present the phone anyways.";
$Question['reponseGauche'] = "No, it would ruin the company's image.";
$Question['commentaireDroite'] = "I have finally become the modern Steve Jobs nobody can stop me.";
$Question['commentaireGauche'] = "We're not liars!";
$Question['environnementDroite'] = 0;
$Question['environnementGauche'] = 0;
$Question['impactDroite'] = 0;
$Question['impactGauche'] = 0;
$Question['competitiviteDroite'] = +5;
$Question['competitiviteGauche'] = -5;
$Question['socialDroite'] = -4;
$Question['socialGauche'] = +4;
$_SESSION['question'][] = $Question;

?>
