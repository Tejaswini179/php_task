<?php 
require("User_Connection.php");

// if(isset($_GET['updateid'])){
//     $id = $_GET['updateid'];
//     var_dump($id);
// }

//     // if($result){
//         // echo "Deleted successfully !!!";
//        // header("Location: display.php");
//     //}
//     else{
//         echo "not updated";
//         die(mysqli_error($conn));
    
// }

$id = $_GET['editid'];
// $id = 7;
var_dump((int)$id);
$sql = "Select * from `crud` where id=$id";
$result = mysqli_query($conn, $sql);
$row = mysqli_fetch_assoc($result);

// $id = $row['id'];
$First_Name = $row['First_Name'];
$Last_Name = $row['Last_Name'];
$DOB = $row['DOB'];
$Email = $row['Email'];

if(isset($_POST['submit'])){
    $First_Name =$_POST['First_Name'];
    $Last_Name = $_POST['Last_Name'];
    $DOB = $_POST['DOB'];
    $Email = $_POST['Email'];

    $sql = "update `crud` set id=$id,First_Name='$First_Name',Last_Name='$Last_Name', DOB='$DOB', Email='$Email' where id=$id ";

    $result = mysqli_query($conn,$sql);

    if($result){
        echo "Data Inserted Successfully !!!";
        header("location: display.php");
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


</head>
<body >
<div class="container">
<form method="post">

First Name: <input type="text"  class="form-control" name="First_Name" placeholder="Please Enter Your First Name" value=<?php echo $First_Name;?>><br>
Last Name: <input type="text"class="form-control" name="Last_Name" placeholder="Please Enter Your Last Name" value=<?php echo $Last_Name;?>><br>
Date Of Birth: <input type="text" class="form-control" name="DOB"  value=<?php echo $DOB;?>/><br>
E-mail: <input type="text" class="form-control" name="Email" placeholder="Please Enter Your Email" value=<?php echo $Email;?>><br>

<input class="btn btn-primary" type="submit" name="submit">

<!-- <a href="Admin_Login.php"><input class="btn btn-primary" type="text" value="Admin Login"></a> -->
<br><br>
</form>

</div>


</body>

</html>