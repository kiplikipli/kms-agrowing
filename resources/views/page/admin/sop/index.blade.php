@extends('layouts.admin')

@section('header')
<div class="card-box">
    <div class="row mb-2">
      <div class="col-6">
        <h1 class="m-0 text-dark">SOP</h1>
      </div>
      <div class="col-6">
        <a class="btn btn-success waves-light waves-effect px-3 float-right" href="/admin/sop/tambah"> + Tambah SOP </a>
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
                  <th style="width: 25%">GAMBAR</th>
                  <th style="width: 25%">VARIETAS TANAMAN</th>
                  <th style="width: 25%">PERIODE TANAM</th>
                  <th style="width: 13%; text-align: center">AKSI</th>
                  <th style="width: 7%"></th>
                </tr>
              </thead>
              <tbody>
                <tr>
                  <td>1</td>
                  <td>
                    <img src="{{ asset('img/jambu-biji.jpg')}}" height=120 width=200>
                  </td>
                  <td> <a>Jambu Biji</a> </td>
                  <td> <a>23 bulan</a> </td>
                  <td class="project-actions text-right">
                      <a class="btn btn-block btn-primary btn-sm" href="#"> Lihat </a>
                  </td>
                  <td></td>
                </tr>
                <tr>
                  <td>2</td>
                  <td>
                    <img src="{{ asset('img/buah-naga.jpg')}}" height=120 width=200>
                  </td>
                  <td> <a>Buah Naga</a> </td>
                  <td> <a>5 bulan</a> </td>
                  <td class="project-actions text-right">
                      <a class="btn btn-block btn-primary btn-sm" href="#"> Lihat </a>
                  </td>
                  <td></td>
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