<?php
namespace App\Controller;
use App\Model\AC;
use App\Core\Request;
use App\Core\Controller;

class PersonneController extends Controller{

    public function listerPersonne(){

        if ($this->request->isGet()) {
            $donne=AC::findAll();

            $this->render('personne/liste.html.php',["personne"=>$donne
            ]);
            }

    }

}