<?php
/* Smarty version 4.2.0, created on 2022-09-19 09:48:51
  from 'C:\wamp64\www\smarty-4.2.0\task1\templates\admin_login.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.2.0',
  'unifunc' => 'content_63283b033e32c2_00779824',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'c51d975baf7131be5ee88a82ae37b652e8e7127c' => 
    array (
      0 => 'C:\\wamp64\\www\\smarty-4.2.0\\task1\\templates\\admin_login.tpl',
      1 => 1663580908,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_63283b033e32c2_00779824 (Smarty_Internal_Template $_smarty_tpl) {
?>
 <?php echo '<?php'; ?>
 
require('connection.php');
<?php echo '?>'; ?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
</head>
<body>
<div class="container">
    <form action="admin_login.php" method="post" class="my-5">
    Admin Id : <input type="text" name="Adminid"> <br><br>
    Password : <input type="password" name ="password"><br><br>
  
    <a href="display.php"><input  class="btn btn-primary my-5" type="submit" name="signin"></a>
   
    </form>


    </div>
</body>
</html><?php }
}
