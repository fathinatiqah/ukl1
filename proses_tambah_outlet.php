<?php

if($_POST){
    $id_outlet=$_POST['id_outlet'];

    $nama=$_POST['nama'];

    $alamat=$_POST['alamat'];

    $kota= $_POST['kota'];

    $tlp=$_POST['tlp'];

    if(empty($nama)){

        echo "<script>alert('nama outlet tidak boleh kosong');location.href='tambah_outlet.php';</script>";


    } elseif(empty($alamat)){

        echo "<script>alert('alamat tidak boleh kosong');location.href='tambah_outlet.php';</script>";

    } elseif(empty($tlp)){

        echo "<script>alert('tlp tidak boleh kosong');location.href='tambah_outlet.php';</script>";

    } else {

        include "../koneksi.php";

        $insert=mysqli_query($conn,"insert into outlet (nama, alamat, kota, tlp) value ('".$nama."','".$alamat."','".$kota."','".$tlp."')") or die(mysqli_error($conn));

        if($insert){

            echo "<script>alert('Sukses menambahkan outlet');location.href='data_outlet.php';</script>";

        } else {

            echo "<script>alert('Gagal menambahkan outlet');location.href='tambah_outlet.php';</script>";

        }

    }

}

?>