<div class="container">
    <div class="row">
        <div class="col">
            <h2 class="mt-3 mb-3" style="padding: 10px;">Data Aspirasi Masuk</h2>
            <?php if (session()->getFlashdata('pesan')) : ?>
                <div class="alert alert-success" role="alert">
                    <?= session()->getFlashdata('pesan'); ?>
                </div>
            <?php endif; ?>
            <table class="table">
                <thead>
                    <tr>
                        <th scope="col">No</th>
                        <th scope="col">Nama Pengirim</th>
                        <th scope="col">Judul Aspirasi</th>
                        <th scope="col">Isi Aspirasi</th>
                        <th scope="col">Aksi</th>
                    </tr>
                </thead>
                <tbody>
                    <?php $no = 1 + (10 * ($currentPage - 1)); ?>
                    <?php foreach ($aspirasi as $aspira) : ?>
                        <tr>
                            <th scope="row"><?= $no++; ?></th>
                            <td><textarea id="note2" class="form-control" readonly><?= $aspira['namauseraspirasi']; ?></textarea></td>
                            <td><textarea id="note2" class="form-control" readonly><?= $aspira['judulaspirasi']; ?></textarea></td>
                            <td><textarea id="note2" class="form-control" readonly><?= $aspira['isiaspirasi']; ?></textarea>
                            </td>
                            <td>
                                <a href="/administrator/aspirasi/<?= $aspira['slugaspirasi']; ?>" class="btn btn-success">Detail</a>
                            </td>
                        </tr>
                    <?php endforeach; ?>
                </tbody>
            </table>
            <?= $pager->links('aspirasi', 'pager_aspirasi'); ?>
        </div>
    </div>
</div>

<script>
    autosize(document.getElementById("note2"));
</script>



<style>
    textarea#note2 {
        width: 100%;
        box-sizing: border-box;
        display: block;
        max-width: 100%;
        line-height: 1.5;
        padding: 15px 15px 30px;
        border-radius: 3px;
        border: 1px solid white;
        background-color: #FFF !important;
    }

    textarea#note {
        width: 100%;
        box-sizing: border-box;
        display: block;
        max-width: 100%;
        line-height: 1.5;
        padding: 15px 15px 30px;
        border-radius: 3px;
        border: 1px solid white;
        background-color: #FFF !important;
    }

    .form-control:focus {
        border-color: #cccccc;
        -webkit-box-shadow: none;
        box-shadow: none;
    }
</style>