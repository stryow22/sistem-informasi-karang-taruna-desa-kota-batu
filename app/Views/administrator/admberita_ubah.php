<?php
helper(['form', 'reCaptcha']);
?>
<div class="container">
    <div class="row">
        <div class="col-8">
            <h2 class="my-3">Form Ubah Data berita</h2>
            <form action="/administrator/updateberita/<?= $berita['idberita']; ?> " method="POST" name="updateberita" id="updateberita" enctype="multipart/form-data">
                <!-- keamanan CI4 -->
                <?= csrf_field(); ?>
                <?php echo form_open(); ?>

                <input type="hidden" name="slugberita" value="<?= $berita['slugberita']; ?>">
                <input type="hidden" name="beritaLama" value="<?= $berita['gambarberita']; ?>">
                <!-- Keamanan CI4 -->
                <div class="form-group row">
                    <label for="judulberita" class="col-sm-2 col-form-label">Judul : </label>
                    <div class="col-sm-10">
                        <input type="text" class="form-control <?= ($validation->hasError('judulberita')) ? 'is-invalid' : ''; ?>" id="judulberita" name="judulberita" autofocus value="<?= $berita['judulberita']; ?>">
                        <div class="invalid-feedback">
                            <?= $validation->getError('judulberita'); ?>
                        </div>
                    </div>
                </div>
                <div class="form-group row">
                    <label for="deskripsisingkatberita" class="col-sm-2 col-form-label">Deskripsi Singkat : </label>
                    <div class="col-sm-10">
                        <textarea type="text" class="form-control <?= ($validation->hasError('deskripsisingkatberita')) ? 'is-invalid' : ''; ?>" id="deskripsisingkatberita" name="deskripsisingkatberita" autofocus value="<?= $berita['deskripsisingkatberita']; ?>"><?= $berita['deskripsisingkatberita']; ?></textarea>
                        <div class="invalid-feedback">
                            <?= $validation->getError('deskripsisingkatberita'); ?>
                        </div>
                    </div>
                </div>
                <div class="form-group row">
                    <label for="isiberita" class="col-sm-2 col-form-label">Isi Berita : </label>
                    <div class="col-sm-10">
                        <textarea type="text" class="form-control <?= ($validation->hasError('isiberita')) ? 'is-invalid' : ''; ?>" rows="20" id="isiberita" name="isiberita" autofocus value="<?= $berita['isiberita']; ?>"><?= $berita['isiberita']; ?></textarea>
                        <div class="invalid-feedback">
                            <?= $validation->getError('isiberita'); ?>
                        </div>
                    </div>
                </div>
                <div class="form-group row">
                    <label for="gambarberita" class="col-sm-2 col-form-label">Gambar :</label>
                    <div class="col-sm-2">
                        <img src="/images/<?= $berita['gambarberita']; ?>" class="img-thumbnail img-preview" alt="">
                    </div>
                    <div class="col-sm-8">
                        <div class="custom-file">
                            <input type="file" class="custom-file-input <?= ($validation->hasError('gambarberita')) ? 'is-invalid' : ''; ?>" id="gambarberita" name="gambarberita" onchange="previewImgberita()">
                            <div class="invalid-feedback">
                                <?= $validation->getError('gambarberita'); ?>
                            </div>
                            <label class="custom-file-label" for="gambarberita"><?= $berita['gambarberita'];; ?></label>
                        </div>
                    </div>
                    <p> * Ukuran maksimal adalah 2MB <br>(lakukan Compress disini : <a href="https://compressjpeg.com/id/" target="_blank">Klik Disini</a>)</p>
                    <p> * File yang didukung adalah JPEG/JPG/PNG</p>
                </div>
                <div class="form-group row">
                    <div class="col-sm-10">
                        <?php echo reCaptcha2('reCaptcha2', ['id' => 'recaptcha_v2'], ['theme' => 'white']); ?>
                        <div class="invalid-feedback">
                            <?= $validation->getError('reCaptcha2'); ?>
                        </div>
                        <button type="submit" class="btn btn-primary">Ubah Data</button>
                    </div>
                </div>
                <?php echo form_close(); ?>
            </form>
        </div>
    </div>
</div>