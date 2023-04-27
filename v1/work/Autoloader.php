<?php

namespace App;

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
        // On récupère la totalité du namespace de la classe concernée dans (App\Centre/PersonneCavalier)
        // On retire App\ (Centre/PersonneCavalier)
        $class = str_replace(__NAMESPACE__ . '\\', '', $class);

        //On remplace les \ par des /
        $class = str_replace('\\', '/', $class);

        $fichier = __DIR__ . '/' . $class . '.php';

        // On vérifie que le fichier existe
        if (file_exists($fichier)) {
            require_once $fichier;
        }
    }
}
