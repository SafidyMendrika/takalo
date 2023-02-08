<?php
class PDO_Connector extends CI_Controller
{
    //base de donnée : mySQL
    //host for hebergement
    //$host = "";
    //
    // //depl
    // private $host = "mysql-takalo-takalo.alwaysdata.net";
    // private $port = '';
    // private $dbname = 'takalo-takalo_db';
    // private $user = "299328_user";
    // private $pass = "user.ROOT";
    // private $dsn = "";
    // //
    //default
    private $host = "localhost";
    private $port = '';
    private $dbname = 'takalo';
    private $user = "root";
    private $pass = "root";
    private $dsn = "";
    //

    public function __construct()
    {
        $this->dsn = "mysql:host=$this->host;dbname=$this->dbname";
    }

     public function connect()
    {
        try {
            //code...
            $connexion = new PDO($this->dsn,$this->user,$this->pass);
            return $connexion;


        } catch (PDOException $e) {
            echo $e->getMessage();
        }
    }

}