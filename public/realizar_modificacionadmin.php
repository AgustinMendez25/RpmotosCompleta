<?php
    include ("conexion.php");

    $id = $_REQUEST['id'];

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

    if ( isset($_POST['enviar'])){
        $query = "UPDATE productos SET producto='$producto', marca='$marca', modelo='$modelo', compatibilidad='$compatibilidad', proveedor='$proveedor', cantidad='$cantidad', fecha_ingreso='$fecha_ingreso', ubicacion='$ubicacion', costo='$costo', precio_publico='$precio_publico', pesoXunidad='$pesoXunidad', garantia='$garantia' where id='$id'";
        $envio = $conexion->query($query);
    }
?>

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

<body style="background: #efefef;">

    <!--------------------------MENSAJE REGISTRO MODIFICADO-------------------------->

    <div style="display:flex;justify-content:center;">
        <div class="caja-mensaje">
            <h1>Se modificó el registro correctamente</h1>
            <a href='administracion.php#info-producto'>Volver</a>
        </div>
    </div>

</body>