<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Painel extends CI_Controller {

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

		$avisoAtivo = array("ativo"=>'1');

		$dados = array(
			'pasta'		=> 'base',
			'tela' 		=> 'content',
			'titulo' 	=> 'Painel Administrativo',
			'descricao' => ' - Painel Geral do Sistema',
			'infos' 	=> $pegaInfos,
			'mensagens'	=> $this->funcoes->getWhere($avisoAtivo, 'aviso'),
		);

		$this->load->view('tela',$dados);

	}//index


}