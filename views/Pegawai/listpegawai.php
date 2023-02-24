<main class="col-md-9 ms-sm-auto col-lg-10 px-md-4">
<div class="text"> Daftar Pegawai</div>

    <div class="container">
    <a href = "<?= $base_url?>pegawai/create">
        <button class="btn-add"><i class="bx bx-plus icon"></i>Add</button>
    </a>
    <table border="1">
        <thead>
            <th bgcolor="#DDD">No</th>
            <th bgcolor="#DDD">Nama Pegawai</th>
            <th bgcolor="#DDD">Alamat</th>
            <th bgcolor="#DDD">No Telpon</th>
            <th bgcolor="#DDD">Jabatan</th>
            <th colspan="3" bgcolor="#DDD">Tools</th>
        </thead>
        <?php 
        $no=1;
        foreach ($data['pegawai'] as $pgw) { ?>
        <tbody>
            <td><?= $no;?></td>
            <td><?= $pgw['namapegawai'];?></td>
            <td><?= $pgw['alamat'];?></td>
            <td><?= $pgw['notelp'];?></td>
            <td><?= $pgw['hakakses'];?></td>
            <td><a class="" href="<?= $base_url.'pegawai/view/'.$pgw['idpegawai']?>">View</a>
        <a class="" href="<?= $base_url.'pegawai/edit/'.$pgw['idpegawai']?>"><i class="bx bx-edit-alt icon"></i></a>
        <a class="" href="<?= $base_url.'pegawai/hapus/'.$pgw['idpegawai'] ?>"onclick="return confirm('Yakin anda ingin menghapus?')"><i class="bx bx-trash icon"></i></a></td>
        </tbody>
        <?php  $no++; } ?>
    </table>
</div>
        </main>