<?php
namespace App\Controller;
use App\Core\Controller;
use App\Core\Request;
use App\Model\Professeur;

class ProffesseurController extends Controller{
    
    public function listerProffesseur(){
        $titre=`montitre`;

        if ($this->request->isGet()) {
            $donne=Professeur::findAll();
            $this->render('proffesseur/listerProffesseur.html.php',["proffesseur"=>$donne,"titre"=>$titre]);
            
        }
    }
    public function detail($idPROF){
        var_dump("detail",$idPROF);
    
        die();
    }
}