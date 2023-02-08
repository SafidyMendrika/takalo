<?php

class Object_model extends  CI_Model
{
    public function __construct()
    {
        parent::__construct();
        $this->load->model("PDO_Connector");
        $this->load->model("DAO_model");
    }

    public function getObjectByClientId ($idClient)
    {
        $connector =  new PDO_Connector();
        $connection =$connector->connect();

        $object = DAO_model::selectAll($connection,"objet_details_view","id_user = $idClient");

        $connection = null;
        return $object;
    }

    public function insertObject($idUser,$nom,$prix,$photo_path)
    {
        $connector = new PDO_Connector();
        $connection = $connector->connect();

        //insertion objet
        DAO_model::insert($connection,"objet","default,$idUser,'$nom',$prix");

        $lastId = DAO_model::selectAll($connection,"objet","id in (select max(id) from objet)");
        $id = $lastId[0]["id"];

        
        //insertion photo
        DAO_model::insert($connection,"photos","default,$id,'$photo_path'");

        $idCateg = $this->getCategorieId($connection,"autre");

        DAO_model::insert($connection,"details_objet","default,$id,$idCateg");

        $connection = null;

    }

    public  function getDistinctObject($name,$categorie)
    {
        $connector = new PDO_Connector();
        $connection =$connector->connect();

        $object = DAO_model::selectAll($connection,"");

        $connection = null;

        return $object;
    }
    public  function getAllWithDetals()
    {
        $connector = new PDO_Connector();
        $connection =$connector->connect();

        $object = DAO_model::selectAll($connection,"objet_details_view ");

        $connection = null;
        return $object;
    }
    function getPhotosCurrentIndex()
    {
        return $this->db->select("*")->get("photos")->num_rows();
        // code here brow
    }

    public function getAllCategorie()
    {
        $connector = new PDO_Connector();
        $connection =$connector->connect();

        $object = DAO_model::selectAll($connection,"categorie");

        $connection = null;
        return $object;
    }
    public function getCategorieId($connection,$name)
    {

        $object = DAO_model::selectAll($connection,"categorie","nom = '$name'");

        return $object[0]["id"];
    }

    public function updateCategorieOf($idObj,$newCategorie)
    {
        $connector = new PDO_Connector();
        $connection =$connector->connect();

        DAO_model::update($connection,"details_objet"," idCategorie = $newCategorie"," idObjet = $idObj ");

        $connection = null;
    }
}