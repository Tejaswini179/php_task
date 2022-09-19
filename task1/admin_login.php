<?php
error_reporting (E_ALL ^ E_NOTICE);

include('../libs/Smarty.class.php');

// create object
$smarty = new Smarty;
$smarty -> assign('title','User Information Form');


$conn = new mysqli("localhost","root","","auth") or die("Unable To Connect");
if($conn) echo "Connected successfully";

$sql ="INSERT INTO user(First_Name,Last_Name,DOB,Email) VALUES('".$_POST ['First_Name']."','".$_POST['Last_Name']."','".$_POST['DOB']."','".$_POST['Email']."')";
$conn ->query($sql);


if(isset($_POST['signin'])){
    $query = "SELECT * FROM `admin_login` WHERE `Admin_iD` = '$_POST[Adminid]' AND `Admin_Password` = '$_POST[password]'";
    $res = mysqli_query($conn,$query);

    if(mysqli_num_rows($res) == 1){
      session_start();
      $_SESSION['AdminLoginId'] = $_POST['Adminid'];
      header("Location:display.php");
    }
    else{
     echo "<script>alert('incorrect Id or Password');</script>";
    }
  }




// display it
// $smarty->display('task1.tpl');
$smarty->display('admin_login.tpl');
?>