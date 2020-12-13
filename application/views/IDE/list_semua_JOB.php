<!DOCTYPE html>
<!-- saved from url=(0058)https://colorlib.com/etc/tb/Table_Responsive_v1/index.html -->
<html lang="en" data-lt-installed="true">

<head>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
    <title>JOB</title>

    <meta name="viewport" content="width=device-width, initial-scale=1">

    <link rel="icon" type="image/png" href="https://colorlib.com/etc/tb/Table_Responsive_v1/images/icons/favicon.ico">

    <link rel="stylesheet" type="text/css" href="<?= base_url('/assets/OTT') ?>/Table V01_files/bootstrap.min.css">

    <link rel="stylesheet" type="text/css" href="<?= base_url('/assets/OTT') ?>/Table V01_files/font-awesome.min.css">

    <link rel="stylesheet" type="text/css" href="<?= base_url('/assets/OTT') ?>/Table V01_files/animate.css">

    <link rel="stylesheet" type="text/css" href="<?= base_url('/assets/OTT') ?>/Table V01_files/select2.min.css">

    <link rel="stylesheet" type="text/css" href="<?= base_url('/assets/OTT') ?>/Table V01_files/perfect-scrollbar.css">

    <link rel="stylesheet" type="text/css" href="<?= base_url('/assets/OTT') ?>/Table V01_files/util.css">
    <link rel="stylesheet" type="text/css" href="<?= base_url('/assets/OTT') ?>/Table V01_files/main.css">

</head>

<body style="">
    <div class="limiter">
        <div class="container-table100">
            <div class="wrap-table100">
                <div class="table100">
                    <table>
                        <thead>
                            <tr class="table100-head">
                                <th class="column1">judul</th>
                                <th class="column2">Dibuat/Lokasi</th>
                                <th class="column3">Nama</th>
                                <th class="column6">view</th>
                            </tr>
                        </thead>
                        <tbody>
                            <? foreach ($data as $key => $value) : ?>
                                <tr>
                                    <td class="column1">
                                        <a href="<?= base_url('/R?call=J&id=' . $value['ide']->id) ?>">
                                            <?= $value['ide']->judul ?>
                                        </a>
                                    </td>
                                    <td class="column2"><?= $value['ide']->Di_Kirim . '/' . $value['ide']->Lokasi ?></td>
                                    <td class="column3"><?= $value['user']->name ?></td>
                                    <td class="column6"><?= $value['ide']->view ?></td>
                                </tr>
                            <? endforeach; ?>
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>

    <script type="text/javascript" async="" src="<?= base_url('/assets/OTT') ?>/Table V01_files/analytics.js"></script>
    <script src="<?= base_url('/assets/OTT') ?>/Table V01_files/jquery-3.2.1.min.js"></script>

    <script src="<?= base_url('/assets/OTT') ?>/Table V01_files/popper.js"></script>
    <script src="<?= base_url('/assets/OTT') ?>/Table V01_files/bootstrap.min.js"></script>

    <script src="<?= base_url('/assets/OTT') ?>/Table V01_files/select2.min.js"></script>

    <script src="<?= base_url('/assets/OTT') ?>/Table V01_files/main.js"></script>

    <script async="" src="<?= base_url('/assets/OTT') ?>/Table V01_files/js"></script>
    <script>
        window.dataLayer = window.dataLayer || [];

        function gtag() {
            dataLayer.push(arguments);
        }
        gtag('js', new Date());

        gtag('config', 'UA-23581568-13');
    </script>
    <script defer="" src="<?= base_url('/assets/OTT') ?>/Table V01_files/beacon.min.js" data-cf-beacon="{&quot;rayId&quot;:&quot;600ec7098f3e0bd6&quot;,&quot;version&quot;:&quot;2020.12.0&quot;,&quot;si&quot;:10}"></script>


</body>

</html>