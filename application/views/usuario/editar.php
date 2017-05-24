<div class="row">

<div class="col-md-4">

<?php echo form_open(); ?>

<?php 
  if( $mensagem ){
    echo '<div class="alert '.$mensagem[1].' alert-dismissible" role="alert">
  <button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button>
  '.$mensagem[0].'</div>';
  }
?>

  <?php form_hidden('id', $infos[0]->id ); ?>

  <div class="form-group">
    <label for="exampleInputEmail1">ID:</label>
    <?php echo form_input(
      'id', 
      $editar->id ,
      array( 'class'        =>  'form-control col-md-3',
             'required'     =>  'required',
             'placeholder'  =>  'id',
             'readonly'     => 'readonly',
            ) 
        ); 
    ?>
  </div>

  
  <div class="form-group">
    <label for="exampleInputEmail1">Usuário:</label>
    <?php echo form_input(
      'username', 
      $editar->username,
      array( 'autofocus ' =>  'autofocus',
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
      $editar->nome ,
      array( 'autofocus '	=>	'autofocus',
             'class'		=>	'form-control col-md-3',
             'required'		=>	'required',
             'placeholder'	=>	'Nome',
            ) 
        ); 
    ?>
  </div>

	
  <div class="form-group">
    <label for="exampleInputEmail1">Sobrenome:</label>
    <?php echo form_input(
      'sobrenome', 
      $editar->sobrenome ,
      array( 'class'		=>	'form-control col-md-3',
             'required'		=>	'required',
             'placeholder'	=>	'Sobrenome',
            ) 
        ); 
    ?>
  </div>


  <div class="form-group">
    <label for="exampleInputEmail1">Email:</label>
    <?php echo form_input(
      'email', 
      $editar->email ,
      array( 'class'		=>	'form-control col-md-3',
             'placeholder'	=>	'Email',
            ) 
        ); 
    ?>
  </div>


  <div class="form-group">
    <label for="exampleInputEmail1">Telefone:</label>
    <?php echo form_input(
      'telefone', 
      $editar->telefone ,
      array( 'class'		=>	'form-control',
             'placeholder'	=>	'Telefone',
            ) 
        ); 
    ?>
  </div>


  <div class="form-group">
    <label for="exampleInputEmail1">Descrição:</label>
    <?php echo form_input(
      'descricao', 
      $editar->descricao ,
      array( 'class'		=>	'form-control col-md-3',
             'placeholder'	=>	'Descrição',
            ) 
        ); 
    ?>
  </div>

  <br><br>

	<button type="submit" class="btn btn-primary">Editar</button>

<?php form_close(); ?>

	</div><!--col-md-4-->
</div><!--row-->
