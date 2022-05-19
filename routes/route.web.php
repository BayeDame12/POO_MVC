<?php
use App\Core\Router;
use App\Controller\SecurityController;
use App\Controller\ClassController;
use App\Controller\PersonneController;
use App\Controller\EtudiantController;
use App\Controller\ProffesseurController;


use App\Exception\RouteNotFoundException;
// echo"vous etes dans WEB_ROOT";
// Echo"</br>";

$router=new Router();

$router->route('/login',[SecurityController::class,"authentification"]);
$router->route('/logout',[SecurityController::class,"deconnexion"]);
$router->route('/classes',[classController::class,"listerClasse"]);
$router->route('/add-classe',[classController::class,"creerClasse"]);
$router->route('/listerPersonne',[PersonneController::class,"listerPersonne"]);
$router->route('/listerEtudiant',[EtudiantController::class,"listerEtudiant"]);
$router->route('/listerProffesseur',[ProffesseurController::class,"listerProffesseur"]);

//RESOLUTION DES ROUTES CETTE PARTIE CONSISTE A VERIFIER SI CETTE ROUTE EXISTE DANS LE TABLEAU
try {
//code...essai de resoudre la route
$router->resolve();
} 
catch (RouteNotFoundException $e) {
//throw $th  capture l exception et affiche le;
echo $e->message;
}
