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




}