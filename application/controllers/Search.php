<?php


include("Session_Secure.php");
class Search extends Session_Secure
{
    public function __construct()
    {
        parent::__construct();

        $this->load->model("Search_model");
        $this->load->model("Object_model");
    }

    function search()
    {

        $this->checkSession("user",base_url("login/"));

        $sess = $this->session->user;
        $data["user_name"] = $sess["name"];
        $data["user_id"] = $sess["id"];


        //load categorie

        $objectModel = new Object_model();
        $categories = $objectModel->getAllCategorie();
        $data["categories"] = $categories;

        $name =$this->input->post("name");
        $idCategorie =$this->input->post("categorie");

        $sm = new Search_model();

        $data["objects"] = $sm->search($name,$idCategorie);

        $this->load->view("accueil",$data);


    }
}