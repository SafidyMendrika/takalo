<?php

class Admin_DAO_model extends  CI_Model
{
    public function __construct()
    {
        $this->load->model("DAO_model");
        $this->load->model("PDO_Connector");
    }

    public static function getCategories()
    {
        $connector = new PDO_Connector();
        $connection = $connector->connect();

        $categories = DAO_model::selectAll($connection," categorie ");
        $connection = null;

        return $categories;
    }
   /* public function getItems()
    {
        $connector = new PDO_Connector();
        $connection = $connector->connect();

        $categories = DAO_model::selectAll($connection," categorie ");
        $connection = null;

        return $categories;
    }*/
    public  function countUser()
    {
        return $this->db->select("*")->get("user")->num_rows();
    }
    public  function countExchange()
    {
        return $this->db->select("*")->get("proposition")->num_rows();
    }
}