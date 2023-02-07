<?php
class DAO_model extends CI_Model {

    public static function selectAll($connection,$table,$condition = "")
    {
        $query = "SELECT * FROM $table ";
        if (strlen($condition) != 0) $query = $query." where $condition";

        $result = array();

        //$this->db->select("*")->where("id",1)->get("table");
        $resSet = $connection->query($query);
        while ($eachResult = $resSet->fetch()) {
            array_push($result,$eachResult);
        }

        $resSet = null;

        return $result;
    }

    public function getProductDetail($id){

        $this->db->select("*");
    }
}

