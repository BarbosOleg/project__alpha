<?php

class Login extends Controller
{
    public function index()
    {
        if ($_SERVER['REQUEST_METHOD'] == "POST") {
            $user = $this->load_model("user");
            $user->login($_POST);
        }
        $this->view("login");
    }
}
