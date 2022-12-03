<link rel="stylesheet" href="style/estilos.css">

<?php include('components/header.php') ?>
<?php include('components/navbar.php') ?>
<?php include('bd/conexion.php');
    $pastel="SELECT * FROM imagen";
    $resultado=mysqli_query($conexion, $pastel);
    $mostrar_pastel=mysqli_fetch_array($resultado);
?>

<body>
    <div class="contenedor_img">
        <img src="img/<?php echo $mostrar_pastel['img']; ?>" alt="cupcakee" class="pastelito">
    </div>
</body>
