<?php

namespace App\Controllers;

// connect model
use App\Models\GaleryModel;
use App\Models\BeritaModel;

// end connect

class Administrator extends BaseController
{
    // Pewarisan Connect Model
    // Tambah protected variable kalo ada model baru
    protected $galeryModel;
    protected $beritaModel;
    public function __construct()
    {
        // tambah xxxxModel = new XxxxModel()
        $this->galeryModel = new GaleryModel();
        $this->beritaModel = new BeritaModel();
    }

    public function index()
    {
        $data = [
            'title' => 'Admin | Pemerintah Desa Kota Batu'
        ];
        echo view('layout/admheader', $data);
        echo view('administrator/index');
        echo view('layout/admfooter');
    }

    public function galery()
    {

        $data = [
            'title' => 'Galery | Admin Pemerintah Desa Kota Batu',
            'galery' => $this->galeryModel->getGalery()
        ];

        echo view('layout/admheader', $data);
        echo view('administrator/admgalery');
        echo view('layout/admfooter');
    }

    public function detailGalery($sluggalery)
    {

        $data = [
            'title' => 'Galery Detail | Admin Pemerintah Desa Kota Batu',
            'galery' => $this->galeryModel->getGalery($sluggalery)
        ];

        // jika data kosong cek
        if (empty($data['galery'])) {
            throw new \CodeIgniter\Exceptions\PageNotFoundException('Data ' . $sluggalery . ' tidak ditemukan !');
        }

        echo view('layout/admheader', $data);
        echo view('administrator/admgalery_detail');
        echo view('layout/admfooter');
    }

    public function tambahgalery()
    {
        $data = [
            'title' => 'Tambah Data Galery | Admin Pemerintah Desa Kota Batu'
        ];

        echo view('layout/admheader', $data);
        echo view('administrator/admgalery_tambah');
        echo view('layout/admfooter');
    }

    public function simpangalery()
    {

        $sluggalery = url_title($this->request->getVar('judulgalery'), '-', true);

        $this->galeryModel->save(
            [
                'judulgalery' => $this->request->getVar('judulgalery'),
                'sluggalery' => $sluggalery,
                'gambargalery' => $this->request->getVar('gambargalery')
            ]
        );

        session()->setFlashdata('pesan', 'Data berhasil ditambahkan.');

        return redirect()->to('/administrator/galery');
    }










    // CONTROLLER BERITA CRUD

    public function berita()
    {

        $data = [
            'title' => 'Berita | Admin Pemerintah Desa Kota Batu',
            'berita' => $this->beritaModel->getberita()
        ];

        echo view('layout/admheader', $data);
        echo view('administrator/admberita');
        echo view('layout/admfooter');
    }

    public function detailberita($slugberita)
    {

        $data = [
            'title' => 'Berita Detail | Admin Pemerintah Desa Kota Batu',
            'berita' => $this->beritaModel->getberita($slugberita)
        ];

        // jika data kosong cek
        if (empty($data['berita'])) {
            throw new \CodeIgniter\Exceptions\PageNotFoundException('Data ' . $slugberita . ' tidak ditemukan !');
        }

        echo view('layout/admheader', $data);
        echo view('administrator/admberita_detail');
        echo view('layout/admfooter');
    }

    public function tambahberita()
    {
        $data = [
            'title' => 'Tambah Data berita | Admin Pemerintah Desa Kota Batu'
        ];

        echo view('layout/admheader', $data);
        echo view('administrator/admberita_tambah');
        echo view('layout/admfooter');
    }

    public function simpanberita()
    {

        $slugberita = url_title($this->request->getVar('judulberita'), '-', true);

        $this->beritaModel->save(
            [
                'judulberita' => $this->request->getVar('judulberita'),
                'slugberita' => $slugberita,
                'deskripsisingkatberita' => $this->request->getVar('deskripsisingkatberita'),
                'isiberita' => $this->request->getVar('isiberita'),
                'gambarberita' => $this->request->getVar('gambarberita')
            ]
        );

        session()->setFlashdata('pesan', 'Data berhasil ditambahkan.');

        return redirect()->to('/administrator/berita');
    }
    // BERITA END
}
