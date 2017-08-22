<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Users_model extends CI_Model {


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
}