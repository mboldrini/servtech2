<?php 
  // pega o valor que veio na url, no caso o terceiro valor
  $id = $this->uri->segment(3);
  // condicao a ser passada pra tabela de exclusao
  $cond = array('id'=> $id);
  // qual tabela vai ser excluido o id
  $tabela = 'cliente';
  // vai redirecionar pra onde
  $redireciona = 'cliente';
  
  $cliente = $this->funcoes->delete($cond, $tabela, $redireciona);

?>
