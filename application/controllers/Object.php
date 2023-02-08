<?php

class Object extends CI_Controller
{

    public function __construct()
    {
        parent::__construct();
        $this->load->model("Object_model");
    }

    public function Details()
    {
        $id = $this->input->get("id");
    }

    public function ObjectsOf($id = 0)
    {
        if ($id == 0){
            $id = $this->session->user["id"];
        }

        $obj_model = new Object_model();

        $objects = $obj_model->getObjectByClientId($id);

        $data["objects"] = $objects;


        $categories = $obj_model->getAllCategorie();
        $data["categories"] = $categories;

        $this->load->view("Accueil",$data);

    }


}