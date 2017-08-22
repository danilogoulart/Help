<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Widgets extends CI_Controller {

    public function index()
    {
        $dados = array(
            "title" => "Widgets - MBR",
            "nav_active" => "1",
            "class" => "act"
            );

        $this->load->view('header',$dados);
        $this->load->view('widgets');
        $this->load->view('footer');
        
    }

    
}