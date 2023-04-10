<div class="container">
    <div class="row">
        <div class="col">
            <h2>Detail Galery</h2>
            <div class="card mb-3" style="max-width: 540px;">
                <div class="row no-gutters">
                    <div class="col-md-4" style="margin-right: 30px; padding:30px">
                        <img src="/images/<?= $galery['gambargalery']; ?>" alt="..." width="200">
                    </div>
                    <div class="col-md-8">
                        <div class="card-body">
                            <h5 class="card-title">Judul : <?= $galery['judulgalery']; ?></h5>
                            <a href="/administrator/ubahgalery/<?= $galery['sluggalery']; ?>" class="btn btn-warning">Edit</a>


                            <form action="/administrator/<?= $galery['idgalery']; ?>" method="POST" class="d-inline">
                                <?= csrf_field(); ?>
                                <input type="hidden" name="_method" value="DELETE">
                                <button type="submit" class="btn btn-danger" onclick="return confirm('Apakah Anda Yakin ? Menghapus data ini mengakibatkan data hilang selamanya.');">Hapus</button>
                            </form>


                            <br><br>
                            <a href="/administrator/galery" class="btn btn-primary">Kembali</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>