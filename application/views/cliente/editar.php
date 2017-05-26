<div class="row">

<div class="col-md-4">

<?php echo form_open(); ?>

<?php 
  if( isset( $mensagem ) && $mensagem != null ){
    echo '<div class="alert '.$mensagem[1].' alert-dismissible" role="alert">
  <button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button>
  '.$mensagem[0].'</div>';
  }
?>
	
	<div class="form-group">
	    <label for="exampleInputEmail1">ID:</label>
	    <?php echo form_input(
	      'id', 
	      $editar->id,
	      array( 'class'    =>  'form-control col-md-3',
	             'required'   =>  'required',
	             'placeholder'  =>  'ID',
	             'readonly' => 'readonly',
	            ) 
	        ); 
	    ?>
  	</div>
  
  	<div class="form-group">
	    <label for="exampleInputEmail1">Nome:</label>
	    <?php echo form_input(
	      'nome', 
	      $editar->nome,
	      array( 'autofocus ' =>  'autofocus',
	             'class'    =>  'form-control col-md-3',
	             'required'   =>  'required',
	             'placeholder'  =>  'Nome',
	            ) 
	        ); 
	    ?>
  	</div>

  	<div class="form-group">
		<label for="Status">Tipo:</label>
		<select name="tipo" id="tipo" class="form-control">	
			<?php if( $editar->tipo == 'F' || $editar->tipo == 'f' ){ ?>
				<option value="F" selected>P. Física</option>
				<option value="J">P. Jurídica</option>
			<?php }else{ ?>
				<option value="J" selected>P. Jurídica</option>
				<option value="F">P. Física</option>
			<?php } ?>
		</select>
	</div>

  	<div class="form-group">
	    <label for="exampleInputEmail1">Registro (CPF/CNPJ):</label>
	    <?php echo form_input(
	      'registro', 
	      $editar->registro,
	      array( 'class'		=>	'form-control col-md-3',
	             'required'		=>	'required',
	             'placeholder'	=>	'CPF/CNPJ',
	            ) 
	        ); 
	    ?>
  	</div>

  	<div class="form-group">
	    <label for="exampleInputEmail1">Data de Nascimento:</label>
	    <?php echo form_input(
	      'datNas', 
	      $editar->datNas ,
	      array( 'class'		=>	'form-control col-md-3',
	             'placeholder'	=>	'Data de Nascimento',
	            ) 
	        ); 
	    ?>
  	</div>

  	<div class="form-group">
	    <label for="exampleInputEmail1">Celular:</label>
	    <?php echo form_input(
	      'celular', 
	      $editar->celular ,
	      array( 'class'		=>	'form-control col-md-3',
	             'placeholder'	=>	'Celular',
	            ) 
	        ); 
	    ?>
  	</div>
	
	<div class="form-group">
	    <label for="exampleInputEmail1">Telefone:</label>
	    <?php echo form_input(
	      'telefone', 
	      $editar->telefone ,
	      array( 'class'		=>	'form-control col-md-3',
	             'placeholder'	=>	'Telefone',
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
	    <label for="exampleInputEmail1">Endereço:</label>
	    <?php echo form_input(
	      'endereco', 
	      $editar->endereco ,
	      array( 'class'		=>	'form-control col-md-3',
	             'placeholder'	=>	'Endereço',
	            ) 
	        ); 
	    ?>
  	</div>

  	<div class="form-group">
	    <label for="exampleInputEmail1">Observações:</label>
	    <?php echo form_textarea(
	      'observacoes', 
	      $editar->observacoes,
	      array( 'class'    =>  'form-control col-md-3',
	             'placeholder'  =>  'Observações',
	            ) 
	        ); 
	    ?>
  	</div>


	<button type="submit" class="btn btn-primary">Editar</button>

<?php form_close(); ?>

	</div><!--col-md-4-->
</div><!--row-->
