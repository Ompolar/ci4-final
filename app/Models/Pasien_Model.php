<?php

namespace App\Models;

use CodeIgniter\Model;

class Pasien_Model extends Model
{
    protected $table      = 'pasien';
    protected $primaryKey = 'no_rekam_medis';

    protected $allowedFields = ['id_desa', 'id_agama', 'id_darah', 'id_pekerjaan', 'id_asuransi', 'nik', 'nama', 'jenis_kelamin', 'tempat_lahir', 'tanggal_lahir', 'telepon', 'alamat_ktp', 'jenis_pasien', 'nama_wali', 'nomor_wali', 'nomor_asuransi', 'status_perkawinan', 'umur'];


    public function getPasienAll()
    {
        $builder = $this->db->table('pasien');
        $builder->orderBy('pasien.no_rekam_medis', 'DESC');
        $data = $builder->get();
        return $data->getResultArray();
    }

    public function getDetailPasien($no_rekam_medis = null)
    {

        $builder = $this->db->table('pasien');
        $builder->join('struk', 'struk.no_rekam_medis = pasien.no_rekam_medis');
        $builder->join('golongan_darah', 'golongan_darah.id_darah = struk.id_darah');
        $builder->join('pekerjaan', 'pekerjaan.id_pekerjaan = struk.id_pekerjaan');
        $builder->join('petugas', 'petugas.id_petugas = struk.id_petugas');
        $builder->join('desa', 'desa.id_desa = pasien.id_desa');
        $builder->join('kecamatan', 'kecamatan.id_kecamatan = desa.id_kecamatan');
        $builder->join('kabupaten', 'kabupaten.id_kabupaten = kecamatan.id_kabupaten');

        if ($no_rekam_medis == null) {


            $builder->orderBy('tanggal_pendaftaran', 'DESC');
            $data = $builder->get();
            return $data->getResultArray();
        }

        $builder->where('pasien.no_rekam_medis', $no_rekam_medis);
        $builder->orderBy('tanggal_pendaftaran', 'DESC');
        $data = $builder->get()->getResultArray();
        return $data;
    }
    public function getPasien($no_rekam_medis = null)
    {

        $builder = $this->db->table('pasien');
        $builder->join('struk', 'struk.no_rekam_medis = pasien.no_rekam_medis');
        $builder->join('poli', 'poli.id_poli = struk.id_poli');
        $builder->join('petugas', 'petugas.id_petugas = struk.id_petugas');
        $builder->join('desa', 'desa.id_desa = pasien.id_desa');
        $builder->join('kecamatan', 'kecamatan.id_kecamatan = desa.id_kecamatan');
        $builder->join('kabupaten', 'kabupaten.id_kabupaten = kecamatan.id_kabupaten');
        $builder->join('propinsi', 'propinsi.id_propinsi = kabupaten.id_propinsi');

        if ($no_rekam_medis == null) {


            $builder->orderBy('tanggal_pendaftaran', 'DESC');
            $data = $builder->get();
            return $data->getResultArray();
        }

        $builder->where('pasien.no_rekam_medis', $no_rekam_medis);
        $builder->orderBy('tanggal_pendaftaran', 'DESC');
        $data = $builder->get()->getResultArray();
        return $data;
    }

    public function editPasien($no_rekam_medis)
    {

        $builder = $this->db->table('pasien');
        $builder->join('desa', 'desa.id_desa = pasien.id_desa');
        $builder->join('kecamatan', 'kecamatan.id_kecamatan = desa.id_kecamatan');
        $builder->join('kabupaten', 'kabupaten.id_kabupaten = kecamatan.id_kabupaten');
        $builder->join('propinsi', 'propinsi.id_propinsi = kabupaten.id_propinsi');
        $builder->where('pasien.no_rekam_medis', $no_rekam_medis);
        $data = $builder->get()->getResultArray();
        return $data;
    }

    public function getPasienLimit()
    {

        $builder = $this->db->table('pasien');
        $builder->join('struk', 'struk.no_rekam_medis = pasien.no_rekam_medis');
        $builder->join('poli', 'poli.id_poli = struk.id_poli');
        $builder->join('petugas', 'petugas.id_petugas = struk.id_petugas');
        $builder->join('desa', 'desa.id_desa = pasien.id_desa');
        $builder->join('kecamatan', 'kecamatan.id_kecamatan = desa.id_kecamatan');
        $builder->join('kabupaten', 'kabupaten.id_kabupaten = kecamatan.id_kabupaten');
        $builder->orderBy('tanggal_pendaftaran', 'DESC');
        $builder->limit(5);
        $data = $builder->get();
        return $data->getResultArray();
    }

    public function sumPasien()
    {
        $builder = $this->db->table('pasien');
        $query =  $builder->countAll();

        return $query;
    }

    public function sumPasienLunas()
    {
        $sts_pembayaran = "Lunas";
        $builder = $this->db->table('struk');
        $builder->where('status_pembayaran', $sts_pembayaran);
        $query =  $builder->countAllResults();

        return $query;
    }

    public function sumPasienBlmLunas()
    {
        $sts_pembayaran = "Belum Lunas";
        $builder = $this->db->table('struk');
        $builder->where('status_pembayaran', $sts_pembayaran);
        $query =  $builder->countAllResults();

        return $query;
    }

    public function riwayat_Pendaftaran($no_rekam_medis)
    {

        $builder = $this->db->table('struk');
        $builder->join('poli', 'poli.id_poli = struk.id_poli');
        $builder->where('no_rekam_medis', $no_rekam_medis);
        $query =  $builder->get()->getResultArray();

        return $query;
    }
}
