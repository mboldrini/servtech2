<?php 
  // pega o valor que veio na url, no caso o terceiro valor
  $id = $this->uri->segment(3);
  // condicao a ser passada pra tabela de exclusao
  $cond = array('id'=> $id);
  // qual tabela vai ser excluido o id
  $tabela = 'valser';
  // vai redirecionar pra onde
  $redireciona = 'valorservico';
  
  $cliente = $this->funcoes->delete($cond, $tabela, $redireciona);

?>
