<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Tiposervico extends CI_Controller {

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
			'pasta'		=>	'tiposervico',
			'tela'		=>	'listar',
			'titulo'	=>	'Tipos de Serviço',
			'infos'		=>	$pegaInfos,
			'servicos' 	=> 	$this->funcoes->getAll('tipser'),
			'users'		=> 	$this->funcoes->getAll('users'),
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

		$this->form_validation->set_rules('tipo', 		'Tipo', 			'trim|required');
		$this->form_validation->set_rules('perDes', 	'Desconto', 		'trim|required');
		$this->form_validation->set_rules('perAcr', 	'Acressimo', 		'trim|required');
		$this->form_validation->set_rules('datCad', 	'Data de cadastro', 'trim|required');
		$this->form_validation->set_rules('idUsu',		'ID do Usuário', 	'trim|required');
		
		$tipo 	= $this->input->post('tipo');
		$perDes = $this->input->post('perDes');
		$perAcr = $this->input->post('perAcr');
		$datCad = $this->input->post('datCad');
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
			$this->funcoes->insert($registra, 'tipser' );
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
			$this->funcoes->update($registra, 'tipser', $idTipSer );
			$mensagem[0] = '<strong>Parabéns!</strong> Você cadastrou um novo tipo de serviço!';
			$mensagem[1] = 'alert-success';
		}

		$dados = array(
			'pasta'		=>	'tiposervico',
			'tela'		=>	'editar',
			'titulo'	=>	'Cadastrar tipo de Serviço',
			'infos'		=>	$pegaInfos,
			'mensagem'	=> 	$mensagem,
			'editar'	=> 	$this->funcoes->getById($idEditar, 'tipser'),
		);

		$this->load->view('tela',$dados);

	}




}