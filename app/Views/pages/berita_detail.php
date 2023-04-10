<script src="https://rawgit.com/jackmoore/autosize/master/dist/autosize.min.js"></script>

<section class="x">
    <div class="container">
        <div class="row">
            <div class="col mb-5 mt-3">

                <nav aria-label="breadcrumb ">
                    <ol class="breadcrumb mt-5">
                        <li class="breadcrumb-item"><a href="/">Home</a></li>
                        <li class="breadcrumb-item"><a href="/pages/berita">Berita</a></li>
                        <li class="breadcrumb-item active" aria-current="page"><?= $berita['judulberita']; ?></li>
                    </ol>
                </nav>

                <h3 class="mt-4 mb-3"><?= $berita['judulberita']; ?></h3>
                <p class="breadcrumb-item active mb-3"><?= $berita['created_at_berita']; ?></p>
                <center>
                    <img src="/images/<?= $berita['gambarberita']; ?>" class="img-fluid mb-4 mt-2" style="max-width: 75%;" alt="...">
                </center>
                <textarea id="note" class="form-control" readonly><?= $berita['isiberita']; ?></textarea>
            </div>
        </div>
    </div>
</section>

<script>
    autosize(document.getElementById("note"));
</script>



<style>
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