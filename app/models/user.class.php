<?php

class User
{
    private $error = "";
    
    public function signup($post)
    {
        $data = array();

        $email_regex    = "/[-0-9a-zA-Z.+_]+@[-0-9a-zA-Z.+_]+.[a-zA-Z]{2,4}/";
        $name_regex     = "/^([A-Za-z0-9_\-.]{2,15})$/";

        $data[':login']  = trim($post['form__login']);
        $data[':pass ']  = trim($post['form__password']);
        $confirm_pass   = trim($post['form__confirm__password']);
        $data[':email']  = trim($post['form__email']);

        if(empty($data['email']) || !preg_match($email_regex, $data['email']))
        {
            $this->error .= "wrong email";
        }
        if(empty($data['login']) || !preg_match($name_regex, $data['login']))
        {
            $this->error .= "incorrect login";
        }
       
        if($this->error == "")
        {
            $data[':rank']       = "user";
            $data[':uid']        = $this->uid_gen(10);
            $data[':reg_date']   = date("Y-m-d H:i:s");

            $query = "insert into users (uid, login, password, email, rank, reg_date) value (:uid, :login, :password, :email, :rank, :reg_date)";
            
            $db = DB::getInstance();
            $result = $db->write($query, $data);
            if($result)
            {
                header("Location: ". ROOT . "login");
                die;
            }

        }
        
    }

    public function login($post)
    {
        # code...
    }

    public function get_user($uid)
    {
        # code...
    }

    private function uid_gen($uid_len)
    {
        $arr = array(0,1,2,3,4,5,6,7,8,9,'q','w','e','r','t','y','u','i','o','p','a','s','d','f','g','h','j','k','l','z','x','c','v','b','n','m');
        $text = "";

        for ($i=0; $i < $uid_len; $i++) 
        {
            $tmp = rand(0, 36); 
            $text .= $arr[$tmp];
        }
    }
}