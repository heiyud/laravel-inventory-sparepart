<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <!-- CSRF Token -->
        <meta name="csrf-token" content="{{ csrf_token() }}">
        <title>SUPRA JAYA MOTOR</title>
        @laravelPWA
        <!-- Google Font: Source Sans Pro -->
        <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700&display=fallback">
        <!-- Font Awesome -->
        <link rel="stylesheet" href="{{ asset('BE/plugins/fontawesome-free/css/all.min.css')}} ">
        <!-- Ionicons -->
        <link rel="stylesheet" href="https://code.ionicframework.com/ionicons/2.0.1/css/ionicons.min.css">
        <!-- Tempusdominus Bootstrap 4 -->
        <link rel="stylesheet" href="{{ asset('BE/plugins/tempusdominus-bootstrap-4/css/tempusdominus-bootstrap-4.min.css')}}">
        <!-- iCheck -->
        <link rel="stylesheet" href="{{ asset('BE/plugins/icheck-bootstrap/icheck-bootstrap.min.css')}}">
        <!-- JQVMap -->
        <link rel="stylesheet" href="{{ asset('BE/plugins/jqvmap/jqvmap.min.css')}}">
        <!-- Theme style -->
        <link rel="stylesheet" href="{{ asset('BE/asset/dist/css/adminlte.min.css')}}">
        <!-- DataTables -->
        <link rel="stylesheet" href="{{ asset('BE/plugins/datatables-bs4/css/dataTables.bootstrap4.min.css')}}">
        <link rel="stylesheet" href="{{ asset('BE/plugins/datatables-responsive/css/responsive.bootstrap4.min.css')}}">
        <link rel="stylesheet" href="{{ asset('BE/plugins/datatables-buttons/css/buttons.bootstrap4.min.css')}}">
        <!-- overlayScrollbars -->
        <link rel="stylesheet" href="{{ asset('BE/plugins/overlayScrollbars/css/OverlayScrollbars.min.css')}}">
        <!-- Daterange picker -->
        <link rel="stylesheet" href="{{ asset('BE/plugins/daterangepicker/daterangepicker.css')}}">
        <!-- summernote -->
        <link rel="stylesheet" href="{{ asset('BE/plugins/summernote/summernote-bs4.min.css')}}">
    </head>
    <body class="layout-fixed sidebar-mini sidebar-closed sidebar-collapse d-flex flex-column min-vh-100">
<!-- Navbar -->
<nav class="main-header navbar navbar-expand navbar-danger navbar-dark">
    <!-- Left navbar links -->
    <ul class="navbar-nav">
        <li class="nav-item">
            <a class="nav-link" data-widget="pushmenu" href="#" role="button"><i class="fas fa-bars"></i></a>
        </li>
        <li class="nav-item d-none d-sm-inline-block">
        <a href="index3.html" class="nav-link">Home</a>
        </li>
        <li class="nav-item d-none d-sm-inline-block">
        <a href="#" class="nav-link">Info</a>
        </li>
    </ul>

    <!-- Right navbar links -->
    <ul class="navbar-nav ml-auto">
        <li class="nav-item">
            <a class="nav-link" href="#" role="button">
                <i class="fas fa-clock"></i>
                <span id="tanggalwaktu"></span>
            </a>
        </li>
        <li class="nav-item">
            <a class="nav-link" data-widget="fullscreen" href="#" role="button">
                <i class="fas fa-expand-arrows-alt"></i>
            </a>
        </li>
        <li class="nav-item">
            <a class="nav-link" data-toggle="dropdown" href="#">
                <i class="fas fa-user-alt"></i>
            </a>
            <div class="dropdown-menu dropdown-menu-lg dropdown-menu-right">
            <a href="" class="dropdown-item">
                <div class="media">
                <img src="{{asset('BE/asset/dist/img/profil.png')}}" alt="User Avatar" class="img-size-50 mr-3 img-circle">
                <div class="media-body">
                    <h1 class="dropdown-item-title">{{ Auth::user()->name }}</h1>
                    <h2 class="dropdown-item-title">{{ Auth::user()->email}}</h2>
                </div>
                </div>
            </a>
        </li>
        <li class="nav-item">
        <a href="#" class="nav-link" data-toggle="modal" data-target="#logoutModal"">
            <i class="nav-icon fa fa-sign-out-alt"></i>
        </a>
        </li>
    </ul>
</nav>
<!-- /.navbar -->

<!-- Main Sidebar Container -->
<aside class="main-sidebar sidebar-light-primary elevation-4">
<!-- Brand Logo -->
<a href="{{ route('home') }}" class="brand-link">
    <img src="{{asset('BE/asset/dist/img/logo2.png')}}" alt="logo" class="brand-image elevation-0" style="opacity: .8">
    <span class="brand-text font-weight-dark"><h6><b>SUPRA JAYA </b>MOTOR</h6> </span>
</a>

<!-- Sidebar -->
<div class="sidebar">
    <!-- Sidebar Menu -->
    <nav class="mt-2">
    <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
        <!-- Add icons to the links using the .nav-icon class
            with font-awesome or any other icon font library -->
        <li class="nav-item">
        <a href="/home" class="nav-link">
            <i class="nav-icon fas fa-tachometer-alt  text-danger"></i>
            <p>
            Dashboard
            </p>
        </a>
        </li>
        <li class="nav-header"> MASTER DATA</li>
        <li class="nav-item">
            <a href="#" class="nav-link">
                <i class="nav-icon fas fa-boxes text-danger"></i>
                <p>Manajemen Produk
                <i class="fas fa-angle-left right  text-danger"></i>
                </p>
            </a>
            <ul class="nav nav-treeview">
                <li class="nav-item">
                    <a href="/supplier" class="nav-link ">
                    <i class="far fa-circle nav-icon text-danger"></i>
                    <p>Supplier</p>
                    </a>
                </li>
                <li class="nav-item">
                    <a href="/rak" class="nav-link">
                    <i class="far fa-circle nav-icon text-danger"></i>
                    <p>Rak Produk</p>
                    </a>
                </li>
                <li class="nav-item">
                    <a href="/tipe" class="nav-link">
                    <i class="far fa-circle nav-icon text-danger"></i>
                    <p>Tipe Produk</p>
                    </a>
                </li>
                <li class="nav-item">
                    <a href="/kategori" class="nav-link">
                    <i class="far fa-circle nav-icon text-danger"></i>
                    <p>Kategori</p>
                    </a>
                </li>
                <li class="nav-item">
                    <a href="/produk" class="nav-link">
                    <i class="far fa-circle nav-icon text-danger"></i>
                    <p>Produk</p>
                    </a>
                </li>
            </ul>
            <li class="nav-item">
            <a href="/user" class="nav-link">
                <i class="fas fa-user-cog nav-icon  text-danger"></i>
                <p>Manajemen User</p>
            </a>
        </li>
        </li>
        <li class="nav-header">TRANSAKSI</li>
        <li class="nav-item">
            <a href="/incoming" class="nav-link">
                <i class="fas fa-dolly-flatbed nav-icon  text-danger"></i>
                <p>Barang Masuk</p>
            </a>
        </li>
        <li class="nav-item">
            <a href="/outgoing" class="nav-link">
                <i class="fas fa-shipping-fast nav-icon  text-danger"></i>
                <p>Barang Keluar</p>
            </a>
        </li>
        <li class="nav-item">
            <a href="/stok" class="nav-link">
                <i class="fas fa-clipboard-list nav-icon  text-danger"></i>
                <p>Stok Barang</p>
            </a>
        </li>

        <li class="nav-header"> MENU</li>
        <li class="nav-item">
            <a href="/report" class="nav-link">
                <i class="fas fa-file-export nav-icon  text-danger"></i>
                <p>Laporan</p>
            </a>
        </li>
        <li class="nav-item">
            <a href="#" class="nav-link">
                <i class="fas fa-cogs nav-icon  text-danger"></i>
                <p>Settings
                <i class="fas fa-angle-left right  text-danger"></i>
                </p>
            </a>
            <ul class="nav nav-treeview">
                <li class="nav-item">
                    <a href="/#" class="nav-link ">
                    <i class="far fa-circle nav-icon  text-danger"></i>
                    <p>Profil</p>
                    </a>
                </li>
                <li class="nav-item">
                    <a href="/#" class="nav-link ">
                    <i class="far fa-circle nav-icon  text-danger"></i>
                    <p>Password</p>
                    </a>
                </li>
            </ul>
        </li>
    </ul>
    </nav>
    <!-- /.sidebar-menu -->
</div>
    <!-- /.sidebar -->
</aside>
<!-- Content Wrapper -->
<div class="content-wrapper">
    <div id="content">
            @yield('content')
        </div>
</div>
<!-- End of Content Wrapper -->
  <!-- Footer -->
  <footer class="main-footer mt-auto bg-danger" align="center">
    <strong>&copy; Created By Heiyud.</strong>
     All rights reserved.
    <div class="float-right d-none d-sm-inline-block">
        <b>Version</b> 1.0.0
    </div>
  </footer>
<!-- End of Footer -->
<!-- Logout Modal-->
<div class="modal fade" id="logoutModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel"
aria-hidden="true">
<div class="modal-dialog" role="document">
    <div class="modal-content">
        <div class="modal-header bg-gradient-primary">
            <h4 class="modal-title" id="exampleModalLabel">Do you want to exit ?</h4>
            <button class="close" type="button" data-dismiss="modal" aria-label="Close">
                <span aria-hidden="true">×</span>
            </button>
        </div>
        <div class="modal-body">Select "Logout" if you want to close this apps !</div>
        <div class="modal-footer">
            <button type="button" class="btn bg-gradient-danger" data-dismiss="modal">Cancel</button>
            <a class="btn bg-gradient-primary" href="#"
                onclick="event.preventDefault();document.getElementById('logout-form').submit();">
                {{ __('Logout') }}
            </a>
            <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                @csrf
            </form>
        </div>
    </div>
</div>
</div>
<!-- End Of Logout Modal-->

    <!-- jQuery -->
    <script src="{{ asset('BE/plugins/jquery/jquery.min.js')}}"></script>
    <!-- Bootstrap 4 -->
    <script src="{{ asset('BE/plugins/bootstrap/js/bootstrap.bundle.min.js')}}"></script>
    <!-- DataTables  & plugins -->
    <script src="{{ asset('BE/plugins/datatables/jquery.dataTables.min.js')}}"></script>
    <script src="{{ asset('BE/plugins/datatables-bs4/js/dataTables.bootstrap4.min.js')}}"></script>
    <script src="{{ asset('BE/plugins/datatables-responsive/js/dataTables.responsive.min.js')}}"></script>
    <script src="{{ asset('BE/plugins/datatables-responsive/js/responsive.bootstrap4.min.js')}}"></script>
    <script src="{{ asset('BE/plugins/datatables-buttons/js/dataTables.buttons.min.js')}}"></script>
    <script src="{{ asset('BE/plugins/datatables-buttons/js/buttons.bootstrap4.min.js')}}"></script>
    <script src="{{ asset('BE/plugins/jszip/jszip.min.js')}}"></script>
    <script src="{{ asset('BE/plugins/pdfmake/pdfmake.min.js')}}"></script>
    <script src="{{ asset('BE/plugins/pdfmake/vfs_fonts.js')}}"></script>
    <script src="{{ asset('BE/plugins/datatables-buttons/js/buttons.html5.min.js')}}"></script>
    <script src="{{ asset('BE/plugins/datatables-buttons/js/buttons.print.min.js')}}"></script>
    <script src="{{ asset('BE/plugins/datatables-buttons/js/buttons.colVis.min.js')}}"></script>

    <!-- AdminLTE App -->
    <script src="{{ asset('BE/asset/dist/js/adminlte.min.js')}}"></script>
    <!-- Page specific script -->
    <script>
        $(function () {
            $("#example1").DataTable({
            "responsive": true, "lengthChange": false, "autoWidth": false,
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
        var tw = new Date();
        if (tw.getTimezoneOffset() == 0) (a=tw.getTime() + ( 7 *60*60*1000))
        else (a=tw.getTime());
        tw.setTime(a);
        var tahun= tw.getFullYear ();
        var hari= tw.getDay ();
        var bulan= tw.getMonth ();
        var tanggal= tw.getDate ();
        var hariarray=new Array("Sunday,","Monday,","Tuesday,","Wednesday,","Thrsday,","Friday,","Saturday,");
        var bulanarray=new Array("January","February","Marret","April","May","June","July","August","September","October","November","December");
        document.getElementById("tanggalwaktu").innerHTML = hariarray[hari]+"  "+bulanarray[bulan]+" "+tahun+" | " + ((tw.getHours() < 10) ? "0" : "") + tw.getHours() + ":" + ((tw.getMinutes() < 10)? "0" : "") + tw.getMinutes();
    </script>
    </body>
</html>
