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


	public function getAll($tabela){
		$query = $this->db->get($tabela);
		if( $query->num_rows() > 0){
			return $query->result();
		}
	}


	public function getById( $id, $tabela ){
		if( $id != NULL ){
			/* seleciona no DB onde o campo ID == $id */
			$this->db->where('id',$id);
			
			/* mostra apenas 1 resultado, e TEM q ser 1 resultado pois ID é unico */
			$this->db->limit(1);
			
			/* pega a tabela aluno */
			return $this->db->get($tabela)->row();
		}else{
			return FALSE;			
		}
	}

	public function insert($dados, $tabela){
		if($dados != NULL){
			$this->db->insert($tabela, $dados );			
		}
	}


}