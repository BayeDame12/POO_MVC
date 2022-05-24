<?php
use App\Core\Router;
use App\Controller\SecurityController;
use App\Controller\ClassController;
use App\Controller\PersonneController;
use App\Controller\EtudiantController;
use App\Controller\ProffesseurController;
use App\Controller\RPController;
use App\Controller\ACController;
use App\Controller\moduleController;
use App\Exception\RouteNotFoundException;

$router=new Router();
//AUTHENTIFICATION
$router->route('/login',[SecurityController::class,"authentification"]);
$router->route('/logout',[SecurityController::class,"deconnexion"]);
//CLASSES
$router->route('/classes',[classController::class,"listerClasse"]);
$router->route('/add-classe',[classController::class,"creerClasse"]);
$router->route('/listerPersonne',[PersonneController::class,"listerPersonne"]);
$router->route('/sup',[PersonneController::class,"supprimer"]);
//ETUDIANT
$router->route('/listerEtudiant',[EtudiantController::class,"listerEtudiant"]);
$router->route('/Etudiant',[ProffesseurController::class,"detail"]);
$router->route('/Etudiant',[ProffesseurController::class,"modifier"]);
$router->route('/Etudiant',[ProffesseurController::class,"supprimer"]);
$router->route('/Inscription',[EtudiantController::class,"Inscription"]);
$router->route('/AnnulerInscription',[EtudiantController::class,"AnnulerInscription"]);
//PROFFESSEUR
$router->route('/listerProffesseur',[ProffesseurController::class,"listerProffesseur"]);
$router->route('/addProffesseur',[ProffesseurController::class,"addProffesseur"]);

$router->route('/Proffesseur',[ProffesseurController::class,"detail"]);
$router->route('/Proffesseur',[ProffesseurController::class,"modifier"]);
$router->route('/Proffesseur',[ProffesseurController::class,"supprimer"]);

//RP
$router->route('/listerRP',[RPController::class,"listerRP"]);
//AC
$router->route('/listerAC',[RPController::class,"listerAC"]);
$router->route('/',[RPController::class,"emptyAction"]);
$router->route('/acueil',[SecurityController::class,"acueil"]);
//RESOLUTION DES ROUTES CETTE PARTIE CONSISTE A VERIFIER SI CETTE ROUTE EXISTE DANS LE TABLEAU
try {
//code...essai de resoudre la route
$router->resolve();
} 
catch (RouteNotFoundException $e) {
//throw $th  capture l exception et affiche le;
echo $e->message;
}
