<?php

class Admin extends Session_Secure
{
    public function __construct()
    {
        parent::__construct("admin", base_url("Login/AdminLogin"));

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
}