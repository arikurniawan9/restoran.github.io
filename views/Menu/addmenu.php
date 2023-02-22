<section class="home">
<div class="text"> Data Menu</div>

    <div class="container">
        <form action="<?=$base_url?>menu/save" method="post" enctype="multipart/form-data">
            <div>
                <label for="">Nama Menu</label>
                <input type="text" name="namamenu" id="">
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
                <input type="text" name="harga" id="">
            </div>
            <div>
                <label for="">Stok</label>
                <input type="text" name="stok" id="">
            </div>
            <div>
                <label for="">Gambar Menu</label>
                <input type="file" name="gambarmenu" id="">
            </div>
            <div>
                <button type="submit">Simpan</button>
            </div>
        </form>
    </div>
</div>