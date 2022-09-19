<?php
    include('../libs/Smarty.class.php');


    // create object
    $smarty = new Smarty;

     
    $smarty->display('display.tpl');
$conn = new mysqli("localhost","root","","auth") or die("Unable To Connect");
// if($conn) echo "Connected successfully";


    $sql = "Select * from `crud`";
    $result = mysqli_query($conn,$sql);

    if($result){
      while($row = mysqli_fetch_assoc($result)){
          $id = $row['id'];
          $First_Name = $row['First_Name'];
          $Last_Name = $row['Last_Name'];
          $DOB = $row['DOB'];
          $Email = $row['Email'];

          

          echo '
          <div class="container">
          <table class="table">
          <tbody>

          <tr>
    <td>'.$id.'</td>
    <td>'.$First_Name.'</td>
    <td>'.$Last_Name.'</td>
    <td>'.$DOB.'</td>
    <td>'.$Email.'</td>
    <td>
      <button ><a href="update.php?editid='.$id.'" class="btn btn-success">Update</a></button>
      <button><a href="delete.php?deleteid='.$id.' " class="btn btn-danger">Delete</a></button>
  </td>
 <br>
 <br>

  </tr>
  
    
    
  </tbody>
  </table>
  </div>';
      }
    }

  ?> 
