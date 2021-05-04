<?php

namespace App\Http\Controllers;

use App\Exceptions\ApiException;
use App\Helper\ApiHelper;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Http;
use RealRashid\SweetAlert\Facades\Alert;
use stdClass;

class ProjectController extends Controller
{
    //
    public function index()
    {
        $data = Http::get('https://agrowing-api.herokuapp.com/api/v1/sop')->json();

        return view('page.user.project.add', ['data' => $data]);
    }

    public function create(Request $request)
    {
        $httpClient = new ApiHelper('/sop', $request->session()->get('token'));
        $response = $httpClient->get();

        if ($response['response']->failed()) {
            throw new ApiException('listSop', "Gagal mengambil daftar SOP");
        }

        $listSop = $response['body']['sop'];

        return view('page.user.project.add', compact('listSop'));
    }

    public function store(Request $request)
    {
        $managerKebunId = $request->get('user')['manager_kebun'][0]['id'];
        $sopId = $request->sop_id;
        $tahapanSopId = 1;
        $alamat = $request->alamat;
        $regenciesId = 3322;
        $blok = array_map(function ($blok) {
            $blokObject = new \stdClass();
            $blokObject->luas_blok = $blok['luas'];
            $blokObject->jumlah_tanaman = $blok['jml_pokok_tanaman'];
            $blokObject->umur_tanaman = $blok['umur_tanaman'];

            return $blokObject;
        }, $request->data_blok);

        $data = [
            'manager_kebun_id' => $managerKebunId,
            'sop_id' => $sopId,
            'tahapan_sop_id' => $tahapanSopId,
            'alamat' => $alamat,
            'regencies_id' => $regenciesId,
            'blok' => $blok
        ];

        $httpClient = new ApiHelper('/project/create', $request->session()->get('token'));
        $response = $httpClient->post($data);

        if ($response['body']['status'] == 'error') {
            throw new ApiException('storeProject', $response['body']['message']);
        }

        Alert::success("Berhasil", $response['body']['message']);
        return redirect()->route('project.index');
    }
}
