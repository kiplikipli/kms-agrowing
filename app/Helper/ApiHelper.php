<?php

namespace App\Helper;

use App\Exceptions\ApiException;
use Illuminate\Support\Facades\Http;

class ApiHelper
{
    private $url;
    public $httpOptions;
    public $token;
    public $baseHttpClient;

    public function __construct($endpoint, $token = null)
    {
        $this->url = env('API_BASE_URL') . $endpoint;
        $this->httpOptions = [
            'verify' => false
        ];
        $this->token = $token;
        $this->baseHttpClient = Http::withToken($this->token)->withOptions($this->httpOptions)->withHeaders([
            'Accept' => 'application/json'
        ])->timeout(30);
    }

    public function get($query = null)
    {
        $response = $this->baseHttpClient->get($this->url, $query);
        return [
            'response' => $response,
            'status' => $response->status(),
            'body' => $response->json()
        ];
    }

    public function post($data = [])
    {
        $response = $this->baseHttpClient->post($this->url, $data);
        return [
            'response' => $response,
            'status' => $response->status(),
            'body' => $response->json()
        ];
    }

    public function put()
    {
    }

    public function delete()
    {
    }
}
