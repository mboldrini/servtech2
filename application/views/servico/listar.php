<div class="row">
	<div class="col-md-2 pull-right">
		<a class="btn btn-primary pull-right" href="<?= base_url() ?>cliente" role="button">
        	<i class="fa fa-plus-square "> </i>  Cadastrar Serviço
    	</a>
	</div><!-- md-2 pull-right-->
</div><!--row-->
<br>
<?php if( isset($servicos) && $servicos != NULL ){ ?>
	

<div class="box">
    <div class="box-body">
        <table id="example1" class="table table-bordered table-striped">
            <thead>
                <tr>
                    <th>ID</th>
                    <th>Cliente</th>
                    <th>Status</th>
                    <th>Tipo</th>
                    <th>Data de Cadastro</th>
                    <th>Técnico Responsável</th>
                    <th>Opções</th>
                </tr>
            </thead>
        <tbody>
        <?php foreach( $servicos as $servico ): ?>
            <tr>
                <td><?php echo $servico->id; ?></td>
                <td>
                    <?php foreach( $clientes as $cliente): ?>
                        <?php if( $cliente->id == $servico->codCli){ ?>
                            <?php echo $cliente->nome; ?>
                        <?php } ?>
                    <?php endforeach; ?>
                </td>
                <td>
                    <?php if( $servico->status == 1){ ?>
                        <?php echo "<span class=\"label label-primary\">Em Aberto</span>"; ?>
                    <?php }else if( $servico->status == 2){ ?>
                        <?php echo "<span class=\"label label-info\">Executando</span>"; ?>
                    <?php }else if( $servico->status == 3){ ?>
                        <?php echo "<span class=\"label label-warning\">Em Espera</span>"; ?>
                    <?php }else if( $servico->status == 4){ ?>
                        <?php echo "<span class=\"label label-success\">Concluído</span>"; ?>
                    <?php }else{ ?>
                        <?php echo "<span class=\"label label-danger\">Cancelado</span>"; ?>
                    <?php } ?>
                </td>
                <td>
                    <?php foreach( $tipoServico as $tipo): ?>
                        <?php if( $tipo->id == $servico->tipo ){ ?>
                            <?php echo $tipo->tipo; ?>
                        <?php } ?>
                    <?php endforeach; ?>
                </td>
                <td>
                    <?php echo implode('/', array_reverse(explode('-', $servico->datCad ))); ?>
                </td>
                <td>
                    <?php foreach( $tecnicos as $tecnico ): ?>
                        <?php if( $tecnico->id == $servico->tecRes ){ ?>
                            <?php echo $tecnico->nome; ?>
                        <?php } ?>
                    <?php endforeach; ?>
                </td>
                <td>
                    <a class="btn btn-info" href="<?= base_url('servico/editar/' . $servico->id) ?>" role="button">
                            <i class="fa fa-pencil "></i>  Editar
                        </a>
                    <a class="btn btn-danger" href="<?= base_url('servico/excluir/' . $servico->id) ?>" role="button" onclick="return confirm('Tem certeza que deseja excluir esse registro?');"><i class="fa fa-trash "></i>  Excluir</a>
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