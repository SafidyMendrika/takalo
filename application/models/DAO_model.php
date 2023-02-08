<?php
class DAO_model extends CI_Model {

    public static function selectAll($connection,$table,$condition = "")
    {
        $query = "SELECT * FROM $table ";
        if (strlen($condition) != 0) $query = $query." where $condition";

        $result = array();

        // $this->db->select("*")->where("id",1)->get("table");
        $resSet = $connection->query($query);
        
        while ($eachResult = $resSet->fetch()) {
            array_push($result,$eachResult);
        }

        $resSet = null;

        return $result;
    }

    public static function getProductDetail($id){

    }

    public static function insert($connection,$table,$values){
        try {
            $request = "INSERT INTO ".$table." VALUES (".$values.")";
            echo $request;

            $stm = $connection->exec($request);

            $stm = null;
            return true;
        } catch (Exception $e) {
            return false;
        }
    }
}

