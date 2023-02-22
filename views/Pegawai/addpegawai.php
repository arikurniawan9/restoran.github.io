<section class="home">
<div class="text"> Daftar Pegawai</div>
<div class="container">
        <form action="<?=$base_url?>pegawai/save" method="post">
            <div>
                <label for="">Nama Pegawai</label>
                <input type="text" name="namapegawai" id="">
            </div>
            <div>
                <label for="">Alamat</label>
                <textarea name="alamat" id=""></textarea>
            </div>
            <div>
                <label for="">No Telp</label>
                <input type="text" name="notelp" id="">
            </div>
            <div>
                <label for="">username</label>
                <input type="email" name="username" id="">
            </div>
            <div>
                <label for="">Password</label>
                <input type="password" name="password" id="">
            </div>
            <div>
                <label for="">Jabatan</label>
                <select name="iduser" id="">
                    <option>Pilih Jabatan</option>
                    <?php foreach ($data['user'] as $user){ ?>
                    <option value="<?= $user['iduser'] ?>">
                        <?= $user['hakakses'] ?> <?= $user['iduser'] ?>
                </option>
                    <?php } ?>
                </select>
            </div>
            <div>
                <button type="submit">Simpan</button>
            </div>
        </form>
    </div>
</div>