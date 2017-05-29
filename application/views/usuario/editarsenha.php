<div class="container-fluid"><div class="row">
	
<div class="col-md-4">

<?php echo form_open(); ?>

<?php 
  if( isset($mensagem) && $mensagem != NULL ){
    echo '<div class="alert '.$mensagem[1].' alert-dismissible" role="alert">
  <button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button>
  '.$mensagem[0].'</div>';
  }
?>

  

  <div class="form-group">
    <label for="exampleInputEmail1">Usuário:</label>
    <?php echo form_input(
      'id', 
      $editar->id,
      array( 'readonly ' =>  'readonly',
             'class'    =>  'form-control col-md-3',
             'required'   =>  'required',
             'placeholder'  =>  'Usuario',
            ) 
        ); 
    ?>
  </div>

  <div class="form-group">
    <label for="exampleInputEmail1">Nome:</label>
    <?php echo form_input(
      'nome', 
      $editar->nome,
      array( 'readonly ' =>  'readonly',
             'class'    =>  'form-control col-md-3',
             'required'   =>  'required',
            ) 
        ); 
    ?>
  </div>

  <div class="form-group">
    <label for="exampleInputEmail1">Nova senha:</label>
    <?php echo form_input(
      'password', 
       '',
      array( 'class'    =>  'form-control col-md-3',
             'required'   =>  'required',
            ) 
        ); 
    ?>
  </div>


  <br><br>

	<button type="submit" class="btn btn-primary bg-purple">Editar Senha</button>

<?php form_close(); ?>


 </div><!--col-md-4-->
</div></div><!--coisaToda-->