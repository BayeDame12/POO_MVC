<?php
namespace App\Core;

// echo"vous etes dans CONSTANT";
class Constantes{
    public const WEB_ROOT="http://localhost:8002/";
    public static function ROOT(){
        // echo"BIENVENUE la methode function ROOT ";  
        // echo"</br>";    
     return str_replace("public","",$_SERVER["DOCUMENT_ROOT"]);
    }
}