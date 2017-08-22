<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Home extends CI_Controller {

	public function index()
	{
		$dados = array(
            "title" => "Home - MBR",
            "nav_active" => "0",
            "class" => "act"
            );
		$this->load->view('header',$dados);
		$this->load->view('home');
        $this->load->view('footer');
		
	}

    public function nav($nav){
        $nave = substr($nav, 5);
        $this->load->view($nave);
    }
}
