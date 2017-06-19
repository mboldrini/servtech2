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


<div class="row">
       
    <?php if( isset($clientes) && $clientes >= 1){ ?>
        <div class="col-lg-3 col-xs-6">
            <div class="small-box bg-aqua">
                <div class="inner">
                    <h3><?php echo $clientes; ?></h3>
                    <p>Clientes Cadastrados</p>
                </div>
                <div class="icon">
                  <i class="fa fa-users"></i>
                </div>
                <a href="<?= base_url(); ?>cliente" class="small-box-footer">
                  Ver <i class="fa fa-plus"></i>
                </a>
            </div>
        </div>
    <?php } ?>

    <?php if( isset($tiposervico) && $tiposervico >= 1){ ?>
        <div class="col-lg-3 col-xs-6">
            <div class="small-box bg-green">
                <div class="inner">
                    <h3><?php echo $tiposervico; ?></h3>
                    <p>Tipos de Serviços</p>
                </div>
                <div class="icon">
                  <i class="fa fa-book"></i>
                </div>
                <a href="<?= base_url(); ?>tiposervico" class="small-box-footer">
                  Ver <i class="fa fa-plus"></i>
                </a>
            </div>
        </div>
    <?php } ?>

    <?php if( isset($servicos) && $servicos >= 1){ ?>
        <div class="col-lg-3 col-xs-6">
            <div class="small-box bg-yellow">
                <div class="inner">
                    <h3><?php echo $servicos; ?></h3>
                    <p>Serviços Cadastrados</p>
                </div>
                <div class="icon">
                  <i class="fa fa-gears"></i>
                </div>
                <a href="<?= base_url(); ?>servico" class="small-box-footer">
                  Ver <i class="fa fa-plus"></i>
                </a>
            </div>
        </div>
    <?php } ?>

    <?php if( isset($usuarios) && $usuarios >= 1){ ?>
        <div class="col-lg-3 col-xs-6">
            <div class="small-box bg-red">
                <div class="inner">
                    <h3><?php echo $usuarios; ?></h3>
                    <p>Usuários Cadastrados</p>
                </div>
                <div class="icon">
                  <i class="fa fa-user"></i>
                </div>
                <a href="<?= base_url(); ?>contas" class="small-box-footer">
                  Ver <i class="fa fa-plus"></i>
                </a>
            </div>
        </div>
    <?php } ?>

</div>






</div></div><!--geralzao da porra toda-->