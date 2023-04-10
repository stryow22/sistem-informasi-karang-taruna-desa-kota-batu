<section class="berita">
    <div class="container">
        <div class="row">
            <div class="col">
                <center>
                    <h3 class="mt-5 mb-3">Berita Terbaru<br>Karang Taruna Desa Kota Batu</h3>
                </center>
            </div>
        </div>
    </div>
</section>
<!-- GALERY -->
<section class="section-galery" style="background-color: white;">
    <div class="container">
        <div class="row row-cols-1 row-cols-md-3">
            <?php foreach ($berita as $ber) : ?>
                <div class="col mb-4">
                    <div class="card h-100">
                        <img src="/images/<?= $ber['gambarberita']; ?>" class="card-img-top" alt="..." style="padding: 10px;">
                        <div class="card-body">
                            <p class="breadcrumb-item active mb-3"><?= $ber['created_at_berita']; ?></p>
                            <h5 class="card-title"><?= $ber['judulberita']; ?></h5>
                            <p class="card-text"><?= $ber['deskripsisingkatberita']; ?></p>
                            <a href="/pages/detailberita/<?= $ber['slugberita']; ?>" class="card-link" style="">Baca Selengkapnya</a>
                        </div>
                    </div>
                </div>
            <?php endforeach; ?>
        </div>
        <?= $pager->links('berita', 'pager_berita'); ?>
    </div>
</section>
<!-- berita END -->