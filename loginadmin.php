<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title></title>
    <script src="js/bootstrap.min.js"></script>
    <link rel="stylesheet" href="css/bootstrap.min.css" />
    
</head>
<body>
    <br>
    <br>
    <br>
    <br>
    <div class="container col-4">
        <div class="card shadow-lg p-3 mb-5 bg-body rounded">
            <div class="alert alert-secondary">Login Admin</div>
        </div>    
            
              <div class="card shadow-lg p-3 mb-5 bg-body rounded">
                    <form method="post" action="aksiloginadmin.php">
                        <table class="table col-5">
                            <tr>
                                <td>Username</td>
                                <td>
                                    <input type="text" name="username">
                                </td>
                            </tr>
                            <tr>
                                <td>Password</td>
                                <td>
                                    <input type="password" name="password">
                                </td>
                            </tr>
                           
                            <tr class="shadow-sm p-3 mb-5 bg-body rounded">
                                <td></td>
                                <td>
                                <button type="submit" value="submit" class="btn btn-primary ">Submit</button>
                                </td>
                            </tr>
                        </table>
                    </form>
                </div>
</div>
</body>
</html>