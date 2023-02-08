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
        $data["admin_name"] = $sess["password"];

        $adm = new Admin_DAO_model();

        $data["userCount"] = $adm->countUser();

        $data["exchangeCount"] = $adm->countExchange();

        $this->load->view("adminStatistique",$data);
    }
}