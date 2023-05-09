<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Admin | Order</title>

    <!-- Google Font: Source Sans Pro -->
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700&display=fallback">
    <!-- Font Awesome -->
    <link rel="stylesheet" href="../../plugins/fontawesome-free/css/all.min.css">
    <!-- DataTables -->
    <link rel="stylesheet" href="../../plugins/datatables-bs4/css/dataTables.bootstrap4.min.css">
    <link rel="stylesheet" href="../../plugins/datatables-responsive/css/responsive.bootstrap4.min.css">
    <link rel="stylesheet" href="../../plugins/datatables-buttons/css/buttons.bootstrap4.min.css">
    <!-- Theme style -->
    <link rel="stylesheet" href="../../dist/css/adminlte.min.css">
</head>

<body class="hold-transition sidebar-mini">
    <div class="wrapper">
        <!-- Navbar -->
        <nav class="main-header navbar navbar-expand navbar-white">
            <!-- Left navbar links -->
            <ul class="navbar-nav">
                <li class="nav-item">
                    <a class="nav-link" data-widget="pushmenu" href="#" role="button"><i class="fas fa-bars"></i></a>
                </li>
            </ul>

            <!-- Right navbar links -->
            <ul class="navbar-nav ml-auto">


                <li class="nav-item">
                    <a class="nav-link" data-widget="fullscreen" href="#" role="button">
                        <i class="fas fa-expand-arrows-alt"></i>
                    </a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" data-widget="control-sidebar" data-slide="true" href="#" role="button">
                        <i class="fas fa-th-large"></i>
                    </a>
                </li>
            </ul>
        </nav>
        <!-- /.navbar -->

        <!-- Main Sidebar Container -->
        <aside class="main-sidebar sidebar-dark-primary elevation-4" style="background:#132639">

            <!-- Sidebar -->
            <div class="sidebar">
                <!-- Sidebar user (optional) -->
                <div class="user-panel mt-3 pb-3 mb-3 d-flex">
                    <div class="image">
                        <img src="images/day6logoblack.png" class="img-circle elevation-2" alt="User Image">
                    </div>
                    <div class="info">
                        <a href="#" class="d-block">My Day Resto</a>
                    </div>
                </div>



                <!-- Sidebar Menu -->
                <nav class="mt-2">
                    <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
                        <!-- Add icons to the links using the .nav-icon class
               with font-awesome or any other icon font library -->
                        <li class="nav-item menu-open">
                            <a href="dashboard" class="nav-link ">
                                <i class="nav-icon fas fa-chart-line"></i>
                                <p>
                                    Dashboard
                                </p>
                            </a>
                        </li>
                        <li class="nav-item menu-open">
                            <a href="daftarmenu" class="nav-link ">
                                <i class="nav-icon fas fa-book"></i>
                                <p>
                                    Daftar Menu
                                </p>
                            </a>
                        </li>
                        <li class="nav-item menu-open">
                            <a href="masakan" class="nav-link ">
                                <i class="nav-icon fas fa-table"></i>
                                <p>
                                    Data Menu
                                </p>
                            </a>
                        </li>
                        <li class="nav-item menu-open">
                            <a href="order" class="nav-link">
                                <i class="nav-icon fas fa-inbox"></i>
                                <p>
                                    Order
                                </p>
                            </a>
                        </li>
                        <li class="nav-item menu-open">
                            <a href="detailorder" class="nav-link ">
                                <i class="nav-icon far fa-clipboard"></i>
                                <p>
                                    Detail Order
                                </p>
                            </a>
                        </li>
                        <li class="nav-item menu-open">
                            <a href="transaksi" class="nav-link">
                                <i class="nav-icon fas fa-dollar-sign"></i>
                                <p>
                                    Transaksi
                                </p>
                            </a>
                        </li>
                        <li class="nav-item menu-open">
                            <a href="laporantransaksi" class="nav-link active">
                                <i class="nav-icon fas fa-chart-pie"></i>
                                <p>
                                    Laporan Transaksi
                                </p>
                            </a>
                        </li>
                        <li class="nav-item menu-open">
                            <a href="{{ route('logout') }}" class="nav-link">
                                <i class="nav-icon fas fa-door-open"></i>
                                <p>
                                    Logout
                                </p>
                            </a>
                        </li>

                        <!-- /.sidebar-menu -->
            </div>
            <!-- /.sidebar -->
        </aside>

        <!-- Content Wrapper. Contains page content -->
        <div class="content-wrapper">
            <!-- Content Header (Page header) -->
            <section class="content-header">
                <div class="container-fluid">
                    <div class="row mb-2">
                        @if(Session::has('error'))
                        <div class="col-12">
                            <div class="alert alert-warning text-center">
                                <i class="fa fa-exclamation-triangle"></i> <strong>ERROR !</strong>{{session('error')}}
                            </div>
                        </div>
                        @endif
                        @if(Session::has('sukses'))
                        <div class="col-12">
                            <div class="alert alert-success text-center">
                                <i class="fa fa-check"></i><strong>Sukses</strong>{{session('sukses')}}
                            </div>
                        </div>
                        @endif

                        <div class="col-sm-6">
                            <h2>laporan transaksi</h2>
                        </div>
                        <div class="col-sm-6">
                            <ol class="breadcrumb float-sm-right">
                                <a href="{{url('/transaksi')}}">
                                    <button type="button" class="btn btn-warning"><i class="nav-icon fas fa-dollar-sign"></i></button>
                                </a>

                            </ol>
                        </div>
                    </div>
                </div><!-- /.container-fluid -->
            </section>

            <!-- Main content -->
            <section class="content">
                <div class="container-fluid">
                    <div class="row">
                        <div class="col-12">
                            <div class="card">
                                <!-- /.card-header -->
                                <div class="card-body">
                                    <table id="example1" class="table table-bordered table-striped">
                                        <thead>

                                            <tr>
                                                <th>Id Order</th>
                                                <th>Costumer</th>
                                                <th>Total Pesanan</th>
                                                <th>Bayar</th>
                                                <th>Kembalian</th>
                                                <th>Tanggal</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            @foreach ($transaksi as $transaksis)
                                            <tr>
                                                <td>{{$transaksis->id_order}}</td>
                                                <td>{{$transaksis->costumer}}</td>
                                                <td>{{$transaksis->membayar}}</td>
                                                <td>{{$transaksis->dibayar}}</td>
                                                <td>{{$transaksis->total_bayar}}</td>
                                                <td>{{$transaksis->tanggal}}</td>
                                            </tr>
                                            @endforeach
                                            </tfoot>
                                    </table>

                                </div>
                                <!-- /.card -->



                                <!-- /.card-body -->
                            </div>
                            <!-- /.card -->

                        </div>
                        <!-- /.col -->
                    </div>
                    <!-- /.row -->
                </div>
                <!-- /.container-fluid -->
            </section>
            <!-- /.content -->
        </div>
        <!-- /.content-wrapper -->

    </div>
    <!-- /.card-body -->
    <!-- Control Sidebar -->
    <aside class="control-sidebar control-sidebar-dark">
        <!-- Control sidebar content goes here -->
    </aside>
    <!-- /.control-sidebar -->
    </div>
    <!-- ./wrapper -->
    <!-- jQuery -->
    <script src="../../plugins/jquery/jquery.min.js"></script>
    <!-- Bootstrap 4 -->
    <script src="../../plugins/bootstrap/js/bootstrap.bundle.min.js"></script>
    <!-- DataTables  & Plugins -->
    <script src="../../plugins/datatables/jquery.dataTables.min.js"></script>
    <script src="../../plugins/datatables-bs4/js/dataTables.bootstrap4.min.js"></script>
    <script src="../../plugins/datatables-responsive/js/dataTables.responsive.min.js"></script>
    <script src="../../plugins/datatables-responsive/js/responsive.bootstrap4.min.js"></script>
    <script src="../../plugins/datatables-buttons/js/dataTables.buttons.min.js"></script>
    <script src="../../plugins/datatables-buttons/js/buttons.bootstrap4.min.js"></script>
    <script src="../../plugins/jszip/jszip.min.js"></script>
    <script src="../../plugins/pdfmake/pdfmake.min.js"></script>
    <script src="../../plugins/pdfmake/vfs_fonts.js"></script>
    <script src="../../plugins/datatables-buttons/js/buttons.html5.min.js"></script>
    <script src="../../plugins/datatables-buttons/js/buttons.print.min.js"></script>
    <script src="../../plugins/datatables-buttons/js/buttons.colVis.min.js"></script>
    <!-- AdminLTE App -->
    <script src="../../dist/js/adminlte.min.js"></script>
    <!-- AdminLTE for demo purposes -->
    <script src="../../dist/js/demo.js"></script>
    <!-- Page specific script -->
    <script>
        $(function() {
            $("#example1").DataTable({
                "responsive": true,
                "lengthChange": false,
                "autoWidth": false,
                "buttons": ["copy", "csv", "excel", "pdf", "print", "colvis"]
            }).buttons().container().appendTo('#example1_wrapper .col-md-6:eq(0)');
            $('#example2').DataTable({
                "paging": true,
                "lengthChange": false,
                "searching": false,
                "ordering": true,
                "info": true,
                "autoWidth": false,
                "responsive": true,
            });
        });
        $(function() {
            bsCustomFileInput.init();
        });
    </script>
</body>

</html>