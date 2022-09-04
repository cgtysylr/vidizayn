<?php

namespace App\Services;

use GuzzleHttp\Client;

class CustomerService {

    private $client;

    private $baseUrl;

    private $serviceName;

    public function __construct()
    {
        $this->serviceName = 'customers';

        $this->baseUrl = config('services.api.host') . ':' . config('services.api.port');

        $this->client = new Client([
            'headers' => [
                'Content-type' => 'application/json',
                // 'Authorization' => 'Bearer '
            ],
            'verify'  => FALSE
        ]);
    }

    public function list()
    {

        try {
            $response = $this->client->get($this->baseUrl . '/'. $this->serviceName);

            $content = $response->getBody()->getContents();

            return json_decode($content);

        } catch ( \Exception $exception ) {
            throw new \InvalidArgumentException($exception->getMessage());
        }


    }

}
