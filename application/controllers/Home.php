<?php
defined('BASEPATH') OR exit('No direct script access allowed');

include "Session_Secure.php";
class Home extends Session_Secure {

    public function __construct()
    {
        parent::__construct();
    }
     public function index()
    {
        // code here brow
    }

    public function adminHome(){
        $this->checkSession("admin",base_url("login/adminLoginPage"));
        $this->load->view("admin");
    }
    public function clientHome(){
        $this->checkSession("user",base_url("login/"));
    $this->load->view("client");
}
}
