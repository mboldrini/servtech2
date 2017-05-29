<div class="container-fluid"><div class="row">
	
<div class="row">
	<div class="col-md-2 pull-right">
		<a class="btn btn-primary pull-right" href="<?= base_url() ?>tiposervico/novo" role="button">
        	<i class="fa fa-plus-square "> </i>  Cadastrar Tipo de Serviço
    	</a>
	</div><!-- md-2 pull-right-->
</div><!--row-->
<br>

<?php if( isset( $servicos ) && $servicos != NULL ){ ?>

<div class="box">
    <div class="box-body">
        <table id="example1" class="table table-bordered table-striped">
            <thead>
                <tr>
                    <th>ID</th>
                    <th>Tipo</th>
                    <th>Perm. Desconto</th>
                    <th>Perm. Acrescimo</th>
                    <th>Data de Cadastro</th>
                    <th>Usuário</th>
                    <th>Opções</th>
                </tr>
            </thead>
        <tbody>
        <?php foreach( $servicos as $servico ): ?>
                <tr>
                    <td><?php echo $servico->id; ?></td>
                    <td><?php echo $servico->tipo; ?></td>
                    <td>
                        <?php if( $servico->perDes == 0 ){ ?>
                            <span class="label label-danger">Não</span>
                        <?php }else{ ?>
                            <span class="label label-primary">Sim</span>
                        <?php } ?>
                    </td>
                    <td>
                        <?php if( $servico->perAcr == 0 ){ ?>
                            <span class="label label-danger">Não</span>
                        <?php }else{ ?>
                            <span class="label label-primary">Sim</span>
                        <?php } ?>
                    </td>
                    <td><?php echo $servico->datCad; ?></td>
                    <td>
                        <?php foreach( $users as $user ): ?>
                            <?php if( $user->id == $servico->usuCad ){ ?>
                                <?php echo $user->nome; ?>
                            <?php } ?>
                        <?php endforeach; ?>
                    </td>
                    <td>
                        <a class="btn btn-info" href="<?= base_url('tiposervico/editar/' . $servico->id) ?>" role="button">
                            <i class="fa fa-pencil "></i>  Editar
                        </a>
                        <a class="btn btn-danger" href="<?= base_url('tiposervico/excluir/' . $servico->id) ?>" role="button" onclick="return confirm('Tem certeza que deseja excluir esse registro?');"><i class="fa fa-trash "></i>  Excluir</a>
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



</div></div><!--container-fluid && row-->