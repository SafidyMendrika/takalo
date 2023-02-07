<?php
class PDO_Connector extends CI_Controller
{
    //base de donnée : mySQL
    //host for hebergement
    //$host = "";
    //
    private $host = "localhost";
    private $port = '';
    private $dbname = 'takalo';
    private $user = "root";
    private $pass = "root";
    private $dsn = "";

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