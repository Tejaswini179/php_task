<?php
/* Smarty version 4.2.0, created on 2022-09-19 09:55:13
  from 'C:\wamp64\www\smarty-4.2.0\task1\templates\display.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.2.0',
  'unifunc' => 'content_63283c81489012_19069349',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '9cbdf636d79deb0baffc477bf2cb2d12db7ed2b4' => 
    array (
      0 => 'C:\\wamp64\\www\\smarty-4.2.0\\task1\\templates\\display.tpl',
      1 => 1663581295,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_63283c81489012_19069349 (Smarty_Internal_Template $_smarty_tpl) {
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
  
</table>

</div>


</body>
</html><?php }
}
