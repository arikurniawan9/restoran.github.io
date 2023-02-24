<?php
if($aksi=='index'){
    $data['trs']=$db->query($connect,"SELECT * FROM tbmenu");
    $helpers->template('Transaksi/transaksi',$data);
}

if($aksi=='pilih'){
    $idmenu=$uri[4];
    $data['pilih']=$db->query($connect,"
    SELECT * FROM tbmenu WHERE idmenu=$idmenu");
    $helpers->template('Transaksi/order',$data);
}