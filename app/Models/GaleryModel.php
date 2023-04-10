<?php

namespace App\Models;

use CodeIgniter\Model;

class GaleryModel extends Model
{
    protected $table      = 'galery';
    protected $primaryKey = 'idgalery';
    protected $useTimestamps = true;
    protected $createdField  = 'created_at_galery';
    protected $updatedField  = 'updated_at_galery';
    protected $allowedFields      = ['judulgalery', 'sluggalery', 'gambargalery'];

    public function getGalery($sluggalery = false)
    {
        if ($sluggalery == false) {
            return $this->findAll();
        }

        return $this->where(['sluggalery' => $sluggalery])->first();
    }

    public function search($keyword)
    {
        return $this->table('galery')->like('judulgalery', $keyword);
    }

    // public function ordered()
    // {
    //     $query = $this->builder()
    //         ->select('*')
    //         ->orderBy('created_at_galery', 'DESC');
    //     return $query->get()->getResult();
    // }

    function get_item_list($sort_by, $sort_order)
    {
        $sort_order = ($sort_order == 'DESC') ? 'DESC' : 'ASC';

        $sort_columns = array('judulgalery', 'sluggalery', 'gambargalery');

        $sort_by = (in_array($sort_by, $sort_columns)) ? '`' . $sort_by . '`' : '`created_at_galery`';

        $sql = 'SELECT `*` FROM ' . $this->table .
            ' ORDER BY ' . $sort_by . ' ' . $sort_order;

        $query = $this->db->query($sql);

        return $query->getResult();
    }
}
