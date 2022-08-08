<?php

namespace App\Controllers;

use App\Models\Pasien_Model as pasien_model;
use App\Models\Struk_Model;

use App\Models\Petugas_Model;
use App\Models\Poli_Model;




class Daftar_Struk extends BaseController
{
    protected $pasien_model;
    protected $struk_model;
    public function __construct()
    {
        $this->pasien_model = new pasien_model();
        $this->struk_model = new Struk_Model();
    }
    public function index()
    {

        $data = [
            'title' => 'Daftar Struk | RSUD Jombang',
            'daftar_pasien' => $this->struk_model->getStruk()
        ];


        echo view('daftar_struk', $data);
    }

    public function edit_struk($id_struk)
    {

        $dataPetugas = new Petugas_Model();
        $listPetugas = $dataPetugas->select('id_petugas,nama_petugas')->orderBy('nama_petugas')->findAll();

        $dataPoli = new Poli_Model();
        $listPoli = $dataPoli->select('id_poli,nama_poli')->orderBy('nama_poli')->findAll();

        $data = [
            'title' => 'Edit Data Struk | RSUD Jombang',
            'struk' => $this->struk_model->editStruk($id_struk),
            'listPetugas' => $listPetugas,
            'listPoli' => $listPoli

        ];
        echo view('edit_struk', $data);
    }

    public function detail_struk($no_rekam_medis)
    {
        $data = [
            'title' => 'Detail Struk | RSUD Jombang',
            'detail_struk' => $this->pasien_model->getPasien($no_rekam_medis)

        ];


        echo view('detail_struk', $data);
    }

    public function updateStruk($id_struk = null)
    {
        $struk_model = new Struk_Model();

        $struk = $struk_model->where('id_struk', $id_struk)->first();


        if ($this->request->getMethod() == "post") {

            $rules = [

                'biaya_pendaftaran' => [
                    'rules' => 'required',
                    'errors' => [
                        'required' => 'Biaya Pendaftaran Tidak Boleh Kosong',
                    ],
                ],

                'status_pembayaran' => [
                    'rules' => 'required',
                    'errors' => [
                        'required' => 'Status Pembayaran Tidak Boleh Kosong',
                    ],
                ],

                'id_petugas' => [
                    'rules' => 'required',
                    'errors' => [
                        'required' => 'Petugas Tidak Boleh Kosong',
                    ],
                ],

                'id_poli' => [
                    'rules' => 'required',
                    'errors' => [
                        'required' => 'Poli Tidak Boleh Kosong',
                    ],
                ],

            ];

            if (!$this->validate($rules)) {

                return view('edit_struk', [
                    "validation" => $this->validator,
                    "struk" => $struk,
                ]);
            } else {

                $data = [
                    'id_struk' => $this->request->getVar('id_struk'),
                    'id_petugas' => $this->request->getVar('id_petugas'),
                    'id_poli' => $this->request->getVar('id_poli'),
                    'no_rekam_medis' => $this->request->getVar('no_rekam_medis'),
                    'biaya_pendaftaran' => $this->request->getVar('biaya_pendaftaran'),
                    'status_pembayaran' => $this->request->getVar('status_pembayaran')
                ];


                $struk_model->update($id_struk, $data);

                $session = session();
                $session->setFlashdata('pesan', 'Data Struk Berhasil Diubah..');
                return redirect()->to('/daftar_struk');
            }
        }
        return redirect()->back()->withInput();
    }

    public function print_invoive($id_struk)
    {
        $data = [
            'title' => 'Print Invoice | RSUD Jombang',
            'pasien' => $this->struk_model->getStruk($id_struk)
        ];


        echo view('invoice', $data);
    }
}
