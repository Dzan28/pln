<?php

include "koneksi.php";

$username = $_POST['username'];
$password = $_POST['password'];

$ambil = mysqli_query ($koneksi,"SELECT * FROM admin where username='$username' and password='$password'");
$cek = mysqli_num_rows ($ambil);
if($cek==1){
    header("location:hasillogin.php");
}
else{
    ?>
    <script language="JavaScript">
        alert('Oops! Username atau Password tidak sesuai ...');
        document.location='loginadmin.php';
    </script>
<?php
}


?>