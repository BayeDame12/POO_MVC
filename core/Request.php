<?php
    namespace App\Core;
    // echo"vous etes dans Request";
    // echo"</br>";
    class Request{
        // cette fonction permet de recuperer l'uri
        public function getUri(){
            //recuper l uri et le separer en fonction des /slash
            $url=explode("/",$_SERVER['REQUEST_URI']);
            

            unset($url[0]);
            // var_dump($url);
            // die();
            //array value reorganiser les index et mes uri a la position 0
            return array_values($url);
        }
        /***TEST SI LA REQUET ELLE EST GET  */
        public function isGet():bool{
            // echo"BIENVENUE la methode isGet ";   
            // echo"</br>";
           return $_SERVER['REQUEST_METHOD']=="GET";
        }
        /***TEST SI LA REQUET ELLE EST POST  */
        public function isPost():bool{
            // echo"BIENVENUE la methode isPost ";   
            // echo"</br>";
            return $_SERVER['REQUEST_METHOD']=="POST";
         }
    }
    // $p=new Request();
    // dd($p->getUri());