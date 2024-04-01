<?php
require_once 'class/Compte.php';

//On instancie le compte
$compte1 = new compte('Benoit', 500);

// //On écrit dans la propiété titulaire si pas de contructeur
// $compte1->titulaire = 'Auré';
// //on écrit dans la propiété solde si pas de constructeur
// $compte1->solde = 500;


//On dépose 
$compte1->deposer(100);
var_dump($compte1);
?>

<p><?= $compte1->voirSolde() ?></p>

<?php

$compte1->retirer(100);

var_dump($compte1);
// $compte2 = new compte;
// $compte2->titulaire = 'Moi meme';
// var_dump($compte2);