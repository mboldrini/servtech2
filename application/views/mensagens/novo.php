<div class="row">

<div class="col-md-12">

<?php echo form_open(); ?>

<?php 
  if( isset( $mensagem ) && $mensagem != null ){
    echo '<div class="alert '.$mensagem[1].' alert-dismissible" role="alert">
  <button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button>
  '.$mensagem[0].'</div>';
  }
?>

	<div class="col-md-4">
    	<label for="exampleInputEmail1">Título:</label>
	    <?php echo form_input(
	      'titulo', 
	      '',
	      array( 'autofocus ' =>  'autofocus',
	             'class'    =>  'form-control col-md-3',
	             'required'   =>  'required',
	             'placeholder'  =>  'Título da mensagem',
	            ) 
	        ); 
	    ?>		
  	</div>
	
	<div class="col-md-8">
		<label for="exampleInputEmail1">Mensagem/Aviso:</label>
	    <?php echo form_input(
	      'aviso', 
	      '' ,
	      array( 'class'		=>	'form-control col-md-3',
	             'required'		=>	'required',
	             'placeholder'	=>	'Mensagem/Aviso',
	            ) 
	        ); 
	    ?>	
	</div>
  
	<div class="col-md-3">
		<label for="exampleInputEmail1">Tipo:</label>
		<?php 
			$cores = array(
				"Sucesso"		=>	"callout-success", 
				"Informação"	=>	"callout-info",
				"Aviso"			=>	"callout-warning",
				"Atenção"		=>	"callout-danger",
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
	
	<div class="col-md-3">
		<label for="Status">Status:</label>
		<?php 
			$status = array(
				"Ativo"			=> '1',
				"Desativado"	=> '0',
			);
		?>
		<select name="ativo" id="ativo" class="form-control">
			<?php foreach( $status as $key => $stat ): ?>
				<option value="<?php echo $stat; ?>"><?php echo $key; ?></option>
			<?php endforeach; ?>
		</select>
	</div>

	
	<div class="col-md-3">
		<label for="exampleInputEmail1">Autor:</label>
    	<select name="idUsuario" id="idUsuario" class="form-control" readonly>
			<option value="<?php echo $infos[0]->id; ?>"><?php echo $infos[0]->nome; ?></option>
    	</select>
	</div>


	<div class="col-md-4">
	<br>
		<button type="submit" class="btn btn-primary">Cadastrar</button>
	</div>

<?php form_close(); ?>

	</div><!--col-md-4-->
</div><!--row-->
