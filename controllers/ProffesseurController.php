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


    public  function addProffesseur(){
        if ($this->request->isPost()) {
            extract($_POST);
            // var_dump($_POST);
            $proff=new Professeur();
            $proff->setnomComplet($nom);
            $proff->setgrade($grade);
            
            // var_dump($_POST);
            // die();
            $result=$proff->insert(); 
           
            // $this->render('/proffesseur/addProffesseur.html.php',[$result]);
            // $this->redirectToRoute('listerProffesseur');

        }
        else{

            $this->render('/proffesseur/addProffesseur.html.php');
        }
    }
}