<?php 

error_reporting (E_ALL ^ E_NOTICE);

$conn = new mysqli("localhost","root","","auth") or die("Unable To Connect");
if($conn) echo "Connected successfully";

?>
