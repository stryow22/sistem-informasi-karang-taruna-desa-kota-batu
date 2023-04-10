<div class="container">
    <div class="row">
        <div class="col">
            <h2 class="mt-3 mb-3" style="padding: 10px;">Data Gambar/Galery</h2>
            <a href="/administrator/tambahgalery" class="btn btn-primary mb-3">Tambah Data</a>
            <?php if (session()->getFlashdata('pesan')) : ?>
                <div class="alert alert-success" role="alert">
                    <?= session()->getFlashdata('pesan'); ?>
                </div>
            <?php endif; ?>
            <table class="table">
                <thead>
                    <tr>
                        <th scope="col">No</th>
                        <th scope="col">Gambar</th>
                        <th scope="col">Judul Galery</th>
                        <th scope="col">Aksi</th>
                    </tr>
                </thead>
                <tbody>
                    <?php $no = 1 + (10 * ($currentPage - 1)); ?>
                    <?php foreach ($galery as $gal) : ?>
                        <tr>
                            <th scope="row"><?= $no++; ?></th>
                            <td><img src="/images/<?= $gal['gambargalery']; ?>" alt="" class="sampul"></td>
                            <td><?= $gal['judulgalery']; ?></td>
                            <td>
                                <a href="/administrator/galery/<?= $gal['sluggalery']; ?>" class="btn btn-success">Detail</a>
                            </td>
                        </tr>
                    <?php endforeach; ?>
                </tbody>
            </table>
            <?= $pager->links('galery', 'pager_galery'); ?>
        </div>
    </div>
</div>