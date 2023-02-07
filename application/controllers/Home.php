<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Home extends CI_Controller {

	public function index()
	{
		$msg = "<h1>TONGASOA MIARAKA AMIKO</h1>";
		$data = array();
		$data["msg"] = $msg;
		$this->load->view('Home',$data);
	}	
	public function bonjour($nom = "badoda kely")	{
		$msg =  "Manahoana lesy $nom";
		$data = array();
		$data["msg"] = $msg;
		$this->load->view('Home',$data);

	}
	public function manger($plat = "vary",$boison = "cristaline")	{
		$msg =  "Mihinana $plat miaraka amin'ny $boisson izaho";
		$data = array();
		$data["msg"] = $msg;
		$this->load->view('Home',$msg);
	}
}
