<div class="container-fluid"><div class="row">
	
<?php 
  if( $mensagem ){
    echo '<div class="alert '.$mensagem[1].' alert-dismissible" role="alert">
  <button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button>
  '.$mensagem[0].'</div>';
  }
?>

<div class="col-md-6">

	<?php echo form_open(); ?>

	<div class="">
        <div class="box box-primary">
            <div class="box-header with-border">
              <h3 class="box-title">Informações do Cliente</h3>
              <div class="box-tools pull-right">
                <button type="button" class="btn btn-box-tool" data-widget="collapse"><i class="fa fa-minus"></i>
                </button>
              </div>
            </div>
            <div class="box-body">
				<div class="form-group">
    				<label for="exampleInputName2">ID do Cliente:</label>
    				<input type="text" class="form-control" id="codCli" name="codCli" placeholder="ID" value="<?php echo $cliente->id; ?>" readonly>
  				</div>
				<div class="form-group">
    				<label for="exampleInputEmail2">Nome:</label>
    				<input type="text" class="form-control" id="nomeCliente" placeholder="nome" value="<?php echo $cliente->nome;?>" readonly>
  				</div>
            </div>
        </div>
    </div>

	
  	

	<div class="form-group">
		<label for="exampleInputEmail1">Tipo de Serviço:</label>
		<select name="tipo" id="tipo" class="form-control">
			<?php foreach( $tiposervico as $tipo ): ?>
				<option value="<?php echo $tipo->id; ?>"><?php echo $tipo->tipo; ?></option>
			<?php endforeach; ?>
		</select>
	</div>

	<div class="form-group">
	    <label for="exampleInputEmail1">Solicitado:</label>
	    <?php echo form_textarea(
	      'solicitado', 
	      '',
	      array( 'class'    =>  'form-control col-md-3',
	             'required'   =>  'required',
	             'placeholder'  =>  'Solicitado',
	            ) 
	        ); 
	    ?>
	</div>

	<div class="form-group">
	    <label for="exampleInputEmail1">Detectado:</label>
	    <?php echo form_textarea(
	      'detectado', 
	      '',
	      array( 'class'    =>  'form-control col-md-3',
	             'placeholder'  =>  'Detectado',
	            ) 
	        ); 
	    ?>
	</div>

	<div class="form-group">
	    <label for="exampleInputEmail1">Previsão de Conclusão:</label>
	    <?php echo form_input(
	      'preCon', 
	      '',
	      array( 'class'    =>  'form-control col-md-3',
	             'required'   =>  'required',
	             'placeholder'  =>  'Previsão de Conclusão',
             	'data-mask' => 'data-mask',
             	'data-inputmask' => '\'alias\': \'dd/mm/yyyy\'', 
	            ) 
	        ); 
	    ?>
	</div>

	<div class="form-group">
		<label for="exampleInputEmail1">Status:</label>
		<select name="status" id="status" class="form-control">
			<option value="1">Em Aberto</option>
			<option value="2">Executando</option>
			<option value="3">Em Espera</option>
			<option value="4">Concluído</option>
			<option value="5">Cancelado</option>
		</select>
	</div>

	<div class="form-group">
	    <label for="exampleInputEmail1">Solução:</label>
	    <?php echo form_textarea(
	      'solucao', 
	      '',
	      array( 'class'    =>  'form-control col-md-3',
	             'placeholder'  =>  'Solucão',
	            ) 
	        ); 
	    ?>
	</div>

	<div class="form-group">
	    <label for="exampleInputEmail1">Observacão:</label>
	    <?php echo form_textarea(
	      'observacao', 
	      '',
	      array( 'class'    =>  'form-control col-md-3',
	             'placeholder'  =>  'Observação',
	            ) 
	        ); 
	    ?>
	</div>

	<div class="form-group">
	    <label for="exampleInputEmail1">Data de Conclusão:</label>
	    <?php echo form_input(
	      'datCon', 
	      '',
	      array( 'class'    =>  'form-control col-md-3',
	             'placeholder'  =>  'Data de Conclusão',
	             'data-mask' => 'data-mask',
             	'data-inputmask' => '\'alias\': \'dd/mm/yyyy\'', 
	            ) 
	        ); 
	    ?>
	</div>

	<div class="form-group">
		<label for="exampleInputEmail1">Técnico Responsável:</label>
		<select name="tecRes" id="tecRes" class="form-control">
			<?php foreach( $usuarios as $usuario ): ?>
				<?php if( $usuario->id == $infos[0]->id ){ ?>
					<option value="<?php echo $usuario->id; ?>" selected><?php echo $usuario->nome ?></option>
				<?php }else{ ?>
					<option value="<?php echo $usuario->id; ?>"><?php echo $usuario->nome; ?></option>
				<?php } ?>
			<?php endforeach; ?>
		</select>
	</div>

	<div class="form-group">
	    <label for="exampleInputEmail1">Acréscimo de Valor:</label>
	    <?php echo form_input(
	      'acrescimo', 
	      '',
	      array( 'class'    =>  'form-control col-md-3',
	             'placeholder'  =>  'Acrescimo',
	            ) 
	        ); 
	    ?>
	</div>

	<div class="form-group">
	    <label for="exampleInputEmail1">Desconto de Valor:</label>
	    <?php echo form_input(
	      'desconto', 
	      '',
	      array( 'class'    =>  'form-control col-md-3',
	             'placeholder'  =>  'Desconto',
	            ) 
	        ); 
	    ?>
	</div>

	<div class="form-group">
    	<?php echo form_label('Data de Cadastro:', 'date'); ?>
    	<?php date_default_timezone_set('America/Sao_Paulo'); $date = date('d-m-Y'); ?>
    	<?php echo form_input('datCad', $date ,array( 'class'=>'form-control col-md-3', 'required'=>'required', 'readonly'=>'readonly', 'data-mask' => 'data-mask',
             'data-inputmask' => '\'alias\': \'dd/mm/yyyy\'',  ) ); ?>
  	</div>

	<div class="form-group">
    	<label for="exampleInputEmail1">Autor:</label>
    	<select name="usuCad" id="usuCad" class="form-control" readonly>
			<option value="<?php echo $infos[0]->id; ?>"><?php echo $infos[0]->nome; ?></option>
    	</select>
  	</div>

	<button type="submit" class="btn btn-primary">Cadastrar</button>

<?php form_close(); ?>


</div><!--col-md-4-->

</div></div>