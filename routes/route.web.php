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
use App\Controller\ClasseController;
use App\Controller\DemandeController;
use App\Exception\RouteNotFoundException;

$router=new Router();
//AUTHENTIFICATION
$router->route('/login',[SecurityController::class,"authentification"]);
//DECONNEXION
$router->route('/logout',[SecurityController::class,"deconnexion"]);
//CLASSES
$router->route('/listerPersonne',[RPController::class,"listerPersonne"]);

//RP
//**********addAC********** */
$router->route('/addAC',[ACController::class,"addAC"]);
//**********listerAC********** */
$router->route('/listerAC',[ACController::class,"listerAC"]);
$router->route('/detailAC',[ACController::class,"detailAC"]);
$router->route('/modifierAC',[ACController::class,"modifierAC"]);
$router->route('/supprimerAC',[ACController::class,"supprimerAC"]);



//**********addClasse********** */
$router->route('/addClasse',[ClasseController::class,"addClasse"]);
//**********listerClasse********** */
$router->route('/listerClasse',[ClasseController::class,"listerClasse"]);

//PROFFESSEUR
$router->route('/listerProffesseur',[ProffesseurController::class,"listerProffesseur"]);
$router->route('/addProffesseur',[ProffesseurController::class,"addProffesseur"]);
$router->route('/detail',[ProffesseurController::class,"detailProffesseur"]);
$router->route('/modifier',[ProffesseurController::class,"modifierProffesseur"]);
$router->route('/supprimer',[ProffesseurController::class,"supprimerProffesseur"]);
$router->route('/listerRP',[RPController::class,"listerRP"]);
$router->route('/',[RPController::class,"emptyAction"]);

//AC
$router->route('/InscriptionEtudiant',[EtudiantController::class,"InscriptionEtudiant"]);
$router->route('/listerEtudiant',[EtudiantController::class,"listerEtudiant"]);
$router->route('/detailEtudiant',[EtudiantController::class,"detailEtudiant"]);
$router->route('/modifierEtudiant',[EtudiantController::class,"modifierEtudiant"]);
$router->route('/supprimerEtudiant',[EtudiantController::class,"supprimerEtudiant"]);
$router->route('/AnnulerInscriptionEtudiant',[EtudiantController::class,"AnnulerInscriptionEtudiant"]);

// MODULE
$router->route('/addModule',[moduleController::class,"addModule"]);
$router->route('/listerModule',[moduleController::class,"listerModule"]);
// SERCURITE
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
