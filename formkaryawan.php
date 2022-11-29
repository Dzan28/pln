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
         background: url('admin.jpg') 
         no-repeat center center fixed;
            -webkit-background-size: cover;
            -moz-background-size: contain;
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
            <div class="alert alert-secondary">Input Data Karyawan</div>
        </div>    
            
              <div class="card shadow-lg p-3 mb-5 bg-body rounded bg-opacity-75">
                    <form method="post" action="simpankaryawan.php">
                        <table class="table col-5">
                            <!-- <tr>
                                <td>Id Admin</td>
                                <td>
                                    <input type="number" name="id_admin">
                                </td>
                            </tr> -->
                            <tr>
                                <td>Nama</td>
                                <td>
                                    <input type="text" name="nama_admin">
                                </td>
                            </tr>
                            <tr>
                                <td>Username</td>
                                <td>
                                    <input type="text" name="username">
                                </td>
                            </tr>
                            <tr>
                                <td>Password</td>
                                <td>
                                    <input type="text" name="password">
                                </td>
                            </tr>
                            <tr>
                                <td>Type</td>
                                <td>
                                <select class="form-select" aria-label="Default select example" >
                                 <option selected>Posisi</option>
                                 <?php
                                 include 'koneksi.php';
                                 $query = mysqli_query($koneksi, "SELECT * FROM  type_user WHERE nama= 'Admin'");
                                 while($data = mysqli_fetch_array($query)){
                                    echo "<option name=admin value=$data[type_user]> $data[nama] </option>";
                                 }
                                 ?>         
                                  <?php
                                 include 'koneksi.php';
                                 $query1 = mysqli_query($koneksi, "SELECT * FROM  type_user WHERE nama= 'Teknisi'");
                                 while($data = mysqli_fetch_array($query1)){
                                    echo "<option name=teknisi value=$data[type_user]> $data[nama] </option>";
                                 }
                                 ?>                           
                                </select>                                
                                </td>
                                
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