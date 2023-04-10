<div class="container">
    <div class="row">
        <div class="col">
            <h2 class="mt-3 mb-3" style="padding: 10px;">Data Berita</h2>
            <a href="/administrator/tambahberita" class="btn btn-primary mb-3">Tambah Data</a>
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
                        <th scope="col">Judul Berita</th>
                        <th scope="col">Deskripsi Berita</th>
                        <th scope="col">Aksi</th>
                    </tr>
                </thead>
                <tbody>
                    <?php $no = 1 + (10 * ($currentPage - 1)); ?>
                    <?php foreach ($berita as $ber) : ?>
                        <tr>
                            <th scope="row"><?= $no++; ?></th>
                            <td><img src="/images/<?= $ber['gambarberita']; ?>" alt="" class="sampul"></td>
                            <td><?= $ber['judulberita']; ?></td>
                            <td><?= $ber['deskripsisingkatberita']; ?></td>
                            <td>
                                <a href="/administrator/berita/<?= $ber['slugberita']; ?>" class="btn btn-success">Detail</a>
                            </td>
                        </tr>
                    <?php endforeach; ?>
                </tbody>
            </table>
            <?= $pager->links('berita', 'pager_berita'); ?>
        </div>
    </div>
</div>