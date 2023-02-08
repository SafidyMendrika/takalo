<?php

include("Session_Secure.php");
class Admin extends Session_Secure
{
    public function __construct()
    {
        parent::__construct();

        $this->checkSession("admin", base_url("Login/AdminLogin"));

        $this->load->model("Admin_DAO_model");
    }
    public function index()
    {
        //listes des objets

        //liste catfegorie
        $cathegories = Admin_DAO_model::getCategories();


        $data["categories"] = $cathegories;
        $this->load->view("admin-home",$data);
    }

    public function statistique()
    {
        $this->checkSession("admin",base_url("login/adminLoginPage"));

        $sess = $this->session->admin;
        $data["admin_name"] = $sess["name"];

        $adm = new Admin_DAO_model();

        $data["userCount"] = $adm->countUser();

        $data["exchangeCount"] = $adm->countExchange();

        $this->load->view("adminStatistique",$data);
    }

    public function ajoutCategorie()
    {

        $sess = $this->session->admin;
        $data["admin_name"] = $sess["name"];


        $this->load->view("ajoutCategorie",$data);
    }

    public function saveCategorie()
    {
        $this->load->model("Input_checker");
        $inp = new Input_checker();
        if (!$inp->ckeckInput($this->input,"post",array("categorie"))) redirect(base_url(("admin/ajoutCategorie")));

        $newCateg = $this->input->post("categorie");

        $connec = new PDO_Connector();
        $connection = $connec->connect();
        DAO_model::insert($connection,"categorie","default,'$newCateg'");

        $connection = null;

        redirect(base_url("home/adminHome"));
    }
}