<?php

namespace App\Models;

use CodeIgniter\Model;

class AspirasiModel extends Model
{
    protected $table      = 'aspirasi';
    protected $primaryKey = 'idaspirasi';
    protected $useTimestamps = true;
    protected $createdField  = 'created_at_aspirasi';
    protected $updatedField  = 'updated_at_aspirasi';
    protected $allowedFields      = ['judulaspirasi', 'isiaspirasi', 'slugaspirasi', 'namauseraspirasi', 'alamataspirasi', 'emailuseraspirasi'];

    public function getaspirasi($slugaspirasi = false)
    {
        if ($slugaspirasi == false) {
            return $this->findAll();
        }

        return $this->where(['slugaspirasi' => $slugaspirasi])->first();
    }

    public function search($keyword)
    {
        return $this->table('aspirasi')->like('judulaspirasi', $keyword);
    }
}
