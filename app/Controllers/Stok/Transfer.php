<?php

namespace App\Controllers\Stok;

use CodeIgniter\Exceptions\PageNotFoundException;
use App\Controllers\BaseController;

class Transfer extends BaseController
{
    public function index($page = 'index')
    {
        $uri = current_url(true);

        if (!is_file(APPPATH . 'Views/stok/transfer/' . $page . '.php')) {
            throw new PageNotFoundException($page);
        }

        $data = [
            "title" => ucfirst('Transfer'),
            "uri"   => $uri,
            "session" => session(),
        ];
        return view('stok/transfer/' . $page, $data);
    }
}
