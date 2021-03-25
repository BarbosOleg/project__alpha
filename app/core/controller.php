<?php

class Controller
{
    public function view($view_name, $data = [])
    {
        if(file_exists("../app/views/". $view_name . ".php"))
        {
            include "../app/views/" . $view_name . ".php";
        }else
        {
            include "../app/views/404.php";
        }
    }

    public function load_model($model_name)
    {
        if(file_exists("../app/views/". strtolower($model_name) . ".class.php"))
        {
            include "../app/views/" . strtolower($model_name) . ".class.php";
            return $tmp = new $model_name();
        }
        return false;
    }
}