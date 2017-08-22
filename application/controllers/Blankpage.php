<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Blankpage extends CI_Controller {

    public function index()
    {
        $dados = array(
            "title" => "Blank Page - MBR",
            "nav_active" => "8",
            "class" => "act"
            );

        $this->load->view('header',$dados);
        $this->load->view('blank_page');
        $this->load->view('footer');
        
    }

    
}