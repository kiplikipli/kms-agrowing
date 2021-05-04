<?php

namespace App\Http\Controllers\Auth;

use App\Helper\ApiHelper;
use App\Http\Controllers\Controller;
use App\Providers\RouteServiceProvider;
use Illuminate\Foundation\Auth\AuthenticatesUsers;
use Illuminate\Http\Request;
use RealRashid\SweetAlert\Facades\Alert;

class LoginController extends Controller
{
    use AuthenticatesUsers;

    /**
     * Where to redirect users after login.
     *
     * @var string
     */
    protected $redirectTo = RouteServiceProvider::HOME;

    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('guest')->except('logout');
    }

    public function login(Request $request)
    {
        $this->validateLogin($request);
        $httpClient = new ApiHelper('/login');

        $response = $httpClient->post([
            'email' => $request->input('email'),
            'password' => $request->input('password')
        ]);

        if ($response['response']->failed()) {
            throw new ApiException('login', $response['body']->message);
        }

        $request->session()->regenerate();
        $request->session()->put('token', $response['body']['data']['token']);

        return redirect()->route('sop.index');
    }

    public function logout(Request $request)
    {
        $httpClient = new ApiHelper('/logout');
        $response = $httpClient->post();

        if ($response['response']->failed()) {
            Alert::error("Gagal", "Kesalahan server");
            return redirect()->back();
        }

        $request->session()->remove('token');
        Alert::success("Berhasil", "Berhasil logout");
        return redirect()->route('login');
    }
}
