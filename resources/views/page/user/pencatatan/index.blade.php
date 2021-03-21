@extends('layouts.mk')

@section('header')
<div class="card card-primary card-outline">
    <div class="card-header">
        <h1 class="card-title">Pencatatan Harian</h1>
    </div> <!-- /.card-body -->
    <form class="form-horizontal">
        <div class="card-body">
            <div class="mb-3" id="create-proyek">
                <!-- Pencatatan #1 -->
                <div class="pencatatan1">
                    <div class="form-group row">
                        <label class="col-sm-2 col-form-label">Blok</label>
                        <div class="col-sm-9">
                            <input type="text" class="form-control">
                        </div>
                    </div>
                    <div class="form-group row">
                        <label class="col-sm-2 col-form-label">Tanggal</label>
                        <div class="col-sm-9">
                            <input type="text" class="form-control">
                        </div>
                    </div>
                    <div class="form-group row">
                        <label class="col-sm-2 col-form-label">Tahapan Budidaya</label>
                        <div class="col-sm-9">
                            <input type="text" class="form-control">
                        </div>
                    </div>
                    <div>
                        <a href="/riwayat">Lihat Riwayat Pencatatan</a>
                    </div>

                    <div class="row mt-3">
                        <div class="col-6" id="batal">
                            <a href="/proyek" class="btn btn-block btn-default float-right waves-effect">Batal</a>
                        </div>
                        <div class="col-6">
                            <div class="btn btn-block btn-success" id="next">Selanjutnya</div>
                        </div>
                    </div>
                </div>

                <!-- Pencatatan #2 -->
                <div class="collapse pencatatan2">
                    <p>Anda akan membuat <strong>Laporan Persiapan Lahan dan Tanaman</strong> untuk <strong>Blok 1</strong>
                     pada tanggal <strong>23 Februari 2021</strong></p>
                     <!-- ceklis dan input data kegiatan -->
                    <div class="form-group">
                        <div class="form-check">
                          <input class="form-check-input" type="checkbox">
                          <label class="form-check-label">Penyulaman bibit mati / tumbuh tidak baik</label>
                        </div>
                        <div class="form-check">
                          <input class="form-check-input" type="checkbox">
                          <label class="form-check-label">Pengairan sebanyak 2 kali sehari pada pagi dan sore</label>
                        </div>
                        <div class="form-check">
                          <input class="form-check-input" type="checkbox">
                          <label class="form-check-label">Penyiangan rumput / gulma di sekitar tajuk tanaman</label>
                        </div>
                        <div class="form-check">
                          <input class="form-check-input" type="checkbox">
                          <label class="form-check-label">Pemupukan sebanyak 2 kali dalam 1 tahun</label>
                        </div>
                    </div>
                    <div class="form-group row">
                        <div class="col-sm-9">
                            <input type="text" class="form-control" placeholder="Tambahkan catatan">
                        </div>
                    </div>
                    <br>

                    <!-- pertanyaan status budidaya -->
                    <div class="form-group">
                        <p><strong>Apakah tanaman sudah mulai berbuah?</strong></p>
                        <div class="form-check">
                          <input class="form-check-input" type="radio" name="radio1">
                          <label class="form-check-label">Sudah</label>
                        </div>
                        <div class="form-check">
                          <input class="form-check-input" type="radio" name="radio1">
                          <label class="form-check-label">Belum</label>
                        </div>
                    </div>

                    <div>
                        <a href="/riwayat">Lihat Riwayat Pencatatan</a>
                    </div>

                    <div class="row mt-3">
                        <div class="col-6">
                            <div class="btn btn-block btn-default" id="back">Kembali</div>
                        </div>
                        <div class="col-6">
                            <div class="btn btn-block btn-success" id="save">Simpan</div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </form>
</div>
@endsection

@section('script')
<script>
$(function(){
    $("#next").click(function (e) {
        $(".pencatatan1").hide();
        $(".pencatatan2").show();
    });
    $("#back").click(function (e) {
        $(".pencatatan1").show();
        $(".pencatatan2").hide();
    });
});
</script>
@endsection