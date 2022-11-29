<?php

include "koneksi.php";

// $id_pelanggan = $_POST['id_pelanggan'];
$nomor_kwh = $_POST['nomor_kwh'];
$nama_pelanggan = $_POST['nama_pelanggan'];
$alamat = $_POST['alamat'];
$type_user = $_POST['type_user'];



$sql = "INSERT INTO `pelanggan` (`id_pelanggan`, `nomor_kwh`, `nama_pelanggan`, `alamat`,`type_user`) VALUES ('','$nomor_kwh','$nama_pelanggan','$alamat','$type_user')";
mysqli_query($koneksi, $sql);

header("location:formpelanggan.php");
?>