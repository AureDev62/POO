<?php
require_once 'class/Compte.php';
require_once 'class/CompteCourant.php';
require_once 'class/CompteEpargne.php';
require_once 'class/CompteEpargneCourant.php';



//On instancie le compte
$compte1 = new CompteCourant('Max', 500, 200);
var_dump($compte1);
// $compte1->setDecouvert(200);
$compte1->setTitulaire('Aure');
$compte1->retirer(200);
var_dump($compte1);

$compteEpargne = new CompteEpargneCourant('Max', 200, 10, 200);

var_dump($compteEpargne);

$compteEpargne->verserInterets();
$compteEpargne->retirer(300);

var_dump($compteEpargne);
