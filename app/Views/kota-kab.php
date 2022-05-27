<?= $this->extend('layouts/template'); ?>

<?= $this->section('content'); ?>
<h3 class="text-light mb-5">Pilih Kota/Kabupaten</h3>
<table class="table table-dark table-striped w-75 mx-auto">
    <thead>
        <tr class="table-danger">
            <th scope="col">No.</th>
            <th scope="col">Nama Kota/Kabupaten</th>
        </tr>
    </thead>
    <tbody>
        <?php $i = 1; ?>
        <?php foreach (array_combine($listKotaKab, $arrayKeys) as $lkk => $ak) : ?>
            <tr>
                <th scope="row"><?= $i++; ?></th>
                <form action="/daerah/<?= $ak; ?>" method="POST" enctype="multipart/form-data">
                <td><button type="submit" name="<?= $ak; ?>" style="background: none; border: none; color: #fff;"><?= $lkk; ?></button></td>
                </form>
            </tr>
        <?php endforeach; ?>
    </tbody>
</table>

<?= $this->endSection(); ?>