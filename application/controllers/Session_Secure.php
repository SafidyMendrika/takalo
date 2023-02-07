<?php

class Session_Secure extends  CI_Controller
{
    public function __construct($sessionName,$redirect_page)
    {
        if(! $this->session->has_userdata($sessionName)) redirect($redirect_page);
    }
}