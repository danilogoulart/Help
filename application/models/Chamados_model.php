<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Chamados_model extends CI_Model {


    public function check_login($email, $password)
    {
        $this->db->from('users');
        $this->db->where('email', $email);
        $this->db->where('password', $password);
        $usuarios = $this->db->get();

        if($usuarios->num_rows()){
            $usuario = $usuarios->result_array();
            return $usuario[0];
        }else{
            return false;
        }

    }

    public function insertChamados($chamado){
      return $this->db->insert('chamados',$chamado);
    }

    public function getChamadosAbertos(){
        $this->db->select('c.id_chamado, c.id_loja, c.nome_loja,
            c.descricao_erro, u.nome, d.nome_dev, c.data_chamado');
        $this->db->from('chamados as c');
        $this->db->where("c.status = 'Em aberto'");
        $this->db->join('devs as d','c.id_dev = d.id');
        $this->db->join('users as u','c.id_user = u.id');
        
        $chamados = $this->db->get();

        if($chamados->num_rows()){
            $listaChamados = $chamados->result_array();
            return $listaChamados; 
        }else{
            return false;
        }

    }

    public function getChamadosNovos(){
        $this->db->select('c.*, d.*, u.*');
        $this->db->from('chamados as c');
        $this->db->where("c.status = 'Não aberto'");
        $this->db->join('devs as d','c.id_dev = d.id');
        $this->db->join('users as u','c.id_user = u.id');
    
        
        $chamados = $this->db->get();

        if($chamados->num_rows()){
            $listaChamados = $chamados->result_array();
            return $listaChamados; 
        }else{
            return false;
        }

    }

    public function getStatus(){
        $this->db->select('count(*) as quantidade,status')
        ->from('chamados')
        ->group_by('status');
        $status = $this->db->get();

        if ($status->num_rows()) {
            $listaStatus = $status->result_array();
            return $listaStatus; 
        }

    }
}