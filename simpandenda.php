<?php

include "koneksi.php";

$jmlh_denda = $_POST['jmlh_denda'];




$sql = "INSERT INTO `denda` (`id_denda`, `jmlh_denda`) VALUES ('','$jmlh_denda')";
mysqli_query($koneksi, $sql);

header("location:formdenda.php");
?>