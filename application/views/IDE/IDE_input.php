<div class="container">
    <form action="<?=base_url('/user/input_ide')?>" method="post">
        <div class="input-group flex-nowrap">
            <span class="input-group-text" id="addon-wrapping">Judul Ide</span>
            <input type="text" name="judul" class="form-control" placeholder="Username" aria-label="Username" aria-describedby="addon-wrapping">
        </div>
        <div class="input-group flex-nowrap">
            <span class="input-group-text" id="addon-wrapping">Lokasi</span>
            <select name="lokasi" id="">
                <? foreach ($daerah->provinsi as $key => $value) : ?>
                    <option value="<?= $value->nama ?>"><?= $value->nama ?></option>
                <? endforeach ?>
            </select>
        </div>
        <div class="input-group flex-nowrap">
            <span class="input-group-text" id="addon-wrapping">@</span>
            <textarea name="Deskripsi" id="" cols="30" rows="10"></textarea>
        </div>
        <button type="submit">kirim</button>
    </form>
</div>