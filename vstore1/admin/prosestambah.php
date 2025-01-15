<?php

include '../koneksi.php';

$namaproduk= $_POST['namaproduk'];
$harga= $_POST['harga'];
$deskripsi= $_POST['deskripsi'];
$foto=$_FILES['foto'];
$lokasi_tmp=$_FILES['foto']['tmp_name'];
$namabaru = time().$foto["name"];

$query = mysqli_query($koneksi, "insert into produk values(null, '$namaproduk', '$harga', '$deskripsi', '$namabaru')");

move_uploaded_file($lokasi_tmp,"../foto/$namabaru");