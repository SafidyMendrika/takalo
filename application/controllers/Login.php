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

    public function logout($from = "")
    {
        $this->session->sess_destroy();

        if($from == "admin") redirect(base_url("login/adminLoginPage"));

        redirect(base_url("login"));
    }


    function signinPage($error = ""){
        $link = "login";

        $data["page"] ="signIn";
        if (strlen($error) != 0){
            $data["error"] = $error;
        }
        $this->load->view($link,$data);
    }

    public function signin()
    {
        $this->load->model("login_model");
        $this->load->model("Input_checker");

        $input_checker = new Input_checker();

        if (!$input_checker->ckeckInput($this->input,"post",array("name","password","email"))) redirect(base_url("login/signinPage"));

        $name = $this->input->post("name");
        $password = $this->input->post("password");
        $email = $this->input->post("email");

        $obj_mdl = new Login_model();

        $obj_mdl->insertuser($name,$email,$password);

        redirect(base_url( ));
    }
}