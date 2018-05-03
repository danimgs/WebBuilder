<?php

$subs_name = utf8_decode($_POST['nombre']);
$subs_dorsal = utf8_decode($_POST['dorsal']);

$link = mysqli_connect("localhost", "root", "");

mysqli_select_db($link, "proyecto");

$tildes = $link->query("SET NAMES 'utf8'"); //Para que se inserten las tildes correctamente

mysqli_query($link, "INSERT INTO jugadores (nombre,dorsal) VALUES ('$subs_name', $subs_dorsal)");

/* mysqli_query($link, "INSERT INTO jugadores (nombre,dorsal) VALUES ('Antonio2', 13)"); */

mysqli_close($link); // Cerramos la conexion con la base de datos

echo 'Los datos han sido insertados en la base de datos';


?>