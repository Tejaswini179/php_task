<?php 

include("../libs/Smarty.class.php");
$smarty = new Smarty;

require("User_Connection.php");

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





$smarty -> assign('fname', $First_Name);
$smarty -> assign('lname',$Last_Name);
$smarty -> assign('dob',$DOB);
$smarty -> assign('email',$Email);
$smarty -> display('Update.tpl')
?>


