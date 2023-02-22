<?php
if($aksi=='index'){
    $data['trs']=$db->query($connect, "SELECT * FROM tbmenu");
    $helpers->template('Transaksi/transaksi',$data);
}
if($aksi=='cart'){
    $helpers->template('Transaksi/cart');
}
if($aksi=='create'){
    $namamenu=$_POST['namamenu'];
    $harga=$_POST['harga'];
    $qty=$_POST['qty'];
    $subtotal=_POST['subtotal'];
    $total=_POST['total'];

    $menu=array($namamenu,$harga,$qty,$subtotal,$total);
    $_SESSION['namamenu']=$menu;

    header('location:'.$base_url.'transaksi/cart');
}
if($aksi=='pilih'){
    $idmenu=$uri[4];
    $data['pilih']=$db->query($connect,"SELECT * FROM tbmenu WHERE idmenu=$idmenu");
    $helpers->template('Transaksi/order',$data);
}