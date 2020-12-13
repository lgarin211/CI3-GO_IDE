<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-giJF6kkoqNQ00vy+HMDP7azOuL0xtbfIcaT9wjKHr8RbDVddVHyTfAAsrekwKmP1" crossorigin="anonymous">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.1/css/all.min.css" integrity="sha512-+4zCK9k+qNFUR5X+cKL9EIR+ZOhtIloNl9GIKS57V1MyNsYpYcUrUeQc9vNfzsWfV28IaLL3i96P9sdNyeRssA==" crossorigin="anonymous" />

<div class="container">
    <div class="row">
        <div class="col-md-12 text-center bg-dark">
            <h4 class="text-light"><?= $Detail[0]['item']->judul ?></h4>
        </div>
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
                        <tbody>
                            <tr>
                                <th scope="row">Name</th>
                                <td><?= $Detail[0]['user']->name ?></td>
                            </tr>
                            <tr>
                                <th scope="row">email</th>
                                <td><?= $Detail[0]['user']->email ?></td>
                            </tr>
                            <tr>
                                <th scope="row">No Whatapps</th>
                                <td><?= $Detail[0]['user']->No_wa ?></td>
                            </tr>
                        </tbody>
                    </table>
                </div>
                <div class="col-md-5">
                    <table class="table">
                        <tbody>
                            <tr>
                                <th scope="row">IDE</th>
                                <td><?= $Detail[0]['item']->judul ?></td>
                            </tr>
                            <tr>
                                <th scope="row">Di Posting</th>
                                <td><?= $Detail[0]['item']->Di_Kirim ?></td>
                            </tr>
                            <tr>
                                <th scope="row">Lokasi</th>
                                <td><?= $Detail[0]['item']->Lokasi ?></td>

                            </tr>
                            <tr>
                                <th scope="row">View</th>
                                <td><?= $Detail[0]['item']->view ?></td>
                            </tr>
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
                        <iframe frameborder="0" srcdoc="<pre><?= $Detail[0]['item']->Deskripsi?></pre>"></iframe>
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