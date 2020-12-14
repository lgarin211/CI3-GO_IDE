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
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-giJF6kkoqNQ00vy+HMDP7azOuL0xtbfIcaT9wjKHr8RbDVddVHyTfAAsrekwKmP1" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.1/css/all.min.css" integrity="sha512-+4zCK9k+qNFUR5X+cKL9EIR+ZOhtIloNl9GIKS57V1MyNsYpYcUrUeQc9vNfzsWfV28IaLL3i96P9sdNyeRssA==" crossorigin="anonymous" />
    <link rel="stylesheet" href="https://getbootstrap.com/docs/5.0/dist/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://getbootstrap.com/docs/5.0/examples/product/product.css">
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
                            <div class="text-center collapse navbar-collapse" id="navbarSupportedContent">
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
                            </div>
                        </div>
                    </nav>
                </div>
            </div>
            <div class="wrap-table100 ">
                <div class="row text-center  border-primary rounded-pill border border-primary border-bottom-0">
                    <h3 class="text-primary">Welcome</h3>
                </div>
                <!-- <div class="table100 shadow p-3  border-bottom-0  border-primary"> -->
                <!-- <div class="container"> -->
                <main>
                    <div class="position-relative overflow-hidden p-3 p-md-5 m-md-3 text-center ">
                        <!-- <iframe class="product-device shadow-sm d-none d-md-block" src="<?= base_url('/') ?>"></iframe> -->
                        <!-- <iframe src="<?= base_url('/') ?>" class="product-device product-device-2 shadow-sm d-none d-md-block"></iframe> -->
                        <div class="col-md-5 p-lg-5 mx-auto my-5 border-bottom border-warning btn-outline-warning rounded-pill border border-primary border-bottom-0">
                            <h1 class="display-4 fw-normal"><b>I.D.E</b></h1>
                            <h3 class="lead fw-normal"><b>Develohp Ideas with new Friends</b></p>
                                <a class="btn btn-outline-danger" href="#">Coming soon</a>
                        </div>
                    </div>

                    <div class="d-md-flex flex-md-equal w-100 my-md-3 ps-md-3">
                        <div class=" border-bottom text-dark border-light btn-outline-light rounded-pill border border-primary border-bottom-0 me-md-3 pt-3 px-3 pt-md-5 px-md-5 text-center overflow-hidden">
                            <div class="my-3 py-3">
                                <h2 class="display-5 "><b>I.D.E</b></h2>
                                <p class="lead">Temukan IDE Baru Untuk Kamu Kembangkan</p>
                                <a href="<?= base_url('/IDE') ?>" class="btn btn-outline-dark">
                                    <i class="fas fa-2x fa-arrow-circle-right"></i>
                                </a>
                            </div>
                            <img src="https://2.bp.blogspot.com/-jFTvS-Ic5ig/Vu-NzRAqrPI/AAAAAAAABdE/ezIiEcv1Kpg7w667Vl9qTBfUwMBw7ViRQ/s1600/agil3.jpg" class="bg-dark shadow-sm mx-auto" style="width: 80%; height: 300px; border-radius: 21px 21px 0 0;"></img>
                        </div>
                        <div class="border-bottom text-light border-dark btn-outline-dark rounded-pill border border-primary border-bottom-0 me-md-3 pt-3 px-3 pt-md-5 px-md-5 text-center overflow-hidden">
                            <div class="my-3 p-3">
                                <h2 class="display-5 "><b>J.O.B</b></h2>
                                <p class="lead">Temukan JOB Baru Untuk Kamu Kerjakan</p>
                                <a href="<?= base_url('/IDE') ?>" class="btn btn-outline-light">
                                    <i class="fas fa-2x fa-arrow-circle-right"></i>
                                </a>
                            </div>
                            <img src="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcS06CPfZIXY0VIQpx-H5cSB1pvzdkKPeJ-P8A&usqp=CAU" class="bg-light shadow-sm mx-auto" style="width: 80%; height: 300px; border-radius: 21px 21px 0 0;">

                            </img>
                        </div>
                    </div>
                </main>
                <!-- </div> -->

                <!-- </div> -->

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