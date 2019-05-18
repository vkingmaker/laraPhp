<?php 

class Router{
    protected $routes = [];

    public static function load($file) {
    
        $router = new static;

        require $file;

        return $router;

        
    }

    public function define($route) {
        $this->routes = $route;
    }
    public function direct($uri) {

        if(array_key_exists($uri, $this->routes)){
            return $this->routes[$uri];
        }

        // throw new Exception($routes);
        throw new Exception('No routes defined for this URI');
    }
}