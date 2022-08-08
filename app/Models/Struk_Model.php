<?php

namespace App\Models;

use CodeIgniter\Model;

class Struk_Model extends Model
{
    protected $table      = 'struk';
    protected $primaryKey = 'id_struk';
    protected $useTimestamps = true;
    protected $createdField  = 'tanggal_pendaftaran';

    protected $allowedFields = ['id_petugas', 'id_darah', 'id_poli', 'no_rekam_medis', 'biaya_pendaftaran', 'status_pembayaran'];

    public function editStruk($id_struk)
    {

        $builder = $this->db->table('struk');
        $builder->where('struk.id_struk', $id_struk);
        $data = $builder->get()->getResultArray();
        return $data;
    }
    public function getStruk($id_struk = null)
    {

        $builder = $this->db->table('struk');
        $builder->join('pasien', 'struk.no_rekam_medis = pasien.no_rekam_medis');
        $builder->join('poli', 'poli.id_poli = struk.id_poli');
        $builder->join('petugas', 'petugas.id_petugas = struk.id_petugas');
        $builder->join('desa', 'desa.id_desa = pasien.id_desa');
        $builder->join('kecamatan', 'kecamatan.id_kecamatan = desa.id_kecamatan');
        $builder->join('kabupaten', 'kabupaten.id_kabupaten = kecamatan.id_kabupaten');

        if ($id_struk == null) {


            $builder->orderBy('tanggal_pendaftaran', 'DESC');
            $data = $builder->get();
            return $data->getResultArray();
        }

        $builder->where('struk.id_struk', $id_struk);
        $builder->orderBy('tanggal_pendaftaran', 'DESC');
        $data = $builder->get()->getResultArray();
        return $data;
    }
}
