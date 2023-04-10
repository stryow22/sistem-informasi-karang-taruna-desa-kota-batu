<div class="container">
    <div class="row">
        <div class="col">
            <h2>Detail berita</h2>
            <div class="card mb-3" style="max-width: 540px;">
                <div class="row no-gutters">
                    <div class="col-md-4" style="margin-right: 30px; padding:30px">
                        <img src="/images/<?= $berita['gambarberita']; ?>" alt="..." width="200">
                    </div>
                    <div class="col-md-8">
                        <div class="card-body">
                            <h5 class="card-title">Judul : <?= $berita['judulberita']; ?></h5>
                            <h6 class="card-title">Deskripsi : <?= $berita['deskripsisingkatberita']; ?></h6>
                            <h6>Isi Berita :</h6>
                            <textarea name="" id="" cols="60" rows="10" class="card-title" readonly><?= $berita['isiberita']; ?></textarea>
                            <a href="/administrator/ubahberita/<?= $berita['slugberita']; ?>" class="btn btn-warning">Edit</a>

                            <a href="/administrator/hapusberita/<?= $berita['idberita']; ?>" class="btn btn-danger" onclick="return confirm('Apakah Anda Yakin ? Menghapus data ini mengakibatkan data hilang selamanya.');">Hapus</a>


                            <br><br>
                            <a href="/administrator/berita" class="btn btn-primary">Kembali</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>