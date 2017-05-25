<div class="container-fluid"><div class="row col-md-4">
	
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
             'placeholder'  =>  'Título da mensagem',
            ) 
        ); 
    ?>
  </div>
  
  <div class="form-group">
    <label for="exampleInputEmail1">Título:</label>
    <?php echo form_input(
      'titulo', 
      $editar->titulo,
      array( 'autofocus ' =>  'autofocus',
             'class'    =>  'form-control col-md-3',
             'required'   =>  'required',
             'placeholder'  =>  'Título da mensagem',
            ) 
        ); 
    ?>
  </div>

  <div class="form-group">
    <label for="exampleInputEmail1">Mensagem/Aviso:</label>
    <?php echo form_input(
      'aviso', 
      $editar->aviso ,
      array( 'class'		=>	'form-control col-md-3',
             'required'		=>	'required',
             'placeholder'	=>	'Mensagem/Aviso',
            ) 
        ); 
    ?>
  </div>

	
	<div class="form-group">
    	<label for="exampleInputEmail1">Tipo:</label>
		<?php 
			$cores = array(
				"Sucesso"		=>	"alert-success", 
				"Informação"	=>	"alert-info",
				"Aviso"			=>	"alert-warning",
				"Atenção"		=>	"alert-danger",
			);
		?>	
		<select name="cor" id="cor" class="form-control">
			<?php foreach( $cores as $key => $cor ): ?>
				<?php if( $editar->cor == $cor ){ ?>
					<option value="<?php echo $cor; ?>" selected><?php echo $key; ?></option>
				<?php }else{ ?>
					<option value="<?php echo $cor; ?>"><?php echo $key; ?></option>
				<?php } ?>
			<?php endforeach; ?>
		</select>
	</div>

	
	<div class="form-group">
		<label for="Status">Status:</label>
		<select name="ativo" id="ativo" class="form-control">
			<?php if( $editar->ativo == 0 ){ ?>
				<option value="0" selected>Desativado</option>
        <option value="1">Ativado</option>
			<?php }else{ ?>
				<option value="1" selected>Ativado</option>
        <option value="0">Desativado</option>

			<?php } ?>
		</select>
	</div>



	<button type="submit" class="btn btn-primary">Cadastrar</button>

<?php form_close(); ?>



</div></div><!-- container-fluid & row -->