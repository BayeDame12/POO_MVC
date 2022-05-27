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
//DECONNEXION
$router->route('/logout',[SecurityController::class,"deconnexion"]);
//CLASSES
$router->route('/listerPersonne',[RPController::class,"listerPersonne"]);
$router->route('/sup',[RPController::class,"supprimer"]);
//RP
//**********addAC********** */
$router->route('/addAC',[RPController::class,"addAC"]);
//**********listerAC********** */
$router->route('/listerAC',[RPController::class,"listerAC"]);
//**********addClasse********** */
$router->route('/addClasse',[RPController::class,"addClasse"]);
//**********listerClasse********** */
$router->route('/listerClasse',[RPController::class,"listerClasse"]);

$router->route('/listerProffesseur',[RPController::class,"listerProffesseur"]);
$router->route('/addProffesseur',[RPController::class,"addProffesseur"]);
$router->route('/detail',[RPController::class,"detail"]);
$router->route('/modifier',[RPController::class,"modifier"]);
$router->route('/supprimer',[RPController::class,"supprimer"]);
$router->route('/listerRP',[RPController::class,"listerRP"]);
$router->route('/',[RPController::class,"emptyAction"]);


//AC

$router->route('/InscriptionEtudiant',[ACController::class,"InscriptionEtudiant"]);
$router->route('/listerEtudiant',[ACController::class,"listerEtudiant"]);

$router->route('/detailEtudiant',[ACController::class,"detailEtudiant"]);
$router->route('/modifierEtudiant',[ACController::class,"modifierEtudiant"]);
$router->route('/supprimerEtudiant',[ACController::class,"supprimerEtudiant"]);
$router->route('/AnnulerInscriptionEtudiant',[ACController::class,"AnnulerInscriptionEtudiant"]);




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
