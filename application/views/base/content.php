<div class="container-fluid"><div class="row">

<?php if( isset( $mensagens ) && $mensagens != null ){ ?>

<div class="col-md-12">
    <div class="box box-primary">
        <div class="box-header with-border">
            <h3 class="box-title">Quadro de Avisos/Mensagens</h3>
        	<div class="box-tools pull-right">
            	<button type="button" class="btn btn-box-tool" data-widget="collapse"><i class="fa fa-minus"></i>
            	</button>
          	</div>
        </div>
        <div class="box-body">
        	<?php foreach( $mensagens as $mensagem ): ?>
	    		<div class="callout <?php echo $mensagem->cor; ?>">
	      			<h4><?php echo $mensagem->titulo; ?></h4>
	      			<p><?php echo $mensagem->aviso; ?></p>
	    		</div>
			<?php endforeach ?>
        </div>
    </div>
</div>

<?php } ?>


</div></div><!--geralzao da porra toda-->