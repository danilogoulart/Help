<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Inbox extends CI_Controller {

    public function index()
    {
        $dados = array(
            "title" => "Inbox - Help",
            "nav_active" => "4",
            "class" => "act"
            );

        $this->load->view('header',$dados);
        $this->load->view('inbox');
        $this->load->view('footer');
        
    }

    
}