<?php


//namespaces = éviter les conflits de noms
use App\Autoloader;
use App\Client\Compte as CompteClient;
use App\Banque\{CompteCourant, CompteEpargne};

// require_once 'class/Banque/Compte.php';
// require_once 'class/Banque/CompteCourant.php';
// require_once 'class/Banque/CompteEpargne.php';
// require_once 'class/Client/Compte.php';

require_once 'class/Autoloader.php';
Autoloader::register();
//On instancie le compte
$compte1 = new CompteCourant('Max', 500, 200);
// var_dump($compte1);
// // $compte1->setDecouvert(200);
// $compte1->setTitulaire('Aure');
// $compte1->retirer(200);
var_dump($compte1);


$compteEpargne = new CompteEpargne('Benoit', 500, 10);
var_dump($compteEpargne);

// $compteEpargne->verserInterets();
// $compteEpargne->retirer(300);

// var_dump($compteEpargne);


// $client = new CompteClient;

// var_dump($client);
