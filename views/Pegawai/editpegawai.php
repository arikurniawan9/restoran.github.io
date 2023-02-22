<section class="home">
<div class="text"> Daftar Pegawai</div>
<div class="container">
    <?php foreach ($data['pegawai'] as $edit) { ?>
        <form action="<?= $base_url . 'pegawai/ubah/' . $edit['idpegawai'] ?>" method="post">
            <div>
                <label for="">Nama Pegawai</label>
                <input type="text" name="namapegawai" id="" value="<?= $edit['namapegawai'] ?>">
            </div>
            <div>
                <label for="">Alamat</label>
                <textarea name="alamat" id=""><?= $edit['alamat'] ?></textarea>
            </div>
            <div>
                <label for="">No Telp</label>
                <input type="text" name="notelp" id="" value="<?= $edit['notelp'] ?>">
            </div>
            <div>
                <label for="">username</label>
                <input type="email" name="username" id="" value="<?= $edit['username'] ?>">
            </div>
            <div>
                <label for="">Password</label>
                <input type="password" name="password" id="" value="<?= $edit['password'] ?>">
            </div>
            <div>
                <label for="">Jabatan</label>
                <select name="iduser" id="">
                    <option value="<?= $edit['iduser'] ?>"><?= $edit['hakakses'] ?></option>
                    <option>Pilih Jabatan</option>
                    <?php foreach ($data['user'] as $user){ ?>
                    <option value="<?= $user['iduser'] ?>">
                        <?= $user['hakakses'] ?>
                </option>
                    <?php } ?>
                </select>
            </div>
            <div>
                <button type="submit">Simpan</button>
            </div>
        </form>
        <?php }?>
    </div>
</div>