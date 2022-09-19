<?php
/* Smarty version 4.2.0, created on 2022-09-19 13:19:48
  from 'C:\wamp64\www\smarty-4.2.0\task1\templates\Update.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.2.0',
  'unifunc' => 'content_63286c7495f303_51469611',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '3064f04441d730bd47c968a35b63d11fc9716e7b' => 
    array (
      0 => 'C:\\wamp64\\www\\smarty-4.2.0\\task1\\templates\\Update.tpl',
      1 => 1663593586,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_63286c7495f303_51469611 (Smarty_Internal_Template $_smarty_tpl) {
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


    First Name: <input type="text"  class="form-control" name="First_Name" placeholder="Please Enter Your First Name" value=<?php echo $_smarty_tpl->tpl_vars['fname']->value;?>
><br>
    Last Name: <input type="text"class="form-control" name="Last_Name" placeholder="Please Enter Your Last Name" value=<?php echo $_smarty_tpl->tpl_vars['lname']->value;?>
><br>
    Date Of Birth: <input type="text" class="form-control" name="DOB"  value=<?php echo $_smarty_tpl->tpl_vars['dob']->value;?>
/><br>
    E-mail: <input type="text" class="form-control" name="Email" placeholder="Please Enter Your Email" value=<?php echo $_smarty_tpl->tpl_vars['email']->value;?>
><br>
<input class="btn btn-primary" type="submit" name="submit">

<!-- <a href="Admin_Login.php"><input class="btn btn-primary" type="text" value="Admin Login"></a> -->
<br><br>
</form>

</div>


</body>

</html><?php }
}
