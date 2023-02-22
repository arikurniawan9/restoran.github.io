<section class="home">
<div class="text"> Daftar Menu</div>
<div class="container">
    <?php foreach ($data['menu'] as $edit) { ?>
        <form action="<?= $base_url . 'menu/ubah/' . $edit['idmenu'] ?>" method="post">
            <div>
                <label for="">Nama Menu</label>
                <input type="text" name="namamenu" id="" value="<?= $edit['namamenu'] ?>">
            </div>
            <div>
                <label for="">Jenis Menu</label>
                <select name="jenismenu" id="">
                    <option>Pilih Menu</option>
                        <option value="Seafood">Seafood</option>
                        <option value="Drink">Minuman</option>
                        <option value="Breakfast">Breakfast</option>
                        <option value="Luncheon">Makanan</option>
                        <option value="Makanan Ringan">Cemilan</option>
                        <option value="Dinner">Dessert</option>
                </select>
            </div>
            <div>
                <label for="">Harga</label>
                <input type="text" name="harga" id="" value="<?= $edit['harga'] ?>">
            </div>
            <div>
                <label for="">Stok</label>
                <input type="text" name="stok" id="" value="<?= $edit['stok'] ?>">
            </div>
            <div>
                <label for="">Gambar Menu</label>
                <input type="file" name="gambarmenu" id="" value="<?= $edit['gambarmenu'] ?>">
            </div>
            <div>
                <button type="submit">Simpan</button>
            </div>
        </form>
    </div>
</div>