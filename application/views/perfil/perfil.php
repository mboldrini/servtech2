        <div class="col-xs-12 col-sm-12 col-md-6 col-lg-6 col-xs-offset-0 col-sm-offset-0 col-md-offset-3 col-lg-offset-3 toppad" >
   
   
          <div class="panel panel-info">
            <div class="panel-heading">
              <h3 class="panel-title"><?php echo $infos[0]->nome;  ?> <?php echo $infos[0]->sobrenome; ?></h3>
            </div>
            <div class="panel-body">
              <div class="row">
                <div class="col-md-3 col-lg-3 " align="center"> <img alt="User Pic" src="<?= base_url() ?>/assets/images/mano.jpg" class="img-circle img-responsive"> </div>
                
                <div class=" col-md-9 col-lg-9 "> 
                  <table class="table table-user-information">
                    <tbody>
                      <tr>
                        <td>Nome:</td>
                        <td><?php echo $infos[0]->nome;  ?> <?php echo $infos[0]->sobrenome; ?></td>
                      </tr>
                      <tr>
                        <td>Usuário:</td>
                        <td><?php echo $infos[0]->username; ?></td>
                      </tr>
                      <tr>
                        <td>Email:</td>
                        <td><?php echo $infos[0]->email; ?></td>
                      </tr>
						<tr>
							<td>Descrição:</td>
							<td><?php echo $infos[0]->descricao; ?></td>
						</tr>                     
                    </tbody>
                  </table>
                  
                </div>
              </div>
            </div>
                <div class="panel-footer">
                    <a class="btn btn-primary" href="#" role="button"><i class="fa fa-pencil"></i>  Editar</a>

                    <span class="pull-right">
                      	<a class="btn btn-danger" href="#" role="button"><i class="fa fa-sign-out"></i>  Sair</a>
	                </span>
    
                </div>
          </div>
        </div>
