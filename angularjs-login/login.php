<?php
/*
Developer:  Ehtesham Mehmood
Site:       PHPCodify.com
Script:     Angularjs Login Script using PHP MySQL and Bootstrap
File:       login.php
*/

//include database connection file
require_once 'db_config.php';


// verifying user from database using PDO
$stmt = $DBcon->prepare("SELECT correo, contrasena from usuarios WHERE correo='".$_POST['user_email']."' && contrasena='".$_POST['user_password']."'");
$stmt->execute();
$row = $stmt->rowCount();
if ($row > 0){
    echo "correct";
} else{
    echo 'wrong';
}

?>
