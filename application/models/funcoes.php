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


	// funcao publica para exclusao de um id de qualquer tabela
	public function delete($id, $tabela, $redireciona){

			// $id 			=> é o id a ser excluido
			// $tabela 		=> qual tabela será afetada 
			// $redireciona => vai redirecionar pra onde depois de executar tudo

			$this->db->delete($tabela,$id);

			redirect( base_url() . $redireciona );
			
	}// funcao do_delete


	public function getWhere( $coluna, $tabela ){
		
		$this->db->select("*");
   		$this->db->from( $tabela );
    	$this->db->where( $coluna );
   		$query = $this->db->get();        
   		return $query->result();
		
	}

	public function countAll( $tabela ){
		
		$this->db->select("*");
   		$this->db->from( $tabela );
   		$query = $this->db->get();        
   		return $query->num_rows();
		
	}


	public function getValores( $tabela ){
		
		$this->db->select("*");
   		$this->db->from( $tabela );
    	$this->db->where( "fimVal = '0000-00-00' " );
   		$query = $this->db->get();        
   		return $query->result();
		
	}

	public function countWhere( $tabela, $onde ){
		
		$this->db->select("*");
   		$this->db->from( $tabela );
    	$this->db->where( $onde );
    	$this->db->where( " fimVal = '0000-00-00' " );
   		$query = $this->db->get();        
   		return $query->num_rows();
		
	}



}