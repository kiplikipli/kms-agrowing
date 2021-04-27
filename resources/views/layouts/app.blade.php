<!DOCTYPE html>
<!--
This is a starter template page. Use this page to start your new project from
scratch. This page gets rid of all links and provides the needed markup only.
-->
<html lang="en">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <meta http-equiv="x-ua-compatible" content="ie=edge">

  <title>KMS Agrowing</title>
  <!-- Icons -->
  <link href="{{ asset('css/materialdesignicons.min.css') }}" rel="stylesheet" type="text/css">
  <!-- Font Awesome Icons -->
  <link rel="stylesheet" href="{{ asset('plugins/fontawesome-free/css/all.min.css') }}">
  <!-- Theme style -->
  <link rel="stylesheet" href="{{ asset('css/adminlte.min.css') }}">
  <!-- Google Font: Source Sans Pro -->
  <link href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700" rel="stylesheet">

  @PWA
  
  <style>
    .navbar-awal{
      background-color:#86BC42
    }
    .background {
      background-image: url("../img/background.png");
      /* Full height */
      height: 100%; 
      /* Center and scale the image nicely */
      background-position: center;
      background-repeat: no-repeat;
      background-size: cover;
    }
    .center{
      display: block;
      margin-left: auto;
      margin-right: auto;
      width: 75%;
    }
  </style>
</head>
<body data-keep-enlarged="false" class="hold-transition layout-top-nav">
<div class="wrapper">
  
  <!-- Navbar -->
  <nav class="main-header navbar navbar-expand-md navbar-awal">
    <div class="container" style="height:40px;"></div>
  </nav>
  <!-- /.navbar -->

  <div class="content-wrapper background">
    <!-- Main content -->
    <div class="content">
      <div class="container-fluid">
        @yield('content')
      </div>
    </div>
    <!-- /.content -->
  </div>
</div>

<footer class="main-footer">
  <strong>Copyright &copy; 2021 <a href="http://agrowing.co.id">Agrowing.co.id</a>.</strong>
  Developed by IPB final year students.
  <div class="float-right d-none d-sm-inline-block">
    <b>Version</b> 1.0.0
  </div>
</footer>
<!-- ./wrapper -->

<!-- REQUIRED SCRIPTS -->

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
<!-- Bootstrap 4 -->
<script src="{{ asset('plugins/bootstrap/js/bootstrap.bundle.min.js') }}"></script>
<!-- AdminLTE App -->
<script src="{{ asset('dist/js/adminlte.min.js') }}"></script>
@include('sweetalert::alert')
</body>
</html>
