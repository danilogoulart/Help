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

    public function inserir()
    {
        if ($this->input->post('submit')==="submit"){
            $this->load->model('chamados');

            $chamado = $this->input->post();
            $status = $this->chamados->insertChamados($chamado);

            if ($status){
                $mensagem = array(
                    "class" => "success",
                    "mensagem" => "Chamado cadastrado com sucesso!"
                );
            }else{

            } 
        }
    }

    
}