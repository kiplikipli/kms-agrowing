@extends('layouts.app')

@section('content')
  <div class="row d-flex align-items-center justify-content-center">
    <div class="col-lg-6">
    </div>
    <div class="card p-2 mt-3">
      <form id="login-form" enctype="multipart/form-data" role="form" action="#" method="post">
      @csrf
        <div class="card-body">
          <div class="logo-box mb-3" >
            <img src="img/logo-agrowing-ori.png" alt="Logo Agrowing" class="center">
          </div>
          <div class="form-group position-relative">
            <label for="email">Email</label>
            <input 
              type="email" 
              placeholder="Email"
              name="email" 
              id="email" 
              class="form-control"
            >
          </div>
          <div class="form-group position-relative">
            <label for="password">Password</label>
            <input type="password" class="form-control" id="exampleInputPassword1">
          </div>
          <div class="form-group position-relative">
            <label for="role">Masuk sebagai:</label>
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
          <div class="text-center">
            <button type="submit" class="btn btn-info">Masuk</button>
        </div>
        </div>
        
      </form>
    </div>
  </div>
@endsection