<?php 
require("User_Connection.php");

if(isset($_POST['submit'])){
    $First_Name =$_POST['First_Name'];
    $Last_Name = $_POST['Last_Name'];
    $DOB = $_POST['DOB'];
    $Email = $_POST['Email'];

    $sql = "insert into `crud` (First_Name, Last_Name, DOB, Email)
    values('$First_Name','$Last_Name','$DOB','$Email')";
    $result = mysqli_query($conn,$sql);

    if($result){
        echo "Data Insert
        ed Successfully !!!";
        header("Location: display.php");
    }
    else{
        die(mysqli_error($conn));
    }
}
?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <style>

        /* .container{
            border: 5px solid black;
            text-align: center;
            padding : 10px;
            padding-bottom : 2px;
            display : grid;
            grid-gap : 2px;
            margin-bottom:15px;
            margin : 15px;
        }
        input{
            margin-top:15px;
            font-size : 15px;
            padding : 5px;
            width : 500px;
           
          
        }
        
        #btn{
            margin-top:15px;
            width : 200px;
            background-color : gray;
            color : White;
            border : none;
        }
         */
        
      
    </style>

</head>
<body >
<div class="container">
<form action="User_Info.php" method="post">

First Name: <input type="text"  class="form-control" name="First_Name" placeholder="Please Enter Your First Name"><br>
Last Name: <input type="text"class="form-control" name="Last_Name" placeholder="Please Enter Your Last Name"><br>
Date Of Birth: <input type="date" class="form-control" name="DOB" /><br>
E-mail: <input type="text" class="form-control" name="Email" placeholder="Please Enter Your Email"><br>
<input class="btn btn-primary" type="submit">
<br><br>
</form>

</div>


</body>

</html>