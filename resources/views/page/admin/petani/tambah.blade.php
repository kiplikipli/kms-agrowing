@extends('layouts.admin')

@section('header')
<div class="card-box">
    <div class="row mb-2">
      <div class="col-6">
        <h1 class="m-0 text-dark">Tambah Petani</h1>
      </div>
    </div>    
</div>
@endsection

@section('content')
<div class="card-box">
    <div class="card card-info">
        <form class="form-horizontal">
            <div class="card-body">
                <div class="form-group row">
                    <label for="inputEmail3" class="col-sm-2 col-form-label">Email</label>
                    <div class="col-sm-10">
                        <input type="email" class="form-control" id="inputEmail3">
                    </div>
                </div>
                <div class="form-group row">
                    <label for="exampleInputPassword1" class="col-sm-2 col-form-label">Password</label>
                    <div class="col-sm-10">
                    <input type="password" class="form-control" id="exampleInputPassword1">
                    </div>
                  </div>
                <div class="form-group row">
                    <label class="col-sm-2 col-form-label">Nama</label>
                    <div class="col-sm-10">
                        <input type="text" class="form-control">
                    </div>
                </div>
                <div class="form-group row">
                    <label class="col-sm-2 col-form-label">Jenis Kelamin</label>
                    <div class="col-sm-10">
                        <select class="form-control">
                            <option>Laki-laki</option>
                            <option>Perempuan</option>
                        </select>
                    </div>
                </div>
                <div class="form-group row">
                    <label class="col-sm-2 col-form-label">No HP</label>
                    <div class="col-sm-10">
                        <input type="number" class="form-control">
                    </div>
                </div>
                <div class="form-group row">
                    <label class="col-sm-2 col-form-label">Alamat</label>
                    <div class="col-sm-10">
                        <textarea class="form-control" rows="3" placeholder=""></textarea>
                    </div>
                </div>
                <div class="form-group row">
                    <label class="col-sm-2 col-form-label">Provinsi</label>
                    <div class="col-sm-10">
                        <select class="form-control">
                            <option>Banten</option>
                            <option>DKI Jakarta</option>
                            <option>Jawa Barat</option>
                        </select>
                    </div>
                </div>
                <div class="form-group row">
                    <label class="col-sm-2 col-form-label">Kota / Kabupaten</label>
                    <div class="col-sm-10">
                        <select class="form-control">
                            <option>Kota Tangerang</option>
                            <option>Kota Tangerang Selatan</option>
                            <option>Kabupaten Tangerang</option>
                        </select>
                    </div>
                </div>
            </div>
            <!-- /.card-body -->
            <div class="card-footer">
                <button type="submit" class="btn btn-info">Daftar</button>
                <button type="submit" class="btn btn-default float-right">Cancel</button>
            </div>
        </form>
    </div>
    <!-- /.card -->
</div>
@endsection
