<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Input Data Admin</title>
    <script src="js/bootstrap.min.js"></script>
    <link rel="stylesheet" href="css/bootstrap.min.css" />
    <link rel=”stylesheet” type=”text/css” href=”../assets/css/glyphicons.css”>
    
    <style>
        body {
         background: url('teknisi1.jpg') 
         no-repeat center center fixed;
            -webkit-background-size: cover;
            -moz-background-size: contain;
            background-size: fit;
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
        <div class="card shadow-lg p-3 mb-5 bg-body rounded  bg-opacity-75 ">
            <div class="alert alert-success " ><center>Pembayaran</center></div>
        </div>    
            
              <div class="card shadow-lg p-3 mb-5 bg-body rounded bg-opacity-75">
                    <form method="post" action="simpanpembayaran.php">
                        <table class="table col-5">
                            <tr>
                                <td>ID Tagihan</td>
                                <td>
                                    <input type="number" name="id_tagihan">
                                </td>
                            </tr>
                            <tr>
                                <td>Tanggal</td>
                                <td>
                                    <input type="date" name="tgl_pembayaran">
                                </td>
                            </tr>
                            <tr>
                                <td>Biaya Admin</td>
                                <td>
                                    <input type="number" name="biaya_admin" readonly value="5000"> 
                                </td>
                            </tr>
                            <tr>
                                <td>Total</td>
                                <td>
                                    
                                <?php   
                                
                                include "koneksi.php";
                                
                                $query = mysqli_query($koneksi, "SELECT * FROM  tarif WHERE tarifperkwh");
                                while($data = mysqli_fetch_array($query)){
                                    $hasil1 =$data['tarifperkwh'];
                                }
                                $query1 = mysqli_query($koneksi, "SELECT * FROM  denda WHERE jmlh_denda");
                                while($data = mysqli_fetch_array($query1)){
                                    $hasil2 =$data['jmlh_denda'];
                                }
                                $hasil3 =$hasil1 + $hasil2 + '5000';
                                echo "<input type='text' name='total_bayar' readonly value=$hasil3";
                                ?>
                                </td>
                            </tr>
                            <tr>
                                <td>ID Admin</td>
                                <td>
                                <?php    
                                include "koneksi.php";
                                $query = mysqli_query($koneksi, "SELECT * FROM admin order by rand() Limit 1");
                                while($data = mysqli_fetch_array($query)){
                                    echo "<input type='text' name='id_admin' readonly value=$data[id_admin]>";
                                }
                                ?>                                </td>
                                
                            </tr>
                            <td></td>
                                <td>
                                <button type="submit" value="submit" class="btn btn-primary bg-opacity-75">Submit</button>
                                <button type="reset" value="submit" class="btn btn-danger bg-opacity-75">Reset</button>
                                <td>
                                
                        </table>
                    </form>
                </div>
</div>
</body>
</html>