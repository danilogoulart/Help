<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Home extends CI_Controller {

	public function index()
	{
        $this->load->model('chamados_model');

        $listaChamados = $this->chamados_model->getChamadosAbertos();
        $chamadosCount = null;
        if($listaChamados===false){
            $chamadosCount = "Não há chamados nesta condição!";
        }

        $abertos = 0;
        $naoAbertos = 0;
        $emAnalise = 0;
        $concluidos = 0;

        $status = $this->chamados_model->getStatus();
        if(isset($status)){
            foreach ($status as $stat) {
            if ($stat['status']==="Em aberto") {
                $abertos = $stat['quantidade'];
            }elseif ($stat['status']==="Não aberto") {
                $naoAbertos = $stat['quantidade'];
            }elseif ($stat['status']==="Em análise") {
                $emAnalise = $stat['quantidade'];
            }elseif ($stat['status']==="Concluído") {
                $concluidos = $stat['quantidade'];
            }

        }
        }
        

		$dados = array(
            "title" => "Home - Help",
            "nav_active" => "0",
            "class" => "act",
            "chamados" => $listaChamados,
            "chamadosCount" => $chamadosCount,
            "abertos" => $abertos,
            "naoAbertos" => $naoAbertos,
            "emAnalise" => $emAnalise,
            "concluidos" => $concluidos
            );

		$this->load->view('header',$dados);
		$this->load->view('home');
        $this->load->view('footer');
		
	}

    public function nav($nav){
        $nave = substr($nav, 5);
        $this->load->view($nave);
    }
}
