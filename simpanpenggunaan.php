<?php

include "koneksi.php";

$bulan = $_POST['bulan'];
$tahun = $_POST['tahun'];
$meter_awal = $_POST['meter_awal'];
$meter_akhir = $_POST['meter_akhir'];
$id_pelanggan = $_POST['id_pelanggan'];



$sql = "INSERT INTO `penggunaan` (`id_penggunaan`, `bulan`, `tahun`, `meter_awal`, `meter_akhir`,`id_pelanggan`) VALUES ('','$bulan','$tahun','$meter_awal','$meter_akhir','$id_pelanggan')";
mysqli_query($koneksi, $sql);

header("location:formpenggunaan.php");
?>