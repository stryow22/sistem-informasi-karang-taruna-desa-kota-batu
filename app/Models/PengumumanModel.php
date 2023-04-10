<?php

namespace App\Models;

use CodeIgniter\Model;

class PengumumanModel extends Model
{
    protected $table      = 'pengumuman';
    protected $primaryKey = 'idpengumuman';
    protected $useTimestamps = true;
    protected $createdField  = 'created_at_pengumuman';
    protected $updatedField  = 'updated_at_pengumuman';
    protected $allowedFields      = ['judulpengumuman', 'isipengumuman', 'slugpengumuman'];

    public function getpengumuman($slugpengumuman = false)
    {
        if ($slugpengumuman == false) {
            return $this->findAll();
        }

        return $this->where(['slugpengumuman' => $slugpengumuman])->first();
    }

    public function search($keyword)
    {
        return $this->table('pengumuman')->like('judulpengumuman', $keyword);
    }
}
