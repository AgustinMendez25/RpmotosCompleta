<?php
    session_start();
?>

<!DOCTYPE html>

<html>

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, shrink-to-fit=no">
    <title>RpMotos</title>

    <!--------------------------VINCULACION CSS-------------------------->
    
    <link rel="stylesheet" href="assets/css/bootstrap.min.css">
    <link rel="stylesheet" href="assets/css/Login-Form-Clean.css">
    <link rel="stylesheet" href="assets/css/Animated-Pretty-Product-List-v12.css">
    <link rel="stylesheet" href="assets/css/header.css">
    <link rel="stylesheet" href="assets/css/footer.css">
    <link rel="stylesheet" href="assets/css/style.css">

    <!--------------------------FUENTES DE TEXTO-------------------------->

    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Abril+Fatface">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Autour+One">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Playfair+Display">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Roboto">
    <link rel="stylesheet" href="assets/fonts/fontawesome-all.min.css">
    <link rel="stylesheet" href="assets/fonts/font-awesome.min.css">
    <link rel="stylesheet" href="assets/fonts/ionicons.min.css">
    <link rel="stylesheet" href="assets/fonts/typicons.min.css">
    <link rel="stylesheet" href="assets/fonts/fontawesome5-overrides.min.css">

</head>

<body  style="background: #efefef;">
    
    <!--------------------------PROCESO CARGA CARRITO-------------------------->

    <?php

    include ("conexion.php");

    if (empty($_SESSION['nombre_usuario'])){
        header ("Location: inicio_sesion.php");
    }
    
    $idProducto = $_REQUEST['id'];
    $cantidad = $_POST['cantidad'];
    $idUsuario = $_SESSION['idUsuario'];

    $query = "INSERT INTO carrito(Usuario, Producto, cantidad_solicitada) VALUES ($idUsuario, $idProducto, $cantidad)";
    $envio = $conexion->query($query);

    ?>

    <!--------------------------MENSAJE SE AGREGÓ EL PRODUCTO-------------------------->

    <div style="display:flex;justify-content:center;">
        <div class="caja-mensaje">
            <h1>El producto se ha agregado al carrito correctamente</h1>
            <div class="d-flex justify-content-center">
                <a href='catalogo.php'>Volver a la tienda</a>
            </div>
            <div class="d-flex justify-content-center">
                <a href='compra.php'>Ver Carrito</a>
            </div>
        </div>
    </div>

</body>