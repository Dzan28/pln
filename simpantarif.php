<?php

include "koneksi.php";

$daya = $_POST['daya'];
$tarifperkwh = $_POST['tarifperkwh'];




$sql = "INSERT INTO `tarif` (`id_tarif`, `daya`, `tarifperkwh`) VALUES ('','$daya','$tarifperkwh')";
mysqli_query($koneksi, $sql);

header("location:formtarif.php");
?>