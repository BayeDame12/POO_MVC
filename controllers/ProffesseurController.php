<?php
namespace App\Controller;
use App\Core\Controller;
use App\Core\Request;
use App\Model\Professeur;

class ProffesseurController extends Controller{   
  


//********************************AJOUTER PROFFESSEUR********************************
public  function addProffesseur(){
    if ($this->request->isPost()) {
        extract($_POST);
        $prof=new Professeur();
        $prof->setnomComplet($nom);
        $prof->setGrade($grade);
        if ($todo == "modifier") {
            # code...
            $prof->setId($id_personne);
            $result=$prof->update();   
    
        } else {
            # code...
            $result=$prof->insert();   
        }      

        $_POST=[];
        $this->redirectToRoute('listerProffesseur');
    }
    else{
        $this->render('/proffesseur/addProffesseur.html.php');
    }
}

//********************************LISTER PROFFESSEUR********************************
    public function listerProffesseur(){
        $titre=`montitre`;
        if ($this->request->isGet()) {
            $donne=Professeur::findAll();
            $this->render('proffesseur/listerProffesseur.html.php',["proffesseur"=>$donne,"titre"=>$titre]);          
        }
    }
//********************************DETAIL PROFFESSEUR********************************

    public function detailProffesseur(int $id_personne){
        $detailProff=Professeur::findById($id_personne);
        $titre=($detailProff->nom_complet);
        $grade=($detailProff->grade); 
        
        $this->render('proffesseur/detailProffesseur.html.php',["titre"=>$titre,"grade"=>$grade]);
       
    }
    public function modifierProffesseur(int $id_personne){
        $detailProff=Professeur::findById($id_personne);
         $this->render('proffesseur/addProffesseur.html.php',["prof" => $detailProff]);  
    }
    
    public function supprimerProffesseur(int $id_personne){
        $titre=`montitre`;
        $detailProff=Professeur::delete($id_personne);
        $this->render('proffesseur/listerProffesseur.html.php',["proffesseur"=>$detailProff,"titre"=>$titre]);            
    }


}