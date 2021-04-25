<?php
$server = "localhost";
$user ="camila";
$contrasena = "21041999";
$db = "base_de_datos";
$conexion = mysqli_connect($server,$user,$contrasena, $db) or 
die ("Error al conectar al servidor");
mysqli_set_charset($conexion, "utf8");
?>