<div class="row">
    <div class="col-md-12">
        <? if (!empty($_SESSION['id'])) : ?>
            <a class="btn btn-primary" href="<?= base_url('/auth') ?>">Dasbord</a>
        <? else : ?>
            <a class="btn btn-primary" href="<?= base_url('/auth') ?>">LOGIN</a>
        <? endif ?>
    </div>
</div>