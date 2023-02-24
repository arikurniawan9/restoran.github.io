<main class="col-md-9 ms-sm-auto col-lg-10 px-md-4">
<div class="text"> List Order</div>

    <div class="container">
        <?php
            foreach ($data['idtrs'] as $kode) {
                if($kode>0){
                    $no=((int)$kode['idtrs'])+1;
                    $kd=sprintf("%04s",$no);
                }else{
                    $kd=0001;
                }
               date_default_timezone_set('asia/jakarta');
               $idtrs=date('mdy').$kd; 
            }
        ?>
        <form action="<?=$base_url?>cart/save" method="post">
            <input type="text" name="idtransaksi" value="<?=$idtrs?>" hidden>
            <input type="text" name="tgltransaksi" value="<?= date('Y-m-d')?>" hidden>
    <table border="1">
        <thead>
            <th bgcolor="#DDD">No</th>
            <th bgcolor="#DDD">Nama Menu</th>
            <th bgcolor="#DDD">Harga</th>
            <th bgcolor="#DDD">Qty</th>
            <th bgcolor="#DDD">Subtotal</th>
        </thead>
        <?php
                $total = 0;
                $subtotal = 0;
                $no = 1;
                foreach ($_SESSION as $menu) {
                    $harga = 0;
                    $nama=0;
                    $qty = 0;
                    
                    echo "<tbody>";
                    echo "<td>" . ($no++) . "</td>";
                    
                    foreach ($menu as $key => $value) {
                        if ($key == 3) {
                            echo "<td>" . $value . "</td>";
                            $qty = $value;
                            echo "<input type='text' name='qty' value='$qty' hidden>";
                        } else if ($key == 2) {
                            echo "<td>" . $value . "</td>";
                            $harga = $value;
                            echo "<input type='text' name='harga' value='$harga' hidden>";
                        } else if ($key == 1) {
                            echo "<td>" . $value . "</td>";
                            $nama=$value;
                        }else if ($key == 0) {
                            
                        }
                    }
                    $subtotal = ($qty*$harga) ;
                    $total = ($total + $subtotal);
                    echo "<td>" . $subtotal . "</td>";
                    echo "<input type='text' name='subtotal' value='$subtotal' hidden>";
                    echo "</tbody>";
                    
                }
        ?>
    </table>
    <div>
        <p><h2> Bayar:   <?= 'Rp ' . number_format( $total)  ?></h2></p>
        <input type="text" name="totalharga" value="<?= $total?>" hidden>
        <input type="text" name="bayar" value="<?= $total?>" hidden>
        <button type="submit">Bayar</button>
    </div>
    </form>
</div>
            </main>