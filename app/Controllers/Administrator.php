<?php

namespace App\Controllers;

// connect model
use App\Models\GaleryModel;
use App\Models\BeritaModel;
use App\Models\PengumumanModel;
use App\Models\AspirasiModel;
// $users = new \Myth\Auth\Models\UserModel();


// end connect

class Administrator extends BaseController
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
        $data = [
            'title' => 'Admin | Karang Taruna Desa Kota Batu',
        ];
        echo view('layout/admheader', $data);
        echo view('administrator/index');
        echo view('layout/admfooter');
    }

    public function galery()
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
            'title' => 'Galery | Admin Karang Taruna Desa Kota Batu',
            // 'galery' => $this->galeryModel->findAll()
            'galery' => $galery->orderBy('created_at_galery', 'DESC')->paginate(10, 'galery'),
            'pager' => $this->galeryModel->pager,
            'currentPage' => $currentPage
        ];

        echo view('layout/admheader', $data);
        echo view('administrator/admgalery');
        echo view('layout/admfooter');
    }

    public function detailGalery($sluggalery)
    {

        $data = [
            'title' => 'Galery Detail | Admin Karang Taruna Desa Kota Batu',
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
            'title' => 'Tambah Data Galery | Admin Karang Taruna Desa Kota Batu',
            'validation' => \Config\Services::validation()
        ];

        echo view('layout/admheader', $data);
        echo view('administrator/admgalery_tambah');
        echo view('layout/admfooter');
    }

    public function simpangalery()
    {
        // validasi input
        if (!$this->validate([
            'judulgalery' => [
                'rules' => 'required',
                'errors' => [
                    'required' => 'Harus diisi !',
                ]
            ],
            'gambargalery' => [
                'rules' => 'max_size[gambargalery,2048]|is_image[gambargalery]|mime_in[gambargalery,image/jpg,image/jpeg,image/png]',
                'errors' => [
                    'max_size' => 'Ukuran gambar harus kurang dari 2MB !',
                    'is_image' => 'Yang anda upload harus gambar ber-ekstensi .png/.jpg/.jpeg !',
                    'mime_in' => 'Yang anda upload harus gambar ber-ekstensi .png/.jpg/.jpeg !'
                ]
            ],
            'reCaptcha2' => 'required|reCaptcha2[]'

        ])) {
            // $validation = \Config\Services::validation();
            // return redirect()->to('/administrator/tambahgalery')->withInput()->with('validation', $validation);
            return redirect()->to('/administrator/tambahgalery')->withInput();
        }

        // ambil gambar
        $fileGambargalery = $this->request->getFile('gambargalery');

        // cek gambar ada apa gak
        if ($fileGambargalery->getError() == 4) {
            $namaGambargalery = 'default.png';
        } else {
            // genearte nama
            $namaGambargalery = $fileGambargalery->getRandomName();
            // Pindah ke Images
            $fileGambargalery->move('images', $namaGambargalery);
            // namafile di ambil
        }


        $sluggalery = url_title($this->request->getVar('judulgalery'), '-', true);

        $this->galeryModel->save(
            [
                'judulgalery' => $this->request->getVar('judulgalery'),
                'sluggalery' => $sluggalery,
                'gambargalery' => $namaGambargalery
            ]
        );

        session()->setFlashdata('pesan', 'Data berhasil ditambahkan.');

        return redirect()->to('/administrator/galery');
    }

    public function hapusgalery($idgalery)
    {
        // cari gambar bedasar ID
        $galery = $this->galeryModel->find($idgalery);

        // cek gambar default
        if ($galery['gambargalery'] != 'default.png') {
            // HAPUS GAMBAR
            unlink('images/' . $galery['gambargalery']);
        }


        $this->galeryModel->delete($idgalery);

        session()->setFlashdata('pesan', 'Data berhasil dihapus.');

        return redirect()->to('/administrator/galery');
    }

    public function ubahgalery($sluggalery)
    {

        $data = [
            'title' => 'Ubah Data Galery | Admin Karang Taruna Desa Kota Batu',
            'validation' => \Config\Services::validation(),
            'galery' => $this->galeryModel->getGalery($sluggalery)
        ];

        echo view('layout/admheader', $data);
        echo view('administrator/admgalery_ubah');
        echo view('layout/admfooter');
    }

    public function updategalery($idgalery)
    {
        // validasi input
        if (!$this->validate([
            'judulgalery' => [
                'rules' => 'required',
                'errors' => [
                    'required' => 'Harus diisi !',
                ]
            ],
            'gambargalery' => [
                'rules' => 'max_size[gambargalery,2048]|is_image[gambargalery]|mime_in[gambargalery,image/jpg,image/jpeg,image/png]',
                'errors' => [
                    'max_size' => 'Ukuran gambar harus kurang dari 2MB !',
                    'is_image' => 'Yang anda upload harus gambar ber-ekstensi .png/.jpg/.jpeg !',
                    'mime_in' => 'Yang anda upload harus gambar ber-ekstensi .png/.jpg/.jpeg !'
                ]
            ],
            'reCaptcha2' => 'required|reCaptcha2[]'

        ])) {
            return redirect()->to('/administrator/ubahgalery/' . $this->request->getVar('sluggalery'))->withInput();
        }

        $fileGambargalery = $this->request->getFile('gambargalery');

        // cek gambar, apakah tetap gambar lama
        if ($fileGambargalery->getError() == 4) {
            $namaGambargalery = $this->request->getVar('galeryLama');
        } else {
            $namaGambargalery = $fileGambargalery->getRandomName();
            $fileGambargalery->move('images', $namaGambargalery);
            if ($this->request->getVar('galeryLama') != 'default.png') {
                unlink('images/' . $this->request->getVar('galeryLama'));
            }
        }



        $sluggalery = url_title($this->request->getVar('judulgalery'), '-', true);

        $this->galeryModel->save(
            [
                'idgalery' => $idgalery,
                'judulgalery' => $this->request->getVar('judulgalery'),
                'sluggalery' => $sluggalery,
                'gambargalery' => $namaGambargalery
            ]
        );

        session()->setFlashdata('pesan', 'Data berhasil diubah.');

        return redirect()->to('/administrator/galery');
    }











    // CONTROLLER BERITA CRUD

    public function berita()
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
            'title' => 'berita | Admin Karang Taruna Desa Kota Batu',
            // 'berita' => $this->beritaModel->findAll()
            'berita' => $berita->orderBy('created_at_berita', 'DESC')->paginate(10, 'berita'),
            'pager' => $this->beritaModel->pager,
            'currentPage' => $currentPage
        ];

        echo view('layout/admheader', $data);
        echo view('administrator/admberita');
        echo view('layout/admfooter');
    }

    public function detailberita($slugberita)
    {

        $data = [
            'title' => 'berita Detail | Admin Karang Taruna Desa Kota Batu',
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
            'title' => 'Tambah Data berita | Admin Karang Taruna Desa Kota Batu',
            'validation' => \Config\Services::validation()
        ];

        echo view('layout/admheader', $data);
        echo view('administrator/admberita_tambah');
        echo view('layout/admfooter');
    }

    public function simpanberita()
    {
        // validasi input
        if (!$this->validate([
            'judulberita' => [
                'rules' => 'required|is_unique[berita.judulberita]',
                'errors' => [
                    'required' => 'Harus diisi !',
                    'is_unique' => 'Tidak Boleh Sama !'
                ]
            ],
            'isiberita' => [
                'rules' => 'required',
                'errors' => [
                    'required' => 'Harus diisi !',
                ]
            ],
            'deskripsisingkatberita' => [
                'rules' => 'required',
                'errors' => [
                    'required' => 'Harus diisi !',
                ]
            ],
            'gambarberita' => [
                'rules' => 'max_size[gambarberita,2048]|is_image[gambarberita]|mime_in[gambarberita,image/jpg,image/jpeg,image/png]',
                'errors' => [
                    'max_size' => 'Ukuran gambar harus kurang dari 2MB !',
                    'is_image' => 'Yang anda upload harus gambar ber-ekstensi .png/.jpg/.jpeg !',
                    'mime_in' => 'Yang anda upload harus gambar ber-ekstensi .png/.jpg/.jpeg !'
                ]
            ],
            'reCaptcha2' => 'required|reCaptcha2[]'
        ])) {
            // $validation = \Config\Services::validation();
            // return redirect()->to('/administrator/tambahberita')->withInput()->with('validation', $validation);
            return redirect()->to('/administrator/tambahberita')->withInput();
        }

        // ambil gambar
        $fileGambarberita = $this->request->getFile('gambarberita');

        // cek gambar ada apa gak
        if ($fileGambarberita->getError() == 4) {
            $namaGambarberita = 'default.png';
        } else {
            // genearte nama
            $namaGambarberita = $fileGambarberita->getRandomName();
            // Pindah ke Images
            $fileGambarberita->move('images', $namaGambarberita);
            // namafile di ambil
        }


        $slugberita = url_title($this->request->getVar('judulberita'), '-', true);

        $this->beritaModel->save(
            [
                'judulberita' => $this->request->getVar('judulberita'),
                'slugberita' => $slugberita,
                'deskripsisingkatberita' => $this->request->getVar('deskripsisingkatberita'),
                'isiberita' => $this->request->getVar('isiberita'),
                'gambarberita' => $namaGambarberita,
            ]
        );

        session()->setFlashdata('pesan', 'Data berhasil ditambahkan.');

        return redirect()->to('/administrator/berita');
    }

    public function hapusberita($idberita)
    {
        // cari gambar bedasar ID
        $berita = $this->beritaModel->find($idberita);

        // cek gambar default
        if ($berita['gambarberita'] != 'default.png') {
            // HAPUS GAMBAR
            unlink('images/' . $berita['gambarberita']);
        }


        $this->beritaModel->delete($idberita);

        session()->setFlashdata('pesan', 'Data berhasil dihapus.');

        return redirect()->to('/administrator/berita');
    }

    public function ubahberita($slugberita)
    {

        $data = [
            'title' => 'Ubah Data berita | Admin Karang Taruna Desa Kota Batu',
            'validation' => \Config\Services::validation(),
            'berita' => $this->beritaModel->getberita($slugberita)
        ];

        echo view('layout/admheader', $data);
        echo view('administrator/admberita_ubah');
        echo view('layout/admfooter');
    }

    public function updateberita($idberita)
    {
        // validasi input
        if (!$this->validate([
            'judulberita' => [
                'rules' => 'required',
                'errors' => [
                    'required' => 'Harus diisi !',
                ]
            ],
            'isiberita' => [
                'rules' => 'required',
                'errors' => [
                    'required' => 'Harus diisi !',
                ]
            ],
            'deskripsisingkatberita' => [
                'rules' => 'required',
                'errors' => [
                    'required' => 'Harus diisi !',
                ]
            ],
            'gambarberita' => [
                'rules' => 'max_size[gambarberita,2048]|is_image[gambarberita]|mime_in[gambarberita,image/jpg,image/jpeg,image/png]',
                'errors' => [
                    'max_size' => 'Ukuran gambar harus kurang dari 2MB !',
                    'is_image' => 'Yang anda upload harus gambar ber-ekstensi .png/.jpg/.jpeg !',
                    'mime_in' => 'Yang anda upload harus gambar ber-ekstensi .png/.jpg/.jpeg !'
                ]
            ],
            'reCaptcha2' => 'required|reCaptcha2[]'

        ])) {
            return redirect()->to('/administrator/ubahberita/' . $this->request->getVar('slugberita'))->withInput();
        }

        $fileGambarberita = $this->request->getFile('gambarberita');

        // cek gambar, apakah tetap gambar lama
        if ($fileGambarberita->getError() == 4) {
            $namaGambarberita = $this->request->getVar('beritaLama');
        } else {
            $namaGambarberita = $fileGambarberita->getRandomName();
            $fileGambarberita->move('images', $namaGambarberita);
            if ($this->request->getVar('beritaLama') != 'default.png') {
                unlink('images/' . $this->request->getVar('beritaLama'));
            }
        }



        $slugberita = url_title($this->request->getVar('judulberita'), '-', true);

        $this->beritaModel->save(
            [
                'idberita' => $idberita,
                'judulberita' => $this->request->getVar('judulberita'),
                'slugberita' => $slugberita,
                'deskripsisingkatberita' => $this->request->getVar('deskripsisingkatberita'),
                'isiberita' => $this->request->getVar('isiberita'),
                'gambarberita' => $namaGambarberita
            ]
        );

        session()->setFlashdata('pesan', 'Data berhasil diubah.');

        return redirect()->to('/administrator/berita');
    }
    // BERITA END


















    // Pengumuman CRUD
    public function pengumuman()
    {
        // searching
        $keyword = $this->request->getVar('keyword');
        if ($keyword) {
            $pengumuman = $this->pengumumanModel->search($keyword);
        } else {
            $pengumuman = $this->pengumumanModel;
        }

        // Pagination Urutan
        $currentPage = $this->request->getVar('page_pengumuman') ? $this->request->getVar('page_pengumuman') : 1;


        $data = [
            'title' => 'pengumuman | Admin Karang Taruna Desa Kota Batu',
            // 'pengumuman' => $this->pengumumanModel->findAll()
            'pengumuman' => $pengumuman->orderBy('created_at_pengumuman', 'DESC')->paginate(10, 'pengumuman'),
            'pager' => $this->pengumumanModel->pager,
            'currentPage' => $currentPage
        ];

        echo view('layout/admheader', $data);
        echo view('administrator/admpengumuman');
        echo view('layout/admfooter');
    }

    public function detailpengumuman($slugpengumuman)
    {

        $data = [
            'title' => 'pengumuman Detail | Admin Karang Taruna Desa Kota Batu',
            'pengumuman' => $this->pengumumanModel->getpengumuman($slugpengumuman)
        ];

        // jika data kosong cek
        if (empty($data['pengumuman'])) {
            throw new \CodeIgniter\Exceptions\PageNotFoundException('Data ' . $slugpengumuman . ' tidak ditemukan !');
        }

        echo view('layout/admheader', $data);
        echo view('administrator/admpengumuman_detail');
        echo view('layout/admfooter');
    }

    public function tambahpengumuman()
    {
        $data = [
            'title' => 'Tambah Data pengumuman | Admin Karang Taruna Desa Kota Batu',
            'validation' => \Config\Services::validation()
        ];

        echo view('layout/admheader', $data);
        echo view('administrator/admpengumuman_tambah');
        echo view('layout/admfooter');
    }

    public function simpanpengumuman()
    {
        // validasi input
        if (!$this->validate([
            'judulpengumuman' => [
                'rules' => 'required',
                'errors' => [
                    'required' => 'Harus diisi !',
                ]
            ],
            'isipengumuman' => [
                'rules' => 'required',
                'errors' => [
                    'required' => 'Harus diisi !',
                ]
            ],
            'reCaptcha2' => 'required|reCaptcha2[]'

        ])) {
            return redirect()->to('/administrator/tambahpengumuman')->withInput();
        }

        $slugpengumuman = url_title($this->request->getVar('judulpengumuman'), '-', true);

        $this->pengumumanModel->save(
            [
                'judulpengumuman' => $this->request->getVar('judulpengumuman'),
                'slugpengumuman' => $slugpengumuman,
                'isipengumuman' => $this->request->getVar('isipengumuman'),
            ]
        );

        session()->setFlashdata('pesan', 'Data berhasil ditambahkan.');

        return redirect()->to('/administrator/pengumuman');
    }

    public function hapuspengumuman($idpengumuman)
    {
        $this->pengumumanModel->delete($idpengumuman);

        session()->setFlashdata('pesan', 'Data berhasil dihapus.');

        return redirect()->to('/administrator/pengumuman');
    }

    public function ubahpengumuman($slugpengumuman)
    {

        $data = [
            'title' => 'Ubah Data pengumuman | Admin Karang Taruna Desa Kota Batu',
            'validation' => \Config\Services::validation(),
            'pengumuman' => $this->pengumumanModel->getpengumuman($slugpengumuman)
        ];

        echo view('layout/admheader', $data);
        echo view('administrator/admpengumuman_ubah');
        echo view('layout/admfooter');
    }

    public function updatepengumuman($idpengumuman)
    {
        // validasi input
        if (!$this->validate([
            'judulpengumuman' => [
                'rules' => 'required',
                'errors' => [
                    'required' => 'Harus diisi !',
                ]
            ],
            'isipengumuman' => [
                'rules' => 'required',
                'errors' => [
                    'required' => 'Harus diisi !',
                ]
            ],
            'reCaptcha2' => 'required|reCaptcha2[]'

        ])) {
            return redirect()->to('/administrator/ubahpengumuman/' . $this->request->getVar('slugpengumuman'))->withInput();
        }

        $slugpengumuman = url_title($this->request->getVar('judulpengumuman'), '-', true);

        $this->pengumumanModel->save(
            [
                'idpengumuman' => $idpengumuman,
                'judulpengumuman' => $this->request->getVar('judulpengumuman'),
                'slugpengumuman' => $slugpengumuman,
                'isipengumuman' => $this->request->getVar('isipengumuman'),
            ]
        );

        session()->setFlashdata('pesan', 'Data berhasil diubah.');

        return redirect()->to('/administrator/pengumuman');
    }
    // PENGUMUMAN END

    // ASPIRASI
    // Pengumuman CRUD
    public function aspirasi()
    {
        // searching
        $keyword = $this->request->getVar('keyword');
        if ($keyword) {
            $aspirasi = $this->aspirasiModel->search($keyword);
        } else {
            $aspirasi = $this->aspirasiModel;
        }

        // Pagination Urutan
        $currentPage = $this->request->getVar('page_aspirasi') ? $this->request->getVar('page_aspirasi') : 1;


        $data = [
            'title' => 'aspirasi | Admin Karang Taruna Desa Kota Batu',
            // 'aspirasi' => $this->aspirasiModel->findAll()
            'aspirasi' => $aspirasi->orderBy('created_at_aspirasi', 'DESC')->paginate(10, 'aspirasi'),
            'pager' => $this->aspirasiModel->pager,
            'currentPage' => $currentPage
        ];

        echo view('layout/admheader', $data);
        echo view('administrator/admaspirasi');
        echo view('layout/admfooter');
    }

    public function detailaspirasi($slugaspirasi)
    {

        $data = [
            'title' => 'aspirasi Detail | Admin Karang Taruna Desa Kota Batu',
            'aspirasi' => $this->aspirasiModel->getaspirasi($slugaspirasi)
        ];

        // jika data kosong cek
        if (empty($data['aspirasi'])) {
            throw new \CodeIgniter\Exceptions\PageNotFoundException('Data ' . $slugaspirasi . ' tidak ditemukan !');
        }

        echo view('layout/admheader', $data);
        echo view('administrator/admaspirasi_detail');
        echo view('layout/admfooter');
    }

    public function hapusaspirasi($idaspirasi)
    {
        $this->aspirasiModel->delete($idaspirasi);

        session()->setFlashdata('pesan', 'Data berhasil dihapus.');

        return redirect()->to('/administrator/aspirasi');
    }
    // ASPIRASI END


    // DASHBOR USER
    public function user($id = 0)
    {
        $data = [
            'title' => 'User | Karang Taruna Desa Kota Batu',
        ];

        // QuerryBuilderCI4
        $db = \Config\Database::connect();
        $builder = $db->table('users');
        $builder->select('users.id as userid, username,email, fullname, user_image, name');
        $builder->join('auth_groups_users', 'auth_groups_users.user_id = users.id');
        $builder->join('auth_groups', 'auth_groups.id = auth_groups_users.group_id');
        $builder->where('users.id', $id);
        $query = $builder->get();
        $data['user'] = $query->getRow();

        echo view('layout/admheader', $data);
        echo view('administrator/admuser');
        echo view('layout/admfooter');
    }
    // USER END

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

    public function detailuserlist($id = 0)
    {
        // $users = new \Myth\Auth\Models\UserModel();
        $data = [
            'title' => 'Detail User List | Admin Karang Taruna Desa Kota Batu',
        ];

        // QuerryBuilderCI4
        $db = \Config\Database::connect();
        $builder = $db->table('users');
        $builder->select('users.id as userid, username,email, fullname, user_image, name');
        $builder->join('auth_groups_users', 'auth_groups_users.user_id = users.id');
        $builder->join('auth_groups', 'auth_groups.id = auth_groups_users.group_id');
        $builder->where('users.id', $id);
        $query = $builder->get();
        $data['user'] = $query->getRow();

        if (empty($data['user'])) {
            return redirect()->to('/administrator');
        }

        // $data['users'] = $users->findAll();
        echo view('layout/admheader', $data);
        echo view('administrator/admuserlist_detail');
        echo view('layout/admfooter');
    }
    // END USLIST
}
