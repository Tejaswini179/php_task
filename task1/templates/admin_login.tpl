
 <?php 
require('connection.php');
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
</head>
<body>
<div class="container">
    <form action="admin_login.php" method="post" class="my-5">
    Admin Id : <input type="text" name="Adminid"> <br><br>
    Password : <input type="password" name ="password"><br><br>
  
    <a href="display.php"><input  class="btn btn-primary my-5" type="submit" name="signin"></a>
   
    </form>


    </div>
</body>
</html>