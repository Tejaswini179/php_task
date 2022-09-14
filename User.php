
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
        echo "Data Inserted Successfully !!!";
        header("Location: display.php");
    }
    else{
        die(mysqli_error($conn));
    }
}
?>

<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet">

    <title>Crud Operation</title>
  </head>
  <body>
    
    <div class="container">

    <form method="post">

  <div class="mb-3">
    <label  class="form-label" name="First_Name">First Name</label>
    <input type="text" class="form-control"  >
    
  </div>
  <div class="mb-3">
    <label  class="form-label" name="Last_Name">Last Name</label>
    <input type="text" class="form-control">
  </div>

  <div class="mb-3">
    <label  class="form-label" name="DOB">Date Of Birth</label>
    <input type="date" class="form-control"  >
    
  </div>
  <div class="mb-3">
    <label  class="form-label" name="Email">Email</label>
    <input type="text" class="form-control">
  </div>


  <button type="submit" class="btn btn-primary">Submit</button>
</form>

    </div>
  </body>
</html>