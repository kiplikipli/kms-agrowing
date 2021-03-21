@extends('layouts.admin')

@section('header')
<div class="card-box">
    <div class="row mb-2">
      <div class="col-6">
        <h1 class="m-0 text-dark">Petani</h1>
      </div>
      <div class="col-6">
        <a class="btn btn-success waves-light waves-effect px-3 float-right" href="/admin/petani/tambah"> + Tambah Petani </a>
      </div>
    </div>    
</div>
@endsection

@section('content')
<div class="row">
  <!-- Left col -->
  <section class="col-12 connectedSortable">
    <!-- Custom tabs (Charts with tabs)-->
    <div class="card">
      <div class="card-body">
        <div class="table-responsive">
          <table class="table table-striped projects">
              <thead>
                <tr style="background-color:#EB9B04; color:white">
                  <th style="width: 5%">#</th>
                  <th style="width: 17%">PETANI</th>
                  <th style="width: 15%">KONTAK</th>
                  <th style="width: 15%">LOKASI LAHAN</th>
                  <th style="width: 15%">PRODUK</th>
                  <th style="width: 20%">STATUS</th>
                  <th style="width: 13%; text-align: center">AKSI</th>
                </tr>
              </thead>
              <tbody>
                <tr>
                  <td>1</td>
                  <td> <a>Ujang</a> </td>
                  <td> <a>081234567890</a> </td>
                  <td> <a>Citereup</a> </td>
                  <td> <a>Buah Naga</a> </td>
                  <td> <a>Persiapan lahan</a> </td>
                  <td class="project-actions text-right">
                      <a class="btn btn-block btn-primary btn-sm" href="#"> Lihat </a>
                  </td>
                </tr>
                <tr>
                  <td>2</td>
                  <td> <a>Bambang</a> </td>
                  <td> <a>081200000000</a> </td>
                  <td> <a>Majalengka</a> </td>
                  <td> <a>Jambu Biji</a> </td>
                  <td> <a>Pemanenan</a> </td>
                  <td class="project-actions text-right">
                      <a class="btn btn-block btn-primary btn-sm" href="#"> Lihat </a>
                  </td>
                </tr>
                <tr>
                  <td>3</td>
                  <td> <a>Bowo</a> </td>
                  <td> <a>089876543210</a> </td>
                  <td> <a>Bogor</a> </td>
                  <td> <a>Lemon</a> </td>
                  <td> <a>Perawatan tanaman belum menghasilkan</a> </td>
                  <td class="project-actions text-right">
                      <a class="btn btn-block btn-primary btn-sm" href="#"> Lihat </a>
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
