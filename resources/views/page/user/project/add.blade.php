@extends('layouts.mk')

@section('header')
<div class="card card-primary card-outline">
    <div class="card-header">
        <h2 class="card-title"><strong>Buat Proyek Tanam</strong></h2>
    </div> <!-- /.card-body -->
    <form class="form-horizontal">
        <div class="card-body">
            <div class="mb-3" id="create-proyek">
                <!-- Data Varietas Tanaman -->
                <div class="m-0">
                    <h5><strong>Data Varietas Tanaman</strong></h5>
                </div>
                <div class="form-group row">
                    <label class="col-sm-2 col-form-label">Nama Tanaman</label>
                    <div class="col-sm-9">
                        <input type="text" class="form-control">
                    </div>
                </div>
                <div class="form-group row">
                    <label class="col-sm-2 col-form-label">Tahap Pencatatan Awal</label>
                    <div class="col-sm-9">
                        <input type="text" class="form-control">
                    </div>
                </div>
                <!-- Data Lahan -->
                <hr size="1px" width="100%">
                <div class="m-0">
                    <h5 class="text-bold">Data Lahan</h5>
                </div>
                <div class="form-group row">
                    <label class="col-sm-2 col-form-label">Alamat</label>
                    <div class="col-sm-9">
                        <textarea class="form-control" rows="3" placeholder=""></textarea>
                    </div>
                </div>
                <div class="form-group row">
                    <label class="col-sm-2 col-form-label">Provinsi</label>
                    <div class="col-sm-9">
                        <input type="text" class="form-control">
                    </div>
                </div>
                <div class="form-group row">
                    <label class="col-sm-2 col-form-label">Kota/Kabupaten</label>
                    <div class="col-sm-9">
                        <input type="text" class="form-control">
                    </div>
                </div>
                <div class="form-group row">
                    <label class="col-sm-2 col-form-label">Koordinat</label>
                    <div class="col-sm-9">
                        <input type="text" class="form-control">
                    </div>
                </div>
                <!-- Data Blok -->
                <hr size="1px" width="100%">
                <div id="data-blok">
                    <div class="m-0">
                        <h5 class="text-bold">Data Blok</h5>
                    </div>
                    <div class="form-group row">
                        <label class="col-sm-2 col-form-label">Luas Blok</label>
                        <div class="input-group col-sm-2">
                            <input type="text" class="form-control">
                            <div class="input-group-append">
                                <span class="input-group-text">m2</span>
                            </div>
                        </div>
                    </div>
                    <div class="form-group row">
                        <label class="col-sm-2 col-form-label">Jml Pokok Tanaman</label>
                        <div class="input-group col-sm-2">
                            <input type="text" class="form-control">
                            <div class="input-group-append">
                                <span class="input-group-text">pokok</span>
                            </div>
                        </div>
                    </div>
                    <div class="form-group row">
                        <label class="col-sm-2 col-form-label">Umur Tanaman</label>
                        <div class="input-group col-sm-2">
                            <input type="text" class="form-control">
                            <div class="input-group-append">
                                <span class="input-group-text">bulan</span>
                            </div>
                        </div>
                    </div>
                    <hr size="1px" width="100%">
                    
                    <div id="data-selanjutnya"></div>
                </div>
                                    
                <div class="btn btn-block btn-success" id="next">+ Tambah Data Blok</div>
            </div>
        </div>
        <div class="row m-2">
            <div class="col-6">
                <button type="submit" class="btn btn-block btn-info">Simpan</button>
            </div>
            <div class="col-6">
                <a href="/proyek" class="btn btn-block btn-default float-right waves-effect">Kembali</a>
            </div>
        </div><!-- /.card-body -->
    </form>
</div>
@endsection

@section('script')
<script>
    $(function(){
        $("#next").click(function (e) {
            var $data = $("#data-blok").clone();
            $('#data-selanjutnya').html($data);
            $("#next").show();
        });
    });
    </script>
@endsection