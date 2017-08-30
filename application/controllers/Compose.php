<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Compose extends CI_Controller {

    public function index()
    {
        $dados = array(
            "title" => "Compose_mail - Help",
            "nav_active" => "4",
            "class" => "act"
            );

        $this->load->view('header',$dados);
        $this->load->view('compose-mail');
        $this->load->view('footer');
        
    }

    
}