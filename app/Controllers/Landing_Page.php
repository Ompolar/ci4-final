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

class Landing_Page extends BaseController
{
    protected $pasien_model;
    protected $struk_model;
    public function __construct()
    {
        $this->pasien_model = new Pasien_Model();
        $this->struk_model = new Struk_Model();
    }
    public function index()
    {
        return view('pasien_mandiri/landing_page');
    }

    public function input_mandiri()
    {
        $data = [
            'title' => 'Pasien Lama | RSUD Jombang',
            'daftar_pasien' => $this->pasien_model->getPasienAll()
        ];
        return view('pasien_mandiri/pasien_lama_mandiri', $data);
    }

    public function insert_pasien()
    {

        $dataPropinsi = new Propinsi_Model();
        $listPropinsi = $dataPropinsi->select('id_propinsi,nama_propinsi')->orderBy('nama_propinsi')->findAll();

        $dataKabupaten = new Kabupaten_Model();
        $listKabupaten = $dataKabupaten->select('id_kabupaten,nama_kabupaten')->orderBy('nama_kabupaten')->findAll();

        $dataKecamatan = new Kecamatan_Model();
        $listKecamatan = $dataKecamatan->select('id_kecamatan,nama_kecamatan')->orderBy('nama_kecamatan')->findAll();

        $dataDesa = new Desa_Model();
        $listDesa = $dataDesa->select('id_desa,nama_desa')->orderBy('nama_desa')->findAll();

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
            'title' => 'Tambah Pasien Lama | RSUD Jombang',
        ];

        $request = \Config\Services::request();
        $tbcek = $this->request->getPost('cek');
        $pasien_umum_baru = new \App\Models\Pasien_Model();

        $input = $this->request->getPost('no_rekam_medis');
        $data_pasien = $pasien_umum_baru->where("no_rekam_medis", $input)->first();
        

        if ($data_pasien) {
            if (session()->getFlashdata('')) {
                return view('pasien_mandiri/pasien_lama_mandiri', $data);
            } elseif (session()->getFlashdata('error')) {
                return view('pasien_mandiri/pasien_lama_mandiri', $data);
            } else {
                session()->setFlashdata('success', 'Pasien Terdaftar, Mohon cek kembali Data Pasien anda berikut!');

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
                return view('pasien_mandiri/data_pasien', $data);
            }
        } else {
            session()->setFlashdata('error', 'Data Pasien Tidak Ditemukan.');
        }

        echo view('pasien_mandiri/pasien_lama_mandiri', $data);
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

                'id_petugas' => '8',
                'id_poli' => $this->request->getVar('id_poli'),
                'no_rekam_medis' => $this->request->getVar('no_rekam_medis'),
                'biaya_pendaftaran' => '50000',
                'status_pembayaran' => 'Belum Lunas'

            ];
            $this->struk_model->insert($data_pasien);

            $data = [

                'title' => 'Invoice| RSUD Jombang'

            ];

            $session = session();
            $session->setFlashdata('pesan', 'Pendaftaran Berhasil, Silahkan Menuju Rumah Sakit untuk melakukan Pembayaran dengan membawa KTP.');
            // return view('pasien_mandiri/data_struk', $data);
            return redirect()->to('landing_page/input_mandiri');
        }
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