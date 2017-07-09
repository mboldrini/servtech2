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
            <?php foreach( $mensagens as $mensagem ): ?>
                <tr>
                    <td><?php echo $mensagem->id; ?></td>
                    <td>
                        <?php echo $mensagem->titulo; ?>
                    </td>
                    <td>
                        <?php echo $mensagem->aviso; ?>
                    </td>
                    <td>
                        <?php if( $mensagem->cor == "callout-success" ){ ?>
                            <span class="label label-success">Sucesso</span>
                        <?php }else if( $mensagem->cor == "callout-info" ){ ?>
                            <span class="label label-info">Informação</span>
                        <?php }else if( $mensagem->cor == "callout-warning"){ ?>
                            <span class="label label-warning">Aviso</span>
                        <?php }else{ ?>
                            <span class="label label-danger">Atenção</span>
                        <?php } ?>
                    </td>
                    <td>
                        <?php if( $mensagem->ativo == "1" ){ ?>
                            <span class="label label-success">Ativo</span>
                        <?php }else{ ?>
                            <span class="label label-default">Desativado</span>
                        <?php } ?>
                    </td>
                    <td>
                        <?php foreach( $usuarios as $usuario ): ?>
                            <?php if( $usuario->id == $mensagem->idUsuario ){ ?>
                                <?php echo $usuario->nome; ?>
                            <?php } ?>
                        <?php endforeach; ?>
                    </td>
                    <td>
                        <a class="btn btn-info" href="<?= base_url('mensagens/editar/' . $mensagem->id) ?>" role="button">
                            <i class="fa fa-pencil "></i>  Editar
                        </a>
                        <a class="btn btn-danger" href="<?= base_url('mensagens/excluir/' . $mensagem->id) ?>" role="button" onclick="return confirm('Tem certeza que deseja excluir esse registro?');"><i class="fa fa-trash "></i>  Excluir</a>
                    </td>
                </tr>
            <?php endforeach; ?>
        </tbody>             
        </table>zz
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