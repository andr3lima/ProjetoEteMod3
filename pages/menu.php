<!DOCTYPE html>
<html lang="pt-br">

<?php
include ("../controller/session.php");
?>

  <head>
      <!-- Required meta tags -->
      <meta charset="utf-8">
      <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
      <title>Auto Gerenciamento Acadêmico</title>
      <link rel="stylesheet" href="../node_modules/font-awesome/css/font-awesome.min.css" />
      <link rel="stylesheet" href="../node_modules/perfect-scrollbar/dist/css/perfect-scrollbar.min.css" />
      <link rel="stylesheet" href="../css/style.css"/>
      <script type='text/javascript' src='http://ajax.googleapis.com/ajax/libs/jquery/1.9.1/jquery.min.js'></script>
      <script type='text/javascript' src='../js/cep.js'></script>
      <link rel="shortcut icon" href="../images/favicon.png"/>
  </head>
  <body>
      <div class=" container-scroller">
        <!--Navbar-->
        <nav class="navbar bg-primary-gradient col-lg-12 col-12 p-0 fixed-top navbar-inverse d-flex flex-row">
            <div class="bg-white text-center navbar-brand-wrapper">
                 <a class="navbar-brand brand-logo" href="#"><img style="width: 90%;" src="../images/titulo.png" /></a>
                 <a class="navbar-brand brand-logo-mini" href="#"><img src="../images/titulo-mini.png?a" alt=""></a>
            </div>
            <div class="navbar-menu-wrapper d-flex align-items-center">
               
                
                <ul class="navbar-nav ml-lg-auto d-flex align-items-center flex-row">
                    <li class="nav-item">
                        <a class="nav-link profile-pic"><img class="rounded-circle" src="<?php echo $_SESSION['usuarioAvatar']?>" alt=""> <?php echo $_SESSION['usuarioNome'] ?> </a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="../controller/logout.php">Sair</i></a>
                    </li>
                </ul>
                <button class="navbar-toggler navbar-toggler-right hidden-lg-up align-self-center" type="button" data-toggle="offcanvas">
                  <span class="navbar-toggler-icon"></span>
                </button>
            </div>
        </nav>
        <!--End navbar-->
        <div class="container-fluid">
            <div class="row row-offcanvas row-offcanvas-right">
                <nav class="bg-white sidebar sidebar-fixed sidebar-offcanvas" id="sidebar">
                <div class="user-info">
                    <p class="name"><?php echo $_SESSION['usuarioNome'] ?> </p>
                </div>
                    <ul class="nav">
                        <li class="nav-item active">
                            <a class="nav-link" href="index.php">
                                <!-- <i class="fa fa-dashboard"></i> -->
                                <img src="../images/icons/1.png" alt="">
                                <span class="menu-title">Dashboard</span>
                            </a>
                                              
                        <li class="nav-item">
                            <a class="nav-link" data-toggle="collapse" data-parent="#accordion" href="#collapseCadastro" aria-controls="collapseCadastro">
                                <!-- <i class="fa fa-address-book"></i> -->
                                <img src="../images/icons/3.png" alt="">
                                <span class="menu-title"> Disciplinas <i class="fa fa-sort-down"></i></span>
                            </a>
                            <div class="collapse" id="collapseCadastro">
                                <ul class="nav flex-column sub-menu">
                                    <li class="nav-item">
                                        <a class="nav-link" href="cadastro_disciplina.php">
                                      Cadastrar
                                    </a>
                                    </li>
                                    <li class="nav-item">
                                        <a class="nav-link" href="cadastro_cliente.php">
                                      Listar Disciplinas
                                    </a>
                                    </li>
                                    <li class="nav-item">
                                        <a class="nav-link" href="cadastro_tecnico.php">
                                      Notas
                                    </a>
                                    </li>
                                   
                                </ul>
                            </div>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" data-toggle="collapse" data-parent="#accordion" href="#collapseOs" aria-controls="collapseOs">
                                <!-- <i class="fa fa-address-book"></i> -->
                                <img src="../images/icons/6.png" alt="">
                                <span class="menu-title">Atividades<i class="fa fa-sort-down"></i></span>
                            </a>
                            <div class="collapse" id="collapseOs">
                                <ul class="nav flex-column sub-menu">
                                    <li class="nav-item">
                                        <a class="nav-link" href="cadastro_os.php">
                                      Nova atividade
                                    </a>
                                    </li>
                                    <li class="nav-item">
                                        <a class="nav-link" href="lista_os.php">
                                      Listar atividades
                                    </a>
                                    </li>
                                </ul>
                            </div>
                        </li>

                        <li class="nav-item">
                            <a class="nav-link" data-toggle="collapse" data-parent="#accordion" href="#collapserelatorio" aria-controls="collapserelatorio">
                                <!-- <i class="fa fa-address-book"></i> -->
                                <img src="../images/icons/8.png" alt="">
                                <span class="menu-title">Relatório<i class="fa fa-sort-down"></i></span>
                            </a>
                            <div class="collapse" id="collapserelatorio">
                                <ul class="nav flex-column sub-menu">
                                    <li class="nav-item">
                                        <a class="nav-link" href="samples/blank_page.html">
                                      Disciplinas
                                    </a>
                                    </li>
                                    <li class="nav-item">
                                        <a class="nav-link" href="samples/register.html">
                                      Atividades
                                    </a>
                                    </li>
                                 </ul>
                            </div>
                        </li>

                        <li class="nav-item">
                            <a class="nav-link" data-toggle="collapse" data-parent="#accordion" href="#collapsepecas" aria-controls="collapsepecas">
                                <!-- <i class="fa fa-address-book"></i> -->
                                <img src="../images/icons/10.png" alt="">
                                <span class="menu-title">Perfil<i class="fa fa-sort-down"></i></span>
                            </a>
                            <div class="collapse" id="collapsepecas">
                                <ul class="nav flex-column sub-menu">
                                    <li class="nav-item">
                                        <a class="nav-link" href="cadastro_pecas.php">
                                      Atualizar perfil
                                    </a>
                                    </li>
                                    <li class="nav-item">
                                        <a class="nav-link" href="lista_pecas.php">
                                      Excluir perfil
                                    </a>
                                    </li>
                                    
                                </ul>
                            </div>
                        </li>  
                            
                </nav>
                <!-- SIDEBAR ENDS -->