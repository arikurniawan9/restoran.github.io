<?php
if($aksi=='index'){
    $data['idtrs']=$db->query($connect,"
    SELECT max(right(idtransaksi,4)) as idtrs
    FROM tbtransaksi");
    $helpers->template('Transaksi/keranjang',$data);
}
if($aksi=='create'){
    $id=$_POST['idmenu'];
    $nama=$_POST['namamenu'];
    $harga=$_POST['harga'];
    $qty=$_POST['qty'];
    $subtotal=$_POST['subtotal'];
    $total=$_POST['total'];

    $menu=array($id,$nama,$harga,$qty,$subtotal,$total);
    $_SESSION[$nama]=$menu;

    header('location:'.$base_url.'cart');
}
if($aksi=='save'){
    $idtrs=$_POST['idtransaksi'];
    $tgl=$_POST['tgltransaksi'];
    //$idmenu=$_POST['idmenu'];
    $qty=$_POST['qty'];
    $harga=$_POST['harga'];
    $subtotal=$_POST['subtotal'];
    $total=$_POST['totalharga'];
    $bayar=$_POST['bayar'];
    $ket="Success";
    $save=$db->qry($connect,"INSERT INTO tbtransaksi
          VALUES('$idtrs','$tgl','$total','$bayar','$ket')");
    $simpan=$db->qry($connect,"INSERT INTO tmdetailtrsk
          VALUES('','$idtrs','','$qty','$harga')");
}