<?php
namespace App\Controller;

use App\Core\Controller;
use App\Core\Request; 
use App\Model\User;
use App\Core\Constantes;

use function App\Core\dd;
use App\Core\Role;

class SecurityController extends Controller{
    public function authentification(){  
// var_dump($param);
// var_dump($param2);

        if ($this->request->isGet() ) {
        $this->render('security/login.html.php');
          
        }
        else {
          extract($_POST);
          $user=User::findUserByLoginAndPassword($email,$password);
                     # code...
            if ($user){
              $_SESSION['user-connect']=$user;
              $this->redirectToRoute("acueil");
            }
        // $this->render('accueil/home.html.php');
           else {
            # code...
            // $this->redirectToRoute("login");
            $this->redirectToRoute('login');
          }        
        }
    }
    public  function acueil(){
      
      if ($this->request->isGet() ) {
        $this->render('security/acueil.html.php');
          
        }
    }
    public function deconnexion(){
        unset($_SESSION['user-connect']);
        $this->redirectToRoute("login");
        // $this->redirectToRoute("login");       
    }
}
// echo Role::nomPage();
