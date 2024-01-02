<?php

namespace App\Controllers\Stok;

use CodeIgniter\Exceptions\PageNotFoundException;
use App\Controllers\BaseController;

class Stok_Awal extends BaseController
{
    public function index($page = 'index')
    {
        $uri = current_url(true);

        if (!is_file(APPPATH . 'Views/stok/stokawal/' . $page . '.php')) {
            throw new PageNotFoundException($page);
        }

        $data = [
            "title" => ucfirst('Stok Awal'),
            "uri"   => $uri,
            "session" => session(),
        ];
        return view('stok/stokawal/' . $page, $data);
    }
}
