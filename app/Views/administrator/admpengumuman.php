<div class="container">
    <div class="row">
        <div class="col">
            <h2 class="mt-3 mb-3" style="padding: 10px;">Data Pengumuman</h2>
            <a href="/administrator/tambahpengumuman" class="btn btn-primary mb-3">Tambah Data</a>
            <?php if (session()->getFlashdata('pesan')) : ?>
                <div class="alert alert-success" role="alert">
                    <?= session()->getFlashdata('pesan'); ?>
                </div>
            <?php endif; ?>
            <table class="table">
                <thead>
                    <tr>
                        <th scope="col">No</th>
                        <th scope="col">Judul Pengumuman</th>
                        <th scope="col">Isi Pengumuman</th>
                        <th scope="col">Aksi</th>
                    </tr>
                </thead>
                <tbody>
                    <?php $no = 1 + (10 * ($currentPage - 1)); ?>
                    <?php foreach ($pengumuman as $pengu) : ?>
                        <tr>
                            <th scope="row"><?= $no++; ?></th>
                            <td><?= $pengu['judulpengumuman']; ?></td>
                            <td><?= $pengu['isipengumuman']; ?></td>
                            <td>
                                <a href="/administrator/pengumuman/<?= $pengu['slugpengumuman']; ?>" class="btn btn-success">Detail</a>
                            </td>
                        </tr>
                    <?php endforeach; ?>
                </tbody>
            </table>
            <?= $pager->links('pengumuman', 'pager_pengumuman'); ?>
        </div>
    </div>
</div>