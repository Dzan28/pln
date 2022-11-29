<?php

include "koneksi.php";

// $id_admin = $_POST['id_admin'];
$username = $_POST['username'];
$password = $_POST['password'];
$nama = $_POST['nama_admin'];
$admin = $_POST['admin'];
$teknisi = $_POST['teknisi'];




$sql = "INSERT INTO `admin` (`id_admin`, `username`, `password`, `nama_admin`,`type_user`) VALUES ('','$username','$password','$nama','$admin')";
mysqli_query($koneksi, $sql) or die(mysqli_error($koneksi));

$sql2 = "INSERT INTO `teknisi` (`id_teknisi`, `username`, `password`, `nama_teknisi`,`type_user`) VALUES ('','$username','$password','$nama','$teknisi')";
mysqli_query($koneksi, $sql2) or dir(mysqli_error($koneksi));

header("location:formkaryawan.php");
?>