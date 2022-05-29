<?php
namespace App\Controller;
use App\Core\Controller;
use App\Core\Request;
use App\Model\AC;
use App\Model\Etudiant;
use App\Model\Inscription;
use App\Model\Classe;

class ClasseController extends Controller{

public function addClasse(){

if ($this->request->isPost()) {
    extract($_POST);
    $class=new Classe();
    $class->setFiliere($filiere);
    $class->setNiveau($niveau);
    $class->setLibelle($niveau." ".$filiere);  
    $class->insert();
    $_POST=[];        
    $this->redirectToRoute('listerClasse');
}
$this->render('/classe/addClasse.html.php');
}
    //********************************LISTER CLASSE********************************
    
    public function listerClasse(){
        
        $titre=`montitre`;
        if ($this->request->isGet()) {
            $donne=Classe::findAll();
            $this->render('classe/listerClasse.html.php',["classe"=>$donne,"titre"=>$titre]);          
        }
    }
}