<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>HOME</title>
    <?php include('components/header.php');
     include('components/navbar.php') ?> 
     <link rel="stylesheet" href="style/estilos.css?a=1">
     <?php include('bd/conexion.php');
    $sobre_nosotros="SELECT * FROM informacion where idinfo=3";
    $resultado=mysqli_query($conexion, $sobre_nosotros);
    $mostrar_nosotros=mysqli_fetch_array($resultado)
?>

</head>
<body>
    
        <div class="contenedor_sobre_nosotros">
        <div>
        <img src="img/<?php echo $mostrar_nosotros['imagen']; ?>" alt="" width="550"> 
        </div>
        <div>
        <span class="informacion_sobre_nosotros"><?php echo $mostrar_nosotros['info']; ?></span> 
        </div>
    </div> 
        
    
</body>
</html>
<style>
    .contenedor_sobre_nosotros{
        display: flex;
        flex-direction: column;
        justify-content: center;
        align-items: center;
    }
    .informacion_sobre_nosotros{
        font-size: 20px;
    }
</style>