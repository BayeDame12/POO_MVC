<?php
namespace App\Controller;
use App\Model\AC;
use App\Core\Request;
use App\Core\Controller;

class PersonneController extends Controller{

    public function listerAC(){
        $titre=`AC`;

        if ($this->request->isGet()) {
            $donne=AC::findAll();

            $this->render('AC/listerAC.html.php',["personne"=>$donne,"titre"=>$titre
            ]);
            }

    }

}