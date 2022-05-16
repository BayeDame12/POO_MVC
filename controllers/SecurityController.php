<?php
namespace App\Controller;

use App\Core\Controller;
use App\Core\Request; 
class SecurityController extends Controller{
    public function authentification(){
        echo"BIENVENUE la methode d autentification ";   
        echo"</br>";


        //1.    AFFICHAGE DU FORMULAIRE DE CONNEXION PAR LA METHODE GET
        // var_dump($this->request->getUri());       
        if ($this->request->isGet()) {
        $this->render('security/login.html.php');
        }
        //1.    AFFICHAGE DU FORMULAIRE DE CONNEXION PAR LA METHODE POS
        //traitement apres soumission =>GET =>POST
        // var_dump($this->request->isGet());
        // echo"cest la requet GET"
        // var_dump($this->request->isPost());
    }
    public function deconnexion(){
        echo"BIENVENUE la methode deconnexion ";   
        echo"</br>";
        // echo"BIENVENUE DANS L ACTION DECONNEXION";
        $this->redirectToRoute("login");       
    }
}