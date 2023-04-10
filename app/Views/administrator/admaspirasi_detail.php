<script src="https://rawgit.com/jackmoore/autosize/master/dist/autosize.min.js"></script>

<div class="container">
    <div class="row">
        <div class="col">
            <h2>Detail Aspirasi</h2>

            <form>
                <div class="form-group">
                    <label for="exampleFormControlInput1">Nama Pengirim</label>
                    <textarea id="note" class="form-control" readonly><?= $aspirasi['namauseraspirasi']; ?></textarea>
                </div>
                <div class="form-group">
                    <label for="exampleFormControlInput1">Alamat Pengirim</label>
                    <textarea id="note" class="form-control" readonly><?= $aspirasi['alamataspirasi']; ?></textarea>
                </div>
                <div class="form-group">
                    <label for="exampleFormControlInput1">Email Pengirim</label>
                    <textarea id="note" class="form-control" readonly><?= $aspirasi['emailuseraspirasi']; ?></textarea>
                </div>
                <div class="form-group">
                    <label for="exampleFormControlInput1">Judul Aspirasi</label>
                    <textarea id="note" class="form-control" readonly><?= $aspirasi['judulaspirasi']; ?></textarea>
                </div>
                <div class="form-group">
                    <label for="exampleFormControlInput1">Isi Aspirasi</label>
                    <textarea id="note2" class="form-control" readonly><?= $aspirasi['isiaspirasi']; ?></textarea>
                </div>
                <div class="form-group">
                    <label for="exampleFormControlInput1">Tanggal Masuk</label>
                    <textarea id="note" class="form-control" readonly><?= $aspirasi['created_at_aspirasi']; ?></textarea>
                </div>
            </form>
            <form action="/administrator/<?= $aspirasi['idaspirasi']; ?>" method="POST" class="d-inline">
                <?= csrf_field(); ?>
                <a href="/administrator/hapusaspirasi/<?= $aspirasi['idaspirasi']; ?>" class="btn btn-danger" onclick="return confirm('Apakah Anda Yakin ? Menghapus data ini mengakibatkan data hilang selamanya.');">Hapus</a>
            </form>
            <a href="/administrator/aspirasi" class="btn btn-primary">Kembali</a>
            <!-- <a href="/administrator/aspirasi" class="btn btn-warning">Ubah Status</a> -->
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