<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Relatorio Começo Exibicao</title>
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap-theme.min.css" integrity="sha384-rHyoN1iRsVXV4nD0JutlnGaslCJuC7uwjduW9SVrLvRYooPp2bWYgmgJQIXwl/Sp" crossorigin="anonymous">
	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js" integrity="sha384-Tc5IQib027qvyjSMfHjOMaLkfuWVxZxUPnCJA7l2mCWNIpG9mGCD8wGNIcPD7Txa" crossorigin="anonymous"></script>
	<link rel="stylesheet" href="<?= base_url(); ?>/assets/style.css">
</head>
<body>
<div class="ordem">

	<div class="cabecalho">

		<div class="linha">
			<section  class="col-xs-7">
				<b>
					<h4>Ordem de Serviço</h4>
				</b>
			</section><!--section titulo da os-->
			<section class="col-xs-3 cabecalho-direita">
				<div class="row">
					<b>Código do Serviço: </b>
					<span class="pull-right"><?php echo $ordem->id; ?></span>
				</div>
				<div class="row">
					<b>Status:</b>
					<span class="pull-right">
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
					</span>
				</div>
			</section>
		</div><!--linha-->

		<?php foreach( $clientes as $cliente ): ?>
			<?php if( $cliente->id == $ordem->codCli ){ ?>

				<div class="col-xs-4">
					<section>
						<b>Nome: </b>
						<span><?php echo $cliente->nome; ?></span>
					</section>
					<section>
						<b>Endereço:</b>
						<span><?php echo $cliente->endereco; ?></span>
					</section>
				</div><!-- primeira col-md-4 -->
				
				<div class="col-xs-3">
					<div class="row">	
						<b>Telefone: </b>
						<span><?php echo $cliente->telefone; ?></span>
					</div>
					<div class="row">
						<b>Celular: </b> 
						<span><?php echo $cliente->celular; ?></span>
					</div>
					<div class="row">
						<b>E-mail: </b> 
						<span><?php echo $cliente->email; ?></span>
					</div>
				</div><!--segunda col-md-4-->
				
				<div class="col-xs-3">
					<div class="row">
						<b>Código do Cliente: </b>
						<span><?php echo $cliente->id; ?></span>
					</div>
					<div class="row">
						<b>Tipo: </b>
						<span>
							<?php if( $cliente->tipo == "j" || $cliente->tipo == "J" ){ ?>
								Pessoa Jurídica
							<?php }else{ ?>
								Pessoa Física
							<?php } ?>
						</span>
					</div>
					<div class="row">
						<b>CPF/CNPJ:</b>
						<span><?php echo $cliente->registro; ?></span>
					</div>
				</div><!--terceira col-md-4-->


			<?php } ?>
		<?php endforeach; ?>
	</div><!--cabecalho-->




	<div class="servico col-md-12">
		<div class="linha">
			<div class="col-md-12">
				<h3>Serviço</h3>
			</div>
		</div><!--linha-->
		<section class="conteudo">
			<h5>
				<b>Solicitado:</b>
			</h5>
			<p>
				<?php echo $ordem->solicitado; ?>
			</p>
		</section>
		<section class="conteudo">
			<h5>
				<b>Detectado:</b>
			</h5>
			<p>
				<?php echo $ordem->detectado; ?>
			</p>
		</section>
		<section>
			<h5>
				<b>Solução:</b>
			</h5>
			<p>
				<?php echo $ordem->solucao; ?>
			</p>
		</section>
	</div><!--servico-->

	<div class="finalizacao col-md-12">
		<div class="linha">
			<div class="col-md-12">
				<h3>Finalização</h3>
			</div>
		</div><!--linha-->
		
		<div class="col-xs-5">
			<div class="col-xs-12">
					<b>Previsão de Conclusão: </b>
				<span>
					<?php $dataPreCon = implode('/', array_reverse(explode('-', $ordem->preCon ))) ?>
					<?php echo $dataPreCon; ?>
				</span>

				<br>

				<b>Data de Conclusão: </b>
				<span>
					<?php $dataConclusao = implode('/', array_reverse(explode('-', $ordem->datCon ))) ?>
					<?php echo $dataConclusao; ?>
				</span>
			</div>

			<div class="col-xs-12">
				<b>Técnico Responsável: </b>	
				<?php foreach( $tecnicos as $tecnico ): ?>
					<?php if( $tecnico->id == $ordem->tecRes ){ ?>
						<?php echo $tecnico->nome; echo " "; echo $tecnico->sobrenome; ?>
					<?php } ?>
				<?php endforeach; ?>
			</div>

		</div>

		<div class="col-xs-5">
			<section>
				<b>Acréscimo de Valor:</b>
				<span class="pull-right">
					<?php if( $ordem->acrescimo == NULL ){ ?>
						<?php echo "R$ 00.00"; ?>
					<?php }else{ ?>
						R$ <?php echo $ordem->acrescimo; ?>
					<?php } ?>
				</span>
			</section>
			<section>
				<b>Desconto:</b>
				<span class="pull-right">
					<?php if( $ordem->desconto == NULL ){ ?>
						<?php echo "R$ 00.00"; ?>
					<?php }else{ ?>
						R$ <?php echo $ordem->desconto; ?>
					<?php } ?>
				</span>
			</section>
			<section class="linha">
				<b>Valor do Serviço:</b>
				<span class="pull-right">
					<?php foreach( $valorservico as $valor ): ?>
						<?php if( $valor->id == $ordem->tipo){ ?>
							R$ <?php echo $valor->valor; ?>
						<?php } ?>
					<?php endforeach; ?>
				</span>
			</section>
			<section>
				<b>Total:</b>
				<span class="pull-right">
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
				</span>
			</section>
		</div>
		<section class="col-md-12 observacoes">
			<h5>
				<b>Observações:</b>
			</h5>
			<p>
				<?php echo $ordem->observacao; ?>
			</p>
		</section>
	</div><!--finalizacao-->

	<div class="assinatura col-xs-12">
		
		<div class="col-xs-5">
			<div class="linha rasura"></div>
			<b class="text-middle">Técnico Responsável</b>
		</div>


		<div class="col-xs-5">
			<div class="linha rasura"></div>
			<b class="text-middle">Cliente</b>
		</div>

	</div><!--assinatura-->


</div><!--ordem-->





</body>
</html>