<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Signin extends CI_Controller {

    public function index()
    {
        $dados = array(
            "title" => "Sign-in - Help",
            "nav_active" => "8",
            "class" => "act"
            );

        //$this->load->view('header',$dados);
        $this->load->view('sign-in');
        //$this->load->view('footer');
        
    }

    
}