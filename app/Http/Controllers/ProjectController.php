<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Http;

class ProjectController extends Controller
{
    //
    public function index()
    {
        $data = Http::get('https://agrowing-api.herokuapp.com/api/v1/sop')->json();

        return view('page.user.project.add', ['data' => $data]);
    }

    public function create()
    {
        return view('page.user.project.add');
    }

    public function store(Request $request)
    {
        dd($request->all());
    }
}
