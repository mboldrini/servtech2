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
				"----"			=> '',
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
		<label for="exampleInputEmail1" id="labelregistro">Registro (CPF/CNPJ):</label>
	    <?php 
	    	echo form_input([
            	'type'  		=> 'text',
            	'name'  		=> 'registro',
            	'id'    		=> 'registro', 
            	'class' 		=> 'registro form-control col-md-3',
            	'placeholder' 	=> 'CPF ou CNPJ',
        	]);
        ?>
	</div><!-- div area de registro -->

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
	    <?php 
	    	echo form_input([
            	'type'  		=> 'text',
            	'name'  		=> 'celular',
            	'id'    		=> 'celular', 
            	'class' 		=> 'celular form-control col-md-3',
            	'placeholder' 	=> 'Celular',
        	]);
        ?>
  	</div>

  	<div class="col-md-2">
  		<label for="exampleInputEmail1">Telefone:</label>
	    <?php 
	    	echo form_input([
            	'type'  		=> 'text',
            	'name'  		=> 'telefone',
            	'id'    		=> 'telefone', 
            	'class' 		=> 'telefone form-control col-md-3',
            	'placeholder' 	=> 'Telefone',
        	]);
        ?>
  	</div>
  	
	<div class="col-md-5">
		<label for="exampleInputEmail1">Email:</label>
	   
	    <?php 
	    	echo form_input([
            	'type'  		=> 'email',
            	'name'  		=> 'email',
            	'id'    		=> 'email', 
            	'class' 		=> 'form-control col-md-3',
            	'placeholder' 	=> 'E-mail',
            	'required'		=>'required',
        	]);
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
		<button type="submit" class="btn btn-primary btnNovoCliente">Cadastrar</button>
	</div>



<?php form_close(); ?>

</div><!--row-->
