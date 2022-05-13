<?php
ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);

//COMPOSER
//  outil de gestion de dépendance
// gestionnaire : logiciel à installer dont l'objectif est de télécharger une dépendance et de la configurer dans le projet
// dépendance : toutes les classes externes que l'on peut ajouter dans son projet pouur avoir des fonctionnalités supplémentaires
// hub de dépendance : site ou on regroupe ttes les dépendances du langage - php (packagist)
// installation : composer init
// namespace -> package
// a chaque fois que je modifie composer.json je dois faire un composer update
//"autoload": {
//     "psr-4": {
//         //commment tu veux l'appeler : chemin du dossier, App moy melni dossier  racine bi tu peux l'appeler autrement stv
//         "App\\Core": "core/",
//         "App\\Model": "models/",
//         "App\\Controller": "controllers/"
//     }
// },

// toutes les classes de php se trouvent dans le dossier racine, \ : namespace racine \PDO
// use App\Core\Database;
// use App\Model\Professeur;
// use App\Model\User;
// use App\Model\AC;
// use App\Model\Etudiant;
// use App\Model\Personne;
// use App\Core\Request;
// use App\Core\Router;
// use App\Exception\RouteNotFoundException;

require '../vendor/autoload.php';
require_once "../core/functions.php";
require_once "../routes/route.web.php";


    





/***  CONTROLLEUR/METHOD/PARAMETRE  ****/

