<?php

namespace App\Models\Master;

use CodeIgniter\Model;

class ResepModel extends Model
{
    protected $DBGroup          = 'gfinishing';
    protected $table            = 'resep';
    protected $returnType       = 'object';
    protected $protectFields    = true;
    protected $useAutoIncrement = false;
    protected $allowedFields    = ['formulasi_id', 'kimia_id', 'persentase'];

    protected $validationRules = [
        'formulasi_id' => [
            'rules' => 'required',
            'label' => 'Formulasi',
        ],
        'kimia_id' => [
            'rules' => 'required',
            'label' => 'Kimia',
        ],
        'persentase' => [
            'rules' => 'required',
            'label' => 'Persentase',
        ],
    ];
}
