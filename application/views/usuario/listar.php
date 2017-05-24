<div class="container-fluid">
<div class="row">


<div class="row">
	<div class="col-md-2 pull-right">
		<a class="btn btn-primary pull-right" href="" role="button">
        	<i class="fa fa-plus-square "> </i>  Cadastrar Usuário
    	</a>
	</div><!-- md-2 pull-right-->
</div><!--row-->


<?php if( isset( $contas) && $contas != NULL ){ ?>
	
<div class="table-responsive">
    <table class="table table-striped">
        
        <thead>
    		<tr>
              	<th>ID</th>
              	<th>Login</th>
              	<th>Nome</th>
              	<th>Telefone</th>
              	<th>Email</th>
              	<th>Descrição/Cargo</th>
              	<th>Opções</th>
            </tr>
        </thead>

        <tbody>
            <?php foreach ( $contas as $usuario ): ?>
            	<tr>
            		<td><?php echo $usuario->id; ?></td>
            		<td>
						<span class="label label-warning">
							<?php echo $usuario->username; ?>
						</span>
            		</td>
            		<td><?php echo $usuario->nome; ?> <?php echo $usuario->sobrenome; ?></td>
            		<td><?php echo $usuario->telefone; ?></td>
            		<td><?php echo $usuario->email; ?></td>
            		<td><?php echo $usuario->descricao; ?></td>
            		<?php if( $usuario->id == $infos[0]->id ){ ?>
						<td>
							<a class="btn btn-primary" href="<?= base_url() ?>perfil" role="button">
            					<i class="fa fa-pencil "></i>  Perfil
            				</a>
						</td>
            		<?php }else{ ?>
						<td>
            				<a class="btn btn-info" href="<?= base_url('contas/editar/' . $usuario->id) ?>" role="button">
            					<i class="fa fa-pencil "></i>  Editar
            				</a>
            				<a class="btn btn-danger" href="#" role="button">
            					<i class="fa fa-trash "></i>  Excluir
            				</a>
            			</td>
            		<?php } ?>
            	</tr>
           	<?php endforeach; ?>
        </tbody>
    </table>
</div>



<?php }else{ ?>
	<div class="alert alert-warning alert-dismissible" role="alert">
  		<button type="button" class="close" data-dismiss="alert" aria-label="Close">
  			<span aria-hidden="true">&times;</span>
  		</button>
  		<strong>Houston, We Have A Problem!</strong> Nenhum registro foi encontrado.
	</div>
<?php } ?>



</div><!--row-->
</div><!--container-fluid-->