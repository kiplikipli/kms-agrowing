@extends('layouts.mk')

@section('header')
<section class="section" id="proyek">
    <div class="row m-1 mb-2">
        <div class="col-7">
            <h5 class="m-0 text-bold">Penanaman Saat Ini</h5>
        </div>
        <div class="col-5">
            <a class="btn btn-success waves-light waves-effect float-right" href="/proyek/tambah">Buat Proyek</a>
        </div>
    </div>
    <div class="row m-1">
        <div class="col-md-4 pb-2">
            <div class="blog position-relative overflow-hidden blog-shadow rounded">
                <div class="content p-3">
                    <h5>Buah Naga</h5>
                    <p>10 November 2020 - sekarang</p>
                    <div class="row btn-group" style="margin:auto">
                        <div class="py-1 px-1">
                            <a class="btn btn-success waves-light waves-effect" href="/pencatatan/1">Catat Aktivitas</a>
                        </div>
                        <div class="py-1 px-1">
                            <a class="btn btn-primary " href="/riwayat/1">Lihat Detail</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-md-4 pb-2">
            <div class="blog position-relative overflow-hidden blog-shadow rounded">
                <div class="content p-3">
                    <h5>Jambu Biji</h5>
                    <p>10 Desember 2020 - sekarang</p>
                    <div class="row btn-group" style="margin:auto">
                        <div class="py-1 px-1">
                            <a class="btn btn-success waves-light waves-effect" href="#">Catat Aktivitas</a>
                        </div>
                        <div class="py-1 px-1">
                            <a class="btn btn-primary waves-light waves-effect" href="/riwayat/1">Lihat Detail</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<section class="connectedSortable section" id="riwayat">
    <div class="row m-2">
        <h5 class="m-0 text-bold">Riwayat Penanaman</h5>
    </div>
    <div class="m-2">
        <div class="blog position-relative overflow-hidden blog-shadow rounded p-3">
            <p class="tanggal"><i class="fas fa-seedling"></i>  5 Des 2019 - 5 Nov 2020</p>
            <div class="row">
                <div class="col-6 col-md-9 col-lg-10">
                    <h5>Jeruk</h5>
                </div>
                <div class="col-6 col-md-3 col-lg-2 vertical-line">
                    <h5>1300kg</h5>
                </div>
            </div>
            <p>
            <a href="/riwayat/1" class="link-white text-sm float-left"></i> Lihat Riwayat Pencatatan</a>
            </p>
        </div>
        <div class="blog position-relative overflow-hidden blog-shadow rounded p-3">
            <p class="tanggal"><i class="fas fa-seedling"></i>  5 Des 2019 - 5 Nov 2020</p>
            <div class="row">
                <div class="col-8 col-md-9 col-lg-10">
                    <h5>Jeruk</h5>
                </div>
                <div class="col-4 col-md-3 col-lg-2 vertical-line">
                    <h5>1300kg</h5>
                </div>
            </div>
            <p>
            <a href="/riwayat/1" class="link-white text-sm float-left"></i> Lihat Riwayat Pencatatan</a>
            </p>
        </div>
    </div>
</section>
@endsection