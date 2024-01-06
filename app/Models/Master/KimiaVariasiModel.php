<?php

namespace App\Models\Master;

use CodeIgniter\Model;

class KimiaDetailModel extends Model
{
    protected $DBGroup          = 'gfinishing';
    protected $table            = 'kimia_variasi';
    protected $primaryKey       = 'id';
    protected $returnType       = 'object';
    protected $useSoftDeletes   = true;
    protected $protectFields    = true;
    protected $useAutoIncrement = false;
    protected $allowedFields    = ['kode', 'netto', 'berat_jenis', 'edate', 'status', 'created_at', 'updated_at', 'deleted_at', 'created_by', 'updated_by', 'deleted_by'];

    // Dates
    protected $useTimestamps = true;
    protected $dateFormat    = 'datetime';
    protected $createdField  = 'created_at';
    protected $updatedField  = 'updated_at';
    protected $deletedField  = 'deleted_at';

    protected $validationRules = [
        'id' => [
            'rules' => 'required',
        ],
        'kode' => [
            'rules'  => 'required|max_length[150]|min_length[3]|is_unique[kimia_detail.kode,id,{id}]',
            'label' => 'Kode Detail Kimia',
        ],
        'netto' => [
            'rules'  => 'permit_empty',
            'label' => 'Netto',
        ],
        'berat_jenis' => [
            'rules'  => 'permit_empty',
            'label' => 'Berat Jenis',
        ],
        'edate' => [
            'rules'  => 'permit_empty',
            'label' => 'Tanggal Efektif',
        ],
        'status' => [
            'rules' => 'required',
            'label' => 'Status',
        ],
    ];
}
