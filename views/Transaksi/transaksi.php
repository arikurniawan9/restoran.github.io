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
