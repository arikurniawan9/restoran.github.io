<?php
if($aksi=='index'){
    $data['menu']=$db->query($connect,"SELECT * FROM tbmenu");
    $helpers->template('Menu/listmenu',$data);
}
if($aksi=='create'){
    $data['menu']=$db->query($connect,"SELECT * FROM tbmenu");
    $helpers->template('Menu/addmenu',$data);
}
if($aksi=='save'){
    $namamenu=$_POST['namamenu'];
    $jenismenu=$_POST['jenismenu'];
    $harga=$_POST['harga'];
    $stok=$_POST['stok'];

    $ekstensi_diperbolehkan=array('png','jpg','jpeg','jfif');
    $namagambar=$_FILES['gambarmenu']['name'];
    $x=explode('.',$namagambar);
    $ekstensi=strtolower(end($x));
    $ukuran=$_FILES['gambarmenu']['size'];
    $file_tmp=$_FILES['gambarmenu']['tmp_name'];

    
    if(in_array($ekstensi, $ekstensi_diperbolehkan)===true){
        if($ukuran<1044070){
            move_uploaded_file($file_tmp,'assets/img/'.$namagambar);
            $simpan=$db->qry($connect,"INSERT INTO tbmenu VALUES('','$namamenu','$jenismenu','$harga','$stok','$namagambar')");
        }
    }
    if($simpan)
    header('location:' .$base_url.'menu');
    else{
        header('location:' .$base_url.'menu/create');
    }
}
if($aksi=='hapus'){
    $idmenu=$uri[4];
    $hapus=$db->qry($connect,"DELETE FROM tbmenu WHERE idmenu='$idmenu'");
    if($hapus)
    header('location:'.$base_url.'menu');
    else{
        header('location:'.$base_url.'menu/hapus');
    }
}
if($aksi=='edit'){
    $menu=$uri[4];
    $data['menu']=$db->query($connect,"SELECT * FROM tbmenu");
    $helpers->template('menu/editmenu.php',$data);
}
if ($aksi=='ubah'){
    $idmenu=$uri[4];
    $namamenu=$_POST['namamenu'];
    $jenismenu=$_POST['jenismenu'];
    $harga=$_POST['harga'];
    $stok=$_POST['stok'];
    $gambermenu=$_POST['gambarmenu'];
    $ubah=$db->qry($connect,"UPDATE tbmenu SET namamenu='$namamenu',jenismenu='$jenismenu', harga='$harga',stok='$stok', gambarmenu='$gambarmenu' WHERE idmenu='$idmenu'");
    if($ubah)
        header('location:'.$base_url.'menu');
    else{
        header('location:'.$base_url.'menu/edit');
    }
}