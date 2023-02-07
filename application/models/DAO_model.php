<?php
class DAO_model {

    public static function selectAll($connection,$table,$condition = "")
    {
        $query = "SELECT * FROM $table ";
        if (strlen($condition) != 0) $query = $query." where $condition";

        $result = array();

        $resSet = $connection->query($query);
        while ($eachResult = $resSet->fetch()) {
            array_push($result,$eachResult);
        }

        $resSet = null;

        return $result;
    }
}

