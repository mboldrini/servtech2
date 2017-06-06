<?php 
  // pega o valor que veio na url, no caso o terceiro valor
  $id = $this->uri->segment(3);
  // condicao a ser passada pra tabela de exclusao
  $cond = array('id'=> $id);
  // qual tabela vai ser excluido o id
  $tabela = 'aviso';
  // vai redirecionar pra onde
  $redireciona = 'mensagens';
  
  $cliente = $this->Funcoes->delete($cond, $tabela, $redireciona);

?>
