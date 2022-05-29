<?php
namespace App\Controller;  
use App\Model\AC;
use App\Core\Request;
use App\Core\Controller;
use App\Model\Etudiant;
use App\Model\Inscription;

class EtudiantController extends Controller{
        


//********************************LISTER ETUDIANTS********************************
public function listerEtudiant(){
    $titre=`AC`;
   
           if ($this->request->isGet()) {
               $donne=Etudiant::findAll();   
               $this->render('etudiant/listerEtudiant.html.php',["AC"=>$donne,"titre"=>$titre]);
           }
       }

   
       public function AnnulerInscription(){
   
   
           
    }
    //********************************INSCRIPTION ETUDIANTS********************************
    
    public  function InscriptionEtudiant(){
           if ($this->request->isPost()) {
               extract($_POST);
               $Etu=new Etudiant();
               $Etu->setnomComplet($nomComplet);
               $Etu->setLogin($login);
               $Etu->setPassword($password);
               $Etu->setAdresse($adresse);
               $Etu->setMatricule($matricule);
               $Etu->setSexe($sexe);
               
               $result=$Etu->insert();   
            
               if ($result>0) {
                # code...
                Etudiant::inscrir($result,$_SESSION['user-connect']->id_personne,1,1);
                // $etudiant_id, $ac_id,$classe,$annee_id
                $this->redirectToRoute('listerEtudiant');                  
            } else {
                # code...
            $this->render('/etudiant/Etudiant.inscription.html.php');
        
               }
               $_POST=[];                 
           }
           else {
            # code...
            $this->render('/etudiant/Etudiant.inscription.html.php');
           }
       }
       public function supprimer(int $id_personne){
           $titre=`montitre`;
           $detailProff=Etudiant::delete($id_personne);
           
           $this->render('/etudiant/Etudiant.inscription.html.php',["Etudiant"=>$detailProff,"titre"=>$titre]);            
       }


}