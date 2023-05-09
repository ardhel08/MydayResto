<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Admin | Edit Masakan</title>

    <!-- Google Font: Source Sans Pro -->
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700&display=fallback">
    <!-- Font Awesome -->
    <link rel="stylesheet" href="../../plugins/fontawesome-free/css/all.min.css">
    <!-- Theme style -->
    <link rel="stylesheet" href="../../dist/css/adminlte.min.css">
</head>

<body class="hold-transition sidebar-mini">
    <div class="wrapper">
        <!-- Navbar -->
        <nav class="main-header navbar navbar-expand navbar-white navbar-light">
            <!-- Left navbar links -->
            <ul class="navbar-nav">
                <li class="nav-item">
                    <a class="nav-link" data-widget="pushmenu" href="#" role="button"><i class="fas fa-bars"></i></a>
                </li>
            </ul>
            <!-- Right navbar links -->
            <ul class="navbar-nav ml-auto">
                <!-- Navbar Search -->
                <li class="nav-item">
                </li>
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
        <aside class="main-sidebar sidebar-dark-primary elevation-4">
            <!-- Brand Logo -->
            <a href="../../index3.html" class="brand-link">
                <span class="brand-text font-weight-light">
                    <center>Administrator</center>
                </span>
            </a>

            <!-- Sidebar -->
            <div class="sidebar">
                <!-- Sidebar user (optional) -->
                <div class="user-panel mt-3 pb-3 mb-3 d-flex">
                    <div class="image">
                        <img src="images/day6logoblack.png" class="img-circle elevation-2" alt="User Image">
                    </div>
                    <div class="info">
                        <a href="" class="d-block">Dennis Park</a>
                    </div>
                </div>
                <nav class="mt-2">
                    <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
                        <!-- Add icons to the links using the .nav-icon class-->
                        <!-- SidebarSearch Form -->
                        <div class="form-inline">
                            <div class="input-group" data-widget="sidebar-search">

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
                                    <a href="order" class="nav-link active">
                                        <i class="nav-icon fas fa-inbox"></i>
                                        <p>
                                            Order
                                        </p>
                                    </a>
                                </li>
                                <li class="nav-item menu-open">
                                    <a href="detailorder" class="nav-link">
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
                                    <a href="laporantransaksi" class="nav-link">
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

                            </ul>
                        </nav>
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
                        <div class="col-sm-6">
                            <h1>Edit Data Masakan</h1>
                        </div>
                        <div class="col-sm-6">
                            <ol class="breadcrumb float-sm-right">
                                <li class="breadcumb-item">
                                    <a class="text-white" href="{{url('masakan')}}"><button class="bg-danger text-white btn">Kembali </button></a>
                                </li>
                            </ol>
                        </div>
                    </div>
                </div><!-- /.container-fluid -->
            </section>

            <!-- Main content -->
            <section class="content">
                <div class="container-fluid">
                    <div class="row justify-content-center align-items-center">
                        <!-- left column -->
                        <div class="col-md-8">
                            <!-- general form elements -->
                            <div class="card card-primary">
                                <div class="card-header">
                                    <h3 class="card-title">Tambah Data Siswa</h3>
                                </div>
                                <!-- /.card-header -->
                                <!-- form start -->
                                <form method="POST" action="{{route('updatemasakan')}}">
                                    @csrf
                                    <input type="hidden" name="id_masakan" value="{{$masakan->id_masakan}}">
                                    <div class="card-body">
                                        <div class="form-group">
                                            <label for="Inputnamamasakan">Nama</label>
                                            <input name="namamasakan" value="{{$masakan->nama_masakan}}" type="text" class="form-control" id="Input_nama_masakan" placeholder="Masukan Nama Masakan" required>
                                        </div>
                                        <div class="form-group">
                                            <label for="Inputgambar">Gambar</label>
                                            <input name="namagambar" value="{{$masakan->gambar}}" type="text" class="form-control" id="Input_gambar" placeholder="Masukan Gambar" required>
                                        </div>
                                        <div class="form-group">
                                            <label for="Inputhargamasakan">Harga</label>
                                            <input name="hargamasakan" value="{{$masakan->harga_masakan}}" type="number" class="form-control" id="Input_harga_masakan" placeholder="Masukan Harga Masakan" required>
                                        </div>
                                        <div class="form-group">
                                            <label for="Inputstatusmasakan">Status</label>
                                            <input name="statusmasakan" value="{{$masakan->status_masakan}}" type="text" class="form-control" id="Input_status_masakan" placeholder="Masukan Status Masakan" required>
                                        </div>
                                        <div class="card-footer">
                                            <button type="submit" class="btn btn-primary">Submit</button>
                                        </div>

                                    </div>
                            </div>
                            <div class="form-check">
                                <input type="checkbox" class="form-check-input" id="exampleCheck1">
                                <label class="form-check-label" for="exampleCheck1">Check me out</label>
                            </div>

                        </div>
                        <!-- /.card-body -->


                        </form>
                    </div>
                    <!-- /.card -->

                    <!-- general form elements -->

                    <!-- /input-group -->


                    <!-- /input-group -->



                    <!-- /input-group -->
                </div>
                <!-- /.card-body -->
        </div>
        <!-- /.card -->
        <!-- Horizontal Form -->

        <!-- /.card -->

    </div>

    </form>
    </div>
    <!-- /.card-body -->
    </div>
    <!-- /.card -->
    </div>
    <!--/.col (right) -->
    </div>
    <!-- /.row -->
    </div><!-- /.container-fluid -->
    </section>
    <!-- /.content -->
    </div>
    <!-- /.content-wrapper -->
    <footer class="main-footer">
        <div class="float-right d-none d-sm-block">
            <b>Version</b> 3.2.0-rc
        </div>
        <strong>Copyright &copy; 2014-2021 <a href="https://adminlte.io">AdminLTE.io</a>.</strong> All rights reserved.
    </footer>

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
    <!-- bs-custom-file-input -->
    <script src="../../plugins/bs-custom-file-input/bs-custom-file-input.min.js"></script>
    <!-- AdminLTE App -->
    <script src="../../dist/js/adminlte.min.js"></script>
    <!-- AdminLTE for demo purposes -->
    <script src="../../dist/js/demo.js"></script>
    <!-- Page specific script -->
    <script>
        $(function() {
            bsCustomFileInput.init();
        });
    </script>
</body>

</html>