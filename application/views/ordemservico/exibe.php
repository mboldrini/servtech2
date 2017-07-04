<div class="container-fluid"><div class="row">

  <!-- Main content -->
  <section class="invoice">
    <!-- title row -->
    <div class="row">
      <div class="col-xs-12">
        <h2 class="page-header">
          <i class="fa fa-globe"></i> Ordem de Serviço
          <!-- <small class="pull-right">Data: 2/10/2014</small> -->
        </h2>
      </div>
      <!-- /.col -->
    </div>
    <!-- info row -->
    <div class="row invoice-info">
      <div class="col-sm-4 invoice-col">
        <address>
          <strong>Técnico Responsável</strong><br>
          	<?php foreach( $tecnicos as $tecnico ): ?>
				<?php if( $tecnico->id == $ordem->tecRes ){ ?>
					<?php echo $tecnico->nome; echo " "; echo $tecnico->sobrenome; ?><br>
					<?php echo $tecnico->email; ?><br>
					<?php echo $tecnico->telefone; ?>
				<?php } ?>
			<?php endforeach; ?>
        </address>
      </div>
      <!-- /.col -->
      <div class="col-sm-4 invoice-col">
      	<?php foreach( $clientes as $cliente ): ?>
      		<?php if( $cliente->id == $ordem->codCli ){ ?>
		        <address>
		          <strong><?php echo $cliente->nome; ?></strong><br>
		          <?php echo $cliente->endereco; ?><br>
		          <b>CPF/CNPJ:</b> <?php echo $cliente->registro; ?> <br>
		          <b>Celular: </b><?php echo $cliente->celular; ?><br>
		          <b>Telefone:</b> <?php echo $cliente->telefone; ?><br>
		          <b>Email:</b> <?php echo $cliente->email; ?>
		        </address>
			<?php } ?>
		<?php endforeach; ?>
      </div>
      <!-- /.col -->
      <div class="col-sm-4 invoice-col">
        <b>Cód. Cliente: #007612</b><br>
        <br>
        <b>Cód. Serviço:</b> <?php echo $ordem->id; ?><br>
        <b>
        	Previsão de Término:</b> 
        		<?php $dataPreCon = implode('/', array_reverse(explode('-', $ordem->preCon ))) ?>
				<?php echo $dataPreCon; ?>
			<br>
        <b>
        	Data de Término:</b> 
        		<?php $dataConclusao = implode('/', array_reverse(explode('-', $ordem->datCon ))) ?>
				<?php echo $dataConclusao; ?> 
			<br>
        <b>Status do Serviço:</b>
        	<?php if( $ordem->status == 1){ ?>
            	<?php echo "Em Aberto"; ?>
        	<?php }else if( $ordem->status == 2){ ?>
            	<?php echo "Executando"; ?>
        	<?php }else if( $ordem->status == 3){ ?>
            	<?php echo "Em Espera"; ?>
        	<?php }else if( $ordem->status == 4){ ?>
            	<?php echo "Concluído"; ?>
        	<?php }else{ ?>
            	<?php echo "Cancelado"; ?>
        	<?php } ?>
      </div>
      <!-- /.col -->
    </div>


  <br>

    <div class="row col-xs-12">
      
      <div class="row col-xs-12">
        <h4 class="page-header">
          <i class="fa fa-cogs"></i> Solicitado
        </h4>
          <?php echo $ordem->solicitado; ?>
      </div>

      <div class="row col-xs-12">
        <h4 class="page-header">
          <i class="fa fa-binoculars "></i> Detectado
        </h4>
          <?php echo $ordem->detectado; ?>
      </div>

      <div class="row col-xs-12">
        <h4 class="page-header">
          <i class="fa fa-check"></i> Solução
        </h4>
          <?php echo $ordem->solucao; ?>
      </div>

      <div class="row col-xs-12">
        <h4 class="page-header">
          <i class="fa fa-comment-o "></i> Observações
        </h4>
          <?php echo $ordem->observacao; ?>
      </div>

    </div>


    <div class="row">
      <!-- accepted payments column -->
      <div class="col-xs-6">
        <p class="lead"><b>Métodos de Pagamento:</b></p>
        <i class="fa fa-cc-mastercard fa-2x"></i>
        <i class="fa fa-credit-card fa-2x"></i>
        <i class="fa fa-cc-paypal  fa-2x"></i>
        <i class="fa fa-money fa-2x"></i>

        <p class="text-muted well well-sm no-shadow" style="margin-top: 10px;">
          Efetudando o Pagamento em Espécie é concedido um desconto de 5%
        </p>
      </div>
      <!-- /.col -->
      <div class="col-xs-6">
        <p class="lead"><b>Valor do Serviço</b></p>

        <div class="table-responsive">
          	<table class="table">

            	<tr>
              		<th style="width:50%">Valor do Serviço:</th>
              		<td>
              			<?php foreach( $valorservico as $valor ): ?>
							<?php if( $valor->id == $ordem->tipo){ ?>
								R$ <?php echo $valor->valor; ?>
							<?php } ?>
						<?php endforeach; ?>
              		</td>
            	</tr>

	            <tr>
	              	<th>Acréscimo:</th>
	              	<td>
	              		<?php if( $ordem->acrescimo == NULL ){ ?>
							<?php echo "R$ 00.00"; ?>
						<?php }else{ ?>
							R$ <?php echo $ordem->acrescimo; ?>
						<?php } ?>
					</td>
	            </tr>

	            <tr>
	              	<th>Desconto:</th>
	              	<td>
	              		<?php if( $ordem->desconto == NULL ){ ?>
							<?php echo "R$ 00.00"; ?>
						<?php }else{ ?>
							R$ <?php echo $ordem->desconto; ?>
						<?php } ?>
	              	</td>
	            </tr>
            	<tr>
              		<th>Total:</th>
              		<td>
              			<?php 
							$desconto	= $ordem->desconto;
							$acrescimo 	= $ordem->acrescimo;
							foreach( $valorservico as $valser ){ 
								if( $valser->id == $ordem->tipo ){ 
									$valor = $valser->valor;
							 	} 
							} 
							$final = ( $valor + $acrescimo ) - $desconto;
							echo "R$ " . $final;
						?>
              		</td>
            	</tr>
          </table>
        </div>
      </div>
      <!-- /.col -->
    </div>
    <!-- /.row -->


    <div class="row no-print">
        <div class="col-xs-12">
          <a href="<?= base_url('ordemservico/imprimir/' . $ordem->id) ?>" target="_blank" class="btn bg-purple"><i class="fa fa-print"></i> Imprimir O.S.</a>
        </div>
    </div>


  </section>
  <!-- /.content -->

	


</div></div><!--geralzao-->