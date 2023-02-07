<?php

class Login extends  CI_Controller
{
    function index($error = ""){
        $link = "login";

        $data = null;
        if (strlen($error) != 0){
            $data = array();
            $data["error"] = $error;

            $this->load->view($link,$data);
        }else{
            $this->load->view($link);
        }

    }
    function logAdmin(){
        $this->load->model("Login_model");

        $mail = $this->input->post("email");
        $password = $this->input->post("password");

        $admin = $this->Login_model->logAsAdmin($mail,$password);

        if ($admin == false) redirect(base_url("login/"));

       // $this->session->set_userdata("user",$admin);

        //redirect(base_url("home/"));
    }
    function log(){
        $this->load->model("Login_model");

        $mail = $this->input->post("email");
        $password = $this->input->post("password");

        $admin = $this->Login_model->log($mail,$password);

        if ($admin == false) redirect(base_url("login/"));

        //$this->session->set_userdata("user",$admin);

      //  redirect(base_url("home/"));
    }
}