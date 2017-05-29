<div class="row">
	<div class="col-md-2 pull-right">
		<a class="btn btn-primary pull-right" href="<?= base_url() ?>mensagens/novo" role="button">
        	<i class="fa fa-plus-square "> </i>  Cadastrar Aviso
    	</a>
	</div><!-- md-2 pull-right-->
</div><!--row-->
<br>
<?php if( isset($mensagens) && $mensagens != NULL ){ ?>
	
<div class="box">
    <div class="box-body">
        <table id="example1" class="table table-bordered table-striped">
            <thead>
                <tr>
                    <th>ID</th>
		           	<th>Titulo</th>
		           	<th>Aviso</th>
		           	<th>Tipo</th>
		           	<th>Ativo</th>
		           	<th>Autor</th>
		           	<th>Opções</th>
                </tr>
            </thead>
        <tbody>
            <?php foreach( $valores as $valor ): ?>
                <tr>
                    <td><?php echo $valor->id; ?></td>
                    <td>
                        <?php foreach( $tipoServico as $tipo ): ?>
                            <?php if( $tipo->id == $valor->tipo){ echo $tipo->tipo; } ?>
                        <?php endforeach; ?>
                    </td>
                    <td><i class="fa fa-usd"></i>  <?php echo $valor->valor; ?></td>
                    <td>
                        <span class="label label-primary"><?php echo $valor->iniVal; ?></span>
                    </td>
                    <td>
                        <span class="label label-danger"><?php echo $valor->fimVal; ?></span>
                    </td>
                    <td><?php echo $valor->datCad; ?></td>
                    <td>
                        <?php foreach( $usuario as $user): ?>
                            <?php if( $user->id == $valor->usuCad){ echo $user->nome; } ?>
                        <?php endforeach; ?>
                    </td>
                    <td>
                        <a class="btn btn-info" href="<?= base_url('valorservico/editar/' . $valor->id) ?>" role="button">
                            <i class="fa fa-pencil "></i>  Editar
                        </a>
                        <a class="btn btn-danger" href="<?= base_url('valorservico/excluir/' . $valor->id) ?>" role="button" onclick="return confirm('Tem certeza que deseja excluir esse registro?');"><i class="fa fa-trash "></i>  Excluir</a>
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