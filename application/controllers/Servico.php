<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Servico extends CI_Controller {

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
			'pasta'			=>	'servico',
			'tela'			=>	'listar',
			'titulo'		=>	'Serviços Cadastrados',
			'infos'			=>	$pegaInfos,
			'servicos'		=>	$this->Funcoes->getAll('servico'),
			'clientes'		=>  $this->Funcoes->getAll('cliente'),
			'valorservico'	=> 	$this->Funcoes->getAll('valser'),
			'tiposervico'	=>	$this->Funcoes->getAll('tipser'),
			'tecnicos'		=>  $this->Funcoes->getAll('users'),

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
		$idCliente = $this->uri->segment(3);	

		$this->form_validation->set_rules('codCli',		'Código Cliente',		'trim|required');
		$this->form_validation->set_rules('tipo',		'Tipo de Serviço',		'trim|required');
		$this->form_validation->set_rules('solicitado',	'solicitado',			'trim|required');
		$this->form_validation->set_rules('detectado',	'detectado',			'trim');
		$this->form_validation->set_rules('preCon',		'previsao',				'trim|required');
		$this->form_validation->set_rules('status',		'status',				'trim|required');
		$this->form_validation->set_rules('solucao',	'solucao',				'trim');
		$this->form_validation->set_rules('observacao',	'observacao',			'trim');
		$this->form_validation->set_rules('datCon',		'data de conclusão',	'trim');
		$this->form_validation->set_rules('tecRes',		'Técnico Responsável',	'trim');
		$this->form_validation->set_rules('acrescimo',	'acrescimo',			'trim');
		$this->form_validation->set_rules('desconto',	'desconto',				'trim');
		$this->form_validation->set_rules('datCad',		'data de cadastro',		'trim');
		$this->form_validation->set_rules('usuCad',		'usuário de cadastro',	'trim');

		if( $this->form_validation->run() == FALSE ){
			if( validation_errors() ){
				$mensagem[0] = '<strong>Opa!</strong> Algo de errado aconteceu! ' . validation_errors();
				$mensagem[1] = 'alert-danger';
			}
		}else{
			$registra = array(
				"codCli"		=> $this->input->post('codCli'),
				"tipo"			=> $this->input->post('tipo'),
				"solicitado"	=> $this->input->post('solicitado'),
				"detectado"		=> $this->input->post('detectado'),
				"preCon"		=> implode('-', array_reverse(explode('/', $this->input->post('preCon')))),
				"status"		=> $this->input->post('status'),
				"solucao"		=> $this->input->post('solucao'),
				"observacao"	=> $this->input->post('observacao'),
				"datCon"		=> implode('-', array_reverse(explode('/', $this->input->post('datCon')))),
				"tecRes"		=> $this->input->post('tecRes'),
				"acrescimo"		=> $this->input->post('acrescimo'),
				"desconto"		=> $this->input->post('desconto'),
				"datCad"		=> implode('-', array_reverse(explode('/', $this->input->post('datCad')))),
				"usuCad"		=> $this->input->post('usuCad'),
			);
			$this->Funcoes->insert($registra, 'servico' );
			$mensagem[0] = '<strong>Parabéns!</strong> Você cadastrou um novo serviço!';
			$mensagem[1] = 'alert-success';
		}	

		$dados = array(
			'pasta'			=>	'servico',
			'tela'			=>	'novo',
			'titulo'		=>	'Cadastrar Novo Serviço',
			'infos'			=>	$pegaInfos,
			'mensagem'		=>	$mensagem,
			'cliente'		=>  $this->Funcoes->getById($idCliente, 'cliente'),
			'tiposervico'	=> 	$this->Funcoes->getAll('tipser'),
			'valorservico'	=> 	$this->Funcoes->getValores('valser'),
			'usuarios'		=>	$this->Funcoes->getAll('users'),
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

		$this->form_validation->set_rules('idSer',		'ID do Serviço',		'trim|required');
		$this->form_validation->set_rules('codCli',		'Código Cliente',		'trim|required');
		$this->form_validation->set_rules('tipo',		'titulo',				'trim|required');
		$this->form_validation->set_rules('solicitado',	'solicitado',			'trim|required');
		$this->form_validation->set_rules('detectado',	'detectado',			'trim');
		$this->form_validation->set_rules('preCon',		'previsao',				'trim|required');
		$this->form_validation->set_rules('status',		'status',				'trim|required');
		$this->form_validation->set_rules('solucao',	'solucao',				'trim');
		$this->form_validation->set_rules('observacao',	'observacao',			'trim');
		$this->form_validation->set_rules('datCon',		'data de conclusão',	'trim');
		$this->form_validation->set_rules('tecRes',		'Técnico Responsável',	'trim');
		$this->form_validation->set_rules('acrescimo',	'acrescimo',			'trim');
		$this->form_validation->set_rules('desconto',	'desconto',				'trim');

		if( $this->form_validation->run() == FALSE ){
			if( validation_errors() ){
				$mensagem[0] = '<strong>Opa!</strong> Algo de errado aconteceu! ' . validation_errors();
				$mensagem[1] = 'alert-danger';
			}
		}else{
			$idTipSer = array(
				"id"		=> $this->input->post('idSer'),
			);
			$registra = array(
				"codCli"		=> $this->input->post('codCli'),
				"tipo"			=> $this->input->post('tipo'),
				"solicitado"	=> $this->input->post('solicitado'),
				"detectado"		=> $this->input->post('detectado'),
				"preCon"		=> implode('-', array_reverse(explode('/', $this->input->post('preCon')))),
				"status"		=> $this->input->post('status'),
				"solucao"		=> $this->input->post('solucao'),
				"observacao"	=> $this->input->post('observacao'),
				"datCon"		=> implode('-', array_reverse(explode('/', $this->input->post('datCon')))),
				"tecRes"		=> $this->input->post('tecRes'),
				"acrescimo"		=> $this->input->post('acrescimo'),
				"desconto"		=> $this->input->post('desconto'),
			);
			$this->Funcoes->update($registra, 'servico', $idTipSer );
			$mensagem[0] = '<strong>Parabéns!</strong> Você editou um servico!';
			$mensagem[1] = 'alert-success';
		}	

		$dados = array(
			'pasta'		=>	'servico',
			'tela'		=>	'editar',
			'titulo'	=>	'Editar Serviço Cadastrado',
			'infos'		=>	$pegaInfos,
			'mensagem'	=> 	$mensagem,
			'editar'	=> 	$this->Funcoes->getById($idEditar, 'servico'),
			'clientes'	=>  $this->Funcoes->getAll('cliente'),
			'tiposervico'	=> 	$this->Funcoes->getAll('tipser'),
			'valorservico'	=> 	$this->Funcoes->getAll('valser'),
			'usuarios'	=>	$this->Funcoes->getAll('users'),
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
			'pasta'		=>	'servico',
			'tela'		=>	'excluir',
			'titulo'	=>	'Excluir Serviço',
			'infos'		=>	$pegaInfos,
			'idExcluir'	=> $idExcluir,
		);

		$this->load->view('tela',$dados);

	}









}