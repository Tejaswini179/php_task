
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
</head>
<body>

    <form action="Admin_Login.php" method="post">
    Admin Id : <input type="text" name="Adminid"> <br><br>
    Password : <input type="password" name ="password"><br><br>
    <a href="#">Forgot Password ?</a>
    <br><br>
    <a href="#"> Create an Account</a>
    <br><br>
    <input type="submit" name="signin">
   
    </form>


    <?php
     
     if(isset($_POST['signin'])){
       $query = "SELECT * FROM `admin_login` WHERE `Admin_iD` = '$_POST[Adminid]' AND `Admin_Password` = '$_POST[password]'";
       $res = mysqli_query($conn,$query);

       if(mysqli_num_rows($res) == 1){
         session_start();
         $_SESSION['AdminLoginId'] = $_POST['Adminid'];
         header("Location:Admin_Pannel.php");
       }
       else{
        echo "<script>alert('incorrect');</script>";
       }
     }
    ?>
    
</body>
</html>