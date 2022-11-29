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
            <div class="alert alert-success " ><center>Denda</center></div>
        </div>    
            
              <div class="card shadow-lg p-3 mb-5 bg-body rounded bg-opacity-75">
                    <form method="post" action="simpandenda.php">
                        <table class="table col-5">
                            <tr>
                                <td>Jumlah Denda</td>
                                <td>
                                    <input type="number" name="jmlh_denda">
                                </td>
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