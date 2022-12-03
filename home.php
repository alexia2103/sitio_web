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
    $home="SELECT * FROM informacion";
    $resultado=mysqli_query($conexion, $home);
    $mostrar_home=mysqli_fetch_array($resultado)
?>

</head>
<body>
    
        <div class="contenedor_img">
        <img src="img/<?php echo $mostrar_home['imagen']; ?>" alt=""> 
        <span class="informacion"><?php echo $mostrar_home['info']; ?></span> 
    </div> 
        
    
</body>
</html>