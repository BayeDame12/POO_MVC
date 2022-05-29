<?php
namespace App\Controller;
use App\Model\AC;
use App\Core\Request;
use App\Core\Controller;
use App\Model\Etudiant;
use App\Model\Inscription;

class ACController extends Controller{

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
            $this->render('/AC/addAC.html.php');
        }
    }
//********************************LISTER AC********************************

    public function listerAC(){
        
        $titre=`AC`;
    
        if ($this->request->isGet()) {
            $donne=AC::findAll();
            $this->render('AC/listerAC.html.php',["RP"=>$donne,"titre"=>$titre
        ]);
    }
    
}
public function detailAC(int $id_personne){
    $detailAC=AC::findById($id_personne);
    $titre=($detailAC->nom_complet);
    $login=($detailAC->login); 
    
    
    $this->render('AC/detailAC.html.php',["titre"=>$titre,"grade"=>$login]);
   
}
public function modifierAC(int $id_personne){
    $detailAC=AC::findById($id_personne);
     $this->render('AC/addAC.html.php',["prof" => $detailAC]);  
} 

public function supprimerAC(int $id_personne){
    $titre=`montitre`;
    $detailAC=AC::delete($id_personne);
    $this->render('AC/listerAC.html.php',["proffesseur"=>$detailAC,"titre"=>$titre]);            
}

}