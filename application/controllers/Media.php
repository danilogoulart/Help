<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Media extends CI_Controller {

    public function index()
    {
        $dados = array(
            "title" => "Media - MBR",
            "nav_active" => "7",
            "class" => "act"
            );

        $this->load->view('header',$dados);
        $this->load->view('media');
        $this->load->view('footer');
        
    }

    
}