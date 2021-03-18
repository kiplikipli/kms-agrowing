@extends('layouts.admin')

@section('header')
<div class="card-box">
  <div class="row mb-2">
    <div class="col-sm-6">
      <h1 class="m-0 text-dark">Dashboard</h1>
    </div>
  </div>
</div>
@endsection

@section('content')
<!-- Small boxes (Stat box) -->
<div class="row">
  <div class="col-lg-3 col-6">
    <!-- small box -->
    <div class="small-box bg-success">
      <div class="inner">
        <h3>2</h3>

        <p>Kebun sedang tahap <br> <strong>Pemanenan</strong></p>
      </div>
      <div class="icon">
        <i class="ion ion-stats-bars"></i>
      </div>
      <!-- <a href="#" class="small-box-footer">More info <i class="fas fa-arrow-circle-right"></i></a> -->
    </div>
  </div>
  <!-- ./col -->
  <div class="col-lg-3 col-6">
    <!-- small box -->
    <div class="small-box bg-info">
      <div class="inner">
        <h3>2</h3>

        <p>Kebun sedang tahap <br> <strong>Perawatan Menghasilkan</strong></p>
      </div>
      <div class="icon">
        <i class="ion ion-stats-bars"></i>
      </div>
      <!-- <a href="#" class="small-box-footer">More info <i class="fas fa-arrow-circle-right"></i></a> -->
    </div>
  </div>
  <!-- ./col -->
  <div class="col-lg-3 col-6">
    <!-- small box -->
    <div class="small-box bg-warning">
      <div class="inner">
        <h3>2</h3>

        <p>Kebun sedang tahap <br> <strong>Perawatan Belum Menghasilkan</strong></p>
      </div>
      <div class="icon">
        <i class="ion ion-stats-bars"></i>
      </div>
      <!-- <a href="#" class="small-box-footer">More info <i class="fas fa-arrow-circle-right"></i></a> -->
    </div>
  </div>
  <!-- ./col -->
  <div class="col-lg-3 col-6">
    <!-- small box -->
    <div class="small-box bg-danger">
      <div class="inner">
        <h3>4</h3>

        <p>Kebun sedang tahap <br> <strong>Persiapan</strong></p>
      </div>
      <div class="icon">
        <i class="ion ion-stats-bars"></i>
      </div>
      <!-- <a href="#" class="small-box-footer">More info <i class="fas fa-arrow-circle-right"></i></a> -->
    </div>
  </div>
  <!-- ./col -->
</div>
<!-- /.row -->

<!-- Main row -->
<div class="row">
  <!-- Left col -->
  <section class="col-lg-7 connectedSortable">
    <!-- Custom tabs (Charts with tabs)-->
    <div class="card">
      <div class="card-header" style="height:50px">
        <h3 class="card-title">
          <i class="fas fa-chart-pie mr-1"></i>
          <strong>Tahap Pemanenan</strong>
        </h3>
      </div><!-- /.card-header -->
      <div class="card-body p-0">
        <div class="table-responsive">
          <table class="table table-striped projects">
              <thead>
                <tr>
                  <th style="width: 1%">#</th>
                  <th style="width: 25%">Produk</th>
                  <th style="width: 25%">Lokasi Lahan</th>
                  <th style="width: 25%">Estimasi Panen</th>
                  <th style="width: 20%"></th>
                </tr>
              </thead>
              <tbody>
                <tr>
                  <td>1</td>
                  <td> <a>Buah Naga</a> </td>
                  <td> <a>Citereup</a> </td>
                  <td> <a>3 Minggu</a> </td>
                  <td class="project-actions text-right">
                      <a class="btn btn-block btn-primary btn-sm" href="#"> Detail </a>
                  </td>
                </tr>
                <tr>
                  <td>2</td>
                  <td> <a>Jambu Biji </a> </td>
                  <td> <a>Majalengka</a> </td>
                  <td> <a>6 Minggu</a> </td>
                  <td class="project-actions text-right">
                      <a class="btn btn-block btn-primary btn-sm" href="#"> Detail </a>
                  </td>
                </tr>
              </tbody>
          </table>
        </div>
      </div>
    </div>
  </section>
  <!-- right col -->
</div>

@endsection