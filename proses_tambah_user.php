<?php

if($_POST){
    $id_user=$_POST['id_user'];

    $nama=$_POST['nama'];

    $username=$_POST['username'];

    $password= $_POST['password'];

    $level=$_POST['level'];

    if(empty($nama)){

        echo "<script>alert('nama user tidak boleh kosong');location.href='tambah_user.php';</script>";


    } elseif(empty($username)){

        echo "<script>alert('username tidak boleh kosong');location.href='tambah_user.php';</script>";

    } elseif(empty($password)){

        echo "<script>alert('password tidak boleh kosong');location.href='tambah_user.php';</script>";

    } else {

        include "../koneksi.php";

        $insert=mysqli_query($conn,"insert into user (nama,username, password, level) value ('".$nama."','".$username."','".md5($password)."','".$level."')") or die(mysqli_error($conn));

        if($insert){

            echo "<script>alert('Sukses menambahkan user');location.href='data_user.php';</script>";

        } else {

            echo "<script>alert('Gagal menambahkan user');location.href='tambah_user.php';</script>";

        }

    }

}

?>