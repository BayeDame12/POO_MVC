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

}