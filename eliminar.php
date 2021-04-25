<?php 
include ("conexion.php");
$id = $_GET['id'];

$eliminar = "DELETE FROM clientes WHERE id='$id'";

$resultado = mysqli_query($conexion, $eliminar);

if($resultado) {
    header("Location: index.php");
} else {
    echo "<script>alert('No se pudo eliminar correctamente'); 
    window.history.go(-1); </script>";
}

?>