<?php

if($_POST){
    $id_user=$_POST['id_user'];

    $nama=$_POST['nama'];

    $username=$_POST['username'];

    $password= $_POST['password'];

    $level=$_POST['level'];

    if(empty($nama)){

        echo "<script>alert('nama user tidak boleh kosong');location.href='data_user.php';</script>";


    } elseif(empty($username)){

        echo "<script>alert('username tidak boleh kosong');location.href='data_user.php';</script>";

    } elseif(empty($password)){

        include "../koneksi.php";
        $update=mysqli_query($conn, "UPDATE user SET nama='".$nama."', username='".$username."', level ='".$level."' where id_user='$id_user'") or die(mysqli_error($conn));
        if($update){

            echo "<script>alert('Sukses update user');location.href='data_user.php';</script>";
    
        } else {
    
            echo "<script>alert('Gagal update user');location.href='ubah_user.php';</script>";
    
        }
    } else {
        include "../koneksi.php";
        $update=mysqli_query($conn, "UPDATE user SET nama='".$nama."', username='".$username."', password='".md5($password)."', level ='".$level."' where id_user='$id_user'") or die(mysqli_error($conn));
    }if($update){

        echo "<script>alert('Sukses update user with pw');location.href='data_user.php';</script>";

    } else {

        echo "<script>alert('Gagal update user with pw');location.href='ubah_user.php';</script>";

    }
}
?>