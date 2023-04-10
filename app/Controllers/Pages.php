<?php

namespace App\Controllers;

// connect model
use App\Models\GaleryModel;
use App\Models\BeritaModel;
use App\Models\PengumumanModel;
use App\Models\AspirasiModel;

// end connect


class Pages extends BaseController
{
    // Pewarisan Connect Model
    // Tambah protected variable kalo ada model baru
    protected $galeryModel;
    protected $beritaModel;
    protected $pengumumanModel;
    protected $aspirasiModel;
    public function __construct()
    {
        // tambah xxxxModel = new XxxxModel()
        $this->galeryModel = new GaleryModel();
        $this->beritaModel = new BeritaModel();
        $this->pengumumanModel = new PengumumanModel();
        $this->aspirasiModel = new AspirasiModel();
    }

    public function index()
    {

        // searching
        $keyword = $this->request->getVar('keyword');
        if ($keyword) {
            $galery = $this->galeryModel->search($keyword);
            $berita = $this->beritaModel->search($keyword);
        } else {
            $galery = $this->galeryModel;
            $berita = $this->beritaModel;
        }

        // searchingPengumuman
        $keyword = $this->request->getVar('keyword');
        if ($keyword) {
            $pengumuman = $this->pengumumanModel->search($keyword);
        } else {
            $pengumuman = $this->pengumumanModel;
        }

        // Pagination Urutan
        $currentPage = $this->request->getVar('page_galery') ? $this->request->getVar('page_galery') : 1;

        $data = [
            'title' => 'Home | Karang Taruna Desa Kota Batu',
            'galery' => $galery->orderBy('created_at_galery', 'DESC')
                ->paginate(6),
            'pengumuman' => $pengumuman->orderBy('created_at_pengumuman', 'DESC')->paginate(1, 'pengumuman'),
            'berita' => $berita->orderBy('created_at_berita', 'DESC')->paginate(4, 'berita'),
            'pager' => $this->galeryModel->pager,
            'currentPage' => $currentPage
        ];


        echo view('layout/header', $data);
        echo view('pages/home');
        echo view('layout/footer');
    }

    public function About()
    {
        $data = [
            'title' => 'Tentang | Karang Taruna Desa Kota Batu'
        ];
        echo view('layout/header', $data);
        echo view('pages/about');
        echo view('layout/footer');
    }

    public function Sejarah()
    {
        $data = [
            'title' => 'Sejarah | Karang Taruna Desa Kota Batu'
        ];
        echo view('layout/header', $data);
        echo view('pages/sejarah');
        echo view('layout/footer');
    }

    public function Visi()
    {
        $data = [
            'title' => 'Visi dan Misi | Karang Taruna Desa Kota Batu'
        ];
        echo view('layout/header', $data);
        echo view('pages/visi');
        echo view('layout/footer');
    }

    public function Struktur()
    {
        $data = [
            'title' => 'Struktur Organisasi | Karang Taruna Desa Kota Batu'
        ];
        echo view('layout/header', $data);
        echo view('pages/struktur');
        echo view('layout/footer');
    }

    public function Demografi()
    {
        $data = [
            'title' => 'Demografi Desa | Karang Taruna Desa Kota Batu'
        ];
        echo view('layout/header', $data);
        echo view('pages/demografi');
        echo view('layout/footer');
    }

    public function Galery()
    {
        // searching
        $keyword = $this->request->getVar('keyword');
        if ($keyword) {
            $galery = $this->galeryModel->search($keyword);
        } else {
            $galery = $this->galeryModel;
        }

        // Pagination Urutan
        $currentPage = $this->request->getVar('page_galery') ? $this->request->getVar('page_galery') : 1;

        $data = [
            'title' => 'Galery Kegiatan | Karang Taruna Desa Kota Batu',
            'galery' => $galery->orderBy('created_at_galery', 'DESC')->paginate(9, 'galery'),
            'pager' => $this->galeryModel->pager,
            'currentPage' => $currentPage
        ];


        echo view('layout/header', $data);
        echo view('pages/galery');
        echo view('layout/footer');
    }

    public function Berita()
    {
        // searching
        $keyword = $this->request->getVar('keyword');
        if ($keyword) {
            $berita = $this->beritaModel->search($keyword);
        } else {
            $berita = $this->beritaModel;
        }

        // Pagination Urutan
        $currentPage = $this->request->getVar('page_berita') ? $this->request->getVar('page_berita') : 1;


        $data = [
            'title' => 'Berita | Admin Karang Taruna Desa Kota Batu',
            // 'berita' => $this->beritaModel->findAll()
            'berita' => $berita->orderBy('created_at_berita', 'DESC')->paginate(9, 'berita'),
            'pager' => $this->beritaModel->pager,
            'currentPage' => $currentPage
        ];

        echo view('layout/header', $data);
        echo view('pages/berita');
        echo view('layout/footer');
    }

    public function detailberita($slugberita)
    {

        $data = [
            'title' => 'Baca Berita | Admin Karang Taruna Desa Kota Batu',
            'berita' => $this->beritaModel->getberita($slugberita)
        ];

        // jika data kosong cek
        if (empty($data['berita'])) {
            throw new \CodeIgniter\Exceptions\PageNotFoundException('Data ' . $slugberita . ' tidak ditemukan !');
        }

        echo view('layout/header', $data);
        echo view('pages/berita_detail');
        echo view('layout/footer');
    }

    public function Surat()
    {
        $data = [
            'title' => 'Pengajuan Surat | Karang Taruna Desa Kota Batu'
        ];
        echo view('layout/header', $data);
        echo view('pages/surat');
        echo view('layout/footer');
    }

    // ASPIRASI CREATE

    public function aspirasi()
    {
        $data = [
            'title' => 'Aspirasi-mu | Karang Taruna Desa Kota Batu',
            'validation' => \Config\Services::validation()
        ];

        echo view('layout/header', $data);
        echo view('pages/aspirasi');
        echo view('layout/footer');
    }

    public function simpanaspirasi()
    {
        // validasi input
        if (!$this->validate([
            'judulaspirasi' => [
                'rules' => 'required',
                'errors' => [
                    'required' => 'Harus diisi !',
                ]
            ],
            'isiaspirasi' => [
                'rules' => 'required',
                'errors' => [
                    'required' => 'Harus diisi !',
                ]
            ],
            'namauseraspirasi' => [
                'rules' => 'required',
                'errors' => [
                    'required' => 'Harus diisi !',
                ]
            ],
            'alamataspirasi' => [
                'rules' => 'required',
                'errors' => [
                    'required' => 'Harus diisi !',
                ]
            ],
            'reCaptcha2' => 'required|reCaptcha2[]'
        ])) {
            return redirect()->to('/pages/aspirasi')->withInput();
        }

        $slugaspirasi = url_title($this->request->getVar('judulaspirasi'), '-', true);

        $this->aspirasiModel->save(
            [
                'judulaspirasi' => htmlspecialchars($this->request->getVar('judulaspirasi')),
                'slugaspirasi' => $slugaspirasi,
                'isiaspirasi' => htmlspecialchars($this->request->getVar('isiaspirasi')),
                'namauseraspirasi' => htmlspecialchars($this->request->getVar('namauseraspirasi')),
                'alamataspirasi' => htmlspecialchars($this->request->getVar('alamataspirasi')),
                'emailuseraspirasi' => htmlspecialchars($this->request->getVar('emailuseraspirasi')),
            ]
        );

        session()->setFlashdata('pesan', 'ASPIRASI-mu berhasil ditambahkan.');

        return redirect()->to('/pages/aspirasi');
    }



    // ASPIRASI END

    // USER LIST ADMIN
    public function userlist()
    {
        // $users = new \Myth\Auth\Models\UserModel();
        $data = [
            'title' => 'User List | Admin Karang Taruna Desa Kota Batu',
        ];

        // QuerryBuilderCI4
        $db = \Config\Database::connect();
        $builder = $db->table('users');
        $builder->select('users.id as userid, username,email, name');
        $builder->join('auth_groups_users', 'auth_groups_users.user_id = users.id');
        $builder->join('auth_groups', 'auth_groups.id = auth_groups_users.group_id');
        $query = $builder->get();

        $data['users'] = $query->getResult();

        // $data['users'] = $users->findAll();
        echo view('layout/admheader', $data);
        echo view('administrator/admuserlist');
        echo view('layout/admfooter');
    }
}
