<?php
class Search_model extends  CI_Model{
    public function __construct()
    {
        parent::__construct();

        $this->load->model("PDO_Connector");
        $this->load->model("DAO_model");
    }

    public function search($name="",$categorie= -1)
    {
        $cn = new PDO_Connector();
        $connection = $cn->connect();

        $conditionQuery = "nom_objet like '%$name%'";

        if ($categorie != -1 && strlen($categorie) !=0) $conditionQuery = $conditionQuery." and id_categorie = $categorie";

        $result = DAO_model::selectAll($connection,"objet_details_view",$conditionQuery);

        $connection = null;

        return $result;
    }
}