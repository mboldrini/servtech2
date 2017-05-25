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

  
  <div class="form-group">
    <label for="exampleInputEmail1">Usuário:</label>
    <?php echo form_input(
      'username', 
      '',
      array( 'autofocus ' =>  'autofocus',
             'class'    =>  'form-control col-md-3',
             'required'   =>  'required',
             'placeholder'  =>  'Usuario',
            ) 
        ); 
    ?>
  </div>

  <div class="form-group">
    <label for="exampleInputEmail1">Senha:</label>
    <?php echo form_input(
      'password', 
      '',
      array( 'class'    =>  'form-control col-md-3',
             'required'   =>  'required',
             'placeholder'  =>  'Senha',
            ) 
        ); 
    ?>
  </div>

  <div class="form-group">
    <label for="exampleInputEmail1">Perfil:</label>
    <?php echo form_input(
      'perfil', 
      'administrador',
      array( 'readonly ' =>  'readonly',
             'class'    =>  'form-control col-md-3',
             'required'   =>  'required',
             'placeholder'  =>  'Perfil',
            ) 
        ); 
    ?>
  </div>

  <div class="form-group">
    <label for="exampleInputEmail1">Nome:</label>
    <?php echo form_input(
      'nome', 
      '' ,
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
      '',
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
      '',
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
      '' ,
      array( 'class'		=>	'form-control',
             'placeholder'	=>	'Telefone',
            ) 
        ); 
    ?>
  </div>


  <div class="form-group">
    <label for="exampleInputEmail1">Descrição/Cargo:</label>
    <?php echo form_input(
      'descricao', 
      '',
      array( 'class'		=>	'form-control col-md-3',
             'placeholder'	=>	'Descrição/Cargo',
            ) 
        ); 
    ?>
  </div>

  <br><br>

	<button type="submit" class="btn btn-primary">Cadastrar</button>

<?php form_close(); ?>

	</div><!--col-md-4-->
</div><!--row-->
