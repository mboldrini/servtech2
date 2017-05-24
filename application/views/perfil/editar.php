<div class="row">

<div class="col-md-4">

<?php echo form_open(); ?>

  <div class="form-group">
    <label for="exampleInputEmail1">Nome:</label>
    <?php echo form_input(
      'nome', 
      $infos[0]->nome ,
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
      $infos[0]->sobrenome ,
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
      $infos[0]->email ,
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
      $infos[0]->telefone ,
      array( 'class'		=>	'form-control col-md-3',
             'placeholder'	=>	'Telefone',
            ) 
        ); 
    ?>
  </div>


  <div class="form-group">
    <label for="exampleInputEmail1">Descrição:</label>
    <?php echo form_input(
      'descricao', 
      $infos[0]->descricao ,
      array( 'class'		=>	'form-control col-md-3',
             'placeholder'	=>	'Descrição',
            ) 
        ); 
    ?>
  </div>


  <div class="form-group">
    <label for="exampleInputEmail1">Cor do Tema:</label>
    <!-- <select class="form-control" id="cor" name="cor">
		<option value="skin-blue">Azul</option>
  		<option value="skin-purple">Roxo</option>
  		<option value="skin-yellow">Amarelo</option>
  		<option value="skin-green">Verde</option>
  		<option value="skin-red">Vermelho</option>
	</select> -->
	

	<?php 
		$cores = array(
			"Vermelho"	=>	"skin-red", 
			"Azul"		=>	"skin-blue",
			"Verde"		=>	"skin-green",
			"Amarelo"	=>	"skin-yellow",
			"Roxo"		=>	"skin-purple",
		);
	?>	
	<select name="cor" id="cor" class="form-control">
		<?php foreach( $cores as $key => $cor ): ?>
			<?php if( $infos[0]->cor == $cor ){ ?>
				<option value="<?php echo $cor; ?>" selected><?php echo $key; ?></option>
			<?php }else{ ?>
				<option value="<?php echo $cor; ?>"><?php echo $key; ?></option>
			<?php } ?>
		<?php endforeach; ?>
	</select>


  </div>


  <button type="submit" class="btn btn-primary">Editar</button>

<?php form_close(); ?>

	</div>
</div><!--row-->
