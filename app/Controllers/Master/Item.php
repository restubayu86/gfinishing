<?php

namespace App\Controllers\Master;

use CodeIgniter\Exceptions\PageNotFoundException;
use App\Controllers\BaseController;
// use App\Models\Masters\ChemicalsModel;

class Item extends BaseController
{
    public function index($page = 'index')
    {
        $uri = current_url(true);

        if (!is_file(APPPATH . 'Views/master/item/' . $page . '.php')) {
            throw new PageNotFoundException($page);
        }

        $data = [
            "title" => ucfirst('Item'),
            "uri"   => $uri,
            "session" => session(),
        ];
        return view('master/item/' . $page, $data);
    }

    // public function show($id = null, $page = 'show')
    // {
    //     $uri = current_url(true);
    //     $model = new ChemicalsModel();

    //     if (!is_file(APPPATH . 'Views/masters/chemicals/' . $page . '.php')) {
    //         throw new PageNotFoundException($page);
    //     }

    //     $newBuilder = $model->getChemical($id)->countAllResults();
    //     $result = intval($newBuilder);

    //     if ($result < 1) {
    //         throw new PageNotFoundException($page);
    //     }

    //     $data = [
    //         "title" => ucfirst('Show Chemicals'),
    //         "uri"   => $uri,
    //         "session" => session(),
    //         "getChemical" => $model->getChemical($id)->first()
    //     ];
    //     return view('masters/chemicals/' . $page, $data);
    // }
}
