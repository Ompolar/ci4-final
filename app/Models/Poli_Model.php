<?php

namespace App\Models;

use CodeIgniter\Model;

class Poli_Model extends Model
{
    protected $table      = 'poli';
    protected $primaryKey = 'id_poli';

    public function sumAllPoli()
    {

        $builder = $this->db->table('poli');

        $query =  $builder->countAll();

        return $query;
    }
}
