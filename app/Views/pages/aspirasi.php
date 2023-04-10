<?php
helper(['form', 'reCaptcha']);
?>

<div class="container">
    <div class="row">
        <div class="col-12">
            <h2 class="my-3 mt-5">Form Aspirasi Masyarakat</h2>
            <p>Sampaikan ASPIRASI-mu dengan sopan dan bijaksana, karena aspirasi-mu mencerminkan lingkungan-mu !</p>
            <?php if (session()->getFlashdata('pesan')) : ?>
                <div class="alert alert-success" role="alert">
                    <?= session()->getFlashdata('pesan'); ?>
                </div>
            <?php endif; ?>
            <form action="/pages/simpanaspirasi" method="POST" name="simpanaspirasi" id="simpanaspirasi" enctype="multipart/form-data">
                <!-- keamanan CI4 -->
                <?= csrf_field(); ?>
                <?php echo form_open(); ?>
                <!-- Keamanan CI4 -->
                <div class="form-group row">
                    <label for="namauseraspirasi" class="col-sm-2 col-form-label">Nama Pengirim</label>
                    <div class="col-sm-10">
                        <input type="text" class="form-control <?= ($validation->hasError('namauseraspirasi')) ? 'is-invalid' : ''; ?>" id="namauseraspirasi" name="namauseraspirasi" autofocus>
                        <div class="invalid-feedback">
                            <?= $validation->getError('namauseraspirasi'); ?>
                        </div>
                    </div>
                </div>
                <?php if (logged_in()) : ?>
                    <div class="form-group row">
                        <label for="emailuseraspirasi" class="col-sm-2 col-form-label">Email Pengirim</label>
                        <div class="col-sm-10">
                            <textarea readonly class="form-control-plaintext" id="emailuseraspirasi" name="emailuseraspirasi" rows="1"><?= user()->email; ?></textarea>
                            <div class="invalid-feedback">
                                <?= $validation->getError('emailuseraspirasi'); ?>
                            </div>
                        </div>
                    </div>
                <?php else : ?>
                    <div class="form-group row">
                        <label for="emailuseraspirasi" class="col-sm-2 col-form-label">Email Pengirim</label>
                        <div class="col-sm-10">
                            <input type="email" class="form-control <?= ($validation->hasError('emailuseraspirasi')) ? 'is-invalid' : ''; ?>" id="emailuseraspirasi" name="emailuseraspirasi" autofocus>
                            <div class="invalid-feedback">
                                <?= $validation->getError('emailuseraspirasi'); ?>
                            </div>
                        </div>
                    </div>
                <?php endif; ?>
                <div class="form-group row">
                    <label for="alamataspirasi" class="col-sm-2 col-form-label">Alamat Pengirim</label>
                    <div class="col-sm-10">
                        <input type="text" class="form-control <?= ($validation->hasError('alamataspirasi')) ? 'is-invalid' : ''; ?>" id="alamataspirasi" name="alamataspirasi" autofocus>
                        <div class="invalid-feedback">
                            <?= $validation->getError('alamataspirasi'); ?>
                        </div>
                    </div>
                </div>
                <div class="form-group row">
                    <label for="judulaspirasi" class="col-sm-2 col-form-label">Judul Aspirasi </label>
                    <div class="col-sm-10">
                        <input type="text" class="form-control <?= ($validation->hasError('judulaspirasi')) ? 'is-invalid' : ''; ?>" id="judulaspirasi" name="judulaspirasi" autofocus>
                        <div class="invalid-feedback">
                            <?= $validation->getError('judulaspirasi'); ?>
                        </div>
                    </div>
                </div>
                <div class="form-group row">
                    <label for="isiaspirasi" class="col-sm-2 col-form-label">Isi Aspirasi </label>
                    <div class="col-sm-10">
                        <textarea type="text" class="form-control <?= ($validation->hasError('isiaspirasi')) ? 'is-invalid' : ''; ?>" id="isiaspirasi" name="isiaspirasi" autofocus></textarea>
                        <div class="invalid-feedback">
                            <?= $validation->getError('isiaspirasi'); ?>
                        </div>
                    </div>
                </div>
                <!-- <div class="form-check">
                    <input class="form-check-input" type="checkbox" value="" id="flexCheckDefault">
                    <label class="form-check-label" for="flexCheckDefault">
                        Saya menyatakan bahwa aspirasi yang saya kirimkan adalah tanpa paksaan, dan telah mematuhi norma dalam menyampaikan pendapat dengan sopan dan bijaksana.
                    </label>
                </div> -->
                <div class="form-group row mt-3">
                    <div class="col-sm-10">
                        <?php echo reCaptcha2('reCaptcha2', ['id' => 'recaptcha_v2'], ['theme' => 'white']); ?>
                        <div class="invalid-feedback">
                            <?= $validation->getError('reCaptcha2'); ?>
                        </div>
                        <button type="submit" class="mt-3 btn btn-primary">Aspirasikan !</button>
                    </div>
                </div>
                <?php echo form_close(); ?>
            </form>
        </div>
    </div>
</div>