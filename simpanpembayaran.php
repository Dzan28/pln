<?php

include "koneksi.php";

$id_tagihan = $_POST['id_tagihan'];
$tgl_pembayaran = $_POST['tgl_pembayaran'];
$biaya_admin = $_POST['biaya_admin'];
$total_bayar = $_POST['total_bayar'];
$id_admin = $_POST['id_admin'];



$sql = "INSERT INTO `pembayaran` (`id_pembayaran`, `id_tagihan`, `tgl_pembayaran`, `biaya_admin`, `total_bayar`,`id_admin`) VALUES ('','$id_tagihan','$tgl_pembayaran','$biaya_admin','$total_bayar','$id_admin')";
mysqli_query($koneksi, $sql);

header("location:formpembayaran.php");
?>