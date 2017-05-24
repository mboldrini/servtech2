<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Contas extends CI_Controller {

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
			'pasta'		=> 'usuario',
			'tela' 		=> 'listar',
			'titulo' 	=> 'Usuários Cadastrados',
			'descricao' => ' - Lista com todos os usuários cadastrados no sistema',
			'infos' 	=> $pegaInfos,
			'contas' 	=> $this->funcoes->getAll('users'),
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

		$idEditar = $this->uri->segment(3);

		$dados = array(
			'pasta'		=> 'usuario',
			'tela' 		=> 'editar',
			'titulo' 	=> 'Editar Registro de Usuário',
			'infos' 	=> $pegaInfos,
			'contas' 	=> $this->funcoes->getAll('users'),
			'usuario'	=> $this->funcoes->getById($idEditar),
		);

		$this->load->view('tela',$dados);

	}//index




}