<?php

include "koneksi.php";

$id_penggunaan = $_POST['id_penggunaan'];
$id_tarif = $_POST['id_tarif'];
$id_denda = $_POST['id_denda'];
$tgl_tagihan = $_POST['tgl_tagihan'];
$jml_daya_terpakai = $_POST['jml_daya_terpakai'];



$sql = "INSERT INTO `tagihan` (`id_tagihan`, `id_penggunaan`, `id_tarif`, `id_denda`, `tgl_tagihan`,`jml_daya_terpakai`) VALUES ('','$id_penggunaan','$id_tarif','$id_denda','$tgl_tagihan','$jml_daya_terpakai')";
mysqli_query($koneksi, $sql);

header("location:formtagihan.php");
?>