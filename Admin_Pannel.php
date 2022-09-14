
<?php 
require("User_Connection.php");

?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style>
    th{
            background-color : gray; 
        }

        .container-table{
            text-align: center;
         
        }</style>
</head>
<body>
    <h1>Hey You Log In successfully</h1>
    <div class="container-table">
        <table>
            <tr>
                <th>First Name</th>
                <th>Last Name</th>
                <th>Date Of Birth</th>
                <th>Email</th>
            </tr>
  
            <?php
           
                while($rows=$result->fetch_assoc())
                {
            ?>
            <tr>
           
                <td><?php echo $rows['First_Name'];?></td>
                <td><?php echo $rows['Last_Name'];?></td>
                <td><?php echo $rows['DOB'];?></td>
                <td><?php echo $rows['Email'];?></td>
            </tr>
            <?php
                }
            ?>
        </table>
        </div>
</body>
</html>