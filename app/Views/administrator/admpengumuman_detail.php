<div class="container">
    <div class="row">
        <div class="col">
            <h2>Detail Pengumuman</h2>
            <div class="card mb-3" style="max-width: 540px;">
                <div class="row no-gutters">
                    <div class="col-md-8">
                        <div class="card-body">
                            <h5 class="card-title">Judul : <?= $pengumuman['judulpengumuman']; ?></h5>
                            <h5 class="card-title">Isi : <?= $pengumuman['isipengumuman']; ?></h5>
                            <form action="/administrator/<?= $pengumuman['idpengumuman']; ?>" method="POST" class="d-inline">
                                <?= csrf_field(); ?>
                                <a href="/administrator/hapuspengumuman/<?= $pengumuman['idpengumuman']; ?>" class="btn btn-danger" onclick="return confirm('Apakah Anda Yakin ? Menghapus data ini mengakibatkan data hilang selamanya.');">Hapus</a>
                                <a href="/administrator/ubahpengumuman/<?= $pengumuman['slugpengumuman']; ?>" class="btn btn-warning">Edit</a>
                            </form>
                            <br><br>
                            <a href="/administrator/pengumuman" class="btn btn-primary">Kembali</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>