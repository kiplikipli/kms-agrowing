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
                        <div class="col-lg-6">
                            <select name="article_id" class="custom-select select2">
                            <option>Blok 1</option>
                            <option>Blok 2</option>
                            <option>Blok 3</option>
                            </select>
                        </div>
                    </div>
                    <div class="form-group row">
                        <label class="col-sm-2 col-form-label">Tanggal</label>
                        <div class="input-group date col-lg-6" id="tanggalpencatatan" data-target-input="nearest">
                            <input type="text" class="form-control datetimepicker-input" data-target="#tanggalpencatatan"/>
                            <div class="input-group-append" data-target="#tanggalpencatatan" data-toggle="datetimepicker">
                                <div class="input-group-text"><i class="fa fa-calendar"></i></div>
                            </div>
                        </div>
                    </div>
                    <div class="form-group row">
                        <label for="kegiatan" class="col-sm-2 col-form-label">Tahapan Budidaya</label>
                        <div class="col-lg-6">
                            <select name="tahapan_budidaya" class="form-control custom-select" id="tahapan_budidaya" required>
                            <option selected disabled hidden value="">Pilih Tahapan</option>
                            <option value="persiapan">Tahap Persiapan Lahan dan Tanaman</option>
                            <option value="perawatan_belum_menghasilkan">Tahap Perawatan Tanaman Belum Menghasilkan</option>
                            <option value="perawatan_menghasilkan">Tahap Perawatan Tanaman Menghasilkan</option>
                            <option value="pemanenan">Tahap Pemanenan</option>
                            </select>
                        </div>
                    </div>
                    <div class="form-group row hide-pemanenan" id="pemanenan">
                        <label class="col-sm-2 col-form-label">Kegiatan</label>
                        <div class="col-lg-6">
                            <div class="form-check col-sm-3">
                                <input class="form-check-input" type="radio" name="pesiapan">
                                <label class="form-check-label">Persiapan</label>
                            </div>
                            <div class="form-check col-sm-3">
                                <input class="form-check-input" type="radio" name="panen">
                                <label class="form-check-label">Panen</label>
                            </div>
                        </div>
                    </div>
                    <div class="pb-3">
                        <a href="/riwayat">Lihat Riwayat Pencatatan</a>
                    </div>
                    <div class="row mt-3 col-lg-8">
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
                          <input class="form-check-input penyulaman" type="checkbox" value="1" onchange="valueChanged()">
                          <label class="form-check-label" for="penyulaman">Penyulaman bibit mati / tumbuh tidak baik</label>
                        </div>
                        <!-- indikator -->
                        <div class="col-lg-6 hide pl-3 pt-1 indikator">
                            <div class="form-group">
                                <input type="number" class="form-control" placeholder="Jumlah bibit mati">
                            </div>
                            <div class="form-group">
                                <input type="number" class="form-control" placeholder="Jumlah bibit yang tumbuh tidak baik">
                            </div>
                            <div class="form-group">
                                <input type="number" class="form-control" placeholder="Jumlah orang yang bekerja">
                            </div>
                            <div class="form-group">
                                <div class="custom-file">
                                    <input type="file" class="custom-file-input" id="customFile">
                                    <label class="custom-file-label" for="customFile">Pilih gambar</label>
                                </div>
                            </div>
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

                    <div class="pb-3">
                        <a href="/riwayat">Lihat Riwayat Pencatatan</a>
                    </div>

                    <div class="row mt-3">
                        <div class="col-6">
                            <div class="btn btn-block btn-default" id="back">Kembali</div>
                        </div>
                        <div class="col-6">
                            <button type="submit" class="btn btn-block btn-success">Simpan</button>
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

    $(".hide").hide();
    $(".penyulaman").click(function() {
        if($(this).is(":checked")) {
            $(".hide").show(300);
        } else {
            $(".hide").hide(200);
        }
    });

    //Date range picker
    $('#tanggalpencatatan').datetimepicker({
        format: 'L'
    });

    $(".hide-pemanenan").hide();
    // Show and hide selected div
    $('#tahapan_budidaya').change(function () {
        var value = this.value;
            
        $('[name="pemanenan"]').removeAttr('required')
        $('[name="kegiatan"]').removeAttr('required')
        $('.hide-pemanenan').hide();
        $(`#${value}`).show()
        $(`[name="${value}"]`).attr('required', true)
    });
});
</script>
@endsection