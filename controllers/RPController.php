<?php
namespace App\Controller;
use App\Core\Request;
use App\Core\Controller;
use App\Model\AC;
use App\Model\RP;
use App\Model\Classe;
use App\Model\Professeur;

class RPController extends Controller{



//********************************AJOUTER CLASSE********************************


    public function listerRP(){
        $titre=`RP`;

        if ($this->request->isGet()) {
            $donne=RP::findAll();

            $this->render('RP/listerRP.html.php',["RP"=>$donne,"titre"=>$titre
            ]);
            }

    }

}