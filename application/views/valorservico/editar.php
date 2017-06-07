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
	      array( 'readonly ' 	=>  'readonly',
	             'class'    	=>  'form-control col-md-3',
	             'required'   	=>  'required',
	             'placeholder'  =>  'ID',
	            ) 
	        ); 
	    ?>
  	</div>
  

	<div class="form-group">
		<label for="Status">Tipo de Servico:</label>
		<select name="tipo" id="tipo" class="form-control">
			<?php foreach( $tipoServico as $servico ): ?>
				<?php if( $servico->id == $editar->tipo ){ ?>
					<option value="<?php echo $servico->id; ?>" selected><?php echo $servico->tipo; ?></option>
				<?php }else{ ?>
					<option value="<?php echo $servico->id; ?>"><?php echo $servico->tipo; ?></option>
				<?php } ?>
			<?php endforeach; ?>
		</select>
	</div>


	<div class="form-group">
	    <label for="exampleInputEmail1">Valor (R$):</label>
	    <?php echo form_input(
	      'valor', 
	      $editar->valor,
	      array( 'class'    	=>  'form-control col-md-3',
	             'required'   	=>  'required',
	             'placeholder'  =>  'Valor do Serviço',
	            ) 
	        ); 
	    ?>
  	</div>
  
  	<div class="form-group">
	    <label for="exampleInputEmail1">Data de Início:</label>

	    <?php $dataInicio = implode('/', array_reverse(explode('-', $editar->iniVal))); ?>
	    <?php echo form_input(
	      'inival', 
	      $dataInicio,
	      array( 'class'    	=>  'form-control col-md-3',
	             'required'   	=>  'required',
	             'placeholder'  =>  'Data de Início',
	             'data-mask' => 'data-mask',
             'data-inputmask' => '\'alias\': \'dd/mm/yyyy\'', 
	            ) 
	        ); 
	    ?>
  	</div>

	<div class="form-group">
	    <label for="exampleInputEmail1">Data Final:</label>
	    <?php $dataFinal = implode('/', array_reverse(explode('-', $editar->fimVal))); ?>
	    <?php echo form_input(
	      'fimVal', 
	      $dataFinal,
	      array( 'class'    	=>  'form-control col-md-3',
	             'placeholder'  =>  'Data Final',
	             'data-mask' => 'data-mask',
             'data-inputmask' => '\'alias\': \'dd/mm/yyyy\'', 
	            ) 
	        ); 
	    ?>
	</div>
	
	<br><br>
	
	


	<button type="submit" class="btn btn-primary">Editar</button>

<?php form_close(); ?>

	</div><!--col-md-4-->
</div><!--row-->
