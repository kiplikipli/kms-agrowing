@extends('layouts.mk')

@section('header')
<section class="section" id="proyek">
    <div class="">
        <div class="row m-1 mb-2">
            <div class="col-7">
                <h5 class="m-0 text-bold">Proyek Penanaman Saat Ini</h5>
            </div>
            <div class="col-5">
                <a class="btn btn-success waves-light waves-effect float-right" href="/proyek/tambah">Buat Proyek</a>
            </div>
        </div>
        <div class="row m-1">
            <div class="card col-md-3 p-3">
                <div class="position-relative rounded">
                    <div class="content">
                        <h5>Buah Naga</h5>
                        <p>10 November 2020 - sekarang</p>
                        <p>Fase: Tahap Persiapan Lahan dan Tanaman</p>
                        <div class="row btn-group" style="margin:auto">
                            <div class="py-1 px-1">
                                <a class="btn btn-success waves-light waves-effect" href="/pencatatan/1">Catat Aktivitas</a>
                            </div>
                            <div class="py-1 px-1">
                                <a class="btn btn-success " href="#">Lihat Detail</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="m-1">
                </div>
            <div class="card col-md-3 p-3">
                <div class="position-relative rounded">
                    <div class="content">
                        <h5>Jambu Biji</h5>
                        <p>10 Desember 2020 - sekarang</p>
                        <p>Fase: Tahap Persiapan Lahan dan Tanaman</p>
                        <div class="row btn-group" style="margin:auto">
                            <div class="py-1 px-1">
                                <a class="btn btn-success waves-light waves-effect" href="#">Catat Aktivitas</a>
                            </div>
                            <div class="py-1 px-1">
                                <a class="btn btn-success waves-light waves-effect" href="#">Lihat Detail</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<section class="connectedSortable section" id="riwayat">
    <div class="row m-1 mb-3">
            <h5 class="m-0 text-bold">Riwayat Penanaman Sebelumnya</h5>
        </div>
    <!-- Custom tabs (Charts with tabs)-->
    <div class="card m-1">
        <div class="card-body">
        <div class="table-responsive">
            <table class="table table-striped projects">
                <thead>
                <tr style="background-color:#EB9B04; color:white">
                    <th style="width: 5%">#</th>
                    <th style="width: 20%">TANGGAL</th>
                    <th style="width: 15%">PRODUK</th>
                    <th style="width: 15%">JUMLAH PANEN</th>
                    <th style="width: 15%">LUAS LAHAN</th>
                    <th style="width: 13%; text-align: center">AKSI</th>
                </tr>
                </thead>
                <tbody>
                <tr>
                    <td>1</td>
                    <td> <a>05/12/2019 - 05/11/2020</a> </td>
                    <td> <a>Buah Naga</a> </td>
                    <td> <a>1300 kg</a> </td>
                    <td> <a>10000 m2</a> </td>
                    <td class="project-actions text-center">
                        <a class="btn btn-success pr-3" href="#"> Lihat </a>
                    </td>
                </tr>
                <tr>
                    <td>2</td>
                    <td> <a>05/12/2019 - 05/11/2020</a> </td>
                    <td> <a>Buah Naga</a> </td>
                    <td> <a>1300 kg</a> </td>
                    <td> <a>9000 m2</a> </td>
                    <td class="project-actions text-center">
                        <a class="btn btn-success pr-3" href="#"> Lihat </a>
                    </td>
                </tr>
                <tr>
                    <td>3</td>
                    <td> <a>05/12/2019 - 05/11/2020</a> </td>
                    <td> <a>Timun</a> </td>
                    <td> <a>1300 kg</a> </td>
                    <td> <a>8000 m2</a> </td>
                    <td class="project-actions text-center">
                        <a class="btn btn-success pr-3" href="#"> Lihat </a>
                    </td>
                </tr>
                </tbody>
            </table>
        </div>
        </div>
    </div>
</section>
@endsection