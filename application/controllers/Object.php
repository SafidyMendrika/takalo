<?php

class Object extends CI_Controller
{

    public function __construct()
    {
        parent::__construct();
        $this->load->model("Object_model");
        $this->load->model("Input_checker");
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

    public function editObjectCategorie()
    {
        $inp = new Input_checker();

        if (! $inp->ckeckInput($this->input,"post",array("idObject","idCategorie"))) redirect(base_url("home/adminHome"));

        $idObj = $this->input->post("idObject");
        $idCategorie = $this->input->post("idCategorie");

        $objModel = new Object_model();

        $objModel->updateCategorieOf($idObj,$idCategorie);

        redirect(base_url("home/adminHome"));
    }

}