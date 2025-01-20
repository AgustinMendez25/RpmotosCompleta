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

<body class="text-center d-flex justify-content-center" style="background: #efefef;">
    
    <!--------------------------CARGA PRODUCTO-------------------------->

    <?php

    include ("conexion.php");

    $producto = $_POST['producto'];
    $marca = $_POST['marca'];
    $modelo = $_POST['modelo'];
    $compatibilidad = $_POST['compatibilidad'];
    $proveedor = $_POST['proveedor'];
    $cantidad = $_POST['cantidad'];
    $fecha_ingreso = $_POST['fecha_ingreso']; 
    $ubicacion = $_POST['ubicacion'];
    $costo = $_POST['costo'];
    $precio_publico = $_POST['precio_publico'];
    $pesoXunidad = $_POST['pesoXunidad'];
    $garantia = $_POST['garantia'];

    $query = "INSERT INTO productos (producto, marca, modelo, compatibilidad, proveedor, cantidad, fecha_ingreso, ubicacion, costo, precio_publico, pesoXunidad, garantia) 
    VALUES ('$producto', '$marca', '$modelo', '$compatibilidad', '$proveedor', $cantidad, '$fecha_ingreso', '$ubicacion', $costo, $precio_publico, '$pesoXunidad', '$garantia')";

    $envio = $conexion->query($query);

    ?>

    <!--------------------------MENSAJE PRODUCTO CARGADO-------------------------->

    <div class="caja-mensaje">
        <h1>Se ha cargado el producto perfectamente</h1>
        <a href="administracion.php" style="font-size: 24px;">Volver</a>
    </div>

</body>