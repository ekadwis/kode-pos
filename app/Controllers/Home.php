<?php

namespace App\Controllers;

class Home extends BaseController
{
    public function index()
    {

        $site = 'https://kodepos-2d475.firebaseio.com/list_propinsi.json?print=pretty';
        $content = file_get_contents($site);
        $listProvinsi = json_decode($content, true);

        // foreach($listProvinsi as $listP) {
          $arrayKeys = array_keys($listProvinsi);
        // }

    

        $data = [
          'home' => 'text-purple active',
          'kota_kab' => 'text-light',
          'listProvinsi' => $listProvinsi,
          'arrayKeys' => $arrayKeys
        ];

        return view('homepage', $data);
    }
}
