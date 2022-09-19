<?php
/* Smarty version 4.2.0, created on 2022-09-19 10:03:47
  from 'C:\wamp64\www\smarty-4.2.0\task1\templates\User_Info.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.2.0',
  'unifunc' => 'content_63283e83dae216_22344810',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'b86ff6f98db77755b1caea5a7742329177d4ce2f' => 
    array (
      0 => 'C:\\wamp64\\www\\smarty-4.2.0\\task1\\templates\\User_Info.tpl',
      1 => 1663581606,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_63283e83dae216_22344810 (Smarty_Internal_Template $_smarty_tpl) {
?><!DOCTYPE html>
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

First Name: <input type="text"  class="form-control" name="First_Name" placeholder="Please Enter Your First Name"><br>
Last Name: <input type="text"class="form-control" name="Last_Name" placeholder="Please Enter Your Last Name"><br>
Date Of Birth: <input type="date" class="form-control" name="DOB" /><br>
E-mail: <input type="text" class="form-control" name="Email" placeholder="Please Enter Your Email"><br>
<input class="btn btn-primary" type="submit" name="submit">

<a href="Admin_Login.php"><input class="btn btn-primary" type="text" value="Admin Login"></a>
<br><br>
</form>

</div>


</body>

</html><?php }
}
