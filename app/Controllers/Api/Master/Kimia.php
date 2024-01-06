<?php

namespace App\Controllers\Api\Master;

use CodeIgniter\API\ResponseTrait;
use CodeIgniter\RESTful\ResourceController;
use \Hermawan\DataTables\DataTable;
use App\Models\Master\KimiaModel;
use CodeIgniter\I18n\Time;

class Kimia extends ResourceController
{

    use ResponseTrait;

    protected $db;

    public function __construct()
    {
        $this->db = \Config\Database::connect('gfinishing');
    }


    public function index()
    {
        $model = new KimiaModel();
        $builder = $model->select('id, nama, deskripsi, tag_proses, alur_stok, created_at')->orderBy('created_at', 'DESC');
        return DataTable::of($builder)
            ->addNumbering('no')
            ->toJson(true);
    }

    /**
     * Return the properties of a resource object
     *
     * @return mixed
     */
    public function show($id = null)
    {
        //
    }

    /**
     * Return a new resource object, with default properties
     *
     * @return mixed
     */
    public function new()
    {
        //pakai modal
    }

    /**
     * Create a new resource object, from "posted" parameters
     *
     * @return mixed
     */
    public function create()
    {
        helper('text');
        $model = new KimiaModel();

        if (!$this->request->is('post')) {
            return redirect()->back();
        }

        $data = [
            'id' => $this->request->getVar('id'),
            'code' => $this->request->getVar('code'),
            'name' => $this->request->getVar('name'),
            'stock_tracked' => $this->request->getVar('stock_tracked'),
            'processes' => $this->request->getVar('processes'),
            'description' => $this->request->getVar('description'),
            'updated_at' => null,
            // 'created_by' => user()->firstname
        ];

        if (!$model->save($data)) {
            return $this->fail($model->errors(), 400);
        } else {
            $getListProcess = $this->request->getVar('processes');
            $batchData = [];
            for ($i = 0; $i < count($getListProcess); $i++) {
                $batchData[$i] = array(
                    'chemical_id' => $this->request->getVar('id'),
                    'process_id' => $getListProcess[$i]
                );
            }
            if ($this->db->table('chemical_processes')->insertBatch($batchData)) {
                $response = [
                    'status'   => 201,
                    'errors'    => null,
                    'messages' => [
                        'success' => 'New Chemical has been added.'
                    ],
                    'new_id' => random_string('alnum', 6)
                ];
            }
        }
        return $this->respondCreated($response);
    }

    /**
     * Return the editable properties of a resource object
     *
     * @return mixed
     */
    public function edit($id = null)
    {
        //pakai modal
    }

    /**
     * Add or update a model resource, from "posted" properties
     *
     * @return mixed
     */
    public function update($id = null)
    {
        helper('text');
        $model = new KimiaModel();

        if ($this->request->is('PATCH')) {
            $data = [
                'stock_tracked' => 'Y',
                'deleted_at' => null,
                'deleted_by' => null
            ];
            if ($model->update($id, $data)) {
                $response = [
                    'status'   => 201,
                    'errors'    => null,
                    'messages' => [
                        'success' => 'The Chemical has been restored.'
                    ]
                ];
                return $this->respond($response);
            }
            exit;
        }
        $currentTime = Time::now('Asia/Jakarta', 'id');
        $data = [
            'id' => $this->request->getRawInputVar('id'),
            'code' => $this->request->getRawInputVar('code'),
            'name' => $this->request->getRawInputVar('name'),
            'stock_tracked' => $this->request->getRawInputVar('stock_tracked'),
            'processes' => $this->request->getRawInputVar('processes'),
            'description' => $this->request->getRawInputVar('description'),
            'updated_at' => $currentTime,
            // 'updated_by' => user()->firstname
        ];

        if (!$model->update($id, $data)) {
            return $this->fail($model->errors(), 400);
        } else {
            $getListProcess = $this->request->getRawInputVar('processes');
            $this->db->table('chemical_processes')->where('chemical_id', $id)->delete();
            $batchData = [];
            for ($i = 0; $i < count($getListProcess); $i++) {
                $batchData[$i] = array(
                    'chemical_id' => $this->request->getRawInputVar('id'),
                    'process_id' => $getListProcess[$i]
                );
            }
            if ($this->db->table('chemical_processes')->insertBatch($batchData)) {
                $response = [
                    'status'   => 201,
                    'errors'    => null,
                    'messages' => [
                        'success' => 'New Chemical has been added.'
                    ],
                    'new_id' => random_string('alnum', 6)
                ];
            }
            return $this->respond($response);
        }
    }

    /**
     * Delete the designated resource object from the model
     *
     * @return mixed
     */
    public function delete($id = null)
    {
        helper('text');
        $model = new KimiaModel();
        $uri = current_url(true);
        $action = $uri->getQuery();
        switch ($action) {
            case 'action=remove':
                $data = $model->where('id', $id)->first();
                if ($data) {
                    $model->delete($id);
                    // $model->update($id, ['stock_tracked' => 'N', 'deleted_by' => user()->firstname]);
                    $response = [
                        'status'   => 201,
                        'errors'    => null,
                        'messages' => [
                            'success' => 'The Chemical has been removed.'
                        ],
                        'new_id' => random_string('alnum', 6)
                    ];
                    return $this->respondDeleted($response);
                } else {
                    return $this->failNotFound('Data Not Found.');
                }
                break;
            case 'action=delete':
                $data = $model->where('id', $id)->onlyDeleted()->first();
                if ($data) {
                    $model->delete($id, true);
                    $response = [
                        'status'   => 201,
                        'errors'    => null,
                        'messages' => [
                            'success' => 'The Chemical has been deleted permanently.'
                        ]
                    ];
                    return $this->respondDeleted($response);
                } else {
                    return $this->failNotFound('Data not found.');
                }
                break;
        }
    }
}
