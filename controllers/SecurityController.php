<?php
namespace App\Controller;
use App\Core\Request;
class SecurityController{
private Request $request;  
public function __construct(Request $request)
{
    $this->request=$request;
}

    public function authentification(){
        // echo"BIENVENUE DANS L ACTION AUTHENTIFICATION";
        //1.    AFFICHAGE DU FORMULAIRE DE CONNEXION PAR LA METHODE GET
        
        
        // var_dump($this->request->getUri());       
        
        //1.    AFFICHAGE DU FORMULAIRE DE CONNEXION PAR LA METHODE POS
        //traitement apres soumission =>GET =>POST
        
        // var_dump($this->request->isGet());
        // echo"cest la requet GET"
        // var_dump($this->request->isPost());
 
    }
    public function deconnexion(){
        echo"BIENVENUE DANS L ACTION DECONNEXION";

        
    }

}