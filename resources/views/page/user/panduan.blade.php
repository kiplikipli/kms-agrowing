@extends('layouts.mk')

@section('header')
<section class="section" id="home">
    <div class="">
        <div class="m-1">
            <h5 class="text-bold">Panduan Budidaya Buah Naga</h5>
            <div class="position-relative">
                <img src="{{ asset('img/buah-naga.jpg') }}" class="img-fluid" alt="image">
            </div>
            <div class="blog position-relative overflow-hidden blog-shadow rounded p-3 m-2">
                <h3>Informasi Umum</h3>
                <div class="row">
                    <div class="col-sm-2">
                        <p>Estimasi panen pertama</p>
                    </div>
                    <div class="col-sm-10">
                        <p>1,5 - 3 tahun</p>
                    </div>
                </div>
                <div class="row">
                    <div class="col-sm-2">
                        <p>Deskripsi</p>
                    </div>
                    <div class="col-sm-10">
                        <p>Buah naga adalah buah dari beberapa jenis kaktus dari marga Hylocereus dan Selenicereus. Buah ini berasal dari Meksiko, Amerika Tengah dan Amerika Selatan namun sekarang juga dibudidayakan di negara-negara Asia seperti Taiwan, Vietnam, Filipina, Indonesia dan Malaysia</p>
                    </div>
                </div>
            </div>
            <div class="m-3">
                <h3>Panduan</h3>
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