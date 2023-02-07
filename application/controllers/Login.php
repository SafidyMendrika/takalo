<?php

class Login extends  CI_Controller
{
    function index($error = ""){
        $link = "login";

        $data["page"] ="client";
        if (strlen($error) != 0){
            $data["error"] = $error;

        }
        $this->load->view($link,$data);
    }

    function adminLoginPage($error = ""){
        $link = "login";

        $data["page"] ="admin";
        if (strlen($error) != 0){
            $data["error"] = $error;
        }
        $this->load->view($link,$data);
    }
    function logAdmin(){
        $this->load->model("Login_model");

        $mail = $this->input->post("email");
        $password = $this->input->post("password");

        $admin = $this->Login_model->logAsAdmin($mail,$password);

        if ($admin == false) redirect(base_url("login/adminLoginPage"));

       $this->session->set_userdata("admin",$admin);

        redirect(base_url("home/adminHome"));
    }
    function log(){
        $this->load->model("Login_model");

        $mail = $this->input->post("email");
        $password = $this->input->post("password");

        $admin = $this->Login_model->log($mail,$password);

        if ($admin == false) redirect(base_url("login/"));

        $this->session->set_userdata("user",$admin);

        redirect(base_url("home/clientHome"));
    }
}