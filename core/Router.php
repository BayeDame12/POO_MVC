<?php
    namespace App\Core;
    use App\Core\Model;
    use App\Exception\RouteNotFoundException;
    // echo"ROUTER";
    // echo"</br>";
    class Router{
        private Request $request;
        public function __construct()
        {
            $this->request=new Request;
        }
//IL ENREGISTRE TOUTE LES ROUTE DANS UN TABLEAU
        private array $routes=[];   
        //AJOUT ROUTE
        public function route(string $uri,array $action) {
            $this->routes[$uri]=$action;

        }
    
//IL TESTE L EXISTANCE DUN ROUTE DANS UN TABLEAU  ROUTE DANS UN TABLEAU

         function resolve(){
            $uri="/".$this->request->getUri()[0];
            if (isset($this->routes[$uri])) {
                [$ctrClass,$action]=$this->routes[$uri];  
                if (class_exists($ctrClass) && method_exists($ctrClass,$action)) {   
                    $ctrl=new $ctrClass($this->request); 
                    // $title=str_replace("lister","",$action);
                    // var_dump($title);
                     //$ctrl=new SecurityController($this->request)=>__construct();
                    // $ctrl->{$action()};//$ctrl->authentification mais le soucis en est k c statitik psk ya pas k authentificatin
                    call_user_func(array($ctrl,$action));
                    
                }
                else {
                    # code...
                     throw new RouteNotFoundException();                   
                }
        }
        else {
            # code...
            // echo"pas route existant ";
            throw new RouteNotFoundException();
        }
    }
}
// $per=new Router();
// $per->resolve();