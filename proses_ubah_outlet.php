<?php

if($_POST){
    $id_outlet=$_POST['id_outlet'];

    $nama=$_POST['nama'];

    $alamat=$_POST['alamat'];

    $kota= $_POST['kota'];

    $tlp=$_POST['tlp'];

    if(empty($nama)){

        echo "<script>alert('nama outlet tidak boleh kosong');location.href='data_outlet.php';</script>";


    } elseif(empty($alamat)){

        echo "<script>alert('alamat tidak boleh kosong');location.href='data_outlet.php';</script>";

    } elseif(empty($kota)){

        echo "<script>alert('kota tidak boleh kosong');location.href='data_outlet.php';</script>";

    } elseif(empty($tlp)){

        echo "<script>alert('telepon tidak boleh kosong');location.href='data_outlet.php';</script>";

     } else {
        
        include "koneksi.php";
        $update=mysqli_query($conn, "UPDATE outlet SET nama='".$nama."', alamat='".$alamat."', kota='".$kota."',tlp='".$tlp."' where id_outlet='$id_outlet'") or die(mysqli_error($conn));
        if($update){

            echo "<script>alert('Sukses update outlet');location.href='data_outlet.php';</script>";
    
        } else {
    
            echo "<script>alert('Gagal update outlet');location.href='ubah_outlet.php';</script>";
        }
    }
}
?>