<?= $this->extend('layouts/template'); ?>

<?= $this->section('content'); ?>

<div class="d-flex justify-content-between">
    <h3 class="text-light mb-5">Pilih Provinsi</h3>
    <div class="col-4">
        <form action="" method="GET">
            <div class="input-group mb-3 col-md-6">
                <input type="text" class="form-control" placeholder="Search" aria-label="Recipient's username" aria-describedby="button-addon2" name="keyword">
                <button class="btn btn-outline-search" type="submit" name="Submit"><i class='bx bx-search-alt-2'></i></button>
            </div>
        </form>
    </div>
</div>

<div class="card-group justify-content-between mx-auto">
    <?php foreach (array_combine($listProvinsi, $arrayKeys) as $lp => $ak) : ?>

        <div class="row col-md-3 mb-5 mx-2">
            <div class="card bg-dark border-darkgrey" style="width: 100%; margin: 0; padding: 0; height: 170x">
                <img src="img/<?= $ak; ?>.jpg" class="card-img-top rounded-start" style="width: 100%; height: 120px;">
                <div class="card-body d-flex justify-content-center">
                    <form action="/kota-kab/<?= $ak; ?>" method="POST" enctype="multipart/form-data">
                        <button type="submit" style="background: none; border: none; color: #fff; margin: auto;" name="<?= $ak; ?>"><?= $lp; ?></button>
                    </form>
                </div>
            </div>
        </div>

    <?php endforeach; ?>
</div>
<?= $this->endSection(); ?>