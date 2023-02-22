<main class="col-md-9 ms-sm-auto col-lg-10 px-md-4">
    <div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">
        <h1 class="h2">Daftar Menu</h1>
    </div>

    <div class="container">
        <a href="<?= $base_url?>menu/create">
            <div class="d-flex justify-content-end">
                <button class="btn btn-success mb-2"><i data-feather="plus"></i>Add</button>
            </div>
        </a>
        <table class="table table-hover">
            <thead class="table-dark">
                <tr>
                    <th>No</th>
                    <th>Nama Menu</th>
                    <th>Jenis Menu</th>
                    <th>Harga</th>
                    <th>Stok</th>
                    <th>Gambar</th> 
                    <th>Tools</th>
                </tr>
            </thead>
            <?php 
            $no=1;
            foreach ($data['menu'] as $menu) { ?>
            <tbody>
                <tr>
                    <td><?= $no;?></td>
                    <td><?= $menu['namamenu'];?></td>
                    <td><?= $menu['jenismenu'];?></td>
                    <td><?= $menu['harga'];?></td>
                    <td><?= $menu['stok'];?></td>
                    <td><img src="assets/img/<?=$menu['gambarmenu']?>" width="35" hight="40"></td>
                    <td><a class="btn btn-outline-info btn-sm" href="<?= $base_url.'menu/edit/'.$menu['idmenu']?>"><i data-feather="edit"></i></a>
                        <a class="btn btn-danger btn-sm" href="<?= $base_url.'menu/hapus/'.$menu['idmenu'] ?>"onclick="return confirm('Yakin anda ingin menghapus?')"><i data-feather="trash"></i></a></td>
                </tr>
            </tbody>
            <?php  $no++; }?>
        </table>
    </div>
</main>