<?php

namespace App\Models;

use CodeIgniter\Model;

class BeritaModel extends Model
{
    protected $table      = 'berita';
    protected $primaryKey = 'idberita';
    protected $useTimestamps = true;
    protected $createdField  = 'created_at_berita';
    protected $updatedField  = 'updated_at_berita';
    protected $allowedFields = ['judulberita', 'slugberita', 'deskripsisingkatberita', 'isiberita', 'gambarberita'];

    public function getBerita($slugberita = false)
    {
        if ($slugberita == false) {
            return $this->findAll();
        }

        return $this->where(['slugberita' => $slugberita])->first();
    }

    public function search($keyword)
    {
        return $this->table('berita')->like('judulberita', $keyword);
    }

    // public function ordered()
    // {
    //     $query = $this->builder()
    //         ->select('*')
    //         ->orderBy('created_at_berita', 'DESC');
    //     return $query->get()->getResult();
    // }

    function get_item_list($sort_by, $sort_order)
    {
        $sort_order = ($sort_order == 'DESC') ? 'DESC' : 'ASC';

        $sort_columns = array('judulberita', 'slugberita', 'gambarberita');

        $sort_by = (in_array($sort_by, $sort_columns)) ? '`' . $sort_by . '`' : '`created_at_berita`';

        $sql = 'SELECT `*` FROM ' . $this->table .
            ' ORDER BY ' . $sort_by . ' ' . $sort_order;

        $query = $this->db->query($sql);

        return $query->getResult();
    }
}
