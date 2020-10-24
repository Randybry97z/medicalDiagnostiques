<!DOCTYPE html>
<html lang="es" dir="ltr">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>OliCati | www.laboratoriomdt.com</title>
    <!-- Tell the browser to be responsive to screen width -->
    <meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" name="viewport">
    <!-- Bootstrap 3.3.5 -->
    <link rel="stylesheet" href="<?=base_url?>public/css/bootstrap.min.css" />
    <!-- Font Awesome -->
    <link rel="stylesheet" href="<?=base_url?>public/css/font-awesome.css" />
    <!-- Theme style -->
    <link rel="stylesheet" href="<?=base_url?>public/css/AdminLTE.min.css" />
    <!-- AdminLTE Skins. Choose a skin from the css/skins
         folder instead of downloading all of them to reduce the load. -->
    <link rel="stylesheet" href="<?=base_url?>public/css/_all-skins.min.css" />
    <link rel="apple-touch-icon" href="<?=base_url?>public/img/apple-touch-icon.png" />
    <link rel="shortcut icon" href="<?=base_url?>public/img/favicon.ico" />

    <!-- DATATABLES -->
    <link rel="stylesheet" href="<?=base_url?>public/datatables/jquery.dataTables.min.css" />
    <link rel="stylesheet" href="<?=base_url?>public/datatables/buttons.dataTables.min.css" />
    <link rel="stylesheet" href="<?=base_url?>public/datatables/responsive.dataTables.min.css" />

    <!-- SELECT -->
    <link rel="stylesheet" href="<?=base_url?>public/css/bootstrap-select.min.css" />

    <!-- DATETIMEPICKER -->
    <link rel="stylesheet" href="<?=base_url?>public/css/bootstrap-datetimepicker.min.css" />
    <!-- jQuery 2.1.4 -->
    <script src="<?=base_url?>public/js/jquery-3.1.1.min.js"></script>
    <script src="<?=base_url?>public/js/jquery.idletimer.js"></script>

    <!-- Bootstrap 3.3.5 -->
    <script src="<?=base_url?>public/js/bootstrap.min.js"></script>
    <!-- AdminLTE App -->
    <script src="<?=base_url?>public/js/app.min.js"></script>

    <!-- DATATABLES -->
    <script src="<?=base_url?>public/datatables/jquery.dataTables.min.js"></script>
    <script src="<?=base_url?>public/datatables/dataTables.buttons.min.js"></script>
    <script src="<?=base_url?>public/datatables/buttons.html5.min.js"></script>
    <script src="<?=base_url?>public/datatables/buttons.colVis.min.js"></script>
    <script src="<?=base_url?>public/datatables/jszip.min.js"></script>
    <script src="<?=base_url?>public/datatables/pdfmake.min.js"></script>
    <script src="<?=base_url?>public/datatables/vfs_fonts.js"></script>
    <script src="<?=base_url?>public/js/bootbox.min.js"></script>

    <!-- SELECT -->
    <script src="<?=base_url?>public/js/bootstrap-select.min.js"></script>

    <!-- DATETIMEPICKER -->
    <script src="<?=base_url?>public/js/bootstrap-datetimepicker.min.js"></script>
    <script src="<?=base_url?>public/js/session.js"></script>
</head>

<body class="hold-transition skin-blue-light sidebar-mini">
    <div class="wrapper">
        <header class="main-header">
            <!-- Logo -->
            <a href="<?=base_url?>?controller=InicioController&action=index" class="logo">
                <!-- mini logo for sidebar mini 50x50 pixels -->
                <span class="logo-mini"><b>MDT</b></span>
                <!-- logo for regular state and mobile devices -->
                <span class="logo-lg"><b>MDT</b>Sistema</span>
            </a>

            <!-- Header Navbar: style can be found in header.less -->
            <nav class="navbar navbar-static-top" role="navigation">
                <!-- Sidebar toggle button-->
                <a href="#" class="sidebar-toggle" data-toggle="offcanvas" role="button">
                    <span class="sr-only">Navegación</span>
                </a>
                <!-- Navbar Right Menu -->
                <div class="navbar-custom-menu">
                    <ul class="nav navbar-nav">
                        <li class="dropdown user user-menu">
                            <button class="btn btn-info dropdown-toggle" type="button" data-toggle="collapse"
                                data-target="#user" style="margin: 1rem;">
                                <span class="hidden-xs"><?= $_SESSION['identity']->nombre; ?></span>
                            </button>
                            <div class="collapse" id="user">
                                <ul class="ml-auto" style="list-style-type: none;">
                                    <!-- Menu Footer-->
                                    <li class="user-footer">
                                        <div class="pull-left" style="float: left; margin: 2rem">
                                            <a href="<?=base_url?>?controller=UsuarioController&action=perfil&id=<?=$_SESSION['identity']->idusuario?>"
                                                class="btn btn-success btn-flat">Mi perfil</a>
                                        </div>
                                        <div class="pull-right" style="float: right; margin: 2rem">
                                            <a href="<?=base_url?>?controller=UsuarioController&action=logout" class="btn btn-danger btn-flat">Cerrar
                                                Sesión</a>
                                        </div>
                                    </li>
                                </ul>
                            </div>
                        </li>
                    </ul>
                </div>
            </nav>
        </header>
        <!-- Left side column. contains the logo and sidebar -->
        <aside class="main-sidebar">
            <!-- sidebar: style can be found in sidebar.less -->
            <section class="sidebar">
                <!-- sidebar menu: : style can be found in sidebar.less -->
                <ul class="sidebar-menu">
                    <li class="header"></li>
                    <?php if ($_SESSION['identity']) : ?>
                    <?php $clis = Utils::showClientesHead();?>
                    <?php while($cli = $clis->fetch_object()): ?>
                    <li style="display:<?=Utils::isAdmin() || Utils::isCallCenter() || Utils::isCoordinador()? 'block' : 'none';?>">
                        <button class="btn btn-secondary text-muted" type="button" data-toggle="collapse"
                            data-target="#<?=$cli->idpersona?>" style="width: 100%;text-align: left;">
                            <?=$cli->nombre?> <i style="float: right;" class="fa fa-angle-right"></i>
                        </button>
                        <div class="collapse " id="<?=$cli->idpersona?>">
                            <ul class="ml-auto">
                                <?php $programs = Utils::showClientProgram($cli->idpersona);?>
                                <?php while($pros = $programs->fetch_object()): ?>
                                <li class="item">
                                    <button class="btn btn-outline-secondary text-muted" type="button"
                                        data-toggle="collapse" data-target="#<?=$cli->idpersona.$pros->nombre?>"
                                        style="width: 100%;text-align: left;">
                                        <?=$pros->nombre?> <i style="float: right;" class="fa fa-angle-right"></i>
                                    </button>
                                    <div class="collapse " id="<?=$cli->idpersona.$pros->nombre?>">
                                        <ul class="ml-auto">
										
                                            <li class="item">
											    <?php if(Utils::isAdmin() || Utils::isCallCenter() || Utils::isCoordinador()):?>
                                                <a class="link scroll-link"
                                                    href="<?=base_url?>?controller=PacienteController&action=registro&idcliente=<?=$cli->idpersona?>&idprograma=<?=$pros->idprograma?>">
                                                    <span>Registro de pacientes</span>
                                                </a>
												<?php else:?>
												<a class="link scroll-link"
                                                    href="<?=base_url?>?controller=InicioController&action=index">
                                                    <span>Registro de pacientes</span>
                                                </a>
												<?php endif; ?>
                                            </li>
                                            <li class="item">
											<?php if(Utils::isAdmin()||Utils::isCallCenter()||Utils::isCoordinador()):?>
												<a class="link scroll-link"
                                                    href="<?=base_url?>?controller=PacienteController&action=programa&idprograma=<?=$pros->idprograma?>&idcliente=<?=$cli->idpersona?>">
                                                    <span>Gestión de pacientes</span>
                                                </a>
											<?php else:?>
												<a class="link scroll-link"
                                                    href="<?=base_url?>?controller=InicioController&action=index">
                                                    <span>Gestión de pacientes</span>
                                                </a>
											<?php endif; ?>
                                            </li>
                                            <li class="item">
											    <?php if(Utils::isAdmin()||Utils::isCallCenter()||Utils::isCoordinador()):?>
                                                <a class="link scroll-link"
                                                    href="<?=base_url?>?controller=PacienteController&action=programaCancelados&idprograma=<?=$pros->idprograma?>&idcliente=<?=$cli->idpersona?>">
                                                    <span>Pacientes cancelados</span>
                                                </a>
												<?php else:?>
												<a class="link scroll-link"
                                                    href="<?=base_url?>?controller=InicioController&action=index">
                                                    <span>Pacientes cancelados</span>
                                                </a>
												<?php endif; ?>
                                            </li>
                                        </ul>
                                    </div>
                                </li>
                                <?php endwhile; ?>
                            </ul>
                        </div>
                    </li>
                    <?php endwhile ?>
                    <li>
                        <a class="link scroll-link" href="<?=base_url?>?controller=LaboratorioController&action=gestion" style="display:<?=Utils::isAdmin() || Utils::isCoordinador() || Utils::isCallCenter()? 'block' : 'none';?>">
                            <i class="fa fa-flask"></i> <span>Laboratorios</span>
                        </a>
                    </li>
                    <li>
                        <a href="<?=base_url?>?controller=UsuarioController&action=gestion" style="display:<?=Utils::isAdmin() ? 'block' : 'none';?>">
                            <i class="fa fa-user"></i> <span>Gestión de usuarios</span>
                        </a>
                    </li>
                    <li>
                        <a href="<?=base_url?>?controller=PermisoController&action=index" style="display:<?=Utils::isAdmin() ? 'block' : 'none';?>">
                            <i class="fa fa-check"></i> <span>Gestión de permisos</span>
                        </a>
                    </li>
                    <li>
                        <a href="<?=base_url?>?controller=PersonaController&action=clientes" style="display:<?=Utils::isAdmin() ? 'block' : 'none';?>">
                            <i class="fa fa-group"></i>
                            <span>Gestion de Clientes</span>
                        </a>
                    </li>
                    <li>
                        <a href="<?=base_url?>?controller=ProgramaController&action=gestion" style="display:<?=Utils::isAdmin() || Utils::isCoordinador() ? 'block' : 'none';?>">
                            <i class="fa fa-tasks"></i> <span>Gestión de programas</span>
                        </a>
                    </li>
                    <li>
                        <a href="<?=base_url?>?controller=ResultadoController&action=gestion" style="display:<?=Utils::isAdmin() || Utils::isCoordinador() || Utils::isCallCenter() || Utils::isMedicoTratante() || Utils::isMedicoAsociado()? 'block' : 'none';?>">
                            <i class="fa fa-tasks"></i> <span>Captura de resultados</span>
                        </a>
                    </li>

                    <?php endif;  ?>
                </ul>
            </section>
            <!-- /.sidebar -->
        </aside>
    </div>