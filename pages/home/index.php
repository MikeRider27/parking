<html lang="en">

<head>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
    <!-- Meta, title, CSS, favicons, etc. -->
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>Parking - System</title>

    <!-- Bootstrap -->
    <link href="../../public/layout/vendors/bootstrap/dist/css/bootstrap.min.css" rel="stylesheet">
    <!-- Font Awesome -->
    <link href="../../public/layout/vendors/font-awesome/css/font-awesome.min.css" rel="stylesheet">
    <!-- NProgress -->
    <link href="../../public/layout/vendors/nprogress/nprogress.css" rel="stylesheet">
    <!-- iCheck -->
    <link href="../../public/layout/vendors/iCheck/skins/flat/green.css" rel="stylesheet">
    <!-- bootstrap-progressbar -->
    <link href="../../public/layout/vendors/bootstrap-progressbar/css/bootstrap-progressbar-3.3.4.min.css" rel="stylesheet">
    <!-- JQVMap -->
    <link href="../../public/layout/vendors/jqvmap/dist/jqvmap.min.css" rel="stylesheet" />
    <!-- bootstrap-daterangepicker -->
    <link href="../../public/layout/vendors/bootstrap-daterangepicker/daterangepicker.css" rel="stylesheet">
    <!-- Custom Theme Style -->
    <link href="../../public/layout/build/css/custom.min.css" rel="stylesheet">
    <script type="text/javascript" src="../../public/layout/js/jquery.js"></script>
    <script type="text/javascript" src="../../public/layout/js/chartJS/Chart.min.js"></script>
    <style>
        h5,
        h6 {
            text-align: center;
        }
        @media print {
            .btn-print {
                display: none !important;
            }
            .main-footer {
                display: none !important;
            }
            .box.box-primary {
                border-top: none !important;
            }
            .nav_menu {
                display: none;
            }
            footer {
                display: none;
            }
        }
    </style>


    <!---dataTable--->

</head>
<!-- Font Awesome -->
<link rel="stylesheet" href="../../public/layout/plugins/datatables/dataTables.bootstrap.css">
<link rel="stylesheet" href="../../public/layout/dist/css/AdminLTE.min.css">
<link rel="stylesheet" href="../../public/layout/plugins/select2/select2.min.css">
<!-- AdminLTE Skins. Choose a skin from the css/skins
         folder instead of downloading all of them to reduce the load. -->
<link rel="stylesheet" href="../../public/layout/dist/css/skins/_all-skins.min.css">

<body class="nav-md">
    <div class="container body">
        <div class="main_container">
            <div class="col-md-3 left_col">
                <div class="left_col scroll-view">
                    <div class="navbar nav_title" style="border: 0;">
                        <a href="#" class="site_title"><i class="fa fa-cog"></i> <span>Administracion</span></a>
                    </div>

                    <div class="clearfix"></div>

                    <!-- menu profile quick info -->
                    <div class="profile clearfix">
                        <div class="profile_pic">
                            <img src="../../public/images/logo.jpg" alt="..." class="img-circle profile_img">
                        </div>
                        <div class="profile_info">
                            <span>Parking</span>
                        </div>
                    </div>
                    <!-- /menu profile quick info -->
                    <br />
                    <!-- sidebar menu -->
                    <div id="sidebar-menu" class="main_menu_side hidden-print main_menu">
                        <div class="menu_section">
                            <h3>Menu</h3>
                            <ul class="nav side-menu">
                                <li><a href="../../public/layout/inicio.php"><i class="fa fa-dashboard"></i> inicio <span class="fa fa-chevron-right"></span></a></li>
                                <li><a><i class="fa fa-braille"></i> Cochera<span class="fa fa-chevron-down"></span></a>
                                    <ul class="nav child_menu">
                                        <li><a href="../cochera/cocheras.php">cocheras</a></li>
                                    </ul>
                                </li>
                                <li><a><i class="fa fa-cc"></i> Tarifa<span class="fa fa-chevron-down"></span></a>
                                    <ul class="nav child_menu">
                                        <li><a href="../tarifa/tarifas.php">Lista de tarifa</a></li>
                                    </ul>
                                </li>
                                <li><a><i class="fa fa-automobile"></i> Vehiculo<span class="fa fa-chevron-down"></span></a>
                                    <ul class="nav child_menu">
                                        <li><a href="../vehiculo/vehiculo.php">Lista de vehiculos</a></li>
                                        <li><a href="../vehiculo/vehiculo_agregar.php">Agragar </a></li>
                                    </ul>
                                </li>
                                <li><a><i class="fa fa-database"></i> Cliente<span class="fa fa-chevron-down"></span></a>
                                    <ul class="nav child_menu">
                                        <li><a href="../cliente/cliente.php">Lista de clientes</a></li>
                                        <li><a href="../cliente/cliente_agregar.php">Agragar </a></li>
                                    </ul>
                                </li>
                                <li><a><i class="fa fa-user"></i> Usuarios<span class="fa fa-chevron-down"></span></a>
                                    <ul class="nav child_menu">
                                        <li><a href="../usuario/usuario.php">usuario</a></li>
                                        <li><a href="../usuario/usuario_agregar.php">agregar</a></li>
                                    </ul>
                                </li>
                                <li><a><i class="fa fa-taxi"></i> ESTADIA<span class="fa fa-chevron-down"></span></a>
                                    <ul class="nav child_menu">
                                        <li><a href="../estadia/estadia.php">ESTADIA</a></li>
                                    </ul>
                                </li>
                                <li><a><i class="fa fa-area-chart"></i> Reportes<span class="fa fa-chevron-down"></span></a>
                                    <ul class="nav child_menu">
                                        <li><a href="../reportes/reportes_por_dia.php">por dia</a></li>
                                        <li><a href="../reportes/reportes_por_fecha.php">por fecha</a></li>
                                        <li><a href="../reportes/reportes_por_mes.php">por mes</a></li>
                                        <li><a href="../reportes/reportes_ultimos_7dias.php">ultimos 7 dias</a></li>
                                    </ul>
                                </li>
                                <li><a><i class="fa fa-money"></i> gastos<span class="fa fa-chevron-down"></span></a>
                                    <ul class="nav child_menu">
                                        <li><a href="../gastos/gastos.php">gastos</a></li>
                                        <li><a href="../gastos/gastos_agregar.php">agregar</a></li>
                                        <li><a href="../gastos/gastos_informe.php">gastos</a></li>
                                    </ul>
                                </li>
                                <li><a><i class="fa fa-gear"></i> Configuracion<span class="fa fa-chevron-down"></span></a>
                                    <ul class="nav child_menu">
                                        <li><a href="../configuracion/configuracion.php">Empresa</a></li>
                                        <li><a href="../otros/editar_password.php">Editar password</a></li>
                                    </ul>
                                </li>
                                <li><a><i class="fa fa-database"></i> Base de datos<span class="fa fa-chevron-down"></span></a>
                                    <ul class="nav child_menu">
                                        <li><a href="../otros/vaciar_bd.php" onClick="return confirm('¿Está seguro de que quieres vaciar la base de datos ??');">Vaciar base de datos</a></li>
                                        <li><a href="../otros/respaldo_add.php">Respaldo</a></li>
                                    </ul>
                                </li>
                        </div>
                    </div>
                    <!-- /sidebar menu -->
                </div>
            </div>
            <!-- top navigation -->
            <div class="top_nav">
                <div class="nav_menu">
                    <nav>
                        <div class="nav toggle">
                            <a id="menu_toggle"><i class="fa fa-bars"></i></a>
                        </div>
                        <ul class="nav navbar-nav navbar-right">
                            <li class="">
                                <a href="javascript:;" class="user-profile dropdown-toggle" data-toggle="dropdown" aria-expanded="false">
                                    <img src="../../public/images/logo.jpg" alt="">admin
                                    <span class=" fa fa-angle-down"></span>
                                </a>
                                <ul class="dropdown-menu dropdown-usermenu pull-right">
                                    <li><a href="../../public/layout/logout.php"><i class="fa fa-sign-out pull-right"></i> Cerrar sesion</a></li>
                                </ul>
                            </li>
                        </ul>
                    </nav>
                </div>
            </div> <!-- /top navigation -->
            <style>
                label {
                    color: black;
                }

                li {
                    color: white;
                }

                ul {
                    color: white;
                }

                #buscar {
                    text-align: right;
                }
            </style>
            <!-- page content -->
            <div class="right_col" role="main">
                
                <div class="box-header">
                    <h3 class="box-title"> MENU</h3>
                </div><!-- /.box-header -->
                <div class="box-body">
                    <div class="box-header with-border">
                        <h3 class="box-title"></h3>
                    </div><!-- /.box-header -->
                    <div class="box-body">
                        <div class="row">
                            <div class="col-lg-3 col-xs-6">
                                <!-- small box -->
                                <div class="small-box bg-aqua">
                                    <div class="inner">
                                        <h4> 1 </h4>
                                        <p>Caja</p>
                                    </div>
                                    <div class="icon"><img height="80" width="80" src="../../public/images/cajero.png">
                                        <i class=""></i>
                                    </div>
                                    <a href="../../public/layout/caja.php" class="small-box-footer">Mas info<i class="fa fa-arrow-circle-right"></i></a>
                                </div>
                            </div>
                            <div class="col-lg-3 col-xs-6">
                                <!-- small box -->
                                <div class="small-box bg-black">
                                    <div class="inner">
                                        <h4> 4 </h4>
                                        <p>usuarios</p>
                                    </div>
                                    <div class="icon"><img height="80" width="80" src="../../public/images/comittee.png">
                                        <i class=""></i>
                                    </div>
                                    <a href="../usuario/usuario.php" class="small-box-footer">Mas info<i class="fa fa-arrow-circle-right"></i></a>
                                </div>
                            </div>
                            <div class="col-lg-3 col-xs-6">
                                <!-- small box -->
                                <div class="small-box bg-orange">
                                    <div class="inner">
                                        <h4> 1 </h4>
                                        <p>Configuracion empresa</p>
                                    </div>
                                    <div class="icon"><img height="80" width="80" src="../../public/images/setting.png">
                                        <i class=""></i>
                                    </div>
                                    <a href="../configuracion/configuracion.php" class="small-box-footer">Mas info<i class="fa fa-arrow-circle-right"></i></a>
                                </div>
                            </div>
                            <div class="col-lg-3 col-xs-6">
                                <!-- small box -->
                                <div class="small-box bg-red">
                                    <div class="inner">
                                        <h4> 1 </h4>
                                        <p>Clientes</p>
                                    </div>
                                    <div class="icon"><img height="80" width="80" src="../../public/images/school.png">
                                        <i class=""></i>
                                    </div>
                                    <a href="../cliente/cliente.php" class="small-box-footer">Mas info<i class="fa fa-arrow-circle-right"></i></a>
                                </div>
                            </div>
                            <div class="col-lg-3 col-xs-6">
                                <!-- small box -->
                                <div class="small-box bg-red">
                                    <div class="inner">
                                        <h4> 5 </h4>
                                        <p>Vehiculo</p>
                                    </div>
                                    <div class="icon"><img height="80" width="80" src="../../public/images/coche.png">
                                        <i class=""></i>
                                    </div>
                                    <a href="../vehiculo/vehiculo.php" class="small-box-footer">Mas info<i class="fa fa-arrow-circle-right"></i></a>
                                </div>
                            </div>
                            <div class="col-lg-3 col-xs-6">
                                <!-- small box -->
                                <div class="small-box bg-blue">
                                    <div class="inner">
                                        <h4> 4 </h4>
                                        <p>Tarifas </p>
                                    </div>
                                    <div class="icon"><img height="80" width="80" src="../../public/images/fair.png">
                                        <i class=""></i>
                                    </div>
                                    <a href="../tarifa/tarifas.php" class="small-box-footer">Mas info<i class="fa fa-arrow-circle-right"></i></a>
                                </div>
                            </div>
                            <div class="col-lg-3 col-xs-6">
                                <!-- small box -->
                                <div class="small-box bg-green">
                                    <div class="inner">
                                        <h4> 0 </h4>
                                        <p>Gastos</p>
                                    </div>
                                    <div class="icon"><img height="80" width="80" src="../../public/images/fair.png">
                                        <i class=""></i>
                                    </div>
                                    <a href="#" class="small-box-footer">-------</a>
                                </div>
                            </div>
                            <div class="col-lg-3 col-xs-6">
                                <!-- small box -->
                                <div class="small-box bg-purple">
                                    <div class="inner">
                                        <h4> 1 </h4>
                                        <p>Cochera</p>
                                    </div>
                                    <div class="icon"><img height="80" width="80" src="../../public/images/espacio.png">
                                        <i class=""></i>
                                    </div>
                                    <a href="../cochera/cocheras.php" class="small-box-footer">Mas info<i class="fa fa-arrow-circle-right"></i></a>
                                </div>
                            </div>
                            <div class="col-lg-3 col-xs-6">
                                <!-- small box -->
                                <div class="small-box bg-purple">
                                    <div class="inner">
                                        <h4> 1 </h4>
                                        <p>Estadia</p>
                                    </div>
                                    <div class="icon"><img height="80" width="80" src="../../public/images/entradas.png">
                                        <i class=""></i>
                                    </div>
                                    <a href="../estadia/estadia.php" class="small-box-footer">Mas info<i class="fa fa-arrow-circle-right"></i></a>
                                </div>
                            </div>
                        </div><!--row-->
                    </div><!-- /.col (right) -->
                </div><!-- /.box-body -->
            </div><!-- /.col -->
        </div><!-- /.row -->
    </div><!-- /.box-body -->
   
    <!-- /page content -->
    <!-- footer content -->
    <footer>
        <div class="pull-right">
            Sistema de parqueo <a href="#"></a>
        </div>
        <div class="clearfix"></div>
    </footer>
    <!-- /footer content -->  
    <script src="../../public/layout/vendors/jquery/dist/jquery.min.js"></script>
    <!-- Bootstrap -->
    <script src="../../public/layout/vendors/bootstrap/dist/js/bootstrap.min.js"></script>
    <!-- FastClick -->
    <script src="../../public/layout/vendors/fastclick/lib/fastclick.js"></script>
    <!-- NProgress -->
    <script src="../../public/layout/vendors/nprogress/nprogress.js"></script>
    <!-- iCheck -->
    <script src="../../public/layout/vendors/iCheck/icheck.min.js"></script>
    <!-- Datatables -->
    <script src="../../public/layout/vendors/datatables.net/js/jquery.dataTables.min.js"></script>
    <script src="../../public/layout/vendors/datatables.net-bs/js/dataTables.bootstrap.min.js"></script>
    <script src="../../public/layout/vendors/datatables.net-buttons/js/dataTables.buttons.min.js"></script>
    <script src="../../public/layout/vendors/datatables.net-buttons-bs/js/buttons.bootstrap.min.js"></script>
    <script src="../../public/layout/vendors/datatables.net-buttons/js/buttons.flash.min.js"></script>
    <script src="../../public/layout/vendors/datatables.net-buttons/js/buttons.html5.min.js"></script>
    <script src="../../public/layout/vendors/datatables.net-buttons/js/buttons.print.min.js"></script>
    <script src="../../public/layout/vendors/datatables.net-fixedheader/js/dataTables.fixedHeader.min.js"></script>
    <script src="../../public/layout/vendors/datatables.net-keytable/js/dataTables.keyTable.min.js"></script>
    <script src="../../public/layout/vendors/datatables.net-responsive/js/dataTables.responsive.min.js"></script>
    <script src="../../public/layout/vendors/datatables.net-responsive-bs/js/responsive.bootstrap.js"></script>
    <script src="../../public/layout/vendors/datatables.net-scroller/js/datatables.scroller.min.js"></script>
    <script src="../../public/layout/vendors/jszip/dist/jszip.min.js"></script>
    <script src="../../public/layout/vendors/pdfmake/build/pdfmake.min.js"></script>
    <script src="../../public/layout/vendors/pdfmake/build/vfs_fonts.js"></script>
    <!-- Custom Theme Scripts -->
    <script src="../../public/layout/build/js/custom.min.js"></script>
    <!-- Datatables -->
    <script>
        $(document).ready(function() {
            var handleDataTableButtons = function() {
                if ($("#datatable-buttons").length) {
                    $("#datatable-buttons").DataTable({
                        dom: "Bfrtip",
                        buttons: [{
                                extend: "copy",
                                className: "btn-sm"
                            },
                            {
                                extend: "csv",
                                className: "btn-sm"
                            },
                            {
                                extend: "excel",
                                className: "btn-sm"
                            },
                            {
                                extend: "pdfHtml5",
                                className: "btn-sm"
                            },
                            {
                                extend: "print",
                                className: "btn-sm"
                            },
                        ],
                        responsive: true
                    });
                }
            };

            TableManageButtons = function() {
                "use strict";
                return {
                    init: function() {
                        handleDataTableButtons();
                    }
                };
            }();

            $('#datatable').dataTable();

            $('#datatable-keytable').DataTable({
                keys: true
            });

            $('#datatable-responsive').DataTable();

            $('#datatable-scroller').DataTable({
                ajax: "js/datatables/json/scroller-demo.json",
                deferRender: true,
                scrollY: 380,
                scrollCollapse: true,
                scroller: true
            });

            $('#datatable-fixed-header').DataTable({
                fixedHeader: true
            });

            var $datatable = $('#datatable-checkbox');

            $datatable.dataTable({
                'order': [
                    [1, 'asc']
                ],
                'columnDefs': [{
                    orderable: false,
                    targets: [0]
                }]
            });
            $datatable.on('draw.dt', function() {
                $('input').iCheck({
                    checkboxClass: 'icheckbox_flat-green'
                });
            });

            TableManageButtons.init();
        });
    </script>


    <script>
        $(document).ready(function() {
            $('#example2').dataTable({
                    "language": {
                        "paginate": {
                            "previous": "anterior",
                            "next": "posterior"
                        },
                        "search": "Buscar:",


                    },

                    "info": false,
                    "lengthChange": false,
                    "searching": false,


                    "searching": true,
                }

            );
        });
    </script>
    <!-- /gauge.js -->
</body>

</html>