<?php
namespace App\Controller;  
use App\Model\AC;
use App\Core\Request;
use App\Core\Controller;
use App\Model\Etudiant;

class EtudiantController extends Controller{
    public function listerEtudiant(){
 $titre=`montitre`;

        if ($this->request->isGet()) {
            $donne=Etudiant::findAll();

            $this->render('etudiant/listerEtudiant.html.php',["etudiant"=>$donne,"titre"=>$titre]);
        }

    }

    // public function Inscription(){

    // $titre=`montitre`;

    // if ($this->request->isGet()) {

    //     $this->render('inscription/EtudiantAnnulerInscription.html.php');
    // }

    // }

    public function AnnulerInscription(){


     echo"salut AnnulerInscription";
        
    }
//
    public  function Inscription(){
        if ($this->request->isPost()) {
            extract($_POST);
            // var_dump($_POST);
            // die();
            $proff=new Etudiant();
            $proff->setnomComplet($nomComplet);
            $proff->setLogin($login);
            $proff->setPassword($password);
            $proff->setAdresse($adresse);
            $proff->setMatricule($matricule);
            $proff->setSexe($sexe);

           
            $result=$proff->insert();   
            $this->render('/inscription/Etudiant.inscription.html.php',["insert"=>$result]);

        }
        $this->render('/inscription/Etudiant.inscription.html.php');
    }
        

}