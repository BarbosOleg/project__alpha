<?php

class DB
{
    
    protected static $conn;

    public function __construct()
    {
        try {
            $str = DB_TYPE.":host=". DB_HOST .";dbname=". DB_NAME;
            self::$conn = new PDO($str, DB_USER, DB_PASS);
        } catch (PDOException $e) {
            //throw
            die($e->getMessage());
        }
    }
    //get instance of class
    public static function getInstance()
    {
        if (self::$conn) {
            return self::$conn;
        }
        $tmp = new self;
        return $tmp;
    }
    /*
    *
    *   read from database 
    */
    public function read($query, $data = [])
    {
        $stm = self::$conn->prepare($query);
        $result = $stm->execute($data);

        if ($result) {
            $data = $stm->fetchAll(PDO::FETCH_OBJ);
            if (is_array($data)) {
                return $data;
            }
        }
        return false;
    }
    /*
    *
    *   write in database
    */
    public function write($query, $data = [])
    {
        $stm = self::$conn->prepare($query);
        $result = $stm->execute($data);

        if ($result) {
            $data = $stm->fetchAll(PDO::FETCH_OBJ);
            if (is_array($data)) return true;
        }
        return false;
    }
}

// $db = DB::getInstance();
// show($db->read('describe users'));