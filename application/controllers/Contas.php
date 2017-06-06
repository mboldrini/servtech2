<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Contas extends CI_Controller {

	public function __construct() {
		parent::__construct();
		$this->load->library(array('session'));

		$this->load->helper('form', 'Funcoes_helper');
		#pegar as infos dos Usuarios
		$this->load->model('Usuario');

		$this->load->model('Funcoes');

	}
	

	public function index()	{

		# verificação de Usuario logado, e se sim, tem que ser no perfil de administrador
		if($this->session->userdata('perfil') == FALSE || $this->session->userdata('perfil') != 'administrador'){
			redirect(base_url().'login');
		}

		# pega o nome do Usuario que tem na session e passa >
		$nome = $this->session->userdata('username');
		# pega o nome da variavel aqui de cima, e faz uma pesquisa completa no banco de dados 'user'
		$pegaInfos = $this->Usuario->pegaUsuario($nome);

		$dados = array(
			'pasta'		=> 'Usuario',
			'tela' 		=> 'listar',
			'titulo' 	=> 'Usuários Cadastrados',
			'descricao' => ' - Lista com todos os usuários cadastrados no sistema',
			'infos' 	=> $pegaInfos,
			'contas' 	=> $this->Funcoes->getAll('users'),
		);

		$this->load->view('tela',$dados);

	}//index

	public function editar()	{

		# verificação de Usuario logado, e se sim, tem que ser no perfil de administrador
		if($this->session->userdata('perfil') == FALSE || $this->session->userdata('perfil') != 'administrador'){
			redirect(base_url().'login');
		}

		# pega o nome do Usuario que tem na session e passa >
		$nome = $this->session->userdata('username');
		# pega o nome da variavel aqui de cima, e faz uma pesquisa completa no banco de dados 'user'
		$pegaInfos = $this->Usuario->pegaUsuario($nome);

		$idEditar = $this->uri->segment(3);

		$mensagem = [];

		#validacao do formulario
		$this->form_validation->set_rules('nome', 			'Nome',			'trim|required');
		$this->form_validation->set_rules('sobrenome', 		'Sobrenome',	'trim|required');
		$this->form_validation->set_rules('email', 			'Email', 		'trim|required');
		$this->form_validation->set_rules('telefone', 		'Telefone',		'trim');
		$this->form_validation->set_rules('descricao', 		'Descrição', 	'trim');

		$id 		= $this->input->post('id');
		$username	= $this->input->post('username');
		$nome 		= $this->input->post('nome');
		$sobrenome 	= $this->input->post('sobrenome');
		$email 		= $this->input->post('email');
		$telefone 	= $this->input->post('telefone');
		$descricao 	= $this->input->post('descricao');

		if( $this->form_validation->run() == FALSE ){
			if( validation_errors() ){
				$mensagem[0] = '<strong>Opa!</strong> Algo de errado aconteceu! ' . validation_errors();
				$mensagem[1] = 'alert-danger';
			}
		}else{
			
			$idUsuario = array('id'=> $id);

			$registra = array(
				"username"	=> $username,
				"nome" 		=> $nome,
				"sobrenome" => $sobrenome,
				"email" 	=> $email,
				"telefone" 	=> $telefone,
				"descricao" => $descricao,
			);

			$this->Funcoes->update($registra, 'users', $idUsuario );

			$mensagem[0] = '<strong>Parabéns!</strong> Você editou um usuário!';
			$mensagem[1] = 'alert-success';

		}

		$dados = array(
			'pasta'		=> 'Usuario',
			'tela' 		=> 'editar',
			'titulo' 	=> 'Editar Registro de Usuário',
			'infos' 	=> $pegaInfos,
			'editar'	=> $this->Funcoes->getById($idEditar, 'users'),
			'mensagem'	=> $mensagem,
		);

		$this->load->view('tela',$dados);

	}//index


	public function cadastrar()	{

		# verificação de Usuario logado, e se sim, tem que ser no perfil de administrador
		if($this->session->userdata('perfil') == FALSE || $this->session->userdata('perfil') != 'administrador'){
			redirect(base_url().'login');
		}

		# pega o nome do Usuario que tem na session e passa >
		$nome = $this->session->userdata('username');
		# pega o nome da variavel aqui de cima, e faz uma pesquisa completa no banco de dados 'user'
		$pegaInfos = $this->Usuario->pegaUsuario($nome);

		$mensagem = [];

		#validacao do formulario
		$this->form_validation->set_rules('nome', 			'Nome',			'trim|required');
		$this->form_validation->set_rules('sobrenome', 		'Sobrenome',	'trim|required');
		$this->form_validation->set_rules('email', 			'Email', 		'trim|required');
		$this->form_validation->set_rules('telefone', 		'Telefone',		'trim');
		$this->form_validation->set_rules('descricao', 		'Descrição', 	'trim');
		$this->form_validation->set_rules('password', 		'senha', 		'trim|required');


		$id 		= $this->input->post('id');
		$username	= $this->input->post('username');
		$senha 		= sha1( $this->input->post('password') );
		$nome 		= $this->input->post('nome');
		$sobrenome 	= $this->input->post('sobrenome');
		$email 		= $this->input->post('email');
		$telefone 	= $this->input->post('telefone');
		$descricao 	= $this->input->post('descricao');
		$perfil		= $this->input->post('perfil');
		
		if( $this->form_validation->run() == FALSE ){
			if( validation_errors() ){
				$mensagem[0] = '<strong>Opa!</strong> Algo de errado aconteceu! ' . validation_errors();
				$mensagem[1] = 'alert-danger';
			}
		}else{
			
			$idUsuario = array('id'=> $id);

			$registra = array(
				"perfil"	=> $perfil,
				"username"	=> $username,
				"password"	=> $senha,
				"nome" 		=> $nome,
				"sobrenome" => $sobrenome,
				"email" 	=> $email,
				"telefone" 	=> $telefone,
				"descricao" => $descricao,
			);

			$this->Funcoes->insert($registra, 'users' );

			$mensagem[0] = '<strong>Parabéns!</strong> Você cadastrou um novo usuário!';
			$mensagem[1] = 'alert-success';

		}		

		$dados = array(
			'pasta'		=> 'Usuario',
			'tela' 		=> 'novo',
			'titulo' 	=> 'Cadastrar Novo Usuário',
			'infos' 	=> $pegaInfos,
			'mensagem'  => $mensagem,
		);

		$this->load->view('tela',$dados);

	}

	
	public function excluir()	{

		# verificação de Usuario logado, e se sim, tem que ser no perfil de administrador
		if($this->session->userdata('perfil') == FALSE || $this->session->userdata('perfil') != 'administrador'){
			redirect(base_url().'login');
		}

		# pega o nome do Usuario que tem na session e passa >
		$nome = $this->session->userdata('username');
		# pega o nome da variavel aqui de cima, e faz uma pesquisa completa no banco de dados 'user'
		$pegaInfos = $this->Usuario->pegaUsuario($nome);

		$idExcluir = $this->uri->segment(3);

		$dados = array(
			'pasta'		=> 'Usuario',
			'tela' 		=> 'excluir',
			'titulo' 	=> 'Excluir Usuario',
			'infos' 	=> $pegaInfos,
			'idUsuario'	=> $idExcluir,
		);

		$this->load->view('tela',$dados);

	}	


	public function editarsenha()	{

		# verificação de Usuario logado, e se sim, tem que ser no perfil de administrador
		if($this->session->userdata('perfil') == FALSE || $this->session->userdata('perfil') != 'administrador'){
			redirect(base_url().'login');
		}

		# pega o nome do Usuario que tem na session e passa >
		$nome = $this->session->userdata('username');
		# pega o nome da variavel aqui de cima, e faz uma pesquisa completa no banco de dados 'user'
		$pegaInfos = $this->Usuario->pegaUsuario($nome);

		$idEditar = $this->uri->segment(3);
		$mensagem = [];

		$this->form_validation->set_rules('id', 		'ID', 	 'trim|required');
		$this->form_validation->set_rules('password', 	'senha', 'trim|required');

		$id 		= $this->input->post('id');
		$senha 		= sha1( $this->input->post('password') );

		if( $this->form_validation->run() == FALSE ){
			if( validation_errors() ){
				$mensagem[0] = '<strong>Opa!</strong> Algo de errado aconteceu! ' . validation_errors();
				$mensagem[1] = 'alert-danger';
			}
		}else{
			$idUsuario = array('id'=> $id);
			$registra = array(
				"password"	=> $senha,
			);
			$this->Funcoes->update($registra, 'users', $idUsuario );
			$mensagem[0] = '<strong>Parabéns!</strong> Você editou a senha de um usuário!';
			$mensagem[1] = 'alert-success';
		}

		$dados = array(
			'pasta'		=> 'Usuario',
			'tela' 		=> 'editarsenha',
			'titulo' 	=> 'Editar Senha',
			'infos' 	=> $pegaInfos,
			'editar' 	=> $this->Funcoes->getById($idEditar, 'users'),
			'mensagem'	=> $mensagem,
		);

		$this->load->view('tela',$dados);

	}








}