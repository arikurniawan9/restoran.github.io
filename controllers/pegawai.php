<?php
if($aksi=='index'){
    $data['pegawai']=$db->query($connect,"SELECT tbpegawai.namapegawai,alamat,notelp,idpegawai,tuser.hakakses FROM tbpegawai JOIN tuser ON tbpegawai.iduser=tuser.iduser");
    $helpers->template('Pegawai/listpegawai',$data);
}
if($aksi=='create'){
    $data['user']=$db->query($connect,"SELECT * FROM tuser");
    $helpers->template('Pegawai/addpegawai',$data);
}
if($aksi=='save'){
    $namapegawai=$_POST['namapegawai'];
    $username=$_POST['username'];
    $password=$_POST['password'];
    $alamat=$_POST['alamat'];
    $notelp=$_POST['notelp'];
    $iduser=$_POST['iduser'];
    $simpan=$db->qry($connect,"INSERT INTO tbpegawai VALUES('','$namapegawai','$username','$password','$alamat','$notelp','$iduser')");
    if($simpan)
    header('location:' .$base_url.'pegawai');
    else{
        header('location:' .$base_url.'pegawai/create');
    }
}
if($aksi=='hapus'){
    $idpegawai=$uri[4];
    $hapus=$db->qry($connect,"DELETE FROM tbpegawai WHERE idpegawai='$idpegawai'");
    if($hapus)
    header('location:'.$base_url.'pegawai');
    else{
        header('location:'.$base_url.'pegawai/hapus');
    }
}
if($aksi=='edit'){
	$idpegawai=$uri[4];
    $data['user']=$db->query($connect,"SELECT * FROM tuser");
	$data['pegawai']=$db->query($connect,"SELECT * FROM tbpegawai JOIN tuser ON tbpegawai.iduser=tuser.iduser where tbpegawai.idpegawai='$idpegawai'");
	$helpers->template('Pegawai/editpegawai',$data);
}
if ($aksi=='ubah'){
    $idpegawai=$uri[4];
    $namapegawai=$_POST['namapegawai'];
    $alamat=$_POST['alamat'];
    $notelp=$_POST['notelp'];
    $iduser=$_POST['iduser'];
    $ubah=$db->qry($connect,"UPDATE tbpegawai SET namapegawai='$namapegawai',alamat='$alamat', notelp='$notelp',iduser='$iduser' WHERE idpegawai='$idpegawai'");
    if($ubah)
        header('location:'.$base_url.'pegawai');
    else{
        header('location:'.$base_url.'pegawai/edit');
    }
}