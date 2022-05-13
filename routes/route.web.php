<?php
use App\Core\Router;
use App\Controller\SecurityController;
use App\Controller\ClassController;
use App\Exception\RouteNotFoundException;

$router=new Router();
$router->route('/login',[SecurityController::class,"authentification"]);
$router->route('/logout',[SecurityController::class,"deconnexion"]);
$router->route('/classes',[classController::class,"listerClasse"]);
$router->route('/add-classe',[classController::class,"creerClasse"]);

//RESOLUTION DES ROUTES CETTE PARTIE CONSISTE A VERIFIER SI CETTE ROUTE EXISTE DANS LE TABLEAU
try {
//code...essai de resoudre la route
$router->resolve();
} 
catch (RouteNotFoundException $e) {
//throw $th  capture l exception et affiche le;
echo $e->message;
}
