<!DOCTYPE html>
<!-- saved from url=(0058)https://colorlib.com/etc/tb/Table_Responsive_v1/index.html -->
<html lang="en" data-lt-installed="true">

<head>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
    <title>IDE</title>

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
            <div class="row">
                <div class="col-md-12">
                    <nav class="navbar navbar-expand-lg navbar-light border-bottom border-primary rounded-pill">
                        <div class="container-fluid">
                            <a class="navbar-brand" href="#">K<sup>26</sup>$ID<sub>.e</sub></a>
                            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                                <span class="navbar-toggler-icon"></span>
                            </button>
                            <div class="collapse navbar-collapse" id="navbarSupportedContent">
                                <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                                    <li class="nav-item">
                                        <? if (!empty($_SESSION['id'])) : ?>
                                            <a class="btn btn-primary" href="<?= base_url('/auth') ?>">Dasbord</a>
                                        <? else : ?>
                                            <a class="btn btn-primary" href="<?= base_url('/auth') ?>">LOGIN</a>
                                        <? endif ?>
                                    </li>
                                    <li class="nav-item">
                                        <a class="nav-link" href="#">Link</a>
                                    </li>
                                    <li class="nav-item dropdown">
                                        <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                                            Dropdown
                                        </a>
                                        <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
                                            <li><a class="dropdown-item" href="#">Action</a></li>
                                            <li><a class="dropdown-item" href="#">Another action</a></li>
                                            <li>
                                                <hr class="dropdown-divider">
                                            </li>
                                            <li><a class="dropdown-item" href="#">Something else here</a></li>
                                        </ul>
                                    </li>
                                    <li class="nav-item">
                                        <a class="nav-link disabled" href="#" tabindex="-1" aria-disabled="true">Disabled</a>
                                    </li>
                                </ul>
                                <!-- <form class="d-flex">
                                    <input class="form-control me-2" type="search" placeholder="Search" aria-label="Search">
                                    <button class="btn btn-outline-success" type="submit">Search</button>
                                </form> -->
                            </div>
                        </div>
                    </nav>
                </div>
            </div>
            <div class="wrap-table100">
                <div class="row text-center border-bottom border-primary rounded-pill border border-primary border-bottom-0">
                    <h1 class="text-primary">IDE Terbaru</h1>
                </div>
                <div class="table100 ">
                    <table>
                        <thead>
                            <tr class="table100-head ">
                                <th class="column1">Judul</th>
                                <th class="column2">Dibuat</th>
                                <th class="column3">Nama</th>
                                <th class="column4">Lokasi</th>
                                <th class="column6">view</th>
                            </tr>
                        </thead>
                        <tbody>
                            <? foreach ($data as $key => $value) : ?>
                                <tr>
                                    <td class="column1">
                                        <a href="<?= base_url('/R?call=D&id=' . $value['ide']->id) ?>">
                                            <?= $value['ide']->judul ?>
                                        </a>
                                    </td>
                                    <td class="column2"><?= $value['ide']->Di_Kirim ?></td>
                                    <td class="column3"><?= $value['user']->name ?></td>
                                    <td class="column4"><?= $value['ide']->Lokasi ?></td>
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