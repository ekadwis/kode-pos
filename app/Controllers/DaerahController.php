<?php

namespace App\Controllers;

use App\Controllers\BaseController;

class DaerahController extends BaseController
{
    public function index($ak)
    {
        $site = 'https://kodepos-2d475.firebaseio.com/kota_kab/' . $ak . '.json?print=pretty';
        $content = file_get_contents($site);
        $listDaerah = json_decode($content, true);
        $arrayKeys = array_keys($listDaerah);

        $data = [
            'kota_kab' => 'text-purple active',
            'home' => 'text-light',
            'listDaerah' => $listDaerah,
            'arrayKeys' => $arrayKeys
        ];

        return view('daerah', $data);
    }
}
