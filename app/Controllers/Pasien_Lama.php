<?php

namespace App\Controllers;

use App\Models\Agama_Model;
use App\Models\Asuransi_Model;
use App\Models\Desa_Model;
use App\Models\golDarah_Model;
use App\Models\Kabupaten_Model;
use App\Models\Kecamatan_Model;
use App\Models\Pasien_Model;
use App\Models\Pekerjaan_Model;
use App\Models\Petugas_Model;
use App\Models\Poli_Model;
use App\Models\Propinsi_Model;
use App\Models\Struk_Model;

class Pasien_Lama extends BaseController
{
    protected $pasien_model;
    protected $struk_model;
    protected $poli_model;
    public function __construct()
    {
        $this->pasien_model = new Pasien_Model();
        $this->struk_model = new Struk_Model();
        $this->poli_model = new Poli_Model();
    }

    public function index()
    {
        $data = [
            'title' => 'Tambah Pasien Lama | RSUD Jombang',
            'daftar_pasien' => $this->pasien_model->getPasienAll()
        ];

        echo view('pasien/cek_norm', $data);
    }

    public function insert_pasien()
    {

        $pasien_umum_baru = new \App\Models\Pasien_Model();

        $input = $this->request->getPost('no_rekam_medis');
        $data_pasien = $pasien_umum_baru->where("no_rekam_medis", $input)->first();

        $data = [
            'title' => 'Tambah Pasien Lama | RSUD Jombang',
        ];

        if ($data_pasien) {
            if (session()->getFlashdata('')) {
                return view('pasien/cek_norm', $data);
            } elseif (session()->getFlashdata('error')) {
                return view('pasien/cek_norm', $data);
            } else {
                session()->setFlashdata('success', 'Pasien Terdaftar, Mohon cek kembali Data Pasien anda berikut!');

                $dataPetugas = new Petugas_Model();

                $dataPoli = new Poli_Model();
                $listPoli = $dataPoli->select('id_poli,nama_poli')->orderBy('nama_poli')->findAll();

                $data['listPoli'] = $listPoli;
                $data['no_rekam_medis'] = $data_pasien['no_rekam_medis'];
                $data['id_desa'] = $data_pasien['id_desa'];
                $data['id_agama'] = $data_pasien['id_agama'];
                $data['id_darah'] = $data_pasien['id_darah'];
                $data['id_pekerjaan'] = $data_pasien['id_pekerjaan'];
                $data['id_asuransi'] = $data_pasien['id_asuransi'];
                $data['nik'] = $data_pasien['nik'];
                $data['nama'] = $data_pasien['nama'];
                $data['jenis_kelamin'] = $data_pasien['jenis_kelamin'];
                $data['tempat_lahir'] = $data_pasien['tempat_lahir'];
                $data['tanggal_lahir'] = $data_pasien['tanggal_lahir'];
                $data['telepon'] = $data_pasien['telepon'];
                $data['alamat_ktp'] = $data_pasien['alamat_ktp'];
                $data['jenis_pasien'] = $data_pasien['jenis_pasien'];
                $data['nama_wali'] = $data_pasien['nama_wali'];
                $data['nomor_wali'] = $data_pasien['nomor_wali'];
                $data['status_perkawinan'] = $data_pasien['status_perkawinan'];
                $data['umur'] = $data_pasien['umur'];
                return view('pasien_umum_lama', $data);
            }
        } else {
            session()->setFlashdata('error');
        }
    }

    public function save_pasien_lama()
    {

        if (!$this->validate([

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

        ])) {
            return redirect()->back()->withInput();
        } else {

            $data_pasien = [

                'id_petugas' => $this->request->getVar('id_petugas'),
                'id_poli' => $this->request->getVar('id_poli'),
                'no_rekam_medis' => $this->request->getVar('no_rekam_medis'),
                'biaya_pendaftaran' => '50000',
                'status_pembayaran' => $this->request->getVar('status_pembayaran')

            ];
            $this->struk_model->insert($data_pasien);


            $session = session();
            $session->setFlashdata('pesan', 'Data Berhasil Ditambahkan.');
            return redirect()->to('/daftar_struk');
        }
    }
}
