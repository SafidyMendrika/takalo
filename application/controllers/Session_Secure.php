<?php

class Session_Secure extends  CI_Controller
{
    public function __construct()
    {
        parent::__construct();
    }
    public function checkSession($sessionName,$redirect_page)
    {
        if(! $this->session->has_userdata($sessionName)) redirect($redirect_page);

    }

}