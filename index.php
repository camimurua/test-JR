<?php
    include ("conexion.php");
    $clientes = "SELECT * FROM clientes";
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Test</title>
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/css/bootstrap.min.css" 
    rel="stylesheet" integrity="sha384-eOJMYsd53ii+scO/bJGFsiCZc+5NDVN2yr8+0RDqr0Ql0h+rP48ckxlpbzKgwra6" 
    crossorigin="anonymous">
    <link href="https://fonts.googleapis.com/css2?family=Roboto:wght@300&display=swap" 
    rel="stylesheet">
    <link rel="stylesheet" href="estilos.css">
</head>
<body>

    <h1>Test para lista de clientes:</h1>
    <form action="tabla.php" method="post">
        <input class="formularioBusqueda" type="text" placeholder="Ingresar DNI del cliente" 
         name="dniIngresado">
        <input class="submitBusqueda" type="submit" >
    </form>

    <div class="container-table">
                <div class="table-title"> Datos del cliente </div>
                <div class="table-header"> Nombre </div>
                <div class="table-header"> Apellido </div>
                <div class="table-header"> DNI </div>
                <div class="table-header"> Sexo </div>
                <div class="table-header"> Numero de Celular</div>
                <div class="table-header"> Operación </div>
                <?php $resultado = mysqli_query($conexion, $clientes);  
                while($card= mysqli_fetch_assoc($resultado)) { ?>
                <div class="table-item"><?php echo $card["Nombre"]; ?></div>
                <div class="table-item"><?php echo $card["Apellido"]; ?></div>
                <div class="table-item"><?php echo $card["DNI"]; ?></div>
                <div class="table-item"><?php echo $card["Sexo"]; ?></div>
                <div class="table-item"><?php echo $card["Numero_Celular"]; ?></div>
                <div class="table-item"> <p>Para modificar o eliminar cliente,
                    debe buscar por DNI </p> </div>
                <?php } mysqli_free_result($resultado); ?>
        </div>

    <!-- Script Bootstrap -->
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" 
     integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" 
     crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js" 
     integrity="sha384-9/reFTGAW83EW2RDu2S0VKaIzap3H66lZH81PoYlFhbGU+6BZp6G7niu735Sk7lN" 
     crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/js/bootstrap.min.js" 
     integrity="sha384-w1Q4orYjBQndcko6MimVbzY0tgp4pWB4lZ7lr30WKz0vr/aWKhXdBNmNb5D92v7s" 
     crossorigin="anonymous"></script>

</body>
</html>