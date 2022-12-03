<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>MENÚ</title>
    <?php 
        include "bd/conexion.php";
        $menu="SELECT * FROM menu";
        $resultado=mysqli_query($conexion, $menu);
    ?>
</head>
<body style="background-color: #FFFFCC; margin:0;" >
   
        <div class="contenedor_menu">
            <div class="imagen">
                <button class="btn_menu"><a href="index.php" style="text-decoration: none; color:black; font-size: 15px;">REGRESAR</a></button>
            <img src="img/Captura.PNG" width="650" alt="">
            </div >
            <div class="menu"> 
                <h1>Menu cupcake-Shop</h1>
            <?php while($mostrar_menu=mysqli_fetch_array($resultado)){?>
                <p class="datos_menu"><?php echo $mostrar_menu['nombre_menu'] ?>.......................... $<?php echo $mostrar_menu['precio'] ?></p>
                <?php } ?>
            </div >
            
         
        </div>
</body>
</html>

<style>
    .contenedor_menu{

        display: flex;

    }
    .menu{
        display: flex;
        flex-direction: column;
        align-items: center;
        width: 100%;
        height: 100vh;
        background-color: #F995AF;
        color: white;
        overflow-y: auto;

    }
    .imagen{
        display: flex;
        flex-direction: column;
        justify-content: center;
        align-items: center;
        width: 100%;
        height: 98vh;
        background-color: #FFFFCC;

    }
    .datos_menu{
        font-size: 23px;
    }
    .btn_menu{
        position: absolute;
        top: 0;
        left: 0;
        margin-top: 10px;
        left: 10px;
        background-color: #F995AF;
        border-radius: 5px;
        
    }

</style>