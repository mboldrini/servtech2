<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Mensagens extends CI_Controller {

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
			'pasta'		=>	'mensagens',
			'tela'		=>	'listar',
			'titulo'	=>	'Mensagens de Aviso',
			'descricao' =>  'Todas as mensagens de aviso cadastradas no sistema',
			'infos'		=>	$pegaInfos,
			'mensagens'	=>	$this->funcoes->getAll('aviso'),
			'usuarios'	=> 	$this->funcoes->getAll('users'),
		);

		$this->load->view('tela',$dados);

	}//index


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

		#validacao do formulario
		$this->form_validation->set_rules('titulo', 	'titulo',	'trim|required');
		$this->form_validation->set_rules('aviso', 		'mensagem', 'trim|required');
		$this->form_validation->set_rules('cor',		'tipo', 	'trim|required');
		$this->form_validation->set_rules('ativo', 		'status',	'trim|required');
		$this->form_validation->set_rules('idUsuario', 	'Autor', 	'trim|required');
		
		$titulo 	= $this->input->post('titulo');
		$aviso 		= $this->input->post('aviso');
		$cor 		= $this->input->post('cor');
		$ativo 		= $this->input->post('ativo');
		$idUsuario 	= $this->input->post('idUsuario');

		if( $this->form_validation->run() == FALSE ){
			if( validation_errors() ){
				$mensagem[0] = '<strong>Opa!</strong> Algo de errado aconteceu! ' . validation_errors();
				$mensagem[1] = 'alert-danger';
			}
		}else{
			$registra = array(
				"titulo" 	=> $titulo,
				"aviso" 	=> $aviso,
				"cor"		=> $cor,
				"ativo"		=> $ativo,
				"idUsuario"	=> $idUsuario,
			);
			$this->funcoes->insert($registra, 'aviso' );
			$mensagem[0] = '<strong>Parabéns!</strong> Você cadastrou um aviso/mensagem!';
			$mensagem[1] = 'alert-success';
		}

		$dados = array(
			'pasta'		=>	'mensagens',
			'tela'		=>	'novo',
			'titulo'	=>	'Cadastrar nova mensagem',
			'descricao'	=>	'As mensagens cadastradas aqui, vão aparecer no painel principal',
			'infos'		=>	$pegaInfos,
			'mensagem'	=>	$mensagem,
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

		#validacao do formulario
		$this->form_validation->set_rules('titulo', 	'titulo',	'trim|required');
		$this->form_validation->set_rules('aviso', 		'mensagem', 'trim|required');
		$this->form_validation->set_rules('cor',		'tipo', 	'trim|required');
		$this->form_validation->set_rules('ativo', 		'status',	'trim|required');
		
		$id 		= $this->input->post('id');
		$titulo 	= $this->input->post('titulo');
		$aviso 		= $this->input->post('aviso');
		$cor 		= $this->input->post('cor');
		$ativo 		= $this->input->post('ativo');

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
				"titulo" 	=> $titulo,
				"aviso" 	=> $aviso,
				"cor"		=> $cor,
				"ativo"		=> $ativo,
			);
			$this->funcoes->update($registra, 'aviso', $idMensagem );
			$mensagem[0] = '<strong>Parabéns!</strong> Você editou um aviso/mensagem!';
			$mensagem[1] = 'alert-success';
		}

		$dados = array(
			'pasta'		=>	'mensagens',
			'tela'		=>	'editar',
			'titulo'	=>	'Editar mensagem/aviso',
			'infos'		=>	$pegaInfos,
			'editar'	=> 	$this->funcoes->getById($idEditar, 'aviso'),
			'mensagem'	=> 	$mensagem,
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
			'pasta'		=>	'mensagens',
			'tela'		=>	'excluir',
			'titulo'	=>	'Excluir mensagem/aviso',
			'infos'		=>	$pegaInfos,
			'idExcluir'	=> $idExcluir,

		);

		$this->load->view('tela',$dados);

	}




}