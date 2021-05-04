<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <title>KMS Agrowing</title>
  <!-- Tell the browser to be responsive to screen width -->
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <!-- Font Awesome -->
  <link rel="stylesheet" href="{{ asset('plugins/fontawesome-free/css/all.min.css') }}">
  <!-- Ionicons -->
  <link rel="stylesheet" href="https://code.ionicframework.com/ionicons/2.0.1/css/ionicons.min.css">
  <!-- Tempusdominus Bbootstrap 4 -->
  <link rel="stylesheet" href="{{ asset('plugins/tempusdominus-bootstrap-4/css/tempusdominus-bootstrap-4.min.css') }}">
  <!-- iCheck -->
  <link rel="stylesheet" href="{{ asset('plugins/icheck-bootstrap/icheck-bootstrap.min.css') }}">
  <!-- JQVMap -->
  <link rel="stylesheet" href="{{ asset('plugins/jqvmap/jqvmap.min.css') }}">
  <!-- Theme style -->
  <link rel="stylesheet" href="{{ asset('css/adminlte.min.css') }}">
  <!-- overlayScrollbars -->
  <link rel="stylesheet" href="{{ asset('plugins/overlayScrollbars/css/OverlayScrollbars.min.css') }}">
  <!-- summernote -->
  <link rel="stylesheet" href="{{ asset('plugins/summernote/summernote-bs4.css') }}">
  <!-- Google Font: Source Sans Pro -->
  <link href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700" rel="stylesheet">
  <!-- Select2 -->
  <link href="https://cdn.jsdelivr.net/npm/select2@4.1.0-rc.0/dist/css/select2.min.css" rel="stylesheet" />

  @yield('css')
  
  <link href="{{ asset('css/style.css') }}" rel="stylesheet" type="text/css" />
  <link href="{{ asset('assets/admin/css/sweetalert2.min.css') }}" rel="stylesheet" type="text/css" />

  <!-- Bootstrap -->
  <!-- <link href="{{ asset('assets/admin/css/bootstrap.min.css') }}" rel="stylesheet" type="text/css" />      -->
  @PWA
</head>

<body data-keep-enlarged="false" class="hold-transition sidebar-mini layout-navbar-fixed">
<div class="wrapper">
  <!-- Navbar -->
  <nav class="main-header navbar navbar-expand navbar-white navbar-light" style="background-color:#86BC42">
    <!-- Left navbar links -->
    <ul class="navbar-nav">
      <li class="nav-item">
        <a class="nav-link" data-widget="pushmenu" href="#" role="button"><i class="fas fa-bars"></i></a>
      </li>
    </ul>
    <div class="navbar-custom ml-auto">
      <ul class="list-unstyled topnav-menu float-right mb-0">        
          <li class="dropdown notification-list">
              <a class="nav-link dropdown-toggle nav-user mr-0 waves-effect" data-toggle="dropdown" href="#" role="button" aria-haspopup="false" aria-expanded="false" style="color:black">
                  <span class="ml-1">
                      {{ \Request::get('user')['name'] }} <i class="mdi mdi-chevron-down"></i> 
                  </span>
              </a>
              <div class="dropdown-menu dropdown-menu-right profile-dropdown ">
                  <!-- item-->
                  <form action="{{route('logout')}}" method="post">
                      @csrf
                      <button type="submit" class="dropdown-item notify-item">
                          <i class="fe-log-out"></i> <span>Logout</span>
                      </button>
                  </form>
                  
              </div>
          </li>
      </ul>
    </div>

    <!-- <form class="form-inline ml-3">
        <div class="input-group input-group-sm">
            <input class="form-control form-control-navbar" type="search" placeholder="Search" aria-label="Search">
            <div class="input-group-append">
            <button class="btn btn-navbar" type="submit" style="background-color:orange">
                <i class="fas fa-search"></i>
            </button>
            </div>
        </div>
    </form> -->
  </nav>
  <!-- /.navbar -->

  <aside class="main-sidebar sidebar-light-success elevation-4">
    <div class="brand-link logo-box pt-2 pl-3">
      <a href="#" class="logo">
          <span class="logo-sm">
              <img src="{{ asset('img/logo-agrowing-ori.png') }}" alt="" width="90%" class="sm-img">
          </span>
      </a>
    </div>

    <!-- Sidebar -->
    <div class="sidebar">
      <!-- Sidebar Menu -->
        <nav class="mt-3">
            <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
            <!-- Add icons to the links using the .nav-icon class
                with font-awesome or any other icon font library -->
                `<li class="nav-item">
                    <a href="/" class="nav-link">
                    <i class="nav-icon fas fa-home"></i>
                    <p>
                        Beranda
                    </p>
                    </a>
                </li>
                <li class="nav-item">
                    <a href="/proyek" class="nav-link">
                    <i class="nav-icon fas fa-file-alt"></i>
                    <p>
                        Project Tanam
                    </p>
                    </a>
                </li>
                <li class="nav-item">
                    <a href="/konsultasi" class="nav-link">
                    <i class="nav-icon fas fa-comments"></i>
                    <p>Konsultasi</p>
                    </a>
                </li>
                <li class="nav-item">
                    <a href="/profil" class="nav-link">
                    <i class="nav-icon fas fa-users"></i>
                    <p>
                        Profil Saya
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
    <div class="content-header">
      <div class="container-fluid">
        @yield('header')
      </div><!-- /.container-fluid -->
    </div>
    <!-- Main content -->
    <div class="content">
      <div class="container-fluid">
        @yield('content')
      </div>
    </div>
    <!-- /.content -->
  </div>
  <!-- /.content-wrapper -->

  <footer class="main-footer">
    <strong>Copyright &copy; 2021 <a href="http://agrowing.co.id">Agrowing.co.id</a>.</strong>
    <div class="float-right d-none d-sm-inline-block">
      <b>Version</b> 1.0.0
    </div>
  </footer>

  <!-- Control Sidebar -->
  <aside class="control-sidebar control-sidebar-dark">
    <!-- Control sidebar content goes here -->
  </aside>
  <!-- /.control-sidebar -->
</div>
<!-- ./wrapper -->

<script type="text/javascript">
  var pwaInstallBtn = document.getElementById('pwa-install');
  let isInitiatePwa = false;
  pwaInstallBtn.style.display = 'none';
  window.addEventListener('beforeinstallprompt', (e) => {
    // Prevent the mini-infobar from appearing on mobile
    e.preventDefault();
    window.deferredPrompt = e;
    pwaInstallBtn.style.display = 'block';
  });

  pwaInstallBtn.addEventListener('click', (e) => {
    // Show the install prompt
    const deferredPrompt = window.deferredPrompt;
    deferredPrompt.prompt();
    // Wait for the user to respond to the prompt
    deferredPrompt.userChoice.then((choiceResult) => {
      if (choiceResult.outcome === 'accepted') {
        console.log('User accepted the install prompt');
      } else {
        console.log('User dismissed the install prompt');
      }
    });
  });

  window.addEventListener('appinstalled', (evt) => {
      pwaInstallBtn.style.display = 'none'
      window.deferredPrompt = null
    // Log install to analytics
    // console.log('INSTALL: Success');
  });
</script>

<!-- jQuery -->
<script src="{{ asset('plugins/jquery/jquery.min.js') }}"></script>
<!-- jQuery UI 1.11.4 -->
<script src="{{ asset('plugins/jquery-ui/jquery-ui.min.js') }}"></script>
<!-- Resolve conflict in jQuery UI tooltip with Bootstrap tooltip -->
<script>
  $.widget.bridge('uibutton', $.ui.button)
</script>

@yield('script')

<!-- Bootstrap 4 -->
<script src="{{ asset('plugins/bootstrap/js/bootstrap.bundle.min.js') }}"></script>
<!-- ChartJS -->
<script src="{{ asset('plugins/chart.js/Chart.min.js') }}"></script>
<!-- Sparkline -->
<script src="{{ asset('plugins/sparklines/sparkline.js') }}"></script>
<!-- jQuery Knob Chart -->
<script src="{{ asset('plugins/jquery-knob/jquery.knob.min.js') }}"></script>
<!-- daterangepicker -->
<script src="{{ asset('plugins/moment/moment.min.js') }}"></script>
<!-- Tempusdominus Bootstrap 4 -->
<script src="{{ asset('plugins/tempusdominus-bootstrap-4/js/tempusdominus-bootstrap-4.min.js') }}"></script>
<!-- Summernote -->
<script src="{{ asset('plugins/summernote/summernote-bs4.min.js') }}"></script>
<!-- overlayScrollbars -->
<script src="{{ asset('plugins/overlayScrollbars/js/jquery.overlayScrollbars.min.js') }}"></script>
<!-- AdminLTE App -->
<script src="{{ asset('js/adminlte.js') }}"></script>
<!-- AdminLTE dashboard demo (This is only for demo purposes) -->
<script src="{{ asset('js/pages/dashboard.js') }}"></script>
<!-- Select2 -->
<script src="https://cdn.jsdelivr.net/npm/select2@4.1.0-rc.0/dist/js/select2.min.js"></script>

<script>
  $(document).ready(function() {
    $('.select2').select2({
      width: '100%'
    });
  });
</script>

@include('sweetalert::alert')

</body>
</html>
