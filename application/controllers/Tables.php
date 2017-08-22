<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Tables extends CI_Controller {

    public function index()
    {
        $dados = array(
            "title" => "Tables - MBR",
            "nav_active" => "3",
            "class" => "act"
            );

        $this->load->view('header',$dados);
        $this->load->view('tables');
        $this->load->view('footer');
        
    }

    
}