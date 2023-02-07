<?php
defined('BASEPATH') OR exit('No direct script access allowed');

include "Session_Secure.php";
class Home extends Session_Secure {

    public function __construct()
    {
        parent::__construct();
        $this->load->model("DAO_model");
        $this->load->model("PDO_Connector");
        $this->load->model("Object_model");
    }
     public function index()
    {
        // code here brow
    }

    public function adminHome(){
        $this->checkSession("admin",base_url("login/adminLoginPage"));

        $sess = $this->session->admin;
        $data["admin_name"] = $sess["password"];

        $objectModel = new Object_model();

        $data["objects"] = $objectModel->getAllWithDetals();

        $this->load->view("homeadmin",$data);
    }
    public function clientHome(){
        $this->checkSession("user",base_url("login/"));

        $sess = $this->session->user;
        $data["user_name"] = $sess["password"];
        $data["user_id"] = $sess["id"];

        $objectModel = new Object_model();

        $data["objects"] = $objectModel->getAllWithDetals();


        $this->load->view("accueil",$data);
}
}
