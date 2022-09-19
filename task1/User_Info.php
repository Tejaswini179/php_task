<?php 

include('../libs/Smarty.class.php');

$smarty = new Smarty;

$conn = new mysqli("localhost","root","","auth") or die("Unable To Connect");
if($conn) echo "Connected successfully";

if(isset($_POST['submit'])){
    $First_Name =$_POST['First_Name'];
    $Last_Name = $_POST['Last_Name'];
    $DOB = $_POST['DOB'];
    $Email = $_POST['Email'];

    $sql = "insert into `crud` (First_Name, Last_Name, DOB, Email)
    values('$First_Name','$Last_Name','$DOB','$Email')";
    $result = mysqli_query($conn,$sql);

    if($result){
        echo "Data Inserted Successfully !!!";
        header("Location: User_Info.php");
    }
    else{
        die(mysqli_error($conn));
    }
}

$smarty -> display('User_Info.tpl')
?>


