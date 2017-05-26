<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Servico extends CI_Controller {

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
			'pasta'		=>	'servico',
			'tela'		=>	'listar',
			'titulo'	=>	'Serviços Cadastrados',
			'infos'		=>	$pegaInfos,
			'servicos'	=>	$this->funcoes->getAll('servico'),
			'clientes'	=>  $this->funcoes->getAll('cliente'),
			'tipoServico'=> $this->funcoes->getAll('tipSer'),
			'tecnicos'	=>  $this->funcoes->getAll('users'),

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
		$idCliente = $this->uri->segment(3);	

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
				"preCon"		=> $this->input->post('preCon'),
				"status"		=> $this->input->post('status'),
				"solucao"		=> $this->input->post('solucao'),
				"observacao"	=> $this->input->post('observacao'),
				"datCon"		=> $this->input->post('datCon'),
				"tecRes"		=> $this->input->post('tecRes'),
				"acrescimo"		=> $this->input->post('acrescimo'),
				"desconto"		=> $this->input->post('desconto'),
				"datCad"		=> $this->input->post('datCad'),
				"usuCad"		=> $this->input->post('usuCad'),
			);
			$this->funcoes->insert($registra, 'servico' );
			$mensagem[0] = '<strong>Parabéns!</strong> Você cadastrou um novo serviço!';
			$mensagem[1] = 'alert-success';
		}	


		$dados = array(
			'pasta'		=>	'servico',
			'tela'		=>	'novo',
			'titulo'	=>	'Cadastrar Novo Serviço',
			'infos'		=>	$pegaInfos,
			'mensagem'	=>	$mensagem,
			'cliente'	=>  $this->funcoes->getById($idCliente, 'cliente'),
			'tiposervico'=> $this->funcoes->getAll('tipser'),
			'usuarios'	=>	$this->funcoes->getAll('users'),
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

		$idEditar = $this->uri->segment(3);
		$mensagem = [];

		$dados = array(
			'pasta'		=>	'servico',
			'tela'		=>	'editar',
			'titulo'	=>	'Editar Serviço Cadastrado',
			'infos'		=>	$pegaInfos,
			'mensagem'	=> 	$mensagem,
			'editar'	=> 	$this->funcoes->getById($idEditar, 'servico'),
			'cliente'	=>  $this->funcoes->getById($idCliente, 'cliente'),
			'tiposervico'=> $this->funcoes->getAll('tipser'),
			'usuarios'	=>	$this->funcoes->getAll('users'),
		);

		$this->load->view('tela',$dados);

	}


}