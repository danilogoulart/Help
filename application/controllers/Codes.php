<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Codes extends CI_Controller {

    public function index()
    {
        $dados = array(
            "title" => "Codes - Help",
            "nav_active" => "6",
            "class" => "act"
            );

        $this->load->view('header',$dados);
        $this->load->view('codes');
        $this->load->view('footer');
        
    }

    
}