<?php
if($aksi=='index'){
    $helpers->load_view('login/index');
}
if($aksi=='login'){
    $username=$_POST['username'];
    $password=$_POST['password'];
    $cek=$db->query($connect,"
    SELECT * FROM tuser WHERE username='$username' AND password='$password'");
    if(count($cek)>0){
        $_SESSION['iduser']=$cek[0]['iduser'];
        $_SESSION['username']=$cek[1]['username'];
        header('location:'.$base_url);
    }else{
        echo"SELECT * FROM tuser WHERE username='$username' AND password='$password'";
        header('location:'.$base_url.'login');
    }
}
if($aksi=='logout'){
    unset($_SESSION['iduser']);
    header('location:'.$base_url);
}