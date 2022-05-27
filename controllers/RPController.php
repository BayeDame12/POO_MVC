<?php
namespace App\Controller;
use App\Core\Request;
use App\Core\Controller;
use App\Model\AC;
use App\Model\RP;
use App\Model\Classe;
use App\Model\Professeur;

class RPController extends Controller{
//********************************AJOUTER AC********************************
    public  function addAC(){
        if ($this->request->isPost()) {
            extract($_POST);
            $ac=new AC();
            $ac->setnomComplet($nom);
            $ac->setLogin($login);
            $ac->setPassword($password);
            $result=$ac->insert(); 
            $_POST=[];
            $this->redirectToRoute('listerAC');
        }
        else{
            $this->render('/RP/addAC.html.php');
        }
    }
//********************************LISTER AC********************************

    public function listerAC(){
        
        $titre=`AC`;
    
        if ($this->request->isGet()) {
            $donne=AC::findAll();
            $this->render('RP/listerAC.html.php',["RP"=>$donne,"titre"=>$titre
        ]);
    }
    
}


//********************************AJOUTER PROFFESSEUR********************************
public  function addProffesseur(){
    if ($this->request->isPost()) {
        extract($_POST);
        $prof=new Professeur();
        $prof->setnomComplet($nom);
        $prof->setGrade($grade);
        $result=$prof   ->insert(); 
        $_POST=[];
        $this->redirectToRoute('listerProffesseur');
    }
    else{
        $this->render('/RP/addProffesseur.html.php');
    }
}

//********************************LISTER PROFFESSEUR********************************
    public function listerProffesseur(){
        $titre=`montitre`;
        if ($this->request->isGet()) {
            $donne=Professeur::findAll();
            $this->render('RP/listerProffesseur.html.php',["proffesseur"=>$donne,"titre"=>$titre]);          
        }
    }
    public function detail(int $id_personne){
        $detailProff=RP::findById($id_personne);
        $titre=($detailProff->nom_complet);
        $grade=($detailProff->grade); 
        
        $this->render('proffesseur/detailProffesseur.html.php',["titre"=>$titre,"grade"=>$grade]);
       
    }


//********************************AJOUTER CLASSE********************************
public function addClasse(){

if ($this->request->isPost()) {
    extract($_POST);
    $class=new Classe();
    $class->setFiliere($filiere);
    $class->setNiveau($niveau);
    $class->setLibelle($niveau." ".$filiere);        
    $result=$class->insert();   
    $_POST=[];        
    $this->redirectToRoute('listerClasse');
}
$this->render('/RP/addClasse.html.php');
}
    //********************************LISTER CLASSE********************************
    
    public function listerClasse(){
        
        $titre=`montitre`;
        if ($this->request->isGet()) {
            $donne=Classe::findAll();
            $this->render('RP/listerClasse.html.php',["classe"=>$donne,"titre"=>$titre]);          
        }
    }








    public function listerRP(){
        $titre=`RP`;

        if ($this->request->isGet()) {
            $donne=RP::findAll();

            $this->render('RP/listerRP.html.php',["RP"=>$donne,"titre"=>$titre
            ]);
            }

    }
    // public function addAC(){
    //     $titre=`RP`;

    //     if ($this->request->isGet()) {
    //         $donne=RP::findAll();

    //         $this->render('RP/addAC.html.php',["RP"=>$donne,"titre"=>$titre
    //         ]);
    //         }

    // }
    

    public function supprimer(int $id_personne){
        $titre=`montitre`;
        $detailProff=RP::delete($id_personne);
        
        $this->render('proffesseur/listerProffesseur.html.php',["proffesseur"=>$detailProff,"titre"=>$titre]);            
    }






 

}