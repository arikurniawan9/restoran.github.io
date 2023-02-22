<section class="home">
<div class="text"> List Order</div>

    <div class="container">
    <table border="1">
        <thead>
            <th bgcolor="#DDD">No</th>
            <th bgcolor="#DDD">Nama Menu</th>
            <th bgcolor="#DDD">Harga</th>
            <th bgcolor="#DDD">Qty</th>
            <th bgcolor="#DDD">Subtotal</th>
        </thead>
        <?php
        $subtotal=0;
        $total=0; 
        $no=1;
        foreach ($_SESSION as $menu) { 
        $harga=0;
        $qty=0;
        echo"<tbody>";
            echo"<td>".($no++)."</td>";
            foreach ($menu as $key => $value) {
                if($key == 2){
                    echo"<td>".$value."</td>";
                    $qty=$value;
                }else if ($key == 1){
                    echo"<td>".$value."</td>";
                    $harga=$value;
                }else if ($key == 0){
                    echo"<td>".$value."</td>";
                }
            }
            $subtotal=($harga*$qty);
            $total=($total+$subtotal);
            echo"<td>".$subtotal."</td>";
        echo"</tbody>";
        } 
        ?>
    </table>
</div>
</div>