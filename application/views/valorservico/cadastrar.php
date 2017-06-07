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
		<label for="Status">Tipo de Servico:</label>
		<select name="tipo" id="tipo" class="form-control">
			<?php foreach( $tipoServico as $servico ): ?>
				<option value="<?php echo $servico->tipo; ?>"><?php echo $servico->tipo; ?></option>
			<?php endforeach; ?>
		</select>
	</div>


	<div class="form-group">
	    <label for="exampleInputEmail1">Valor (R$):</label>
	    <?php echo form_input(
	      'valor', 
	      '',
	      array( 'class'    	=>  'form-control col-md-3',
	             'required'   	=>  'required',
	             'placeholder'  =>  'Valor do Serviço',
	            ) 
	        ); 
	    ?>
  	</div>
  
  <div class="form-group">
    <label for="exampleInputEmail1">Data de Início:</label>
    <?php echo form_input(
      'inival', 
      '',
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
    <?php echo form_input(
      'fimVal', 
      '',
      array( 'class'    	=>  'form-control col-md-3',
             'placeholder'  =>  'Data Final',
             'data-mask' => 'data-mask',
             'data-inputmask' => '\'alias\': \'dd/mm/yyyy\'', 
            ) 
        ); 
    ?>
  </div>

  	<div class="form-group">
    	<?php echo form_label('Data de Cadastro:', 'date'); ?>
    	<?php date_default_timezone_set('America/Sao_Paulo'); $date = date('d-m-Y'); ?>
    	<?php echo form_input('datCad', $date ,array( 'class'=>'form-control col-md-3', 'required'=>'required', 'readonly'=>'readonly','data-mask' => 'data-mask',
             'data-inputmask' => '\'alias\': \'dd/mm/yyyy\'',   ) ); ?>
  	</div>
	

	<div class="form-group">
      <?php echo form_label('Usuário responsavel:', 'usuario'); ?>
      <?php 
        $opcoes = array(
          $infos[0]->id => $infos[0]->nome,
        );
      ?>
      <?php  echo form_dropdown('usuCad', $opcoes, '', array('class'=>'form-control', 'readonly'=>'readonly')  ); ?>
  	</div>
  

	
	
	


	<button type="submit" class="btn btn-primary">Cadastrar</button>

<?php form_close(); ?>

	</div><!--col-md-4-->
</div><!--row-->
