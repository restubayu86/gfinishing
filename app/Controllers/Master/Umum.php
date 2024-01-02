<?php

namespace App\Controllers\Master;

use CodeIgniter\Exceptions\PageNotFoundException;
use App\Controllers\BaseController;

class Umum extends BaseController
{
    public function index($page = 'index')
    {
        $uri = current_url(true);

        if (!is_file(APPPATH . 'Views/master/umum/' . $page . '.php')) {
            throw new PageNotFoundException($page);
        }

        $data = [
            "title" => ucfirst('Umum'),
            "uri"   => $uri,
            "session" => session(),
        ];
        return view('master/umum/' . $page, $data);
    }
}
