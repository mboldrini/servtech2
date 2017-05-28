<div class="row">
	<div class="col-md-2 pull-right">
		<a class="btn btn-primary pull-right" href="<?= base_url() ?>cliente/novo" role="button">
        	<i class="fa fa-plus-square "> </i>  Cadastrar Cliente
    	</a>
	</div><!-- md-2 pull-right-->
</div><!--row-->
<br>
<?php if( isset($clientes) && $clientes != NULL ){ ?>
	

<!-- 
	
<div class="table-responsive">
    <table class="table table-striped">
        
        <thead>
    		<tr>
	           	<th>ID</th>
	           	<th>Nome</th>
	           	<th>Tipo</th>
	           	<th>CPF/CNPJ</th>
	           	<th>Celular</th>
	           	<th>Telefone</th>
	           	<th>Email</th>
	           	<td>Cadastrar Serviço</td>
	           	<th>Opções</th>
          </tr>
        </thead>

        <tbody>
	       	<?php foreach( $clientes as $cliente ): ?>
				<tr>
					<td>
						<?php echo $cliente->id; ?>
					</td>
					<td>
						<?php echo $cliente->nome; ?>
					</td>
					<td>
						<?php if( $cliente->tipo == 'F' || $cliente->tipo == 'f' ){ ?>
							<?php echo "P. Física"; ?>
						<?php }else{ ?>
							<?php echo "P. Jurídica"; ?>
						<?php } ?>
					</td>
					<td>
						<?php echo $cliente->registro; ?>
					</td>
					<td>
						<?php echo $cliente->celular; ?>
					</td>
					<td>
						<?php echo $cliente->telefone; ?> 
					</td>
					<td>
						<?php echo $cliente->email; ?> 
					</td>
					<td>
						<a class="btn btn-primary" href="<?= base_url('servico/novo/' . $cliente->id) ?>" role="button">
            				<i class="fa fa-gears "></i>  Novo Serviço
            			</a>
					</td>
					<td>
						<a class="btn btn-info" href="<?= base_url('cliente/editar/' . $cliente->id) ?>" role="button">
            				<i class="fa fa-pencil "></i>  Editar
            			</a>
                    	<a class="btn btn-danger" href="<?= base_url('cliente/excluir/' . $cliente->id) ?>" role="button" onclick="return confirm('Tem certeza que deseja excluir esse registro?');"><i class="fa fa-trash "></i>  Excluir</a>
					</td>
				</tr>
			<?php endforeach; ?>
        </tbody>

    </table>
</div> -->


<div class="box">
    <div class="box-header">
        <h3 class="box-title">Clientes Cadastrados</h3>
    </div>
          
    <div class="box-body">
        <table id="example2" class="table table-bordered table-striped">
            <thead>
		        <tr>
		      		<th>ID</th>
		           	<th>Nome</th>
		           	<th>Tipo</th>
		           	<th>CPF/CNPJ</th>
		           	<th>Celular</th>
		           	<th>Email</th>
		           	<td>Cadastrar Serviço</td>
		           	<th>Opções</th>
		        </tr>
            </thead>
            
            <tbody>
                <?php foreach( $clientes as $cliente ): ?>
				<tr>
					<td>
						<?php echo $cliente->id; ?>
					</td>
					<td>
						<?php echo $cliente->nome; ?>
					</td>
					<td>
						<?php if( $cliente->tipo == 'F' || $cliente->tipo == 'f' ){ ?>
							<?php echo "P. Física"; ?>
						<?php }else{ ?>
							<?php echo "P. Jurídica"; ?>
						<?php } ?>
					</td>
					<td>
						<?php echo $cliente->registro; ?>
					</td>
					<td>
						<?php echo $cliente->celular; ?>
					</td>
					<td>
						<?php echo $cliente->email; ?> 
					</td>
					<td>
						<a class="btn btn-primary" href="<?= base_url('servico/novo/' . $cliente->id) ?>" role="button">
            				<i class="fa fa-gears "></i>  Novo Serviço
            			</a>
					</td>
					<td>
						<a class="btn btn-info" href="<?= base_url('cliente/editar/' . $cliente->id) ?>" role="button">
            				<i class="fa fa-pencil "></i>  
            			</a>
                    	<a class="btn btn-danger" href="<?= base_url('cliente/excluir/' . $cliente->id) ?>" role="button" onclick="return confirm('Tem certeza que deseja excluir esse registro?');"><i class="fa fa-trash "></i>  </a>
					</td>
				</tr>
				<?php endforeach; ?>
            </tbody>
        </table>
    </div>
</div>


<?php }else{ ?>
	
	<div class="alert alert-warning alert-dismissible" role="alert">
  		<button type="button" class="close" data-dismiss="alert" aria-label="Close">
  			<span aria-hidden="true">&times;</span>
  		</button>
  		<strong>Houston, We Have A Problem!</strong> Nenhum registro foi encontrado.
	</div>

<?php } ?>