<?php

namespace App\Core;
    use App\Core\Model;
    use App\Core\Session;
    use App\Exception\RouteNotFoundException;


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
            $params=$this->request->getUri();
            unset($params[0]);
            $params=count($params)>=1? array_values($params):[];
            // $params=implode(",",$params);
            

            
            if (isset($this->routes[$uri])) {
                [$ctrClass,$action]=$this->routes[$uri];  
                if (class_exists($ctrClass) && method_exists($ctrClass,$action)) {   
                    $ctrl=new $ctrClass($this->request); 
                    // (*)=mode dev
                    $free= ["SecurityController/authentification"];
                    $freeTest=explode("\\",$ctrl::class)[2]."/".$action;
                    //la cle chercher et la ou l'on le cherche
                    if (in_array("*",$free) || in_array($freeTest,$free)){
                        // $ctrl->$action($params[0],$params[1]);
                        call_user_func_array([$ctrl, $action],$params);

                    }
                    elseif(Session::is_connect()){
                        // $ctrl->$action($params); 
                        call_user_func_array([$ctrl, $action],$params);

                                            }
                    else{
                        // throw new RouteNotFoundException();                   
                        // call_user_func(array($ctrl,$action)); 
                        header('location:login') ;
                    }
                    $ctrl->$action(); 
                    $free= ["SecurityController/authentification"];
                }
                else {
                    # code...
                    // echo"pas route existant ";
                    throw new RouteNotFoundException();
                }
            }
        
    }
}
 // $per=new Router();
 // $per->resolve();