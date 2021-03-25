<?php

class App
{
    private $controller = "home";
    private $method = "index";
    private $params;

    public function __construct()
    {
        $url = $this->parseURL();

        if(file_exists("../app/controllers/". strtolower($url[0]) .".controller.php"))
        {
            $this->controller = strtolower($url[0]);
            unset($url[0]);
        }

        require "../app/controllers/" . $this->controller . ".controller.php";

        $this-> controller = new $this->controller;

        if(isset($url[1]))
        {
            if(method_exists($this->controller, $url[1]))
            {
                $this->method = strtolower($url[1]);
                unset($url[1]);
            }
        }

        $this->params = count($url) > 0 ? $url : ["home"];

        call_user_func_array([$this->controller, $this->method], $this->params);
    }

    private function parseURL()
    {
        $url = isset($_GET['url']) ? $_GET['url'] : "home";
        return explode("/", filter_var(trim($url, "/"), FILTER_SANITIZE_URL));
    }
}