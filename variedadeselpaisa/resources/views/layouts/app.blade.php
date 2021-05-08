<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <!-- CSRF Token -->
        <meta name="csrf-token" content="{{ csrf_token() }}">

        <title>{{ config('app.name', 'Laravel') }}</title>

        <!-- Scripts -->
        <script src="{{ asset('js/app.js') }}" defer></script>

        <!-- Styles -->
        <link href="{{ asset('css/app.css') }}" rel="stylesheet">

        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link rel="shortcut icon" href="assets/images/favicon.ico">
        <link href="assets/css/bootstrap.min.css" rel="stylesheet" type="text/css" />
        <link href="assets/css/core.css" rel="stylesheet" type="text/css" />
        <link href="assets/css/components.css" rel="stylesheet" type="text/css" />
        <link href="assets/css/icons.css" rel="stylesheet" type="text/css" />
        <link href="assets/css/pages.css" rel="stylesheet" type="text/css" />
        <link href="assets/css/menu.css" rel="stylesheet" type="text/css" />
        <link href="assets/css/responsive.css" rel="stylesheet" type="text/css" />
        <!-- HTML5 Shiv and Respond.js IE8 support of HTML5 elements and media queries -->
        <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
        <!--[if lt IE 9]>
        <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
        <script src="https://oss.maxcdn.com/libs/respond.js/1.3.0/respond.min.js"></script>
        <![endif]-->
        <script src="assets/js/modernizr.min.js"></script>
        <link href="assets/plugins/bootstrap-tagsinput/dist/bootstrap-tagsinput.css" rel="stylesheet" />
        <link href="assets/plugins/multiselect/css/multi-select.css"  rel="stylesheet" type="text/css" />
        <link href="assets/plugins/select2/dist/css/select2.css" rel="stylesheet" type="text/css">
        <link href="assets/plugins/select2/dist/css/select2-bootstrap.css" rel="stylesheet" type="text/css">
        <link href="assets/plugins/bootstrap-touchspin/dist/jquery.bootstrap-touchspin.min.css" rel="stylesheet" />
        <link href="assets/plugins/switchery/switchery.min.css" rel="stylesheet" />
        <link href="assets/plugins/timepicker/bootstrap-timepicker.min.css" rel="stylesheet">
        <link href="assets/plugins/mjolnic-bootstrap-colorpicker/dist/css/bootstrap-colorpicker.min.css" rel="stylesheet">
        <link href="assets/plugins/bootstrap-datepicker/dist/css/bootstrap-datepicker.min.css" rel="stylesheet">
        <link href="assets/plugins/bootstrap-daterangepicker/daterangepicker.css" rel="stylesheet">
        <link href="assets/plugins/datatables/jquery.dataTables.min.css" rel="stylesheet" type="text/css" />
        <link href="assets/plugins/datatables/buttons.bootstrap.min.css" rel="stylesheet" type="text/css" />
        <link href="assets/plugins/datatables/fixedHeader.bootstrap.min.css" rel="stylesheet" type="text/css" />
        <link href="assets/plugins/datatables/responsive.bootstrap.min.css" rel="stylesheet" type="text/css" />
        <link href="assets/plugins/datatables/scroller.bootstrap.min.css" rel="stylesheet" type="text/css" />
        <!-- Editatable  Css-->
        <link rel="stylesheet" href="assets/plugins/magnific-popup/dist/magnific-popup.css" />
        <link rel="stylesheet" href="assets/plugins/jquery-datatables-editable/datatables.css" />
    </head>
    <body class="fixed-left">
        <div id="wrapper">

            <div class="topbar">

                <div class="topbar-left">
                    <a href="clientes.php" class="logo"><span>Variedades <span>El Paisa</span></span><i class="zmdi zmdi-layers"></i></a>
                </div>
                <div class="navbar navbar-default" role="navigation">
                    <div class="container">
                        <ul class="nav navbar-nav navbar-left">
                            <li>
                                <button class="button-menu-mobile open-left">
                                    <i class="zmdi zmdi-menu"></i>
                                </button>
                            </li>
                            <li>
                                <h4 class="page-title">Clientes</h4>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>

            <!-- Menu Left -->

            <div class="left side-menu">
                <div class="sidebar-inner slimscrollleft">

                    <div class="user-box">
                        <div class="user-img">
                            <img src="assets/images/users/avatar-1.jpg" class="img-circle img-thumbnail img-responsive">
                            <div class="user-status online"><i class="zmdi zmdi-dot-circle"></i></div>
                        </div>
                        <h5><a>Javier Manco</a> </h5>
                    </div>

                    <div id="sidebar-menu">
                        <ul>
                            <li class="text-muted menu-title">Navegación</li>

                            <li>
                                <a href="clientes.php" class="waves-effect"><i class="zmdi zmdi-account-add"></i> <span> Clientes </span> </a>
                            </li>

                            <li>
                                <a href="servicios.php" class="waves-effect"><i class="zmdi zmdi-share"></i> <span> Servicios </span> </a>
                            </li>

                            <li>
                                <a href="factura-manual.php" class="waves-effect"><i class="zmdi zmdi-dot-circle"></i> <span> Factura Manual </span> </a>
                            </li>

                            <li>
                                <a href="grupos.php" class="waves-effect"><i class="zmdi zmdi-accounts"></i> <span> Grupos </span> </a>
                            </li>

                            <li>
                                <a href="veredas.php" class="waves-effect"><i class="zmdi zmdi-city"></i> <span> Veredas </span> </a>
                            </li>

                            <li>
                                <a href="login.php" onclick="<?= session_destroy();?>" class="waves-effect"><i class="zmdi zmdi-power"></i> <span> Cerrar Sesion </span> </a>
                            </li>

                        </ul>
                        <div class="clearfix"></div>
                    </div>
                    <div class="clearfix"></div>

                </div>

            </div>

            <!-- Cierre de Menú left -->


            <div class="content-page" style="background: url(assets/images/bg_clientes.jpg) center; background-size: contain;">
                <div class="content">
                    <div class="container">

                        @yield('content')

                    </div>

                </div>

                <footer class="footer">
                    2016 - 2017 © Adminto.
                </footer>

            </div>
            <div id="dialog" class="modal-block mfp-hide">
                <section class="panel panel-info panel-color">
                    <header class="panel-heading">
                        <h2 class="panel-title">Eliminar Cliente</h2>
                    </header>
                    <div class="panel-body">
                        <div class="modal-wrapper">
                            <div class="modal-text">
                                <p>Esta seguro que desea eliminar este Cliente?</p>
                            </div>
                        </div>

                        <div class="row m-t-20">
                            <div class="col-md-12 text-right">
                                <button id="dialogConfirm" class="btn btn-primary waves-effect waves-light">Eliminar</button>
                                <button id="dialogCancel" class="btn btn-default waves-effect">Cancelar</button>
                            </div>
                        </div>
                    </div>

                </section>
            </div>
        </div>
        <?php include 'includes/scriptsFooter.php';?>
    </body>
</html>
