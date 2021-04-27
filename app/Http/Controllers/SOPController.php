<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Http;

class SOPController extends Controller
{
    //

    public function index()
    {
        $data = Http::get('https://agrowing-api.herokuapp.com/api/v1/sop')->json();

        return view('page.user.home', ['data'=>$data]);
    }

    public function show()
    {
        $data = Http::get('https://agrowing-api.herokuapp.com/api/v1/sop/1')->json();

        return view('page.user.panduan', ['data'=>$data]);
    }
}
