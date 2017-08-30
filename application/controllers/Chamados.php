<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Chamados extends CI_Controller {

    public function index()
    {
        $mensagem = null;
        $dados = array(
            "title" => "Novo Chamado - Help",
            "nav_active" => "2",
            "class" => "act",
            "alerta" => $mensagem
            );

        $this->load->view('header',$dados);
        $this->load->view('chamados');
        $this->load->view('footer');
        
    }

    public function inserir()
    {
        $mensagem = null;
        $dados = null;
        if ($this->input->post('submit')==="submit"){
            $this->load->model('chamados_model');

            $chamado = $this->input->post();
            unset($chamado["submit"]);
            $status = $this->chamados_model->insertChamados($chamado);

            if ($status){
                $mensagem = array(
                    "class" => "success",
                    "mensagem" => "Chamado cadastrado com sucesso!"
                );
            }else{
                 $mensagem = array(
                    "class" => "success",
                    "mensagem" => "Erro ao cadastrar chamado!"
                );
            } 

         
        $dados = array(
            "title" => "Forms - MBR",
            "nav_active" => "2",
            "class" => "act",
            "alerta" => $mensagem
            );    
        $this->load->view('header',$dados);
        $this->load->view('chamados',$dados);
        $this->load->view('footer');

        }
    }

    public function novos(){
        $this->load->model('chamados_model');
        
                $listaChamados = $this->chamados_model->getChamadosNovos();
                $chamadosCount = null;
                if($listaChamados===false){
                    $chamadosCount = "Não há chamados nesta condição!";
                }
                
        
                $dados = array(
                    "title" => "Novos Chamados - Help",
                    "nav_active" => "2",
                    "class" => "act",
                    "chamados" => $listaChamados,
                    "chamadosCount" => $chamadosCount
                    );
        
                $this->load->view('header',$dados);
                $this->load->view('chamado/novos',$dados);
                $this->load->view('footer');
                
            
    }
    
}