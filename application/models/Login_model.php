<?php

class Login_model extends  CI_Model{

    public function __construct()
    {
        $this->load->model("PDO_Connector");
        $this->load->model("DAO_model");
    }

    public  function  logAsAdmin($email,$password){
        //create connection
        $connector = new PDO_Connector();
        $connection = $connector->connect();


        $user = DAO_model::selectAll($connection,"user"," email='$email' and password = '$password' and isAdmin = 1 ");

        if (count($user) != 0) return $user[0];

        return false;
    }
    public  function  log($email,$password){
        //create connection
        $connector = new PDO_Connector();
        $connection = $connector->connect();


        $user = DAO_model::selectAll($connection,"user"," email='$email' and password = '$password' ");

        if (count($user) != 0) return $user[0];

        return false;
    }
}