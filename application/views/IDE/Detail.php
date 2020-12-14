<!DOCTYPE html>
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
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-giJF6kkoqNQ00vy+HMDP7azOuL0xtbfIcaT9wjKHr8RbDVddVHyTfAAsrekwKmP1" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.1/css/all.min.css" integrity="sha512-+4zCK9k+qNFUR5X+cKL9EIR+ZOhtIloNl9GIKS57V1MyNsYpYcUrUeQc9vNfzsWfV28IaLL3i96P9sdNyeRssA==" crossorigin="anonymous" />

</head>

<body>

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
                            <div class=" text-center collapse navbar-collapse" id="navbarSupportedContent">
                                <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                                    <li class="nav-item">
                                        <? if (!empty($_SESSION['id'])) : ?>
                                            <a class="btn btn-primary" href="<?= base_url('/auth') ?>">Dasbord</a>
                                        <? else : ?>
                                            <a class="btn btn-primary" href="<?= base_url('/auth') ?>">LOGIN</a>
                                        <? endif ?>
                                    </li>
                                    <li class="nav-item">
                                        <a class="btn btn-danger" href="#">IDE</a>
                                    </li>
                                    <li class="nav-item">
                                        <a class="btn btn-success" href="#">JOB</a>
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
            <div class="wrap-table100 container">
                <div class="row text-center border-bottom border-primary rounded-pill border border-primary border-bottom-0">
                    <h3 class="text-primary"><?= $Detail[0]['item']->judul ?></h3>
                </div>
                <div class="table100 shadow p-3 card border-bottom-0  border-primary">
                    <div class="row">
                        <div class="col-md-12 text-center">
                            <a href="" class="btn btn-danger"><i class="fas fa-envelope-open-text"></i>| Email now</a>
                            <a href="https://api.whatsapp.com/send/?phone=62<?= $Detail[0]['user']->No_wa ?>" target="_blank" class="btn btn-success"><i class="fab fa-whatsapp"></i>| Whatapp now</a>
                        </div>
                        <div class="col-md-12">
                            <div class="row">
                                <div class="col-md-2">
                                    <img src="<?= base_url('/assets/img/profile/') . $Detail[0]['user']->image ?>" alt="" class="img-fluid img-thumbnail rounded float-start rounded-circle" width="400px">
                                </div>
                                <div class="col-md-5">
                                    <table class="table">
                                        <ul>
                                            <li>
                                                <p>Name : <?= $Detail[0]['user']->name ?></p>
                                            </li>
                                        </ul>

                                        <ul>
                                            <li>
                                                <p>Email : <?= $Detail[0]['user']->email ?></p>
                                            </li>
                                        </ul>
                                        <ul>
                                            <li>No Whatapps : <?= $Detail[0]['user']->No_wa ?></li>
                                        </ul>
                                        </tbody>
                                    </table>
                                </div>
                                <div class="col-md-5">
                                    <table class="table">
                                        <tbody>
                                            <ul>
                                                <li>IDE : <?= $Detail[0]['item']->judul ?></li>
                                            </ul>
                                            <ul>
                                                <li>Di Posting : <?= $Detail[0]['item']->Di_Kirim ?></li>
                                            </ul>
                                            <ul>
                                                <li>Lokasi : <?= $Detail[0]['item']->Lokasi ?></li>
                                            </ul>
                                            <ul>
                                                <li>View : <?= $Detail[0]['item']->view ?></li>
                                            </ul>
                                        </tbody>
                                    </table>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-12 text-center">
                            <a href="" class="btn btn-danger"><i class="fas fa-envelope-open-text"></i>| Email now</a>
                            <a href="https://api.whatsapp.com/send/?phone=62<?= $Detail[0]['user']->No_wa ?>" target="_blank" class="btn btn-success"><i class="fab fa-whatsapp"></i>| Whatapp now</a>
                        </div>
                        <div class="col-md-12">
                            <div class="row">
                                <div class="col-md-1"></div>
                                <div class="col-md-10">
                                    <div class="card">
                                        <iframe frameborder="0" srcdoc="<pre><?= $Detail[0]['item']->Deskripsi ?></pre>"></iframe>
                                    </div>
                                </div>
                                <div class="col-md-1"></div>
                                <div class="col-md-12 text-center">
                                    <a href="" class="btn btn-danger"><i class="fas fa-envelope-open-text"></i>| Email now</a>
                                    <a href="https://api.whatsapp.com/send/?phone=62<?= $Detail[0]['user']->No_wa ?>" target="_blank" class="btn btn-success"><i class="fab fa-whatsapp"></i>| Whatapp now</a>
                                </div>
                            </div>
                        </div>
                    </div>

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
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/js/bootstrap.bundle.min.js" integrity="sha384-ygbV9kiqUc6oa4msXn9868pTtWMgiQaeYH7/t7LECLbyPA2x65Kgf80OJFdroafW" crossorigin="anonymous"></script>

</body>

</html>