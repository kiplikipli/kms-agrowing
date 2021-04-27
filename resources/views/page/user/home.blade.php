@extends('layouts.mk')

@section('header')
<section class="section" id="home">
    <div class="">
        <div class="m-1">
            <h4 class="text-bold">Panduan</h4>
            <div class="row mt-2">
                @foreach($data as $item)
                <div class="col-6 col-md-4 col-lg-2 pt-2">
                    <div class="blog position-relative overflow-hidden blog-shadow rounded">
                        <div class="position-relative">
                            <a href="/sop">
                            <img src="{{ asset('img/jambu-biji.jpg') }}" class="img-fluid" alt="image"></a>
                        </div>
                        <div class="content pt-1 pr-2 pl-2">
                            <p class="text-center"><a href="/sop" class="title">{{ $item[0][
                            'sop_nama'] }}</a></p>
                        </div>
                    </div>
                </div>
                @endforeach
            </div>
        </div>
    </div>
</section>
@endsection