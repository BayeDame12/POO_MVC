<?php
namespace App\Core;
use App\Core\Request;
// echo"vous etes dans Controller";
// Echo"</br>";

class Controller{

protected Request $request;  
    public function __construct(Request $request)
    {
        $this->request=$request;
    }
    public function render(string $path,array $data=[]){
//         echo"BIENVENUE la methode render ";   
// Echo"</br>";

        $data["Constantes"]=Constantes::class;
        $data["request"]=$this->request;
        //dans une vues $constantes
        //dans une vues $request
        ob_start();
        extract($data);
        require_once(Constantes::ROOT()."templates/".$path);
        $content_for_views=ob_get_clean();
        require_once(Constantes::ROOT()."templates/layout/base.html.php");

    }
    public function redirectToRoute($uri){
//         echo"BIENVENUE la methode redirectToRoute ";   
// Echo"</br>";
        header ("location:".Constantes::WEB_ROOT.$uri);

    }
}

