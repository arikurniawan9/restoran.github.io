<?php 

if($aksi=='index'){
    $helpers->template('Transaksi/cart',$data);
}
if($aksi=='create'){
    $id=_POST['idmenu'];
    $namamenu=$_POST['namamenu'];
    $harga=$_POST['harga'];
    $qty=$_POST['qty'];
    $subtotal=_POST['subtotal'];
    $total=_POST['total'];

    $menu=array($namamenu,$harga,$qty,$subtotal,$total);
    $_SESSION['namamenu']=$menu;

    header('location:'.$base_url.'cart');
}