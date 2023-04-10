<?php
helper(['form', 'reCaptcha']);
?>
<div class="container">
    <div class="row">
        <div class="col-8">
            <h2 class="my-3">Form Tambah Data Galery</h2>
            <form action="/administrator/simpangalery" method="POST" name="simpangalery" id="simpangalery" enctype="multipart/form-data">
                <!-- keamanan CI4 -->
                <?= csrf_field(); ?>
                <?php echo form_open(); ?>

                <!-- Keamanan CI4 -->
                <div class="form-group row">
                    <label for="judulgalery" class="col-sm-2 col-form-label">Judul : </label>
                    <div class="col-sm-10">
                        <input type="text" class="form-control <?= ($validation->hasError('judulgalery')) ? 'is-invalid' : ''; ?>" id="judulgalery" name="judulgalery" autofocus>
                        <div class="invalid-feedback">
                            <?= $validation->getError('judulgalery'); ?>
                        </div>
                    </div>
                </div>
                <div class="form-group row">
                    <label for="gambargalery" class="col-sm-2 col-form-label">Gambar :</label>
                    <div class="col-sm-2">
                        <img src="/images/default.png" class="img-thumbnail img-preview" alt="">
                    </div>
                    <div class="col-sm-8">
                        <div class="custom-file">
                            <input type="file" class="custom-file-input <?= ($validation->hasError('gambargalery')) ? 'is-invalid' : ''; ?>" id="gambargalery" name="gambargalery" onchange="previewImgGalery()">
                            <div class="invalid-feedback">
                                <?= $validation->getError('gambargalery'); ?>
                            </div>
                            <label class="custom-file-label" for="gambargalery">Pilih Gambar</label>
                        </div>
                        <p> * Ukuran maksimal adalah 2MB <br>(lakukan Compress disini : <a href="https://compressjpeg.com/id/" target="_blank">Klik Disini</a>)</p>
                        <p> * File yang didukung adalah JPEG/JPG/PNG</p>
                    </div>
                </div>
                <div class="form-group row">
                    <div class="col-sm-10">
                        <?php echo reCaptcha2('reCaptcha2', ['id' => 'recaptcha_v2'], ['theme' => 'white']); ?>
                        <div class="invalid-feedback">
                            <?= $validation->getError('reCaptcha2'); ?>
                        </div>
                        <button type="submit" class="btn btn-primary">Tambah Data</button>
                    </div>
                </div>
                <?php echo form_close(); ?>
            </form>
        </div>
    </div>
</div>