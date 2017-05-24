<?php  if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Funcoes extends CI_Model {
	
	public function __construct() {
		parent::__construct();
	}
	
	public function update($dados, $tabela, $id){

			$this->db->where($id);
			/* atualiza o banco de dados aluno com os $dados usando a $condição */
			$this->db->update($tabela ,$dados);
			/* ao terminar de editar o registro vai para a tela de alunos cadastrados */
			return $this->db->affected_rows();
			
	}//update



}