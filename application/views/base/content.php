<?php if( isset( $mensagens ) && $mensagens != null ){ ?>

	<?php foreach( $mensagens as $mensagem ): ?>
		
		<div class="alert <?php echo $mensagem->cor; ?> alert-dismissible" role="alert">
  			<button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button>
  			<strong>
  				<?php echo $mensagem->titulo; ?>
  			</strong> <?php echo $mensagem->aviso; ?>
		</div>		

	<?php endforeach ?>

<?php } ?>