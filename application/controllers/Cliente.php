<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Cliente extends CI_Controller {

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

		$mensagem = [];

		$dados = array(
			'pasta'		=>	'cliente',
			'tela'		=>	'listar',
			'titulo'	=>	'Clientes',
			'descricao'	=> 	'Clientes cadastrados no sistema',
			'infos'		=>	$pegaInfos,
			'clientes'	=>	$this->funcoes->getAll('cliente'),
			'mensagens'	=> 	$mensagem,
		);

		$this->load->view('tela',$dados);

	}


	public function novo()	{

		# verificação de usuario logado, e se sim, tem que ser no perfil de administrador
		if($this->session->userdata('perfil') == FALSE || $this->session->userdata('perfil') != 'administrador'){
			redirect(base_url().'login');
		}

		# pega o nome do usuario que tem na session e passa >
		$nome = $this->session->userdata('username');
		# pega o nome da variavel aqui de cima, e faz uma pesquisa completa no banco de dados 'user'
		$pegaInfos = $this->usuario->pegaUsuario($nome);

		$mensagem = [];

		$this->form_validation->set_rules('nome', 		'Nome', 				'trim|required');
		$this->form_validation->set_rules('tipo', 		'Tipo', 				'trim|required');
		$this->form_validation->set_rules('registro', 	'Registro', 			'trim');
		$this->form_validation->set_rules('datNas', 	'Data de Nascimento',	'trim');
		$this->form_validation->set_rules('celular', 	'Celular', 				'trim');
		$this->form_validation->set_rules('telefone', 	'Telefone', 			'trim');
		$this->form_validation->set_rules('email', 		'Email', 				'trim');
		$this->form_validation->set_rules('endereco', 	'Endereço', 			'trim');
		$this->form_validation->set_rules('observacoes', 'Observações', 		'trim');
		$this->form_validation->set_rules('datCad', 	'Data de Cadastro', 	'trim|required');
		$this->form_validation->set_rules('usuCad', 	'Usuário Cadastro', 	'trim|required');

		if( $this->form_validation->run() == FALSE ){
			if( validation_errors() ){
				$mensagem[0] = '<strong>Opa!</strong> Algo de errado aconteceu! ' . validation_errors();
				$mensagem[1] = 'alert-danger';
			}
		}else{
			$registra = array(
				"nome" 			=> $this->input->post('nome'),
				"tipo"			=> $this->input->post('tipo'),
				"registro"		=> $this->input->post('registro'),
				"datNas"		=> $this->input->post('datNas'),
				"celular"		=> $this->input->post('celular'),
				'telefone'		=> $this->input->post('telefone'),
				'email'			=> $this->input->post('email'),
				'endereco'		=> $this->input->post('endereco'),
				'observacoes'	=> $this->input->post('observacoes'),
				'datCad'		=> $this->input->post('datCad'),
				'usuCad'		=> $this->input->post('usuCad'),
			);
			$this->funcoes->insert($registra, 'cliente' );
			$mensagem[0] = '<strong>Parabéns!</strong> Você cadastrou um novo clietne!';
			$mensagem[1] = 'alert-success';
		}

		$dados = array(
			'pasta'		=>	'cliente',
			'tela'		=>	'novo',
			'titulo'	=>	'Novo Cliente',
			'infos'		=>	$pegaInfos,
			'mensagem'	=> 	$mensagem,
		);
		$this->load->view('tela',$dados);
	}


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

		$idEditar = $this->uri->segment(3);

		$this->form_validation->set_rules('nome', 		'Nome', 				'trim|required');
		$this->form_validation->set_rules('tipo', 		'Tipo', 				'trim|required');
		$this->form_validation->set_rules('registro', 	'Registro', 			'trim');
		$this->form_validation->set_rules('datNas', 	'Data de Nascimento',	'trim');
		$this->form_validation->set_rules('celular', 	'Celular', 				'trim');
		$this->form_validation->set_rules('telefone', 	'Telefone', 			'trim');
		$this->form_validation->set_rules('email', 		'Email', 				'trim');
		$this->form_validation->set_rules('endereco', 	'Endereço', 			'trim');
		$this->form_validation->set_rules('observacoes', 'Observações', 		'trim');

		if( $this->form_validation->run() == FALSE ){
			if( validation_errors() ){
				$mensagem[0] = '<strong>Opa!</strong> Algo de errado aconteceu! ' . validation_errors();
				$mensagem[1] = 'alert-danger';
			}
		}else{
			$idMensagem = array(
				"id" => $this->input->post('id'),
			);
			$registra = array(
				"nome" 			=> $this->input->post('nome'),
				"tipo"			=> $this->input->post('tipo'),
				"registro"		=> $this->input->post('registro'),
				"datNas"		=> $this->input->post('datNas'),
				"celular"		=> $this->input->post('celular'),
				'telefone'		=> $this->input->post('telefone'),
				'email'			=> $this->input->post('email'),
				'endereco'		=> $this->input->post('endereco'),
				'observacoes'	=> $this->input->post('observacoes'),
			);
			$this->funcoes->update($registra, 'cliente', $idMensagem );
			$mensagem[0] = '<strong>Parabéns!</strong> Você editou o registro de um cliente!';
			$mensagem[1] = 'alert-success';
		}


		$dados = array(
			'pasta'		=>	'cliente',
			'tela'		=>	'editar',
			'titulo'	=>	'Editar Cliente',
			'descricao'	=> 	'Editar informações do cliente',
			'infos'		=>	$pegaInfos,
			'mensagem'	=> 	$mensagem,
			'editar'	=> 	$this->funcoes->getById($idEditar, 'cliente'),
		);

		$this->load->view('tela',$dados);

	}


	public function excluir()	{
		# verificação de usuario logado, e se sim, tem que ser no perfil de administrador
		if($this->session->userdata('perfil') == FALSE || $this->session->userdata('perfil') != 'administrador'){
			redirect(base_url().'login');
		}
		# pega o nome do usuario que tem na session e passa >
		$nome = $this->session->userdata('username');
		# pega o nome da variavel aqui de cima, e faz uma pesquisa completa no banco de dados 'user'
		$pegaInfos = $this->usuario->pegaUsuario($nome);

		$idExcluir = $this->uri->segment(3);

		$dados = array(
			'pasta'		=>	'cliente',
			'tela'		=>	'excluir',
			'titulo'	=>	'Excluir Cliente',
			'infos'		=>	$pegaInfos,
			'idExcluir'	=> $idExcluir,
		);
		$this->load->view('tela',$dados);
	}




}