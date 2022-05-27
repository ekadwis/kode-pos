<?php

namespace App\Controllers;

use App\Controllers\BaseController;

class KotaKabController extends BaseController
{
    public function index($ak)
    {
        $site = 'https://kodepos-2d475.firebaseio.com/list_kotakab/' . $ak . '.json?print=pretty';
        $content = file_get_contents($site);
        $listKotaKab = json_decode($content, true);
        $arrayKeys = array_keys($listKotaKab);

        $data = [
            'kota_kab' => 'text-purple active',
            'home' => 'text-light',
            'listKotaKab' => $listKotaKab,
            'arrayKeys' => $arrayKeys
        ];

        return view('kota-kab', $data);
    }
}
