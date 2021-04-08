@extends('layouts.mk')

@section('header')
<section class="connectedSortable section" id="riwayatDetail">
    <div class="row m-2">
        <h5 class="m-0 text-bold">Detail Penanaman</h5>
    </div>
    <div class="m-2">
        <div class="blog position-relative overflow-hidden blog-shadow rounded p-3 pb-0">
            <div class="row">
                <div class="row col-sm-4">
                    <div class="col-4 col-sm-5 text-bold">
                        <p>Lokasi Lahan</p>
                    </div>
                    <div class="col-8 col-sm-7">
                        <p>Citereup</p>
                    </div>
                </div>
                <div class="row col-sm-3">
                    <div class="col-4 text-bold">
                        <p>Produk</p>
                    </div>
                    <div class="col-8">
                        <p>Buah Naga</p>
                    </div>
                </div>
                <div class="row col-sm-5">
                    <div class="col-4 col-sm-5 text-bold">
                        <p>Periode Tanam</p>
                    </div>
                    <div class="col-8 col-sm-7">
                        <p>5 Des 2019 - 5 Nov 2020</p>
                    </div>
                </div>
            </div>
        </div>
        <div class="card " style="margin-top: 10px;">
            <form action="#" method="GET" style="margin: 20px;" class="row">
            <div class="input-group date col-lg-3" >
    			<select name="blok_id" id="input" class="form-control mb-1">
                    <option value="">Blok 1</option>
                    <option value="">Blok 2</option>
    			</select>
</div>
                <div class="input-group date col-lg-3 mb-1" id="tanggalpencatatan" data-target-input="nearest">
                    <input type="text" class="form-control datetimepicker-input" data-target="#tanggalpencatatan"/>
                    <div class="input-group-append" data-target="#tanggalpencatatan" data-toggle="datetimepicker">
                        <div class="input-group-text"><i class="fa fa-calendar"></i></div>
                    </div>
                </div>
	    		<input type="submit" class="btn btn-success btn-sm mb-1" value="Filter">
	    	</form>
        </div>
    </div>
</section>
@endsection

@section('script')
<script>
$(function(){
    //Date range picker
    $('#tanggalpencatatan').datetimepicker({
        format: 'L'
    });
});
</script>
@endsection