<?= $this->extend('layouts/template'); ?>

<?= $this->section('content'); ?>
<h3 class="text-light mb-5">List Daerah & Kodepos</h3>
<table class="table table-dark table-striped mx-auto">
    <thead>
        <tr class="table-danger">
            <th scope="col">No.</th>
            <th scope="col">Kecamatan</th>
            <th scope="col">Kelurahan</th>
            <th scope="col">Kode Pos</th>
        </tr>
    </thead>
    <tbody>
        <?php $i = 1; ?>
        <?php foreach (array_combine($arrayKeys, $listDaerah) as $ak => $ld) : ?>
            <tr>
                <th scope="row"><?= $i++; ?></th>
                <td><?= $ld['kecamatan']; ?></td>
                <td><?= $ld['kelurahan']; ?></td>
                <td><?= $ld['kodepos']; ?></td>
            </tr>
        <?php endforeach; ?>
    </tbody>
</table>

<?= $this->endSection(); ?>