<?php
namespace App\Controller;
use App\Core\Controller;
use App\Core\Request;
use App\Model\Module;

//ADD MODULE
//LISTER MODULE
class ModuleController extends Controller{

public function addModule(){

    if ($this->request->isPost()) {
        extract($_POST);
        $class=new Module();
        $class->setNom($nom);
        $class->setEtat($etat);
        // $class->insert();
        $_POST=[];        
        $this->redirectToRoute('listermodule');
    }
    $this->render('/module/addmodule.html.php');
    }
        //********************************LISTER CLASSE********************************
        
        public function listerModule(){
            
            $titre=`montitre`;
            if ($this->request->isGet()) {
                // $donne=Module::findAll();
                // $this->render('module/listermodule.html.php',["classe"=>$donne,"titre"=>$titre]);          
            }
        }
    
}
