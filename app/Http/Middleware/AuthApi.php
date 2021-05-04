<?php

namespace App\Http\Middleware;

use App\Helper\ApiHelper;
use Closure;
use RealRashid\SweetAlert\Facades\Alert;

class AuthApi
{
    /**
     * Handle an incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \Closure  $next
     * @return mixed
     */
    public function handle($request, Closure $next, $role = null)
    {
        $httpClient = new ApiHelper('/user', $request->session()->get('token'));

        $response = $httpClient->get();
        if ($response['response']->failed()) {
            $request->session()->remove('token');
        }

        if (!$request->session()->get('token')) {
            Alert::error("Gagal", "Silahkan login terlebih dahulu");
            return redirect()->route('login');
        }

        $request->attributes->add([
            'user' => $response['body']['user']
        ]);

        return $next($request);
    }
}
