<?php
namespace App\Controller;

use App\Core\Controller;
use App\Core\Request; 
use App\Model\User;
class SecurityController extends Controller{
    public function authentification(){     
        if ($this->request->isGet()) {
        $this->render('security/login.html.php');
    
        }
        else {
          extract($_POST);
          User::findUserByLoginAndPassword($email,$password);
          $this->redirectToRoute("listerPersonne");

        }
    }
    public function deconnexion(){
        // echo"BIENVENUE la methode deconnexion ";   
        // echo"</br>";
        // echo"BIENVENUE DANS L ACTION DECONNEXION";
        $this->render('security/login.html.php');
        
        // $this->redirectToRoute("login");       
    }
}