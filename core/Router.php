<?php

    require_once "Request.php";
  
    class Router{

        public array $routes = [];
        public Request $request;

        public function __construct($request)
        {
            $this->request = $request;
        }

        public function get($path, $callback){
            
            $this->routes['get'][$path] = $callback;
            
        }

        public function resolve(){
            
            $path = $this->request->getPath();
            
            $method = $this->request->getMethod();
            
            $callback = $this->routes[$method][$path] ;
            
            if ($callback === false){
                return "not found";
               
            }
            // if (is_string($callback )){
            //     return $this->renderView($callback);
                
            // }

            return call_user_func($callback);
            
        }

        // public function renderView($view){
      
        //     // include_once "./views/$view.html";
        //     // include_once "./views/$view.css";
        //     // include_once("./views/$view.php");

            
            

        // }
    }

?>