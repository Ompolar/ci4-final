<?php

namespace App\Controllers;

use App\Models\Pasien_Model;
use App\Models\Poli_Model;
use App\Models\Struk_Model;


class Dashboard extends BaseController
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
            'title' => 'Dashboard | RSUD Jombang',
            'daftar_pasien' => $this->pasien_model->getPasienLimit(),
            'sumPasien' => $this->pasien_model->sumPasien(),
            'sumPasienLunas' => $this->pasien_model->sumPasienLunas(),
            'sumPasienBlmLunas' => $this->pasien_model->sumPasienBlmLunas(),
            'sumAllPoli' => $this->poli_model->sumAllPoli()
        ];

        echo view('dashboard', $data);
    }
}
