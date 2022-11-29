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
            <div class="alert alert-success " ><center>Penggunaan</center></div>
        </div>    
            
              <div class="card shadow-lg p-3 mb-5 bg-body rounded bg-opacity-75">
                    <form method="post" action="simpanpenggunaan.php">
                        <table class="table col-5">
                            <tr>
                                <td>Bulan</td>
                                <td>
                                    <input type="number" name="bulan">
                                </td>
                            </tr>
                            <tr>
                                <td>Tahun</td>
                                <td>
                                    <input type="year" name="tahun">
                                </td>
                            </tr>
                            <tr>
                                <td>Meter Awal</td>
                                <td>
                                    <input type="number" name="meter_awal"> 
                                </td>
                            </tr>
                            <tr>
                                <td>Meter Akhir</td>
                                <td>
                                    <input type="number" name="meter_akhir"> 
                                </td>
                            </tr>
                            <tr>
                                <td>ID Pelanggan</td>
                                <td>
                                <?php    
                                include "koneksi.php";
                                $query = mysqli_query($koneksi, "SELECT * FROM pelanggan limit 1");
                                while($data = mysqli_fetch_array($query)){
                                    echo "<input type='text' name='id_pelanggan' value=$data[id_pelanggan]>";
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