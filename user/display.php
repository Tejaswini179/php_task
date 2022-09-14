
<?php
require("User_Connection.php");
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Crud Operation</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
</head>

<body>

<div class="container">
<button class="btn btn-primary my-5"> <a href="User_Info.php" class="text-light" > Add User </a></button>
</div>

<div class="container">

<table class="table">
  <thead>
    <tr>
    <th scope="col">Sr. no</th>
      <th scope="col">First Name</th>
      <th scope="col">Last Name</th>
      <th scope="col">Date Of Birth</th>
      <th scope="col">Email</th>
      <th scope="col">Operations</th>
    </tr>
  </thead>
  <tbody>

    <?php
    
      $sql = "Select * from `crud`";
      $result = mysqli_query($conn,$sql);

      if($result){
        while($row = mysqli_fetch_assoc($result)){
            $id = $row['id'];
            $First_Name = $row['First_Name'];
            $Last_Name = $row['Last_Name'];
            $DOB = $row['DOB'];
            $Email = $row['Email'];

            echo '<tr>
      <td>'.$id.'</td>
      <td>'.$First_Name.'</td>
      <td>'.$Last_Name.'</td>
      <td>'.$DOB.'</td>
      <td>'.$Email.'</td>
      <td>
        <button ><a href="update.php?updateid ='.$id.'" class="btn btn-success">Update</a></button>
        <button><a href="delete.php?deleteid='.$id.' " class="btn btn-danger">Delete</a></button>
    </td>
   

    </tr>';
        }
      }

    ?>

    
  </tbody>
</table>

</div>


</body>
</html>