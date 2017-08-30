<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Charts extends CI_Controller {

    public function index()
    {
        $dados = array(
            "title" => "Compose_mail - Help",
            "nav_active" => "5",
            "class" => "act"
            );

        $this->load->view('header',$dados);
        $this->load->view('charts');
        $this->load->view('footer');
        
    }

    
}