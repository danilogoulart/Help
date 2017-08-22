<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Login extends CI_Controller {


	public function entrar()
	{
		$mensagem = null;


		if ($this->input->post('entrar')==="Entrar") {

			if($this->input->post('captcha')) redirect('login/entrar');

			$this->form_validation->set_rules('email', 'EMAIL', 'required|valid_email');
			$this->form_validation->set_rules('password', 'PASSWORD', 'required|min_length[6]|max_length[20]');

			if ($this->form_validation->run() === TRUE) {

				$this->load->model('users_model');

				$email = $this->input->post('email');
				$password = $this->input->post('password');

				$check_login = $this->users_model->check_login($email,$password);
				
				if($check_login){
					$usuario = $check_login;

					$session = array(
						"nome" => $usuario['nome'],
						"email" => $usuario['email'],
						"role" => $usuario['role'],
						"status" => $usuario['status'],
						"logado" => TRUE
						);

					$this->session->set_userdata($session);
					redirect('home');

				}else{

					$mensagem = array(
					"class" => "danger",
					"mensagem" => "Atenção! E-mail ou senha incorretos!"
					);
				}
			}else{
				$mensagem = array(
					"class" => "danger",
					"mensagem" => "Atenção!<br>".validation_errors()
					);
			}
		}
		$dados = array(
			"alerta" => $mensagem
			);

		$this->load->view('login/entrar',$dados);
		
	}

	public function sair()
	{
		$this->session->sess_destroy();
		redirect('login/entrar');
		
	}
}
