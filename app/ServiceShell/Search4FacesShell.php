<?php

namespace App\ServiceShell;

use App\Helpers\JsonHelper;
use Illuminate\Support\Facades\Http;

class Search4FacesShell
{
    private string $urlRequest = 'https://search4faces.com/api/json-rpc/v1';
    private array $apiVersion = ['jsonrpc' => '2.0'];
    private string $contentType = 'application/json';

    /**
     * @param $params
     * @param $methodName
     * @return array
     */
    private function requestBuilder($params, $methodName): array
    {
        $params = array_merge($params, $this->apiVersion);

        $params = array_merge($params,
            ['method' => $methodName]
        );

        return $params;
    }

    /**
     * @param array $params
     * @param string $methodName
     * @return array
     */
    public function send(array $params, string $methodName)
    {
        $requestParams = $this->requestBuilder(
            $params,
            $methodName
        );

        $tokenApi = env('SEARCH4FACES_API_KEY');

        $response = Http::timeout(90)
            ->withHeaders([
                'Content-Type' => $this->contentType,
                'x-authorization-token' => $tokenApi
            ])->post(
                $this->urlRequest,
                $requestParams
            )->body();

        return json_decode($response);
    }
}
