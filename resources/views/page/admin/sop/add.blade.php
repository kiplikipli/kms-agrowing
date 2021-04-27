@extends('layouts.admin')

@section('header')
<div class="card-box">
    <div class="row mb-2">
      <div class="col-6">
        <h1 class="m-0 text-dark">Buat SOP Budidaya</h1>
      </div>
    </div>    
</div>
@endsection

@section('content')
<div class="card-box">
    <div class="card card-info">
        <form class="form-horizontal">
         @csrf
            <div class="card-body">
                <div class="form-group row">
                    <label class="col-sm-2 col-form-label">Nama Tanaman</label>
                    <div class="col-sm-10">
                        <input type="text" class="form-control">
                    </div>
                </div>
                <div class="form-group row">
                    <label class="col-sm-2 col-form-label">Estimasi Panen Pertama</label>
                    <div class="col-sm-10">
                        <input type="text" class="form-control">
                    </div>
                </div>
                <div class="form-group row">
                    <label class="col-sm-2 col-form-label">Deskripsi</label>
                    <div class="col-sm-10">
                        <textarea class="form-control" rows="3" placeholder=""></textarea>
                    </div>
                </div>
                <div class="form-group row">
                    <label for="exampleInputFile" class="col-sm-2 col-form-label">Upload Gambar</label>
                    <div class="input-group col-sm-10">
                        <div class="custom-file">
                            <input type="file" class="custom-file-input" id="customFile">
                            <label class="custom-file-label" for="customFile">Pilih gambar</label>
                        </div>
                    </div>
                </div>
                <div class="form-group row">
                    <label class="col-sm-2 col-form-label">Kalkulasi Waktu Panen</label>
                    <div class="col-sm-10">
                        <input type="number" class="form-control">
                    </div>
                </div>
                <div class="form-group row">
                    <label class="col-sm-2 col-form-label">Kalkulasi Bobot Panen</label>
                    <div class="col-sm-10">
                        <input type="number" class="form-control">
                    </div>
                </div>
                <div class="form-group row">
                    <label class="col-sm-2 col-form-label">SOP Budidaya</label>
                </div>
                <!-- SOP Budidaya -->
                <div class="card card-primary card-outline">
                    <div class="card-header">
                        <h3 class="card-title">Tahapan Persiapan Lahan dan Tanaman</h3>
                    </div> <!-- /.card-body -->
                    <div class="card-body">
                        <div class="collapse mb-3" id="sop">
                            <div class="row">
                                <div class="form-group col-lg-6">
                                    <label data-browse="upload bukti">Nama Kegiatan <span class="text-danger">*</span></label>
                                    <div class="col-12">
                                        <input type="text" class="form-control">
                                    </div>
                                </div>
                                <div class="form-group col-lg-3">
                                    <label data-browse="upload bukti">HOK <span class="text-danger">*</span></label>
                                    <div class="col-12">
                                        <input type="text" class="form-control">
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="btn btn-primary btn-sm" id="next"> + Tambah Item Kegiatan </div>
                    </div><!-- /.card-body -->
                </div>
                <div class="card card-primary card-outline">
                    <div class="card-header">
                        <h3 class="card-title">Tahapan Perawatan Tanaman Belum Menghasilkan</h3>
                    </div> <!-- /.card-body -->
                    <div class="card-body">
                        <a class="btn btn-primary btn-sm" href="#"> + Tambah Item Kegiatan </a>
                    </div><!-- /.card-body -->
                </div>
                <div class="card card-primary card-outline">
                    <div class="card-header">
                        <h3 class="card-title">Tahapan Perawatan Tanaman Menghasilkan</h3>
                    </div> <!-- /.card-body -->
                    <div class="card-body">
                        <a class="btn btn-primary btn-sm" href="#"> + Tambah Item Kegiatan </a>
                    </div><!-- /.card-body -->
                </div>
                <div class="card card-primary card-outline">
                    <div class="card-header">
                        <h3 class="card-title">Tahapan Pemanenan</h3>
                    </div> <!-- /.card-body -->
                    <div class="card-body">
                        <a class="btn btn-primary btn-sm" href="#"> + Tambah Item Kegiatan </a>
                    </div><!-- /.card-body -->
                </div>
            </div>
            <!-- /.card-body -->
            <div class="card-footer">
                <button type="submit" class="btn btn-info">Simpan</button>
                <button type="submit" class="btn btn-default float-right">Cancel</button>
            </div>
        </form>
    </div>
    <!-- /.card -->
</div>
@endsection


@section('script')
<script>
    $(document).ready(function(){
        $("#next").click(function (e) {
                $("#next").show();
                $("#sop").show();
        });
    });
    </script>
@endsection