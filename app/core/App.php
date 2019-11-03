<?php

class App {

    protected $controller = 'Blog';
    protected $method = 'index';
    protected $params = [];

    public function __construct() {
        $url = $this->parseUrl();                       

        //controller
        if (file_exists('../app/controllers/' . ucfirst(strtolower($url[0])) . '.php')) {
            $this->controller = ucfirst(strtolower($url[0]));
            unset($url[0]);
        }
        require_once '../app/controllers/' . $this->controller . '.php';
        $this->controller = new $this->controller;

        //method
        if (isset($url[1])) {
            if (method_exists($this->controller, $url[1])) {
                $this->method = $url[1];
                unset($url[1]);
            }
        }

        //params
        if (!empty($url)) {            
            $this->params = array_values($url);
        }

        //Run the controller and method, and send params if exist
        call_user_func_array([$this->controller, $this->method], $this->params);
    }

    public function parseUrl() {
        if (isset($_GET['url'])) {        
            $url = explode('/',
                    filter_var(
                            rtrim($_GET['url'], '/'),
                            FILTER_SANITIZE_URL));
            return $url;
        }
    }

}
