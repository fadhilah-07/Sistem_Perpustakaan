
<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
        <title>Sistem Perpustakaan | Dashboard</title>
        <meta content='width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no' name='viewport'>
        <!-- bootstrap 3.0.2 -->
        <link href="<?php echo base_url(); ?>AdminLTE/css/bootstrap.min.css" rel="stylesheet" type="text/css" />
        <!-- font Awesome -->
        <link href="<?php echo base_url(); ?>AdminLTE/css/font-awesome.min.css" rel="stylesheet" type="text/css" />
        <!-- Ionicons -->
        <link href="<?php echo base_url(); ?>AdminLTE/css/ionicons.min.css" rel="stylesheet" type="text/css" />
        <!-- jvectormap -->
        <link href="<?php echo base_url(); ?>AdminLTE/css/jvectormap/jquery-jvectormap-1.2.2.css" rel="stylesheet" type="text/css" />
        <!-- fullCalendar -->
        <link href="<?php echo base_url(); ?>AdminLTE/css/fullcalendar/fullcalendar.css" rel="stylesheet" type="text/css" />
        <!-- Daterange picker -->
        <link href="<?php echo base_url(); ?>AdminLTE/css/daterangepicker/daterangepicker-bs3.css" rel="stylesheet" type="text/css" />
        <!-- bootstrap wysihtml5 - text editor -->
        <link href="<?php echo base_url(); ?>AdminLTE/css/bootstrap-wysihtml5/bootstrap3-wysihtml5.min.css" rel="stylesheet" type="text/css" />
        <!-- Theme style -->
        <link href="<?php echo base_url(); ?>AdminLTE/css/AdminLTE.css" rel="stylesheet" type="text/css" />

        <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
        <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
        <!--[if lt IE 9]>
          <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
          <script src="https://oss.maxcdn.com/libs/respond.js/1.3.0/respond.min.js"></script>
        <![endif]-->
    </head>
    <body class="skin-black">
        <!-- header logo: style can be found in header.less -->
        <header class="header">
            <a href="" class="logo">
                <!-- Add the class icon to your logo image or logo icon to add the margining -->
                Sistem Perpustakaan
            </a>
            <!-- Header Navbar: style can be found in header.less -->
            <nav class="navbar navbar-static-top" role="navigation">
                <!-- Sidebar toggle button-->
                <a href="<?php echo base_url(); ?>AdminLTE/" class="navbar-btn sidebar-toggle" data-toggle="offcanvas" role="button">
                    <span class="sr-only">Toggle navigation</span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </a>                                                                                          
                <div class="navbar-right">
                    <ul class="nav navbar-nav">
                        <!-- User Account: style can be found in dropdown.less -->
                        <li class="dropdown user user-menu">

                            <a href="#" class="dropdown-toggle" data-toggle="dropdown">
                                <i class="glyphicon glyphicon-user"></i>
                                <span>Dhaharotul Fadhilah <i class="caret"></i></span>
                            </a>
                            <ul class="dropdown-menu">
                                <!-- User image -->
                                <li class="user-header bg-light-green">
                                    <img src="<?php echo base_url(); ?>AdminLTE/img/aku.JPG" class="img-circle" alt="User Image" />
                                    <p>
                                        Dhaharotul Fadhilah- Admin
                                        <small>Member since April. 2020</small>
                                    </p>
                                </li>
                                <!-- Menu Body -->
                                 <li class="user-body">
                                    <div class="col-xs-4 text-center">
                                        <a href="#"></a>
                                    </div>
                                    <div class="col-xs-4 text-center">
                                        <a href="#"></a>
                                    </div>
                                    <div class="col-xs-4 text-center">
                                        <a href="#"></a>
                                    </div>
                                </li>
                                <!-- Menu Footer-->
                                <li class="user-footer">
                                    <div class="pull-left">
                                        <a href="#" class="btn btn-default btn-flat">Profile</a>
                                    </div>
                                    <div class="pull-right">
                                        <a href="#" class="btn btn-default btn-flat">Sign out</a>
                                    </div>
                                </li>
                            </ul>
                        </div>
                    </nav>
                </header>
        <div class="wrapper row-offcanvas row-offcanvas-left">
            <body class="skin-black">
            <!-- Left side column. contains the logo and sidebar -->
            <aside class="left-side sidebar-offcanvas">
                <!-- sidebar: style can be found in sidebar.less -->
                <section class="sidebar">
                    <!-- Sidebar user panel -->
                    <div class="user-panel">
                        <div class="pull-left image">
                            <img src="<?php echo base_url(); ?>AdminLTE/img/aku.JPG" class="img-circle" alt="User Image" />
                        </div>
                        <div class="pull-left info">
                            <p>Hello, Dhoha</p>

                            <a href="#"><i class="fa fa-circle text-success"></i> Online</a>
                        </div>
                    </div>
                    <!-- search form -->
                    <form action="#" method="get" class="sidebar-form">
                        <div class="input-group">
                            <input type="text" name="q" class="form-control" placeholder="Search..."/>
                            <span class="input-group-btn">
                                <button type='submit' name='seach' id='search-btn' class="btn btn-flat"><i class="fa fa-search"></i></button>
                            </span>
                        </div>
                    </form>
                    <!-- /.search form -->
                    <!-- sidebar menu: : style can be found in sidebar.less -->
                    <ul class="sidebar-menu">
                        <li class="active">
                            <a href="<?php echo base_url(''); ?>">
                                <i class="fa fa-dashboard"></i> <span>Dashboard</span>
                            </a>
                        </li>
                        <li class="treeview">
                            <a href="#">
                                <i class="fa fa-users"></i>
                                <span>Anggota</span>
                                <i class="fa fa-angle-left pull-right"></i>
                            </a>
                            <ul class="treeview-menu">
                                <li><a href="<?php echo base_url('Anggota/anggota1'); ?>"><i class="fa fa-angle-double-right"></i> Daftar Anggota</a></li>
                            </ul>
                        </li>
                        <li class="treeview">
                            <a href="#">
                                <i class="fa fa-book"></i>
                                <span>Master Buku</span>
                                <i class="fa fa-angle-left pull-right"></i>
                            </a>
                            <ul class="treeview-menu">
                                <li><a href="<?php echo base_url(); ?>"><i class="fa fa-angle-double-right"></i> Cari Buku</a></li>
                                <li><a href="<?php echo base_url('Buku/buku_perpus'); ?>"><i class="fa fa-angle-double-right"></i> Daftar Buku</a></li>
                            </ul>
                        </li>
                        <li class="treeview">
                            <a href="#">
                                <i class="fa fa-edit"></i>
                                <span>Transaksi</span>
                                <i class="fa fa-angle-left pull-right"></i>
                            </a>
                            <ul class="treeview-menu">
                                <li><a href="<?php echo base_url('Peminjaman/peminjaman_buku'); ?>"><i class="fa fa-angle-double-right"></i> Peminjaman</a></li>
                                <li><a href="<?php echo base_url('Pengembalian/pengembalian_buku'); ?>"><i class="fa fa-angle-double-right"></i> Pengembalian</a></li>
                                <li><a href="<?php echo base_url(''); ?>"><i class="fa fa-angle-double-right"></i> Denda</a></li>
                            </ul>
                        </li>
                        <li class="treeview">
                            <a href="#">
                                <i class="fa fa-file-text-o"></i> <span>Laporan</span>
                                <i class="fa fa-angle-left pull-right"></i>
                            </a>
                            <ul class="treeview-menu">
                                <li><a href="<?php echo base_url(); ?>"><i class="fa fa-angle-double-right"></i> Pengunjung</a></li>
                                <li><a href="<?php echo base_url(); ?>"><i class="fa fa-angle-double-right"></i> Transaksi</a></li>
                                <li><a href="<?php echo base_url(); ?>"><i class="fa fa-angle-double-right"></i> Buku</a></li>
                                <li><a href="<?php echo base_url(); ?>"><i class="fa fa-angle-double-right"></i> Anggota</a></li>
                            </ul>
                        </li>
                        <li class="treeview">
                            <a href="#">
                                <i class="fa fa-wrench"></i> <span>Konfigurasi</span>
                                <i class="fa fa-angle-left pull-right"></i>
                            </a>
                            <ul class="treeview-menu">
                                <li><a href="<?php echo base_url(); ?>"><i class="fa fa-angle-double-right"></i> Profil Perpustakaan</a></li>
                                <li><a href="<?php echo base_url(); ?>"><i class="fa fa-angle-double-right"></i> Hari Libur</a></li>
                            </ul>
                        </li>
                        <li>
                            <a href="<?php echo base_url('calendar'); ?>">
                                <i class="fa fa-calendar"></i> <span>Calendar</span>
                                <small class="badge pull-right bg-red"></small>
                            </a>
                        </li>
                        <li>
                            <a href="<?php echo base_url(); ?>AdminLTE/pages/mailbox.html">
                                <i class="fa fa-envelope"></i> <span>Mailbox</span>
                                <small class="badge pull-right bg-yellow"></small>
                            </a>
                        </li>
                    </ul>
                </section>
                <!-- /.sidebar -->
            </aside>

            <!-- Right side column. Contains the navbar and content of the page -->
            <aside class="right-side">
                <!-- Content Header (Page header) -->
                <section class="content-header">
                    <ol class="breadcrumb">
                        <li><a href="<?php echo base_url(); ?>"><i class="fa fa-home"></i> Home</a></li>
                        <li class="active">Dashboard</li>
                    </ol>
                </section>

       <!-- jQuery 2.0.2 -->
        <script src="http://ajax.googleapis.com/ajax/libs/jquery/2.0.2/jquery.min.js"></script>
        <!-- jQuery UI 1.10.3 -->
        <script src="<?php echo base_url(); ?>AdminLTE/js/jquery-ui-1.10.3.min.js" type="text/javascript"></script>
        <!-- Bootstrap -->
        <script src="<?php echo base_url(); ?>AdminLTE/js/bootstrap.min.js" type="text/javascript"></script>
        <!-- Morris.js charts -->
        <script src="<?php echo base_url(); ?>AdminLTE///cdnjs.cloudflare.com/ajax/libs/raphael/2.1.0/raphael-min.js"></script>
        <script src="<?php echo base_url(); ?>AdminLTE/js/plugins/morris/morris.min.js" type="text/javascript"></script>
        <!-- Sparkline -->
        <script src="<?php echo base_url(); ?>AdminLTE/js/plugins/sparkline/jquery.sparkline.min.js" type="text/javascript"></script>
        <!-- jvectormap -->
        <script src="<?php echo base_url(); ?>AdminLTE/js/plugins/jvectormap/jquery-jvectormap-1.2.2.min.js" type="text/javascript"></script>
        <script src="<?php echo base_url(); ?>AdminLTE/js/plugins/jvectormap/jquery-jvectormap-world-mill-en.js" type="text/javascript"></script>
        <!-- fullCalendar -->
        <script src="<?php echo base_url(); ?>AdminLTE/js/plugins/fullcalendar/fullcalendar.min.js" type="text/javascript"></script>
        <!-- jQuery Knob Chart -->
        <script src="<?php echo base_url(); ?>AdminLTE/js/plugins/jqueryKnob/jquery.knob.js" type="text/javascript"></script>
        <!-- daterangepicker -->
        <script src="<?php echo base_url(); ?>AdminLTE/js/plugins/daterangepicker/daterangepicker.js" type="text/javascript"></script>
        <!-- Bootstrap WYSIHTML5 -->
        <script src="<?php echo base_url(); ?>AdminLTE/js/plugins/bootstrap-wysihtml5/bootstrap3-wysihtml5.all.min.js" type="text/javascript"></script>
        <!-- iCheck -->
        <script src="<?php echo base_url(); ?>AdminLTE/js/plugins/iCheck/icheck.min.js" type="text/javascript"></script>

        <!-- AdminLTE App -->
        <script src="<?php echo base_url(); ?>AdminLTE/js/AdminLTE/app.js" type="text/javascript"></script>
        
        <!-- AdminLTE dashboard demo (This is only for demo purposes) -->
        <script src="<?php echo base_url(); ?>AdminLTE/js/AdminLTE/dashboard.js" type="text/javascript"></script>        

    </body>
</html>