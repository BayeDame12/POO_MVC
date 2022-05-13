<?php
    namespace App\Core;
    use App\Core\Model;

    use App\Exception\RouteNotFoundException;

    class Router{
        private Request $request;
        public function __construct()
        {
            $this->request=new Request;
        }

        private array $routes=[];   
        public function route(string $uri,array $action) {

            $this->routes[$uri]=$action;
        }

        //Est ce que  l'uri qu i la taper se trouve dans les tableau de route  
        public function resolve(){
            //recuperatin de l uri et y ajoiter un /slash
            $uri="/".$this->request->getUri()[0];
            // var_dump($uri);
            if (isset($this->routes[$uri])) {
                $route=$this->routes[$uri];
                [$ctrClass,$action]=$route;

                if (class_exists($ctrClass) && method_exists($ctrClass,$action)) {
                    
                     
                    $ctrl=new $ctrClass($this->request); 
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