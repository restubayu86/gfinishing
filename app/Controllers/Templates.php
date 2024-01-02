<?php

namespace App\Controllers;

class Templates extends BaseController
{
    public function index()
    {
        $data = [
            "title" => ucfirst('Dashboard'),
        ];
        return view('templates/index', $data);
    }
}
