@extends('layouts.mk')

@section('header')
<section class="section" id="home">
    <div class="">
        <div class="m-1">
            <h5 class="text-bold">Panduan Budidaya {{ $data['data']['sop_nama'] }}</h5>
            <div class="position-relative">
                <img src="{{ asset('img/jambu-biji.jpg') }}" class="img-fluid" alt="image" style="max-width: 70%;">
            </div>
            <div class="blog position-relative overflow-hidden blog-shadow rounded p-3 m-2">
                <h5>Informasi Umum</h5>
                <div class="row">
                    <div class="col-sm-2">
                        <p>Estimasi panen</p>
                    </div>
                    <div class="col-sm-10">
                        <p>{{ $data['data']['estimasi_panen'] }}</p>
                    </div>
                </div>
                <div class="row">
                    <div class="col-sm-2">
                        <p>Deskripsi</p>
                    </div>
                    <div class="col-sm-10">
                        <p>{{ $data['data']['deskripsi'] }}</p>
                    </div>
                </div>
            </div>
            <div class="m-3">
                <h5>Panduan</h5>
            </div>
            <div class="accordion" id="panduanContent">
                <div class="card card-primary card-outline m-2">
                    <a data-toggle="collapse" href="#collapseOne" aria-expanded="false" aria-controls="collapseOne">
                        <div class="card-header" id="headingOne">
                            <h3 class="card-title">Tahapan Persiapan Lahan dan Tanaman</h3>
                        </div> <!-- /.card-body -->
                    </a>
                    <div id="collapseOne" class="collapse" aria-labelledby="headingOne" data-parent="#panduanContent">
                        <div class="card-body">
                            <ul>
                                <li>Pembersihan lahan dari rumput/semak serta bahan pengotor lainnya</li>
                                <li>Pembersihan lahan dari rumput/semak serta bahan pengotor lainnya</li>
                            </ul>
                        </div><!-- /.card-body -->
                    </div>
                </div>
                <div class="card card-primary card-outline m-2">
                    <a data-toggle="collapse" href="#collapseTwo" aria-expanded="false" aria-controls="collapseTwo">
                        <div class="card-header" id="headingTwo">
                            <h3 class="card-title">Tahapan Perawatan Tanaman Belum Menghasilkan</h3>
                        </div> <!-- /.card-body -->
                    </a>
                    <div id="collapseTwo" class="collapse" aria-labelledby="headingTwo" data-parent="#panduanContent">
                        <div class="card-body">
                            <ul>
                                <li>Pembersihan lahan dari rumput/semak serta bahan pengotor lainnya</li>
                                <li>Pembersihan lahan dari rumput/semak serta bahan pengotor lainnya</li>
                            </ul>
                        </div><!-- /.card-body -->
                    </div>
                </div>
                <div class="card card-primary card-outline m-2">
                    <a data-toggle="collapse" href="#collapseThree" aria-expanded="false" aria-controls="collapseThree">
                        <div class="card-header" id="headingThree">
                            <h3 class="card-title">Tahapan Perawatan Tanaman Menghasilkan</h3>
                        </div> <!-- /.card-body -->
                    </a>
                    <div id="collapseThree" class="collapse" aria-labelledby="headingThree" data-parent="#panduanContent">
                        <div class="card-body">
                            <ul>
                                <li>Pembersihan lahan dari rumput/semak serta bahan pengotor lainnya</li>
                                <li>Pembersihan lahan dari rumput/semak serta bahan pengotor lainnya</li>
                            </ul>
                        </div><!-- /.card-body -->
                    </div>
                </div>
                <div class="card card-primary card-outline m-2">
                    <a data-toggle="collapse" href="#collapseFour" aria-expanded="false" aria-controls="collapseFour">
                        <div class="card-header" id="headingFour">
                            <h3 class="card-title">Tahapan Pemanenan</h3>
                        </div> <!-- /.card-body -->
                    </a>
                    <div id="collapseFour" class="collapse" aria-labelledby="headingFour" data-parent="#panduanContent">
                        <div class="card-body">
                            <ul>
                                <li>Pembersihan lahan dari rumput/semak serta bahan pengotor lainnya</li>
                                <li>Pembersihan lahan dari rumput/semak serta bahan pengotor lainnya</li>
                            </ul>
                        </div><!-- /.card-body -->
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
@endsection