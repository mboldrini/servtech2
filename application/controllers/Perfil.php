<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Perfil extends CI_Controller {

	public function __construct() {
		parent::__construct();
		$this->load->library(array('session'));

		$this->load->helper('form', 'funcoes_helper');
		#pegar as infos dos usuarios
		$this->load->model('usuario');

		$this->load->model('funcoes');

	}
	

	public function index()	{

		# verificação de usuario logado, e se sim, tem que ser no perfil de administrador
		if($this->session->userdata('perfil') == FALSE || $this->session->userdata('perfil') != 'administrador'){
			redirect(base_url().'login');
		}

		# pega o nome do usuario que tem na session e passa >
		$nome = $this->session->userdata('username');
		# pega o nome da variavel aqui de cima, e faz uma pesquisa completa no banco de dados 'user'
		$pegaInfos = $this->usuario->pegaUsuario($nome);

		$dados = array(
			'pasta'		=>	'perfil',
			'tela'		=>	'perfil',
			'titulo'	=>	'Perfil do Usuário',
			'infos'		=>	$pegaInfos,
		);

		$this->load->view('tela',$dados);

	}//index


	public function editar()	{

		# verificação de usuario logado, e se sim, tem que ser no perfil de administrador
		if($this->session->userdata('perfil') == FALSE || $this->session->userdata('perfil') != 'administrador'){
			redirect(base_url().'login');
		}

		# pega o nome do usuario que tem na session e passa >
		$nome = $this->session->userdata('username');
		# pega o nome da variavel aqui de cima, e faz uma pesquisa completa no banco de dados 'user'
		$pegaInfos = $this->usuario->pegaUsuario($nome);

		$mensagem = [];

		#validacao do formulario
		$this->form_validation->set_rules('nome', 			'Nome',			'trim|required');
		$this->form_validation->set_rules('sobrenome', 		'Sobrenome',	'trim|required');
		$this->form_validation->set_rules('email', 			'Email', 		'trim|required');
		$this->form_validation->set_rules('telefone', 		'Telefone',		'trim');
		$this->form_validation->set_rules('descricao', 		'Descrição', 	'trim');
		$this->form_validation->set_rules('cor', 			'Cor', 			'trim');

		$id 		= $this->input->post('id');
		$nome 		= $this->input->post('nome');
		$sobrenome 	= $this->input->post('sobrenome');
		$email 		= $this->input->post('email');
		$telefone 	= $this->input->post('telefone');
		$descricao 	= $this->input->post('descricao');
		$cor 		= $this->input->post('cor');

		if( $this->form_validation->run() == FALSE ){
			if( validation_errors() ){
				$mensagem[0] = '<strong>Opa!</strong> Algo de errado aconteceu! ' . validation_errors();
				$mensagem[1] = 'alert-danger';
			}
		}else{
			
			$idUsuario = array('id'=> $id);

			$registra = array(
				"nome" 		=> $nome,
				"sobrenome" => $sobrenome,
				"email" 	=> $email,
				"telefone" 	=> $telefone,
				"descricao" => $descricao,
				"cor" 		=> $cor,
			);

			$this->funcoes->update($registra, 'users', $idUsuario );

			redirect( base_url() . 'perfil');

			$mensagem[0] = '<strong>Parabéns!</strong> Você Editou Seu Perfil!';
			$mensagem[1] = 'alert-success';

		}


		$dados = array(
			'pasta'		=>	'perfil',
			'tela' 		=>	'editar',
			'titulo'	=>	'Edição de Perfil do Usuário',
			'descricao'	=>	' - Editar Configurações de Perfil do Usuário Atual',
			'infos' 	=>	$pegaInfos,
			'mensagem' 	=>	$mensagem,
		);

		$this->load->view('tela',$dados);

	}//editar perfil



}