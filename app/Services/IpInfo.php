<?php

namespace App\Services;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Http;

class IpInfo
{
    const URL_TEMPLATE = 'https://ipinfo.io/%s/json';

    /**
     * @param Request $request
     * @return string|null
     */
    public function getCountryCode(Request $request): ?string
    {
        $url = sprintf(self::URL_TEMPLATE, $request->ip());

        for ($i = 0; $i < 3; $i++) {
            try {
                $response = Http::get($url)->json();
                break;
            } catch (\Exception $e) {
                sleep(1);
            }
        }

        return $response['country'] ?? null;
    }
}