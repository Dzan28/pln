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
            <div class="alert alert-success " ><center>Tagihan</center></div>
        </div>    
            
              <div class="card shadow-lg p-3 mb-5 bg-body rounded bg-opacity-75">
                    <form method="post" action="simpantagihan.php">
                        <table class="table col-5">
                            <tr>
                                <td>ID Penggunaan</td>
                                <td>
                                <?php    
                                include "koneksi.php";
                                $query = mysqli_query($koneksi, "SELECT * FROM  penggunaan");
                                while($data = mysqli_fetch_array($query)){
                                    echo "<input type='text' name='id_penggunaan' readonly value=$data[id_penggunaan]>";
                                }
                                ?>                               
                                </td>
                            </tr>
                            <tr>
                            <tr>
                                <td>ID Tarif</td>
                                <td>
                                <?php    
                                include "koneksi.php";
                                $query = mysqli_query($koneksi, "SELECT * FROM  tarif");
                                while($data = mysqli_fetch_array($query)){
                                    echo "<input type='text' name='id_tarif' readonly value=$data[id_tarif]>";
                                }
                                ?>                               
                                </td>
                            </tr>
                            <tr>
                                <td>ID Denda</td>
                                <td>
                                <?php    
                                include "koneksi.php";
                                $query = mysqli_query($koneksi, "SELECT * FROM  denda");
                                while($data = mysqli_fetch_array($query)){
                                    echo "<input type='text' name='id_denda' readonly value=$data[id_denda]>";
                                }
                                ?>                               
                                </td>
                            </tr>
                            <tr>
                            <tr>
                                <td>Tanggal</td>
                                <td>
                                    <input type="date" name="tgl_tagihan">
                                </td>
                            </tr>
                            <tr>
                                <td>Daya Terpakai</td>
                                <td>
                                <?php    
                                include "koneksi.php"; 
                                $query = mysqli_query($koneksi, "SELECT * FROM  penggunaan");
                                while($data = mysqli_fetch_array($query)){
                                    $hasil =$data['meter_akhir'] - $data['meter_awal'];
                                    echo "<input type='text' name='jml_daya_terpakai' readonly value= $hasil>";
                                }
                                ?>
                                </td>
                            </tr>
                        
                            <td></td>
                                <td>
                                <button type="submit" value="submit" class="btn btn-primary ">Submit</button>
                                <button type="reset" value="submit" class="btn btn-danger ">Reset</button>
                                <td>
                                
                        </table>
                    </form>
                </div>
</div>
</body>
</html>