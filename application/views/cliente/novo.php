<div class="row">


<?php echo form_open(); ?>

<div class="col-md-8">
	<?php 
		if( isset( $mensagem ) && $mensagem != null ){
	    	echo '<div class="alert '.$mensagem[1].' alert-dismissible" role="alert">
	  		<button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button>
	  		'.$mensagem[0].'</div>';
	  	}
	?>
</div>
	
	<div class="col-md-5">
		<label for="exampleInputEmail1">Nome:</label>
	    <?php echo form_input(
	      'nome', 
	      '',
	      array( 'autofocus ' =>  'autofocus',
	             'class'    =>  'form-control col-md-3',
	             'required'   =>  'required',
	             'placeholder'  =>  'Nome',
	            ) 
	        ); 
	    ?>
	</div>
  
  	<div class="col-md-2">
  		<label for="Status">Tipo:</label>
		<?php 
			$status = array(
				"P. Física"		=> 'F',
				"P. Jurídica"	=> 'J',
			);
		?>
		<select name="tipo" id="tipo" class="form-control">
			<?php foreach( $status as $key => $stat ): ?>
				<option value="<?php echo $stat; ?>"><?php echo $key; ?></option>
			<?php endforeach; ?>
		</select>
  	</div>


	<div class="col-md-4">
		<label for="exampleInputEmail1">Registro (CPF/CNPJ):</label>
	    <?php echo form_input(
	      'registro', 
	      '' ,
	      array( 'class'		=>	'form-control col-md-3',
	             'placeholder'	=>	'CPF/CNPJ',	         
	            ) 
	        ); 
	    ?>
	</div>

	<div class="col-md-2">
		<label for="exampleInputEmail1">Data de Nascimento:</label>
	    <?php echo form_input(
	      'datNas', 
	      '' ,
	      array( 	'class'				=>	'form-control col-md-3',
	             	'placeholder'		=>	'Data de Nascimento',
	             	'data-mask' 		=> 	'data-mask',
             		'data-inputmask'	=> 	'\'alias\': \'dd/mm/yyyy\'', 
	            ) 
	        ); 
	    ?>
	</div>
  

  	<div class="col-md-2">
  		<label for="exampleInputEmail1">Celular:</label>
	    <?php echo form_input(
	      'celular', 
	      '' ,
	      array( 'class'		=>	'form-control col-md-3',
	             'placeholder'	=>	'Celular',
	            ) 
	        ); 
	    ?>
  	</div>

  	<div class="col-md-2">
  		<label for="exampleInputEmail1">Telefone:</label>
	    <?php echo form_input(
	      'telefone', 
	      '' ,
	      array( 'class'		=>	'form-control col-md-3',
	             'placeholder'	=>	'Telefone',
	            ) 
	        ); 
	    ?>
  	</div>
  	
	<div class="col-md-5">
		<label for="exampleInputEmail1">Email:</label>
	    <?php echo form_input(
	      'email', 
	      '' ,
	      array( 'class'		=>	'form-control col-md-3',
	             'placeholder'	=>	'Email',
	            ) 
	        ); 
	    ?>
	</div>

  	<div class="col-md-6">
  		<label for="exampleInputEmail1">Endereço:</label>
	    <?php echo form_input(
	      'endereco', 
	      '' ,
	      array( 'class'		=>	'form-control col-md-3',
	             'placeholder'	=>	'Endereço',
	            ) 
	        ); 
	    ?>
  	</div>

  	<div class="col-md-2">
  		<?php echo form_label('Data de Cadastro:', 'date'); ?>
    	<?php date_default_timezone_set('America/Sao_Paulo'); $date = date('d-m-Y'); ?>
    	<?php echo form_input('datCad', $date ,array( 'class'=>'form-control col-md-3', 'required'=>'required', 'readonly'=>'readonly','data-mask' => 'data-mask',
             'data-inputmask' => '\'alias\': \'dd/mm/yyyy\'',  ) ); ?>
  	</div>

  	<div class="col-md-3">
		<label for="exampleInputEmail1">Usuário:</label>
    	<select name="usuCad" id="usuCad" class="form-control" readonly>
			<option value="<?php echo $infos[0]->id; ?>"><?php echo $infos[0]->nome; ?></option>
    	</select>
	</div>


  	<div class="col-md-6">
  		<label for="exampleInputEmail1">Observações:</label>
	    <?php echo form_textarea(
	      'observacoes', 
	      '',
	      array( 'class'    =>  'form-control col-md-3',
	             'placeholder'  =>  'Observações',
	            ) 
	        ); 
	    ?>
  	</div>
	
	
	
	<div class="col-md-7">
		<br>
		<button type="submit" class="btn btn-primary">Cadastrar</button>
	</div>



<?php form_close(); ?>

</div><!--row-->
