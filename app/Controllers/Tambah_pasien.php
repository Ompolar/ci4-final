<?php

namespace App\Controllers;

use App\Models\Agama_Model;
use App\Models\Asuransi_Model;
use App\Models\Desa_Model;
use App\Models\golDarah_Model;
use App\Models\Kabupaten_Model;
use App\Models\Kecamatan_Model;
use App\Models\Pasien_Model as pasien_model;
use App\Models\Pekerjaan_Model;
use App\Models\Petugas_Model;
use App\Models\Poli_Model;
use App\Models\Propinsi_Model;
use App\Models\Struk_Model;
use DateTime;

class Tambah_pasien extends BaseController
{
    public $pasien_model;
    public $struk_model;


    public function __construct()
    {
        $this->pasien_model = new pasien_model;
        $this->struk_model = new Struk_Model();
    }

    public function index()
    {
        $data = [
            'title' => 'Tambah Pasien | RSUD Jombang'
        ];

        echo view('tambah_pasien', $data);
    }
    public function pasien_umum_baru()
    {

        $dataPropinsi = new Propinsi_Model();
        $listPropinsi = $dataPropinsi->select('id_propinsi,nama_propinsi')->orderBy('nama_propinsi')->findAll();

        $dataAgama = new Agama_Model();
        $listAgama = $dataAgama->select('id_agama,Nama_Agama')->orderBy('Nama_Agama')->findAll();

        $dataDarah = new golDarah_Model();
        $listDarah = $dataDarah->select('id_darah,Nama_Darah')->orderBy('Nama_Darah')->findAll();

        $dataPekerjaan = new Pekerjaan_Model();
        $listPekerjaan = $dataPekerjaan->select('id_pekerjaan,Nama_Pekerjaan')->orderBy('Nama_Pekerjaan')->findAll();

        $dataAsuransi = new Asuransi_Model();
        $listAsuransi = $dataAsuransi->select('id_asuransi,nama_asuransi')->orderBy('nama_asuransi')->findAll();

        $dataPetugas = new Petugas_Model();
        $listPetugas = $dataPetugas->select('id_petugas,nama_petugas')->orderBy('nama_petugas')->findAll();

        $dataPoli = new Poli_Model();
        $listPoli = $dataPoli->select('id_poli,nama_poli')->orderBy('nama_poli')->findAll();


        $data = [
            'title' => 'Pasien Umum Baru | RSUD Jombang',
            'listPropinsi' => $listPropinsi,
            'listAgama' => $listAgama,
            'listDarah' => $listDarah,
            'listPekerjaan' => $listPekerjaan,
            'listAsuransi' => $listAsuransi,
            'listPetugas' => $listPetugas,
            'listPoli' => $listPoli
        ];

        echo view('pasien_umum_baru', $data);
    }


    public function ajaxKabupaten()
    {
        $dataKabupaten = new Kabupaten_Model();
        $id_propinsi = $this->request->getVar('id_propinsi');

        if ($this->request->getVar('searchTerm')) {
            $listKabupaten = $dataKabupaten->select('id_kabupaten,nama_kabupaten')->where('id_propinsi', $id_propinsi)->like('nama_kabupaten', $this->request->getVar('searchTerm'))->orderBy('nama_kabupaten')->findAll();
        } else {
            $listKabupaten = $dataKabupaten->select('id_kabupaten,nama_kabupaten')->where('id_propinsi', $id_propinsi)->orderBy('nama_kabupaten')->findAll();
        }


        $data = [];
        foreach ($listKabupaten as $lk) {
            $data[] = [
                'id' => $lk['id_kabupaten'],
                'text' => $lk['nama_kabupaten'],
            ];
        }
        $respons['data'] = $data;
        return $this->response->setJSON($respons);
    }


    public function ajaxKecamatan()
    {
        $dataKecamatan = new Kecamatan_Model();
        $id_kabupaten = $this->request->getVar('id_kabupaten');

        if ($this->request->getVar('searchTerm')) {
            $listKecamatan = $dataKecamatan->select('id_kecamatan,nama_kecamatan')->where('id_kabupaten', $id_kabupaten)->like('nama_kecamatan', $this->request->getVar('searchTerm'))->orderBy('nama_kecamatan')->findAll();
        } else {
            $listKecamatan = $dataKecamatan->select('id_kecamatan,nama_kecamatan')->where('id_kabupaten', $id_kabupaten)->orderBy('nama_kecamatan')->findAll();
        }


        $data = [];
        foreach ($listKecamatan as $lkec) {
            $data[] = [
                'id' => $lkec['id_kecamatan'],
                'text' => $lkec['nama_kecamatan'],
            ];
        }
        $respons['data'] = $data;
        return $this->response->setJSON($respons);
    }

    public function ajaxDesa()
    {
        $dataDesa = new Desa_Model();
        $id_kecamatan = $this->request->getVar('id_kecamatan');

        if ($this->request->getVar('searchTerm')) {
            $listDesa = $dataDesa->select('id_desa,nama_desa')->where('id_kecamatan', $id_kecamatan)->like('nama_desa', $this->request->getVar('searchTerm'))->orderBy('nama_desa')->findAll();
        } else {
            $listDesa = $dataDesa->select('id_desa,nama_desa')->where('id_kecamatan', $id_kecamatan)->orderBy('nama_desa')->findAll();
        }


        $data = [];
        foreach ($listDesa as $ld) {
            $data[] = [
                'id' => $ld['id_desa'],
                'text' => $ld['nama_desa'],
            ];
        }
        $respons['data'] = $data;
        return $this->response->setJSON($respons);
    }





    public function save_pasien()
    {

        if (!$this->validate([
            'nik' => [
                'rules' => 'required|min_length[16]|is_unique[pasien.nik]|max_length[16]',
                'errors' => [
                    'required' => 'Nik Tidak Boleh Kosong',
                    'min_length' => 'Nik minimal 16 angka',
                    'is_unique' => 'NIK tidak boleh sama',
                    'max_length' => 'Nik maximal 16 angka',
                ],
            ],

            'nama' => [
                'rules' => 'required|min_length[3]',
                'errors' => [
                    'required' => 'Nama Tidak Boleh Kosong',
                    'min_length' => 'Nama minimal 3 Huruf'
                ],
            ],

            'id_desa' => [
                'rules' => 'required',
                'errors' => [
                    'required' => 'Desa Tidak Boleh Kosong',
                ],
            ],

            'id_propinsi' => [
                'rules' => 'required',
                'errors' => [
                    'required' => 'Propinsi Tidak Boleh Kosong',
                ],
            ],

            'id_kabupaten' => [
                'rules' => 'required',
                'errors' => [
                    'required' => 'Kabupaten Tidak Boleh Kosong',
                ],
            ],

            'id_kecamatan' => [
                'rules' => 'required',
                'errors' => [
                    'required' => 'kecamatan Tidak Boleh Kosong',
                ],
            ],

            'id_agama' => [
                'rules' => 'required',
                'errors' => [
                    'required' => 'Agama Tidak Boleh Kosong',
                ],
            ],

            'id_darah' => [
                'rules' => 'required',
                'errors' => [
                    'required' => 'Golongan Darah Tidak Boleh Kosong',
                ],
            ],

            'id_pekerjaan' => [
                'rules' => 'required',
                'errors' => [
                    'required' => 'Pekerjaan Tidak Boleh Kosong',
                ],
            ],

            'id_asuransi' => [
                'rules' => 'required',
                'errors' => [
                    'required' => 'Asuransi Tidak Boleh Kosong',
                ],
            ],

            'jenis_kelamin' => [
                'rules' => 'required',
                'errors' => [
                    'required' => 'Jenis Kelamin Tidak Boleh Kosong',
                ],
            ],

            'tempat_lahir' => [
                'rules' => 'required',
                'errors' => [
                    'required' => 'Tempat Lahir Tidak Boleh Kosong',
                ],
            ],

            'tanggal_lahir' => [
                'rules' => 'required',
                'errors' => [
                    'required' => 'Tanggal Lahir Tidak Boleh Kosong',
                ],
            ],

            'telepon' => [
                'rules' => 'required|max_length[14]|min_length[10]',
                'errors' => [
                    'required' => 'Telepon Tidak Boleh Kosong',
                    'max_length' => 'Maksimal Nomor 14 Angka',
                    'min_length' => 'Minimal Nomor 10 Angka',
                ],
            ],

            'alamat_ktp' => [
                'rules' => 'required',
                'errors' => [
                    'required' => 'Alamat Tidak Boleh Kosong',
                ],
            ],

            'jenis_pasien' => [
                'rules' => 'required',
                'errors' => [
                    'required' => 'Jenis Pasien Tidak Boleh Kosong',
                ],
            ],

            'nama_wali' => [
                'rules' => 'required',
                'errors' => [
                    'required' => 'Nama Wali Tidak Boleh Kosong',
                ],
            ],

            'nomor_wali' => [
                'rules' => 'required|max_length[14]|min_length[10]',
                'errors' => [
                    'required' => 'Nomor Wali Tidak Boleh Kosong',
                    'max_length' => 'Maksimal Nomor 14 Angka',
                    'min_length' => 'Minimal Nomor 10 Angka',
                ],
            ],

            'status_perkawinan' => [
                'rules' => 'required',
                'errors' => [
                    'required' => 'Status Perkawinan Tidak Boleh Kosong',
                ],
            ],

            // 'umur' => [
            //     'rules' => 'required',
            //     'errors' => [
            //         'required' => 'Umur Tidak Boleh Kosong',
            //     ],
            // ],

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
                'id_desa' => $this->request->getVar('id_desa'),
                'id_agama' => $this->request->getVar('id_agama'),
                'id_darah' => $this->request->getVar('id_darah'),
                'id_pekerjaan' => $this->request->getVar('id_pekerjaan'),
                'id_asuransi' => $this->request->getVar('id_asuransi'),
                'nik' => $this->request->getVar('nik'),
                'nama' => $this->request->getVar('nama'),
                'jenis_kelamin' => $this->request->getVar('jenis_kelamin'),
                'tempat_lahir' => $this->request->getVar('tempat_lahir'),
                'tanggal_lahir' => $this->request->getVar('tanggal_lahir'),
                'telepon' => $this->request->getVar('telepon'),
                'alamat_ktp' => $this->request->getVar('alamat_ktp'),
                'jenis_pasien' => $this->request->getVar('jenis_pasien'),
                'nama_wali' => $this->request->getVar('nama_wali'),
                'nomor_wali' => $this->request->getVar('nomor_wali'),
                'nomor_asuransi' => $this->request->getVar('nomor_asuransi'),
                'status_perkawinan' => $this->request->getVar('status_perkawinan'),
                'umur' => $this->request->getVar('umur'),

            ];
            $this->pasien_model->insert($data_pasien);

            $no_rm = $this->pasien_model->getInsertID();

            $data_struk = [
                'id_petugas' => $this->request->getVar('id_petugas'),
                'id_poli' => $this->request->getVar('id_poli'),
                'no_rekam_medis' => $no_rm,
                'biaya_pendaftaran' => '50000',
                'status_pembayaran' => $this->request->getVar('status_pembayaran')

            ];

            $this->struk_model->insert($data_struk);
            $session = session();
            $session->setFlashdata('pesan', 'Data Berhasil Ditambahkan.');
            return redirect()->to('/daftar_pasien');
        }
    }
}
