<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title><?= App::getInstance()->title; ?></title>
    <meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" name="viewport">
    <link rel="shortcut icon" type="image/x-icon" href="img/favicon.ico" />
    <!-- Bootstrap 3.3.6 -->
    <link rel="stylesheet" href="vendor/bootstrap/css/bootstrap.min.css">
    <!-- Font Awesome -->
    <link rel="stylesheet" href="vendor/font-awesome/css/font-awesome.min.css">
    <!-- Ionicons -->
    <link rel="stylesheet" href="vendor/ionicons/css/ionicons.min.css">

    <!-- DataTables -->
    <link rel="stylesheet" href="vendor/datatables/dataTables.bootstrap.css">
    <!-- bootstrap datepicker -->
    <link rel="stylesheet" href="vendor/datepicker/datepicker3.css">
    <!-- iCheck for checkboxes and radio inputs -->
    <link rel="stylesheet" href="vendor/iCheck/all.css">
    <!-- Select2 -->
    <link rel="stylesheet" href="vendor/select2/select2.min.css">

    <!-- Theme style -->
    <link rel="stylesheet" href="vendor/adminlte/css/AdminLTE.min.css">
    <!-- AdminLTE Skins. Choose a skin from the css/skins
         folder instead of downloading all of them to reduce the load. -->
    <link rel="stylesheet" href="vendor/adminlte/css/skins/_all-skins.min.css">
    <!-- Emilie style -->
    <link rel="stylesheet" href="css/studio.css">
</head>

<body class="hold-transition skin-blue sidebar-mini">
<div class="wrapper">

    <header class="main-header">
        <a href="index.php" class="logo">
            <span class="logo-mini"><b>A</b>BC</span>
            <span class="logo-lg"><b>Abc</b>Test</span>
        </a>
        <nav class="navbar navbar-static-top">
            <a href="#" class="sidebar-toggle" data-toggle="offcanvas" role="button">
                <span class="sr-only">Toggle navigation</span>
            </a>

            <div class="navbar-custom-menu">
                <ul class="nav navbar-nav">
                    <!-- User Account: style can be found in dropdown.less -->
                    <li class="dropdown user user-menu">
                        <a href="#" class="dropdown-toggle" data-toggle="dropdown">
                            <img src="img/logopiccolo.jpg" class="user-image" alt="User Image">
                            <span class="hidden-xs">Utente</span>
                        </a>
                        <ul class="dropdown-menu">
                            <!-- User image -->
                            <li class="user-header">
                                <p>
                                    Utente
                                    <small>Tipologia</small>
                                </p>
                                <img src="img/logopiccolo.jpg" class="img-circle" alt="User Image">
                            </li>
                            <!-- Menu Footer-->

                            <li class="user-footer">
                                <div class="pull-right">
                                    <a href="#" class="btn btn-default btn-flat">Logout</a>
                                </div>
                            </li>

                        </ul>
                    </li>
                </ul>
            </div>
        </nav>
    </header>
    <aside class="main-sidebar">
        <section class="sidebar">


            <ul class="sidebar-menu">
                <li class="header">Menu</li>

            <?php $menus = App::getInstance()->getMenu(); foreach ($menus as $menu): ?>

                <li class="<?= $menu['testo']==$menuActive?'active':''; ?> treeview">
                    <a href="#">
                        <i class="fa fa-<?= $menu['icona']; ?>"></i> <span><?= $menu['testo']; ?></span>
                        <?php if($menu['sottomenu']): ?>
                            <i class="fa fa-angle-left pull-right"></i>
                        <?php endif; ?>
                    </a>
                    <?php if($menu['sottomenu']): ?>
                        <ul class="treeview-menu">
                            <?php foreach ($menu['sottomenu'] as $sottomenu): ?>
                                <li><a href="<?= $sottomenu['url']; ?>"><i class="fa fa-<?= $sottomenu['icona']; ?>"></i> <?= $sottomenu['testo']; ?></a></li>
                            <?php endforeach; ?>
                        </ul>
                    <?php endif; ?>
                </li>

            <?php endforeach; ?>
            </ul>

        </section>
    </aside>

    <div class="content-wrapper">

        <!-- Main content -->
        <section class="content">

            <div class="row">
                <div class="col-md-12">
                    <div class="box">
                        <?= $content; ?>
                    </div>
                </div>
            </div>

        </section>
        <!-- /.content -->
    </div>
    <!-- /.content-wrapper -->

    <footer class="main-footer">
        <div class="pull-right hidden-xs">
            <b>Version</b> YYYYMMDD
        </div>
        <strong>Copyright &copy; <?php $copyYear = 2016; $curYear = date('Y'); echo $copyYear . (($copyYear != $curYear) ? '-' . $curYear : ''); ?> <a href="http://">Dati Copyright</a></strong> - All rights reserved - <a href="https://almsaeedstudio.com/">Theme</a>
    </footer>

</div>
<!-- ./wrapper -->

<!-- jQuery 2.2.0 -->
<script src="vendor/jQuery/jQuery-2.2.0.min.js"></script>
<!-- jQuery UI 1.11.4 -->
<script src="vendor/jQueryUI/jquery-ui.min.js"></script>
<!-- Resolve conflict in jQuery UI tooltip with Bootstrap tooltip -->
<script>
    $.widget.bridge('uibutton', $.ui.button);
</script>
<!-- Bootstrap 3.3.6 -->
<script src="vendor/bootstrap/js/bootstrap.min.js"></script>
<!-- https://github.com/DmitryBaranovskiy/raphael Cross-browser vector graphics the easy way -->
<script src="vendor/raphael/raphael-min.js"></script>
<script src="vendor/knob/jquery.knob.js"></script>
<script src="vendor/moment/moment.min.js"></script>
<!-- datepicker -->
<script src="vendor/datepicker/bootstrap-datepicker.js"></script>
<!-- Slimscroll slimScroll is a small jQuery plugin that transforms any div into a scrollable area with a nice scrollbar -->
<script src="vendor/slimScroll/jquery.slimscroll.min.js"></script>
<!-- FastClick FastClick is a simple, easy-to-use library for eliminating the 300ms delay between a physical tap and the firing of a click event on mobile browsers.-->
<script src="vendor/fastclick/fastclick.js"></script>
<!-- AdminLTE App -->
<script src="vendor/adminlte/js/app.min.js"></script>
<script src="vendor/adminlte/js/demo.js"></script>
<!-- ChartJS 1.0.1 -->
<script src="vendor/chartjs/Chart.min.js"></script>
<!-- Select2 Select2 is a jQuery-based replacement for select boxes. -->

<!-- DataTables -->
<script src="vendor/datatables/jquery.dataTables.min.js"></script>
<script src="vendor/datatables/dataTables.bootstrap.min.js"></script>

<script src="vendor/select2/select2.full.min.js"></script>
<script>
    $(function () {
        //Initialize Select2 Elements
        $(".select2").select2();
    });
</script>
</body>

<!-- page script -->
<script>
</script>

</html>
