<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Forms extends CI_Controller {

    public function index()
    {
        $dados = array(
            "title" => "Forms - MBR",
            "nav_active" => "2",
            "class" => "act"
            );

        $this->load->view('header',$dados);
        $this->load->view('forms');
        $this->load->view('footer');
        
    }

    
}