<?php

namespace App\Helpers;

class JsonHelper
{
    public static function jsonDecode($json): array
    {
        dd(json_decode($json));
        return $json->json()->all;
    }
}
