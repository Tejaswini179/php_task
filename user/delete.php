<?php
require("User_Connection.php");
if(isset($_GET['deleteid'])){
    $id = $_GET['deleteid'];

    $sql = "delete from `crud` where id=$id";
    $result = mysqli_query($conn,$sql);

    if($result){
        // echo "Deleted successfully !!!";
        header("Location: display.php");
    }else{
        die(mysqli_error($conn));
    }
}

?>