<?php

namespace App\Controllers\Stok;

use CodeIgniter\Exceptions\PageNotFoundException;
use App\Controllers\BaseController;

class Alur extends BaseController
{
    public function index($page = 'index')
    {
        $uri = current_url(true);

        if (!is_file(APPPATH . 'Views/stok/alur/' . $page . '.php')) {
            throw new PageNotFoundException($page);
        }

        $data = [
            "title" => ucfirst('Alur'),
            "uri"   => $uri,
            "session" => session(),
        ];
        return view('stok/alur/' . $page, $data);
    }
}
