<main class="col-md-9 ms-sm-auto col-lg-10 px-md-4">
    <div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">
        <h1 class="h2">Daftar Pesanan</h1>
    </div>
    <div class="container">
        <div class="row">
            <?php 
                foreach ($data['trs'] as $trs) {

                    if($trs['stok']>=1){
                        $status="<div class='alert alert-success' role='alert'>Tersedia</div>";
                    }else{
                        $status="<div class='alert alert-danger' role='alert'>Kosong</div>";
                    }
            
            ?>
            <div class="col-md-3 mb-3 text-center">
                <div class="card">
                    <div class="position-absolute px-3 py-2" style="background-color: rgba(0,0,0,0.5)">
                         <a href="#" class="text-decoration-none text-white"><?= $trs['jenismenu']?></a>
                    </div>
                    <img src="<?= $base_url; ?>assets/img/<?= $trs['gambarmenu']?>" class="card-img-top" style="height:200px">
                    <div class="card-body">
                        <h5 class="card-title"><?= $trs['namamenu']?></h5>
                        <p class="card-text"><?= 'Rp ' . number_format($trs['harga'], 0, '.', '.') ?></p>
                        <p class="card-text text-bold"><?= $status?></p>
                        <a href="<?=$base_url.'transaksi/pilih/'.$trs['idmenu']?>" class="btn btn-primary">Add to Cart</a>
                    </div>
                </div>
            </div>
            <?php } ?>
        </div>
    </div>
</main>

<div class="modal fade" id="modal-cart" tabindex="-1" role="dialog" aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title">Tambah Pesanan</h5>
            </div>
            <form action="<?= $base_url ?>cart/create" name="transaksi" method="post" id="form-transaksi">
                <img type="hidden" class="img img-fluid" id="gambar-menu" name="gambar" />
                <div class="modal-body">
                    <div class="form-group mb-2">
                        <label for="nama-menu">Nama Menu</label>
                        <input type="text" class="form-control" id="input-nama-menu" name="namaMenu" readonly>
                    </div>
                    <div class="form-group mb-2">
                        <label for="harga">Harga</label>
                        <input type="number" class="form-control" id="input-harga-menu" name="harga" readonly>
                    </div>
                    <div class="form-group mb-2">
                        <label for="qty">Qty</label>

                        <div class="col-md-5">
                            <button class="btn btn-light border rounded-circle" onclick="totalClick(1)"><i class="fas fa-minus"></i></button>
                            <input id="totalClicks" class="form-control w-25 d-inline text-center" name="qty" onfocus="startCalc()" onblur="stopCalc()" required>
                            <button class="btn btn-light border rounded-circle" onclick="totalClick(-1)"><i class="fas fa-plus"></i></button>
                        </div>
                        <!-- <div class="form-group mb-2">
                            <label for="subtotal">Subtotal</label>
                            <input type="number" onfocus="startCalc()" onblur="stopCalc()" class="form-control" id="input-subtotal" name="subtotal" readonly>
                        </div> -->
                    </div>
                </div>
                <div class="modal-footer">
                    <button type="submit" class="btn btn-success">Save Changes</button>
                </div>
            </form>
        </div>
    </div>
</div>
