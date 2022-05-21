<?php
namespace App\Controller;
use App\Core\Request;
use App\Core\Controller;
use App\Model\AC;
use App\Model\RP;

class RPController extends Controller{

    public function listerRP(){
        $titre=`RP`;

        if ($this->request->isGet()) {
            $donne=RP::findAll();

            $this->render('RP/listerRP.html.php',["RP"=>$donne,"titre"=>$titre
            ]);
            }

    }

}