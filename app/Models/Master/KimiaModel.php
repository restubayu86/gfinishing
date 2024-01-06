<?php

namespace App\Models\Master;

use CodeIgniter\Model;

class KimiaModel extends Model
{
    protected $DBGroup          = 'gfinishing';
    protected $table            = 'kimia';
    protected $primaryKey       = 'id';
    protected $returnType       = 'object';
    protected $useSoftDeletes   = true;
    protected $protectFields    = true;
    protected $useAutoIncrement = false;
    protected $allowedFields    = ['nama', 'deskripsi', 'tag_proses', 'alur_stok', 'created_at', 'updated_at', 'deleted_at', 'created_by', 'updated_by', 'deleted_by'];

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
        'nama' => [
            'rules'  => 'required|max_length[150]|min_length[3]|is_unique[kimia.nama,id,{id}]',
            'label' => 'Nama Kimia',
        ],
        'deskripsi' => [
            'rules'  => 'permit_empty',
            'label' => 'Deskripsi',
        ],
        'tag_proses' => [
            'rules' => 'required',
            'label' => 'Tag Proses',
        ],
        'alur_stok' => [
            'rules' => 'required',
            'label' => 'Alur Stok',
        ],
    ];
}
