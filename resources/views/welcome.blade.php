@extends('layouts.app')

@section('content')
  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper background">
    <div class="content">
      <div class="container">
        <div class="row">
          <div class="col-lg-6">
          </div>
          <div class="col-lg-6 logo-agrowing" style="background-color:white">
            <div class="rounded p-4 p-md-5">
              <div class="container" >
                <img src="img/logo-agrowing-ori.png" alt="Logo Agrowing" width="400" height="91">
              </div>
              <form id="login-form" enctype="multipart/form-data" role="form" action="#" method="post">
               @csrf
                <div class="form-group">
                  <label for="exampleInputEmail1">Email address</label>
                  <input type="email" class="form-control" id="exampleInputEmail1" placeholder="Enter email">
                </div>
                <div class="form-group">
                  <label for="exampleInputPassword1">Password</label>
                  <input type="password" class="form-control" id="exampleInputPassword1" placeholder="Password">
                </div>
                
                <div class="col-sm-6">
                <div class="row">
                  <div class="form-group clearfix">
                  <label for="exampleInputRadio1">Masuk sebagai:</label>
                      <div class="form-check">
                        <input class="form-check-input" type="radio" name="radio1" checked>
                        <label class="form-check-label">Admin</label>
                      </div>
                      <div class="form-check">
                        <input class="form-check-input" type="radio" name="radio1" checked>
                        <label class="form-check-label">Manajer Kebun</label>
                      </div>
                      <div class="form-check">
                        <input class="form-check-input" type="radio" name="radio1" checked>
                        <label class="form-check-label">Pakar Buah</label>
                      </div>
                      <div class="form-check">
                        <input class="form-check-input" type="radio" name="radio1" checked>
                        <label class="form-check-label">Pengguna Umum</label>
                      </div>
                      <div class="form-check">
                        <input class="form-check-input" type="radio" name="radio1" checked>
                        <label class="form-check-label">Pemilik Lahan</label>
                      </div>
                  </div>
                </div>
                </div>
                <div class="text-center">
                    <button type="submit" class="btn btn-primary" id="submit">Masuk</button>
                </div>
                </div>
              </form>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
   <!-- Main Footer -->
   <footer class="main-footer">
    <strong>Copyright &copy; 2021 <a href="http://agrowing.co.id">Agrowing.co.id</a>.</strong>
    Developed by IPB final year students.
    <div class="float-right d-none d-sm-inline-block">
      <b>Version</b> 1.0.0
    </div>
  </footer>

@endsection