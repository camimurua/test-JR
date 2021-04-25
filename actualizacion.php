<?php 
include ("conexion.php");
$id = $_POST['id'];
$dni = $_POST['dni'];
$nombre = $_POST['nombre'];
$apellido = $_POST['apellido'];
$sexo = $_POST['sexo'];
$numero = $_POST['celular'];

$actualizar = "UPDATE clientes SET Nombre='$nombre', Apellido='$apellido', DNI='$dni',
Sexo='$sexo', Numero_Celular='$numero' WHERE id='$id'";

$resultado = mysqli_query($conexion, $actualizar);

if($resultado) {
    header("Location: index.php");
} else {
    echo "<script>alert('No se pudo actualizar correctamente'); 
    window.history.go(-1); </script>";
}

?>
