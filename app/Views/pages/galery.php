<section class="galery">
    <div class="container">
        <div class="row">
            <div class="col">
                <center>
                    <h3 class="mt-5 mb-3">Galery Kegiatan<br>Karang Taruna Desa Kota Batu</h3>
                </center>
            </div>
        </div>
    </div>
</section>
<!-- GALERY -->
<section class="section-galery" style="background-color: white;">
    <div class="container">
        <div class="row row-cols-1 row-cols-md-3">
            <?php foreach ($galery as $gal) : ?>
                <div class="col mb-4">
                    <div class="card h-100">
                        <img src="/images/<?= $gal['gambargalery']; ?>" class="card-img-top" alt="..." style="padding: 10px;">
                        <div class="card-body">
                            <h5 class="card-title"><?= $gal['judulgalery']; ?></h5>
                        </div>
                    </div>
                </div>
            <?php endforeach; ?>
        </div>
        <?= $pager->links('galery', 'pager_galery'); ?>
    </div>
</section>
<!-- GALERY END -->