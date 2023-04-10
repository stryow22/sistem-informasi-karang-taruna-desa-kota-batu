<!-- HEADER -->
<header class="text-center head">
    <h1>
        <strong>SELAMAT DATANG <br>
            DI WEBSITE SISTEM INFORMASI KARANG TARUNA<br>
            DESA KOTA BATU KABUPATEN BOGOR</strong>
    </h1>
    <h5>PENGUMUMAN</h5>
    <?php foreach ($pengumuman as $pengu) : ?>
        <marquee style="background-color: rgba(0, 0, 0, 0.5);" class="card-title"><?= $pengu['isipengumuman']; ?></marquee>
    <?php endforeach; ?>
</header>
<!-- HEADER END -->

<main>
    <!-- BERITA -->
    <section class="section-berita" id="berita">
        <div class="container">
            <div class="row">
                <div class="col section-berita-heading">
                    <h2>Berita Terbaru
                    </h2>
                    <p>
                        <a href="/pages/berita" class="badge badge-primary" style="width: 120px; height: 23px; font-size: 16px;">Lihat Semua</a>
                    </p>
                </div>
            </div>
            <div class="row row-cols-1 row-cols-md-2">
                <?php foreach ($berita as $ber) : ?>
                    <div class="col mb-4">
                        <div class="card h-100 bercard">
                            <center>
                                <img src="/images/<?= $ber['gambarberita']; ?>" class="card-img-top imgberita" alt="<?= $ber['judulberita']; ?>" style="padding: 20px; max-width: 400px;">
                            </center>
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
        </div>
    </section>
    <!-- BERITA END -->

    <!-- SAMBUTAM -->
    <section class="section-sambutan parallax py-5" id="sambutan">
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <img src="/images/sikatar/kangambang.png" class="img-fluid rounded mx-auto d-block" alt="Kepala Desa Kota Batu - Ibu Ratna Wulansari">
                </div>
            </div>
            <div>
                <div class="col-12">
                    <h2>Sambutan Ketua Karang Taruna Desa Kota Batu</h2>
                    <h4 class="mb-4" style="margin-top: -25px; color: white;">Ambang Firdajen, S.Or</h4>
                    <p class="text-justify">Assalamua'alaikum Warahmatullahi Wabarakatuh Salam Kesetiakawanan Sosial!<br>
                        Selamat datang di Web Site Karang Taruna Desa Kota Batu
                        Puji dan syukur kita panjatkan kepada Allah SWT atas segala limpahan rahmat,karuniadan hidayahnya kita masih diberikan nikmat iman dan islam. Shalawat serta salam senantiasa tercurah kepada junjungan kita nabi besar Muhammad SAW beserta keluarga dan para pengikutnya yang setia mengikuti ajarannya hingga akhir zaman, Aaamiin Yaa Robbal A'lamiin<br><br>
                        Karang Taruna Desa Kota Batu merupakan bagian dari entitas generasi muda yang terus berkembang dalam gerakan masif untuk meningkatkan keberdayaan masyarakat khususnya kaum muda di berbagai bidang yang berorientasi pada peningkatan kesejahteraan sosial. Ekonomi dan kualitas SDM menjadi isu pokok dalam menguatkan kapasitas penyelenggaraan kesejahteraan sosial yang dikelola oleh Karang Taruna, khususnya di Desa Kota Batu. Karena itu dibutuhkan regulasi yang bukan hanya memberi dasar dan ruang besar bagi pergerakannya terapi juga mendukung penuh peran generasi muda dalam pembangunan yang integratif dan melibatkan anak muda.<br><br>
                        Karang Taruna Desa kota merupakan suatau wadah yang di dalamnya ada semangat juang para pemuda desa kota batu, yang di mana semangat juang itu di tuangkan untuk merubah desa kota khususnya di bidang pendidikan, kerohanian, ekonomi, sosial, olahraga, lingkuangan.<br><br>
                        Pemuda adalah agent of change, dimana ada pemuda disitu ada perubahan maka pastikan pemuda itu adalah karang taruna.<br><br>
                        Karang taruna juga merupakan wadah aspirasi bagi seluruh masyarakat kota batu dan para lembaga, oleh karana pemarsuta adalah bagian dari misi kami.<br><br>
                        Semoga hadirnya karang taruna dan website ini bisa memberikan informasi bagi para pemuda dan sebagai wadah edukasi untuk para pemuda dan masyarakat.<br><br>
                        ” Maju Desanya, Pemuda Perannya “<br><br>
                        Salam Adhitya Karya Mahatva Yodha!
                    </p>
                </div>
            </div>
        </div>
    </section>
    <!-- SAMBUTAN END-->

    <!-- GALERY -->
    <section class="section-galery pb-5">
        <div class="container">
            <h2 style="padding-top: 50px;">Galery Kegiatan</h2>
            <p style="margin-top: -20px; margin-bottom: 30px;">
                <a href="/pages/galery" class="badge badge-primary" style="width: 120px; height: 23px; font-size: 16px;">Lihat Semua</a>
            </p>
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
        </div>
    </section>
    <!-- GALERY END -->

    <!-- YT IG -->
    <!-- <section class="social" id="social">
        <div class="container">
            <div class="row">
                <div class="col">
                    <h2>Social Media</h2>
                </div>
            </div>
            <div class="row justify-content-center">
                <div class="col-md-5">
                    <div class="row">
                        <div class="col-md-4">
                            <img src="/images/logo-pemkab-bogor.png" alt="" width="200" height="200" class="rounded-circle img-fluid">
                        </div>
                        <div class="col-md-8">
                            <h5>Youtube</h5>
                        </div>
                    </div>
                    <div class="row mt-3 pb-3">
                        <div class="col">
                            <div class="embed-responsive embed-responsive-16by9">
                                <iframe class="embed-responsive-item" src="https://www.youtube.com/embed/pQ4DrAUaHNM?rel=0" allowfullscreen></iframe>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-md-5">
                    <div class="row">
                        <div class="col-md-4">
                            <img src="/images/logo-pemkab-bogor.png" alt="" width="200" height="200" class="rounded-circle img-fluid">
                        </div>
                        <div class="col-md-8">
                            <h5>Instagram</h5>
                        </div>
                    </div>
                    <div class="row mt-3 pb-3">
                        <div class="col">
                            <div class="ig-thumbnail">
                                <img src="/images/logo-pemkab-bogor.png" alt="">
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section> -->


    <!-- TODO BAGIAN BOTTOM MASIH PERLU DIPERBAIKI FLEX FILL NYA -->
    <!-- BOTTOM -->
    <!-- <section class="section-bottom">
            <div class="container">
                <div class="row">
                    <div class="col-6 flex-fill justify-content-center">
                        <div class="btn-group-vertical" role="group" aria-label="Button group with nested dropdown">
                            <button type="button" class="btn btn-secondary">1</button>
                            <button type="button" class="btn btn-secondary">2</button>

                            <div class="btn-group" role="group">
                                <button id="btnGroupDrop1" type="button" class="btn btn-secondary dropdown-toggle"
                                    data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                    Dropdown
                                </button>
                                <div class="dropdown-menu" aria-labelledby="btnGroupDrop1">
                                    <a class="dropdown-item" href="#">Dropdown link</a>
                                    <a class="dropdown-item" href="#">Dropdown link</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section> -->