<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Grids extends CI_Controller {

    public function index()
    {
        $dados = array(
            "title" => "Grids - Help",
            "nav_active" => "1",
            "class" => "act"
            );

        $this->load->view('header',$dados);
        $this->load->view('grids');
        $this->load->view('footer');
        
    }

    
}
