<div class="container-fluid"><div class="row">
	
<?php 
  if( $mensagem ){
    echo '<div class="alert '.$mensagem[1].' alert-dismissible" role="alert">
  <button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button>
  '.$mensagem[0].'</div>';
  }
?>

<div class="col-md-4">

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
    				<input type="text" class="form-control" id="codCli" name="codCli" placeholder="ID" value="<?php echo $editar->codCli; ?>" readonly>
  				</div>
				<div class="form-group">
    				<label for="exampleInputEmail2">Nome:</label>
    				<?php foreach( $clientes as $cliente ): ?>
    					<?php if( $cliente->id == $editar->codCli ){ ?>
    						<input type="text" class="form-control" id="nomeCliente" placeholder="nome" value="<?php echo $cliente->nome;?>" readonly>
    					<?php } ?>
    				<?php endforeach; ?>
  				</div>
            </div>
        </div>
    </div>

    <div class="form-group">
    	<label for="exampleInputName2">ID do Serviço:</label>
    	<input type="text" class="form-control" id="idSer" name="idSer" placeholder="ID" value="<?php echo $editar->id; ?>" readonly>
  	</div>

  
	<div class="form-group">
		<label for="exampleInputEmail1">Tipo de Serviço:</label>
		<select name="tipo" id="tipo" class="form-control">
			<?php foreach( $tiposervico as $tipo ): ?>
				<?php if( $tipo->id == $editar->tipo ){ ?>
					<option value="<?php echo $tipo->id ?>" selected><?php echo $tipo->tipo; ?></option>
				<?php }else{ ?>
					<option value="<?php echo $tipo->id ?>"><?php echo $tipo->tipo; ?></option>
				<?php } ?>
			<?php endforeach; ?>
		</select>
	</div>

	<div class="form-group">
	    <label for="exampleInputEmail1">Solicitado:</label>
	    <?php echo form_textarea(
	      'solicitado', 
	      $editar->solicitado,
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
	      $editar->detectado,
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
	      $editar->preCon,
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
		<label for="Status">Status:</label>
		<?php 
		$cores = array(
			"Em Aberto"		=>	"1", 
			"Executando"	=>	"2",
			"Em Espera"		=>	"3",
			"Concluído"		=>	"4",
			"Cancelado"		=>	"5",
		);
		?>	
		<select name="status" id="status" class="form-control">
			<?php foreach( $cores as $key => $cor ): ?>
				<?php if( $editar->status == $cor ){ ?>
					<option value="<?php echo $cor; ?>" selected><?php echo $key; ?></option>
				<?php }else{ ?>
					<option value="<?php echo $cor; ?>"><?php echo $key; ?></option>
				<?php } ?>
			<?php endforeach; ?>
		</select>
	</div>

	<div class="form-group">
	    <label for="exampleInputEmail1">Solução:</label>
	    <?php echo form_textarea(
	      'solucao', 
	      $editar->solucao,
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
	      $editar->observacao,
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
	      $editar->datCon,
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
				<?php if( $usuario->id == $editar->tecRes ){ ?>
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
	      $editar->acrescimo,
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
	      $editar->desconto,
	      array( 'class'    =>  'form-control col-md-3',
	             'placeholder'  =>  'Desconto',
	            ) 
	        ); 
	    ?>
	</div>

	<div class="form-group">
    	<?php echo form_label('Data de Cadastro:', 'date'); ?>
    	<?php echo form_input('datCad', $editar->datCad ,array( 'class'=>'form-control col-md-3', 'required'=>'required', 'readonly'=>'readonly',  'data-mask' => 'data-mask',
             'data-inputmask' => '\'alias\': \'dd/mm/yyyy\'',  ) ); ?>
  	</div>

	<div class="form-group">
    	<label for="exampleInputEmail1">Autor:</label>
    	<select name="usuCad" id="usuCad" class="form-control" readonly>
    		<?php foreach( $usuarios as $usuCad ): ?>
				<?php if( $usuCad->id == $editar->tecRes ){ ?>
					<option value="<?php echo $usuario->id; ?>" selected><?php echo $usuario->nome ?></option>
				<?php }?>
			<?php endforeach; ?>
    	</select>
  	</div>

	<button type="submit" class="btn btn-primary">Editar</button>

<?php form_close(); ?>


</div><!--col-md-4-->

</div></div>