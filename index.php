<?php
require_once 'class/Compte.php';

//On instancie le compte
$compte1 = new compte('Benoit', 500);

// $compte1->setSolde(200);

// //On écrit dans la propiété titulaire si pas de contructeur
// $compte1->titulaire = 'Auré';
// //on écrit dans la propiété solde si pas de constructeur
// $compte1->solde = 500;
$compte1->setTitulaire('Max');

//On dépose 
$compte1->deposer(100);
echo $compte1->getTitulaire();
$compte1->setTitulaire('');
?>

<p><?= $compte1->voirSolde() ?></p>

<?php

$compte1->retirer(500);

var_dump($compte1);

echo $compte1;

echo "Le taux d'intérêt du compte est  : " . Compte::TAUX_INTERETS . " %";
// $compte2 = new compte;
// $compte2->titulaire = 'Moi meme';
// var_dump($compte2);