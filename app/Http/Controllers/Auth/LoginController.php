<?php

namespace App\Http\Controllers\Auth;

use App\Helper\ApiHelper;
use App\Http\Controllers\Controller;
use App\Providers\RouteServiceProvider;
use Illuminate\Foundation\Auth\AuthenticatesUsers;
use Illuminate\Http\Request;

class LoginController extends Controller
{
    use AuthenticatesUsers;
    public $httpClient;

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
        $this->httpClient = new ApiHelper('/login');
    }

    public function login(Request $request)
    {
        $this->validateLogin($request);

        $response = $this->httpClient->post([
            'email' => $request->input('email'),
            'password' => $request->input('password')
        ]);

        $request->session()->regenerate();
        $request->session()->put('token', $response['data']['token']);

        return redirect()->route('sop.index');
    }
}
