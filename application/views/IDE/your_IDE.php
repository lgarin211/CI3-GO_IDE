<h1>
    list semua IDE
</h1>

<table>
    <thead>
        <tr>
            <td>judul</td>
            <td>Dibuat/Lokasi</td>
            <td>Nama</td>
            <td>view</td>
        </tr>
    </thead>
    <tbody>
        <? foreach ($data as $key => $value) : ?>
            <tr>
                <td>
                    <a href="<?= base_url('/R?call=J&id=' . $value['ide']->id) ?>">
                        <?= $value['ide']->judul ?>
                    </a>
                </td>
                <td><?= $value['ide']->Di_Kirim . '/' . $value['ide']->Lokasi ?></td>
                <td><?= $value['user']->name ?></td>
                <td><?= $value['ide']->view ?></td>
            </tr>

        <? endforeach; ?>

    </tbody>
</table>