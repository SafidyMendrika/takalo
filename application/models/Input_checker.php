<?php

class Input_checker extends  CI_Model
{
    function ckeckInput($input,$method,$attributesArray)
    {
        foreach ($attributesArray as $a) {
            $result = null;
            if($method == "post")$result = $input->post($a);
            if($method == "get")$result = $input->get($a);

            if ($result == null || strlen($result) == 0 ) return false;
        }
        return  true;
    }
}