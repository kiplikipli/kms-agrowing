<?php

namespace App\Http\Controllers;

use App\Helper\ApiHelper;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Http;

class SOPController extends Controller
{
    public $httpClient;

    public function __construct()
    {
        $this->httpClient = new ApiHelper('/sop', null);
    }

    public function index()
    {
        $data = $this->httpClient->get();
        if ($data['response']->failed()) {
            abort(500);
        }
        $data = $data['body'];

        return view('page.user.home', compact('data'));
    }

    public function show()
    {
        $data = Http::get('https://agrowing-api.herokuapp.com/api/v1/sop/1')->json();

        return view('page.user.panduan', ['data' => $data]);
    }
}
