@extends('layouts.admin')

@section('content')
<div class="content-wrapper">
    <div class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1 class="m-0 text-dark">Daftar SOP</h1>
          </div>
        </div>
      </div>
    </div>
<!-- Main row -->
    <section class="content">
    <div class="container-fluid">
        <div class="row">
          <!-- Left col -->
            <section class="col-lg-7 connectedSortable">
            <!-- Custom tabs (Charts with tabs)-->
            <div class="card">
              <div class="card-body p-0">
                <table class="table table-striped projects">
                    <thead>
                        <tr style="background-color:#EB9B04">
                            <th style="width: 1%">
                                #
                            </th>
                            <th style="width: 25%">
                                Gambar
                            </th>
                            <th style="width: 25%">
                                Produk
                            </th>
                            <th style="width: 25%">
                                Periode Tanam
                            </th>
                            <th style="width: 20%">
                            </th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <td>1</td>
                            <td>
                                <ul class="list-inline">
                                    <li class="list-inline-item">
                                        <img alt="Avatar" class="table-avatar" src="../img/avatar.png">
                                    </li>
                                </ul>
                            </td>
                            <td>
                                <a>Buah Naga</a>
                            </td>
                            <td>
                              <a>5 Bulan</a>
                            </td>
                            <td class="project-actions text-right">
                                <a class="btn btn-block btn-primary btn-sm" href="#">
                                    Detail
                                </a>
                            </td>
                        </tr>
                        <tr>
                            <td>2</td>
                            <td>
                                <ul class="list-inline">
                                    <li class="list-inline-item">
                                        <img alt="Avatar" class="table-avatar" src="../img/avatar.png">
                                    </li>
                                </ul>
                            </td>
                            <td>
                                <a>Jambu Biji</a>
                            </td>
                            <td>
                                <a>23 bulan</a>
                            </td>
                            <td class="project-actions text-right">
                                <a class="btn btn-block btn-primary btn-sm" href="#">
                                    Detail
                                </a>
                            </td>
                        </tr>
                    </tbody>
                </table>
            </div>
            </div>
            </section>
        </div>
        </div>
    </section>
</div>
@endsection