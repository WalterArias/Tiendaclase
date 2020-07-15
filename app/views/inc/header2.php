<?php
 session_start();
?>
<!DOCTYPE html>

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="ie=edge" />
    <title><?= NAME_APP . ' Version: ' . VERSION_APP; ?></title>

    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css"
        integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">

    <!-- Font Awesome -->
    <link href="//netdna.bootstrapcdn.com/twitter-bootstrap/2.3.2/css/bootstrap-combined.no-icons.min.css"
        rel="stylesheet">
    <link href="//netdna.bootstrapcdn.com/font-awesome/3.2.1/css/font-awesome.css" rel="stylesheet">

    <link rel="stylesheet" href="<?php echo RUTA_URL; ?>/css/AdminLTE.min.css">
    <link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/v/bs4/dt-1.10.20/datatables.min.css" />


    <link rel="stylesheet" href="<?php echo RUTA_URL; ?>/css/AdminLTE.min.css">
    <link rel="stylesheet" type="text/css"
        href="https://cdn.datatables.net/v/dt/jszip-2.5.0/dt-1.10.20/b-1.6.1/b-html5-1.6.1/datatables.min.css" />

    <link rel="stylesheet" href="<?php echo RUTA_URL; ?>/css/skins/skin-blue.min.css">
    <link rel="stylesheet" href="<?php echo RUTA_URL; ?>/css/styles.css">

</head>

<body class="hold-transition skin-blue sidebar-mini">
    <div class="wrapper">

        <!-- Main Header -->
        <header class="main-header">

            <!-- Logo -->
            <a href="index2.html" class="logo">
                <!-- mini logo for sidebar mini 50x50 pixels -->
                <span class="logo-mini"><b>M</b>enu</span>
                <!-- logo for regular state and mobile devices -->
                <span class="logo-lg">ADMIN Tienda</span>
            </a>

            <!-- Header Navbar -->
            <nav class="navbar navbar-static-top" role="navigation">
                <!-- Sidebar toggle button-->
                <a href="#" class="sidebar-toggle" data-toggle="push-menu" role="button">
                    <span class="sr-only">Toggle navigation</span>
                </a>


                <div class="navbar-custom-menu">
                    <ul class="nav navbar-nav">

                        <li class="dropdown user user-menu">
                            <!-- Menu Toggle Button -->
                            <a href="#" class="dropdown-toggle" data-toggle="dropdown">
                                <?php
                               
                                 echo $_SESSION['login'] ;
                                ?>
                            </a>
                            <ul class="dropdown-menu">
                                <!-- The user image in the menu -->
                                <li class="user-header">
                                    <img src="dist/img/user2-160x160.jpg" class="img-circle" alt="User Image">

                                    <p>
                                        <?php
               /*                          echo $_SESSION['nombre'].' '.$_SESSION['apellido'].'<br>';
         echo $_SESSION['email']; */?>
                                    </p>
                                </li>


                                <!-- Menu Footer-->
                                <li class="user-footer">

                                    <div class="pull-right">
                                        <a href="<?php
    /*                                     session_unset();
         session_destroy(); */ ?>" class="btn btn-default btn-flat">Cerrar Sesión
                                        </a>
                                    </div>
                                </li>
                            </ul>
                        </li>
                    </ul>
                </div>





            </nav>
        </header>


        <!-- *****************************    MENU LATERAL  *************************** -->
        <aside class="main-sidebar">
            <!-- sidebar: style can be found in sidebar.less -->
            <section class="sidebar">
                <!-- Sidebar user panel (optional) -->
                <div class="user-panel">
                    <div class="pull-left image">
                        <img src="<?php echo RUTA_URL . '/public/imgs/user7-128x128.jpg' ?>" class="img-circle"
                            alt="User Image">
                    </div>

                </div>



                <ul class="sidebar-menu" data-widget="tree">
                    <li class="header">Menu Principal</li>
                    <!-- Optionally, you can add icons to the links -->
                    <li class="active">
                        <a href="<?php echo RUTA_URL . '/admin' ?>">
                            <i class="icon-compass"></i>
                            <span>Inicio</span></a>
                    </li>
                    <li class="item">
                        a href="index2.html" class="logo"
                        <a href="#" id="Cliente">
                            <i class="icon-male"></i>
                            <span>Clientes</span></a>
                    </li>
                    <li class="item">
                        <a href="<?php echo RUTA_URL . '/admin' ?>">
                            <i class="icon-tags"></i>
                            <span>Categorias</span></a>
                    </li>
                    <li class="item">
                        <a href="<?php echo RUTA_URL . '/admin' ?>">
                            <i class="icon-tasks"></i>
                            <span>Productos</span></a>
                    </li>
                    <li class="item">
                        <a href="<?php echo RUTA_URL . '/admin' ?>">
                            <i class="icon-shopping-cart"></i>
                            <span>Pedidos</span></a>
                    </li>
                    <li class="item">
                        <a href="<?php echo RUTA_URL . '/admin' ?>">
                            <i class="icon-print"></i>
                            <span>Reportes</span></a>
                    </li>


                </ul>
                <!-- /.sidebar-menu -->
            </section>
            <!-- /.sidebar -->
        </aside>