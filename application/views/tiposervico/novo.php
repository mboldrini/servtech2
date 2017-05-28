<div class="row">

<div class="col-md-4">

<?php echo form_open(); ?>

<?php 
  if( isset($mensagem) && $mensagem != NULL ){
    echo '<div class="alert '.$mensagem[1].' alert-dismissible" role="alert">
  <button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button>
  '.$mensagem[0].'</div>';
  }
?>

  
  <div class="form-group">
    <label for="exampleInputEmail1">Tipo:</label>
    <?php echo form_input(
      'tipo', 
      '',
      array( 'autofocus ' =>  'autofocus',
             'class'    =>  'form-control col-md-3',
             'required'   =>  'required',
             'placeholder'  =>  'Tipo de Serviço',
            ) 
        ); 
    ?>
  </div>

  <div class="form-group">
      <label for="exampleInputEmail1">Permite Desconto:</label>
    <?php 
      $perDes = array(
        "Não"   =>  "0", 
        "Sim"  =>  "1",
      );
    ?>  
    <select name="perDes" id="perDes" class="form-control">
      <?php foreach( $perDes as $key => $desconto ): ?>
          <option value="<?php echo $desconto; ?>"><?php echo $key; ?></option>
      <?php endforeach; ?>
    </select>
  </div>

  <div class="form-group">
      <label for="exampleInputEmail1">Permite Acrescimo:</label>
      <?php 
        $perAcr = array(
          "Não"   =>  "0", 
          "Sim"  =>  "1",
        );
      ?>  
      <select name="perAcr" id="perAcr" class="form-control">
        <?php foreach( $perAcr as $key => $desconto ): ?>
            <option value="<?php echo $desconto; ?>"><?php echo $key; ?></option>
        <?php endforeach; ?>
      </select>
  </div>

  <div class="form-group">
    <?php echo form_label('Data de Cadastro:', 'date'); ?>
    <?php date_default_timezone_set('America/Sao_Paulo'); $date = date('d-m-Y'); ?>
    <?php echo form_input('datCad', $date ,array( 'class'=>'form-control col-md-3', 'required'=>'required', 'readonly'=>'readonly','data-mask' => 'data-mask',
             'data-inputmask' => '\'alias\': \'dd/mm/yyyy\'',  ) ); ?>
  </div>
  
  <div class="form-group">
      <?php echo form_label('ID do Usuário:', 'usuario'); ?>
      <?php 
        $opcoes = array(
          $infos[0]->id => $infos[0]->nome,
        );
      ?>
      <?php  echo form_dropdown('idUsu', $opcoes, '', array('class'=>'form-control', 'readonly'=>'readonly')  ); ?>
  </div>



	<button type="submit" class="btn btn-primary">Cadastrar</button>

<?php form_close(); ?>

	</div><!--col-md-4-->
</div><!--row-->
