<?php

class Signup extends Controller
{
    public function index()
    {
        if($_SERVER['REQUEST_METHOD'] == "POST")
        {
            $user = $this->load_model('user');
            $user->signup($_POST);
        }

        $this->view("signup");
    }
}
