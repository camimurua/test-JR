<?php
    include ("conexion.php");
    $id = $_GET["id"];
    $clientes = "SELECT * FROM clientes WHERE id = '$id'";

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Modificación</title>
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/css/bootstrap.min.css" 
    rel="stylesheet" integrity="sha384-eOJMYsd53ii+scO/bJGFsiCZc+5NDVN2yr8+0RDqr0Ql0h+rP48ckxlpbzKgwra6" 
    crossorigin="anonymous">
    <link href="https://fonts.googleapis.com/css2?family=Roboto:wght@300&display=swap" 
    rel="stylesheet">
    <link rel="stylesheet" href="estilos.css">
</head>
<body>
    <form class="container-table" action="actualizacion.php" method="post">
        <div class="table-title"> Actualizar datos </div>
        <div class="table-header"> Nombre </div>
        <div class="table-header"> Apellido </div>
        <div class="table-header"> DNI </div>
        <div class="table-header"> Sexo </div>
        <div class="table-header"> Numero de Celular</div>
        <div class="table-header"> Operación </div>
            <?php $resultado = mysqli_query($conexion, $clientes);  
            while($card= mysqli_fetch_assoc($resultado)) { ?>
            <input type="hidden" value="<?php echo $card["id"]; ?>" name="id">
            <input id="ingreso" type="text" value="<?php echo $card["Nombre"]; ?>"
            name="nombre">
            <input id="ingreso" type="text" value="<?php echo $card["Apellido"]; ?>"
            name="apellido">
            <input id="ingreso" type="text" value="<?php echo $card["DNI"]; ?>"
            name="dni">
            <input id="ingreso" type="text" value="<?php echo $card["Sexo"]; ?>"
            name="sexo">
            <input id="ingreso" type="text" value="<?php echo $card["Numero_Celular"]; ?>"
            name="celular">
            <?php } mysqli_free_result($resultado); ?>
            <input type="submit" value="ACTUALIZAR" class="actualizar-cliente">
    </form>
</body>
</html>