<main class="col-md-9 ms-sm-auto col-lg-10 px-md-4">
<div class="text"> Daftar Order</div>
<div class="container">
    <?php foreach ($data['pilih'] as $edit) { ?>
        <form action="<?= $base_url?>cart/create/" method="post">
            <div>
                <label for="">Nama Menu</label>
                <input type="text" name="idmenu" id="" value="<?= $edit['idmenu'] ?>" hidden>
                <input type="text" name="namamenu" id="" value="<?= $edit['namamenu'] ?>">
            </div>
            <div>
                <label for="">Harga</label>
                <input name="harga" id="" value="<?= $edit['harga'] ?>">
            </div>
            <div>
                <label for="">Qty</label>
                <input type="text" name="qty" size="1">
            </div>
            <div>
                <button type="submit">Simpan</button>
            </div>
        </form>
        <?php }?>
    </div>
    </main>