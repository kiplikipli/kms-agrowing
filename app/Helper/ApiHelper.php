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
        $this->baseHttpClient = Http::withToken($this->token)->withOptions($this->httpOptions)->timeout(30);
    }

    public function get($query = null)
    {
        $response = $this->baseHttpClient->get($this->url, $query);
        return $response->json();
    }

    public function post($data)
    {
        $response = $this->baseHttpClient->post($this->url, $data);
        $body = json_decode($response->body());
        if ($response->failed()) {
            throw new ApiException('login', $body->message);
        }
        return $response->json();
    }

    public function put()
    {
    }

    public function delete()
    {
    }
}
