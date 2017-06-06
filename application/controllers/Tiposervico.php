<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Tiposervico extends CI_Controller {

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
			'pasta'		=>	'tiposervico',
			'tela'		=>	'listar',
			'titulo'	=>	'Tipos de Serviço',
			'infos'		=>	$pegaInfos,
			'servicos' 	=> 	$this->Funcoes->getAll('tipser'),
			'users'		=> 	$this->Funcoes->getAll('users'),
		);

		$this->load->view('tela',$dados);

	}


	public function novo()	{

		# verificação de Usuario logado, e se sim, tem que ser no perfil de administrador
		if($this->session->userdata('perfil') == FALSE || $this->session->userdata('perfil') != 'administrador'){
			redirect(base_url().'login');
		}

		# pega o nome do Usuario que tem na session e passa >
		$nome = $this->session->userdata('username');
		# pega o nome da variavel aqui de cima, e faz uma pesquisa completa no banco de dados 'user'
		$pegaInfos = $this->Usuario->pegaUsuario($nome);

		$mensagem = [];

		$this->form_validation->set_rules('tipo', 		'Tipo', 			'trim|required');
		$this->form_validation->set_rules('perDes', 	'Desconto', 		'trim|required');
		$this->form_validation->set_rules('perAcr', 	'Acressimo', 		'trim|required');
		$this->form_validation->set_rules('datCad', 	'Data de cadastro', 'trim|required');
		$this->form_validation->set_rules('idUsu',		'ID do Usuário', 	'trim|required');
		
		$tipo 	= $this->input->post('tipo');
		$perDes = $this->input->post('perDes');
		$perAcr = $this->input->post('perAcr');
		$datCad = implode('-', array_reverse(explode('/', $this->input->post('datCad'))));
		$idUsu 	= $this->input->post('idUsu');

		if( $this->form_validation->run() == FALSE ){
			if( validation_errors() ){
				$mensagem[0] = '<strong>Opa!</strong> Algo de errado aconteceu! ' . validation_errors();
				$mensagem[1] = 'alert-danger';
			}
		}else{
			$registra = array(
				"tipo" 		=> $tipo,
				"perdes"	=> $perDes,
				"perAcr"	=> $perAcr,
				"datCad"	=> $datCad,
				"usuCad"	=> $idUsu,
			);
			$this->Funcoes->insert($registra, 'tipser' );
			$mensagem[0] = '<strong>Parabéns!</strong> Você cadastrou um novo tipo de serviço!';
			$mensagem[1] = 'alert-success';
		}

		$dados = array(
			'pasta'		=>	'tiposervico',
			'tela'		=>	'novo',
			'titulo'	=>	'Cadastrar tipo de Serviço',
			'infos'		=>	$pegaInfos,
			'mensagem'	=> 	$mensagem,
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

		$mensagem = [];

		$idEditar = $this->uri->segment(3);	

		$this->form_validation->set_rules('tipo', 		'Tipo', 			'trim|required');
		$this->form_validation->set_rules('perDes', 	'Desconto', 		'trim|required');
		$this->form_validation->set_rules('perAcr', 	'Acressimo', 		'trim|required');
		
		$id 	= $this->input->post('id');
		$tipo 	= $this->input->post('tipo');
		$perDes = $this->input->post('perDes');
		$perAcr = $this->input->post('perAcr');

		if( $this->form_validation->run() == FALSE ){
			if( validation_errors() ){
				$mensagem[0] = '<strong>Opa!</strong> Algo de errado aconteceu! ' . validation_errors();
				$mensagem[1] = 'alert-danger';
			}
		}else{
			$idTipSer = array(
				"id"		=> $id,
			);
			$registra = array(
				"tipo" 		=> $tipo,
				"perdes"	=> $perDes,
				"perAcr"	=> $perAcr,
			);
			$this->Funcoes->update($registra, 'tipser', $idTipSer );
			$mensagem[0] = '<strong>Parabéns!</strong> Você cadastrou um novo tipo de serviço!';
			$mensagem[1] = 'alert-success';
		}

		$dados = array(
			'pasta'		=>	'tiposervico',
			'tela'		=>	'editar',
			'titulo'	=>	'Cadastrar tipo de Serviço',
			'infos'		=>	$pegaInfos,
			'mensagem'	=> 	$mensagem,
			'editar'	=> 	$this->Funcoes->getById($idEditar, 'tipser'),
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
			'pasta'		=>	'tiposervico',
			'tela'		=>	'excluir',
			'titulo'	=>	'Excluir Tipo de Serviço',
			'infos'		=>	$pegaInfos,
			'idExcluir'	=> $idExcluir,

		);

		$this->load->view('tela',$dados);

	}




}