<!-- Left side column. contains the logo and sidebar -->
  <aside class="main-sidebar">

    <!-- sidebar: style can be found in sidebar.less -->
    <section class="sidebar">

      <!-- Sidebar Menu -->
      <ul class="sidebar-menu">

        <?php 
        	$paginaAtual = $this->uri->segment(1); 
        	if( $paginaAtual  == 'painel'){ 
                $pgPainel = "active"; 
            }else if( $paginaAtual == 'cliente'){ 
                $pgClientes = "active"; 
            }else if( $paginaAtual == 'servico' || $paginaAtual == 'ordemservico'){ 
                $pgServicos = "active"; 
            }else if( $paginaAtual == 'tiposervico'){ 
                $pgTipoServico = "active"; 
            }else if( $paginaAtual == 'valorservico'){ 
                $pgValorServico = "active"; 
            }else if( $paginaAtual == 'mensagens'){ 
                $pgMensagens = "active"; 
            }else if( $paginaAtual == 'contas'){ 
                $pgContas = "active";
            }else if( $paginaAtual == 'perfil'){ 
                $pgPerfilb = "active";
            }else{
                $pgPainel = "active"; 
            }
        ?>

        <li class="header">Menu</li>
	        <li class="<?php if( isset($pgPainel) && $pgPainel != NULL){ echo"active";} ?>">
	        	<a href="<?= base_url(); ?>painel"><i class="fa fa-dashboard"></i> <span>Painel</span></a>
	        </li>

        <li class="header">Front Office</li>
	        <li class="<?php if( isset($pgClientes) && $pgClientes != NULL){ echo"active";} ?>">
	        	<a href="<?= base_url(); ?>cliente"><i class="fa fa-user"></i> <span>Clientes</span></a>
	        </li>
	        <li class="<?php if( isset($pgServicos) && $pgServicos != NULL){ echo"active";} ?>">
	        	<a href="<?= base_url(); ?>servico"><i class="fa fa-gears"></i> <span>Serviços</span></a>
	        </li>

        <li class="header">Financeiro</li>
        	<li class="<?php if( isset($pgTipoServico) && $pgTipoServico != NULL){ echo"active";} ?>">
        		<a href="<?= base_url(); ?>tiposervico"><i class="fa fa-book"></i> <span>Tipo de Serviço</span></a>
        	</li>
        	<li class="<?php if( isset($pgValorServico) && $pgValorServico != NULL){ echo"active";} ?>">
        		<a href="<?= base_url(); ?>valorservico"><i class="fa fa-usd"></i> <span>Valor do Serviço</span></a> 
        	</li>
        
        <li class="header">Administrativo</li>
        	<li class="<?php if( isset($pgMensagens) && $pgMensagens != NULL){ echo"active";} ?>">
        		<a href="<?= base_url(); ?>mensagens"><i class="fa fa-comment"></i> <span>Mensagens/Avisos</span></a>
        	</li>
        	<li class="<?php if( isset($pgContas) && $pgContas != NULL){ echo"active";} ?>"> 
        		<a href="<?= base_url(); ?>contas"><i class="fa fa-users"></i> <span>Usuários</span></a>
        	</li>
        	<li class="<?php if( isset($pgPerfil) && $pgPerfil != NULL){ echo"active";} ?>">
        		<a href="<?= base_url(); ?>perfil"><i class="fa fa-user"></i> <span>Meu Perfil</span></a>
        	</li>
        
      </ul>
      <!-- /.sidebar-menu -->
    </section>
    <!-- /.sidebar -->
  </aside>

    <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <h1>
        <?php echo $titulo; ?>
        <small><?php if( isset($descricao) ){ echo $descricao; } ?></small>
      </h1>
      
    </section>

    <!-- Main content -->
    <section class="content">