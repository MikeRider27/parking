<?php session_start();
if (!isset($_SESSION['id_usuario'])) {
    echo "No autorizado<br>";
    echo "<a href='../../'>Iniciar sesion</a>";
    exit();
}


?>
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
                        <a href="#" class="site_title"><i class="fa fa-cog"></i> <span><?php echo $_SESSION['rol']; ?></span></a>
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
                        <?php include "menu.php"; ?>
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
                            <li class="dropdown-menu dropdown-usermenu">
                                <a href="javascript:;" class="user-profile dropdown-toggle" data-toggle="dropdown" aria-expanded="false">
                                    <img src="../../public/images/logo.jpg" alt=""><?php echo $_SESSION['nombres']; ?>
                                    <span class=" fa fa-angle-down"></span>
                                </a>
                                <ul class="dropdown-menu dropdown-usermenu pull-right">
                                    <li><a href="../salir.php"><i class="fa fa-sign-out pull-right"></i> Cerrar sesion</a></li>
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