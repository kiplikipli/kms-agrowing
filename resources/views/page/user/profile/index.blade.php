@extends('layouts.mk')

@section('header')
<section class="section" id="home">
    <div class="">
        <div class="m-1">
                <!-- DATA DIRI -->
            <div class="card">
                <div class="card-body box-profile row">
                    <div class="col-lg-2">
                        <div class="text-center">
                        <img class="profile-user-img img-fluid img-circle"
                            src="img/user1-128x128.jpg"
                            alt="User profile picture">
                        </div>
                    </div>
                    <div class="col-9 m-1">
                        <div class="row">
                            <div class="row col-sm-6">
                                <div class="col-sm-4 text-bold">
                                    <p>Nama</p>
                                </div>
                                <div class="col-sm-8">
                                    <p>Asep</p>
                                </div>
                            </div>
                            <div class="row col-sm-6">
                                <div class="col-sm-4 text-bold">
                                    <p>No ID</p>
                                </div>
                                <div class="col-sm-8">
                                    <p>12345678</p>
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="row col-sm-6">
                                <div class="col-sm-4 text-bold">
                                    <p>Jenis Kelamin</p>
                                </div>
                                <div class="col-sm-8">
                                    <p>Laki-laki</p>
                                </div>
                            </div>
                            <div class="row col-sm-6">
                                <div class="col-sm-4 text-bold">
                                    <p>No HP</p>
                                </div>
                                <div class="col-sm-8">
                                    <p>0812345678</p>
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="row col-sm-6">
                                <div class="col-sm-4 text-bold">
                                    <p>Email</p>
                                </div>
                                <div class="col-sm-8">
                                    <p>asep@gmail.com</p>
                                </div>
                            </div>
                            <div class="row col-sm-6">
                                <div class="col-sm-4 text-bold">
                                    <p>Alamat</p>
                                </div>
                                <div class="col-sm-8">
                                    <p>Jl Cibayur, Bogor</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- DATA LAHAN -->
            <div class="row">
                <div class="col-md-6 pb-2">
                    <div class="card">
                        <div class="card-body">
                            <div class="row mb-2">
                                <div class="col-9">
                                    <h5 class="m-0 text-bold">Data Lahan 1</h5>
                                </div>
                                <div class="col-3">
                                    <a class="btn btn-sm btn-default btn-block waves-light waves-effect float-right" href="/proyek/tambah">Edit</a>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-sm-4 text-bold">
                                    <p>Alamat</p>
                                </div>
                                <div class="col-sm-8">
                                    <p>Jl. Raya Dangdeur, Sukasari, Kec. Dawuan, Kab. Subang</p>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-sm-4 text-bold">
                                    <p>Koordinat</p>
                                </div>
                                <div class="col-sm-8">
                                    <p>-6.5520613999970845, 107.72864501879974</p>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-sm-4 text-bold">
                                    <p>Tanaman</p>
                                </div>
                                <div class="col-sm-8">
                                    <p>Buah Naga</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- Profile Image -->

@endsection