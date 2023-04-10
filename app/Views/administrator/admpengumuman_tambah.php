<?php
helper(['form', 'reCaptcha']);
?>
<div class="container">
    <div class="row">
        <div class="col-8">
            <h2 class="my-3">Form Tambah Data Galery</h2>
            <p>Maksimal 256 Kata</p>
            <form action="/administrator/simpanpengumuman" method="POST" name="simpanpengumuman" id="simpanpengumuman" enctype="multipart/form-data">
                <!-- keamanan CI4 -->
                <?= csrf_field(); ?>
                <?php echo form_open(); ?>

                <!-- Keamanan CI4 -->
                <div class="form-group row">
                    <label for="judulpengumuman" class="col-sm-2 col-form-label">Judul : </label>
                    <div class="col-sm-10">
                        <input type="text" class="form-control <?= ($validation->hasError('judulpengumuman')) ? 'is-invalid' : ''; ?>" id="judulpengumuman" name="judulpengumuman" autofocus value="<?= old('judulpengumuman'); ?>">
                        <div class="invalid-feedback">
                            <?= $validation->getError('judulpengumuman'); ?>
                        </div>
                    </div>
                </div>
                <div class="form-group row">
                    <label for="isipengumuman" class="col-sm-2 col-form-label">Isi Pengumuman : </label>
                    <div class="col-sm-10">
                        <input type="text" class="form-control <?= ($validation->hasError('isipengumuman')) ? 'is-invalid' : ''; ?>" id="isipengumuman" name="isipengumuman" autofocus value="<?= old('isipengumuman'); ?>">
                        <div class="invalid-feedback">
                            <?= $validation->getError('isipengumuman'); ?>
                        </div>
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