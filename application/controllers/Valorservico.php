<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Valorservico extends CI_Controller {

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
			'pasta'		=>	'valorservico',
			'tela'		=>	'listar',
			'titulo'	=>	'Valores de Serviços',
			'infos'		=>	$pegaInfos,
			'valores'	=>  $this->funcoes->getAll('valser'),
			'tipoServico'=> $this->funcoes->getAll('tipser'),
			'usuario'=> $this->funcoes->getAll('users'),
		);

		$this->load->view('tela',$dados);

	}

	public function cadastrar()	{

		# verificação de usuario logado, e se sim, tem que ser no perfil de administrador
		if($this->session->userdata('perfil') == FALSE || $this->session->userdata('perfil') != 'administrador'){
			redirect(base_url().'login');
		}

		# pega o nome do usuario que tem na session e passa >
		$nome = $this->session->userdata('username');
		# pega o nome da variavel aqui de cima, e faz uma pesquisa completa no banco de dados 'user'
		$pegaInfos = $this->usuario->pegaUsuario($nome);

		$mensagem = [];

		$this->form_validation->set_rules('tipo', 		'Tipo de Serviço', 	'trim|required');
		$this->form_validation->set_rules('valor', 		'Valor', 			'trim|required');
		$this->form_validation->set_rules('inival', 	'Data de Início', 	'trim|required');
		$this->form_validation->set_rules('fimVal', 	'Data Final', 		'trim|required');
		$this->form_validation->set_rules('datCad', 	'Data de Cadastro', 'trim|required');
		$this->form_validation->set_rules('usuCad', 	'ID do usuário', 	'trim|required');

		$tipo 		= $this->input->post('tipo');
		$valor 		= $this->input->post('valor');
		$iniVal 	= $this->input->post('inival');
		$fimVal 	= $this->input->post('fimVal');
		$datCad 	= $this->input->post('datCad');
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
			$this->funcoes->insert($registra, 'valser' );
			$mensagem[0] = '<strong>Parabéns!</strong> Você cadastrou um aviso/mensagem!';
			$mensagem[1] = 'alert-success';
		}

		$dados = array(
			'pasta'		=>	'valorservico',
			'tela'		=>	'cadastrar',
			'titulo'	=>	'Cadastro de Valor',
			'descricao'	=>  "Tela de cadastro de valor de serviço",
			'infos'		=>	$pegaInfos,
			'tipoServico'=> $this->funcoes->getAll('tipser'),
			'mensagem'	=>  $mensagem,
		);

		$this->load->view('tela',$dados);

	}









}