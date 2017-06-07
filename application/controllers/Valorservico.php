<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Valorservico extends CI_Controller {

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
			'pasta'		=>	'valorservico',
			'tela'		=>	'listar',
			'titulo'	=>	'Valores de Serviços',
			'infos'		=>	$pegaInfos,
			'valores'	=>  $this->Funcoes->getAll('valser'),
			'usuario'=> $this->Funcoes->getAll('users'),
		);

		$this->load->view('tela',$dados);

	}

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

		$this->form_validation->set_rules('tipo', 		'Tipo de Serviço', 	'trim|required');
		$this->form_validation->set_rules('valor', 		'Valor', 			'trim|required');
		$this->form_validation->set_rules('inival', 	'Data de Início', 	'trim|required');
		$this->form_validation->set_rules('fimVal', 	'Data Final', 		'trim');
		$this->form_validation->set_rules('datCad', 	'Data de Cadastro', 'trim|required');
		$this->form_validation->set_rules('usuCad', 	'ID do usuário', 	'trim|required');

		$tipo 		= $this->input->post('tipo');
		$valor 		= $this->input->post('valor');
		$iniVal 	= implode('-', array_reverse(explode('/', $this->input->post('inival'))));
		$fimVal 	= implode('-', array_reverse(explode('/', $this->input->post('fimVal'))));
		$datCad 	= implode('-', array_reverse(explode('/', $this->input->post('datCad'))));
		$usuCad	 	= $this->input->post('usuCad');

		if( $this->form_validation->run() == FALSE ){
			if( validation_errors() ){
				$mensagem[0] = '<strong>Opa!</strong> Algo de errado aconteceu! ' . validation_errors();
				$mensagem[1] = 'alert-danger';
			}
		}else{
			$registra = array(
				"tipo" 		=> $tipo,
				"valor"		=> $valor,
				"iniVal"	=> $iniVal,
				"fimVal"	=> $fimVal,
				"datCad"	=> $datCad,
				"usuCad"	=> $usuCad,
			);
			$this->Funcoes->insert($registra, 'valser' );
			$mensagem[0] = '<strong>Parabéns!</strong> Você cadastrou um valor de serviço!';
			$mensagem[1] = 'alert-success';
		}

		$dados = array(
			'pasta'		=>	'valorservico',
			'tela'		=>	'cadastrar',
			'titulo'	=>	'Cadastro de Valor',
			'descricao'	=>  "Tela de cadastro de valor de serviço",
			'infos'		=>	$pegaInfos,
			'tipoServico'=> $this->Funcoes->getAll('tipser'),
			'mensagem'	=>  $mensagem,
		);

		$this->load->view('tela',$dados);

	}


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

		$this->form_validation->set_rules('tipo', 		'Tipo de Serviço', 	'trim|required');
		$this->form_validation->set_rules('valor', 		'Valor', 			'trim|required');
		$this->form_validation->set_rules('inival', 	'Data de Início', 	'trim|required');
		$this->form_validation->set_rules('fimVal', 	'Data Final', 		'trim');

		$tipo 		= $this->input->post('tipo');
		$valor 		= $this->input->post('valor');
		$iniVal 	= implode('-', array_reverse(explode('/', $this->input->post('inival'))));
		$fimVal 	= implode('-', array_reverse(explode('/', $this->input->post('fimVal'))));
		$id 		= $this->input->post('id');

		if( $this->form_validation->run() == FALSE ){
			if( validation_errors() ){
				$mensagem[0] = '<strong>Opa!</strong> Algo de errado aconteceu! ' . validation_errors();
				$mensagem[1] = 'alert-danger';
			}
		}else{
			$idMensagem = array(
				"id"		=> $id
			);
			$registra = array(
				"tipo" 		=> $tipo,
				"valor"		=> $valor,
				"iniVal"	=> $iniVal,
				"fimVal"	=> $fimVal,
			);
			$this->Funcoes->update($registra, 'valser', $idMensagem );
			$mensagem[0] = '<strong>Parabéns!</strong> Você editou um valor de serviço!';
			$mensagem[1] = 'alert-success';
		}


		$dados = array(
			'pasta'		=>	'valorservico',
			'tela'		=>	'editar',
			'titulo'	=>	'Editar Valores de Serviços',
			'infos'		=>	$pegaInfos,
			'editar'	=> 	$this->Funcoes->getById($idEditar, 'valser'),
			'tipoServico'=> $this->Funcoes->getAll('tipser'),
			'mensagem'	=> 	$mensagem,
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
			'pasta'		=>	'valorservico',
			'tela'		=>	'excluir',
			'titulo'	=>	'Excluir Valor de Serviço',
			'infos'		=>	$pegaInfos,
			'idExcluir'	=> $idExcluir,

		);

		$this->load->view('tela',$dados);

	}








}