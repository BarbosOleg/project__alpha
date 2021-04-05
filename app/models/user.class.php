<?php

class User
{
    private $error = "";
    
    public function signup($post)
    {
        $data = array();
        $db = DB::getInstance();

        $email_regex    = "/[-0-9a-zA-Z.+_]+@[-0-9a-zA-Z.+_]+.[a-zA-Z]{2,4}/";
        $name_regex     = "/^([A-Za-z0-9_\-.]{2,15})$/";

        $data['login']      = trim($post['form__login']);
        $data['password']   = trim($post['form__password']);
        $confirm_pass       = trim($post['form__confirm__password']);
        $data['email']      = trim($post['form__email']);

        if(empty($data['email']) || !preg_match($email_regex, $data['email']))
        {
            $this->error .= "wrong email<br>";
        }
        if(empty($data['login']) || !preg_match($name_regex, $data['login']))
        {
            $this->error .= "incorrect login<br>";
        }
        /**
         *  check if email already exist
         */
        $check_query = "select * from users where email = :email limit 1";
        $tmp_arr['email'] = $data['email'];
        $check_result = $db->read($check_query, $tmp_arr);
        if(is_array($check_result) && empty($check_query))
        {
            $this->error .= "email already in use<br>";
        }
        show($this->error);
        if($this->error == "")
        {
            $data['rank']       = "user";
            $data['uid']        = $this->uid_gen(10);
            $data['reg_date']   = date("Y-m-d H:i:s");
            $data['password']   = hash('md5', $data['password']); 
    
            $query = "insert into users (uid, login, password, email, rank, reg_date) value (:uid, :login, :password, :email, :rank, :reg_date)";

            $result = $db->write($query, $data);
            if($result)
            {
                header("Location: ". ROOT . "login");
                die;
            }
            
        }
        $_SESSION['error'] = $this->error;
    }

    public function login($post)
    {
        show($post);
        $data = array();
        $db = DB::getInstance();

        $data['login']      = trim($post['form__login']);
        $data['password']   = trim($post['form__password']);
        
        $data['password']   = hash('md5', $data['password']);
        $query = "select * from users where login = :login && password = :password limit 1";
        $result = $db->read($query, $data);

        if (is_array($result)) {
            show($result);
            $_SESSION['user_name'] = $result[0]->user_name;
            $_SESSION['login'] = true;
            header("Location: " . ROOT . "home");
            die;
        }

        $_SESSION['error'] = $this->error;
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
        return $text;
    }
}