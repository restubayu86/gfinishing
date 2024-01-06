<?php

namespace App\Models\Master;

use CodeIgniter\Model;

class FormulasiModel extends Model
{
    protected $DBGroup          = 'gfinishing';
    protected $table            = 'formulasi';
    protected $primaryKey       = 'id';
    protected $returnType       = 'object';
    protected $useSoftDeletes   = true;
    protected $protectFields    = true;
    protected $useAutoIncrement = false;
    protected $allowedFields    = ['kode', 'grup', 'versi', 'kategori', 'segmen', 'edate', 'status', 'deskripsi', 'alur_stok', 'created_at', 'updated_at', 'deleted_at', 'created_by', 'updated_by', 'deleted_by'];

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
            'rules'  => 'required|max_length[150]|min_length[3]|is_unique[formulasi.kode,id,{id}]',
            'label' => 'Kode Detail Kimia',
        ],
        'grup' => [
            'rules' => 'required',
            'label' => 'Grup',
        ],
        'versi' => [
            'rules' => 'required',
            'label' => 'Versi',
        ],
        'kategori' => [
            'rules' => 'required',
            'label' => 'Kategori',
        ],
        'segmen' => [
            'rules' => 'required',
            'label' => 'Segmen',
        ],
        'edate' => [
            'rules'  => 'permit_empty',
            'label' => 'Tanggal Efektif',
        ],
        'status' => [
            'rules' => 'required',
            'label' => 'Status',
        ],
        'deskripsi' => [
            'rules'  => 'permit_empty',
            'label' => 'Deskripsi',
        ],
        'alur_stok' => [
            'rules' => 'required',
            'label' => 'Alur Stok',
        ],
    ];
}
