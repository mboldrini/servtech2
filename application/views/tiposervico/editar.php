<div class="row">

<div class="col-md-4">

<?php echo form_open(); ?>

<?php 
  if( isset($mensagem) && $mensagem != NULL ){
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
	      array( 'readonly ' =>  'readonly',
	             'class'    =>  'form-control col-md-3',
	             'required'   =>  'required',
	             'placeholder'  =>  'Tipo de Serviço',
	            ) 
	        ); 
	    ?>
  	</div>
  
  <div class="form-group">
    <label for="exampleInputEmail1">Tipo:</label>
    <?php echo form_input(
      'tipo', 
      $editar->tipo,
      array( 'autofocus ' =>  'autofocus',
             'class'    =>  'form-control col-md-3',
             'required'   =>  'required',
             'placeholder'  =>  'Tipo de Serviço',
            ) 
        ); 
    ?>
  </div>

  	<div class="form-group">
      	<label for="exampleInputEmail1">Permite Desconto:</label>
    	<select name="perDes" id="perDes" class="form-control">
			<?php if( $editar->perDes == 0 ){ ?>
				<option value="0" selected>Não</option>
				<option value="1">Sim</option>
			<?php }else{ ?>
				<option value="1" selected>Sim</option>
				<option value="0">Não</option>
			<?php } ?>
    	</select>
  	</div>

  	<div class="form-group">
      	<label for="exampleInputEmail1">Permite Acrescimo:</label>
      	<select name="perAcr" id="perAcr" class="form-control">
			<?php if( $editar->perAcr == 0 ){ ?>
				<option value="0" selected>Não</option>
				<option value="1">Sim</option>
			<?php }else{ ?>
				<option value="1" selected>Sim</option>
				<option value="0">Não</option>
			<?php } ?>
    	</select>
  	</div>






	<button type="submit" class="btn btn-primary">Editar</button>

<?php form_close(); ?>

	</div><!--col-md-4-->
</div><!--row-->
