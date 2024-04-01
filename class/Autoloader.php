<?php

namespace App;

//une méthode statique est associée à la classe plutôt 
// qu'à une instance spécifique. 
// Vous pouvez appeler une méthode statique 
// sans avoir besoin d'instancier la classe en utilisant 
// le nom de la classe suivi de l'opérateur de résolution de portée :: 


class Autoloader
{
    static function register()
    {
        spl_autoload_register([
            __CLASS__,
            'autoload'
        ]);
    }


    static function autoload($class)
    {
        //on récupère dans class la totalité du namespace de la class concernée
        //(App\Client\Compte)
        //on retire APP\ (Client\Compte)
        $class = str_replace(__NAMESPACE__ . '\\', '', $class);

        //on remplace les \ par des /
        $class = str_replace('\\', '/', $class);

        $fichier = __DIR__ . '/' . $class . '.php';
        //on vérifie si le fichier existe
        if (file_exists($fichier)) {
            require_once $fichier;
        }
    }
}
