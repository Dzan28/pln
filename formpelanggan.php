<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Input Data Admin</title>
    <script src="js/bootstrap.min.js"></script>
    <link rel="stylesheet" href="css/bootstrap.min.css" />
    <style>
        body {
         background: url('kabel.jpg') 
         no-repeat center center fixed;
            -webkit-background-size: cover;
            -moz-background-size: cover;
            background-size: cover;
            -o-background-size: cover;
        }
    </style>
</head>
<body>
    <br>
    <br>
    <br>
    <br>
    <div class="container col-4">
        <div class="card shadow-lg p-3 mb-5 bg-body rounded bg-opacity-75">
            <div class="alert alert-primary"><center>Registrasi Pelanggan</center></div>
        </div>    
            
              <div class="card shadow-lg p-3 mb-5 bg-body rounded bg-opacity-75">
                    <form method="post" action="simpanpelanggan.php">
                        <table class="table col-5">
                            <!-- <tr>
                                <td>Id Pelanggan</td>
                                <td>
                                    <input type="number" name="id_pelanggan">
                                </td>
                            </tr> -->
                            <tr>
                                <td>NO KWH</td>
                                <td>
                                    <input type="text" name="nomor_kwh">
                                </td>
                            </tr>
                            <tr>
                                <td>Nama</td>
                                <td>
                                    <input type="text" name="nama_pelanggan">
                                </td>
                            </tr>
                            <tr>
                                <td>Alamat</td>
                                <td>
                                    <input type="text" name="alamat">
                                </td>
                            </tr>
                            <tr>
                                <fieldset disabled>
                                <td>Type</td>
                                <td>
                                <?php    
                                include "koneksi.php";
                                $query = mysqli_query($koneksi, "SELECT * FROM  type_user WHERE nama= 'Pelanggan'");
                                while($data = mysqli_fetch_array($query)){
                                    echo "<input type='text' name='type_user' readonly value=$data[nama]>";
                                }
                                ?>
                                </td>
                                </fieldset>
                            </tr>
                           
                                <td></td>
                                <td>
                                <button type="submit" value="submit" class="btn btn-primary bg-opacity-75">Submit</button>
                                <button type="reset" value="submit" class="btn btn-danger bg-opacity-75">Reset</button>
                                </td>
                            
                               
                        </table>
                    </form>
                </div>
</div>
</body>
</html>