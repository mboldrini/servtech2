<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Ordemservico extends CI_Controller {

	public function __construct() {
		parent::__construct();
		$this->load->library(array('session'));

		$this->load->helper('form', 'funcoes_helper');
		#pegar as infos dos usuarios
		$this->load->model('Usuario');

		$this->load->model('Funcoes');

		$this->load->library('dompdf_gen');

		$this->load->library('M_pdf');


	}
	

	public function exibe()	{
		# verificação de usuario logado, e se sim, tem que ser no perfil de administrador
		if($this->session->userdata('perfil') == FALSE || $this->session->userdata('perfil') != 'administrador'){
			redirect(base_url().'login');
		}
		# pega o nome do usuario que tem na session e passa >
		$nome = $this->session->userdata('username');
		# pega o nome da variavel aqui de cima, e faz uma pesquisa completa no banco de dados 'user'
		$pegaInfos = $this->Usuario->pegaUsuario($nome);
		$idEditar = $this->uri->segment(3);

		$dados = array(
			'pasta'		=>	'ordemservico',
			'tela'		=>	'exibe',
			'titulo'	=>	'O.S.',
			'descricao'	=> 	'Ordem de Serviço',
			'infos'		=>	$pegaInfos,
			'ordem'		=>  $this->Funcoes->getById($idEditar, 'servico'),
			'clientes'	=>	$this->Funcoes->getAll('cliente'),
			'valorservico' =>$this->Funcoes->getAll('valser'),
		);
		$this->load->view('tela',$dados);
	}

	public function imprimir()	{

		$this->load->library('dompdf_gen');



		# verificação de usuario logado, e se sim, tem que ser no perfil de administrador
		if($this->session->userdata('perfil') == FALSE || $this->session->userdata('perfil') != 'administrador'){
			redirect(base_url().'login');
		}
		# pega o nome do usuario que tem na session e passa >
		$nome = $this->session->userdata('username');
		# pega o nome da variavel aqui de cima, e faz uma pesquisa completa no banco de dados 'user'
		$pegaInfos = $this->Usuario->pegaUsuario($nome);
		$idEditar = $this->uri->segment(3);

		$dados = array(
			// 'pasta'		=>	'ordemservico',
			// 'tela'		=>	'imprimir',
			'titulo'	=>	'O.S.',
			'descricao'	=> 	'Ordem de Serviço',
			'infos'		=>	$pegaInfos,
			'ordem'		=>  $this->Funcoes->getById($idEditar, 'servico'),
			'clientes'	=>	$this->Funcoes->getAll('cliente'),
			'valorservico' =>$this->Funcoes->getAll('valser'),
		);
		$this->load->view('imprimir',$dados);


		$this->load->library('M_pdf');

	    $html = $this->load->view('imprimir',$dados, true);
	    $this->m_pdf->pdf->WriteHTML($html, 0, true, true);

	    //download it.
	    $pdfFilePath = "os_". time() .".pdf";
	    $this->m_pdf->pdf->Output($pdfFilePath, "D");   




	}




}