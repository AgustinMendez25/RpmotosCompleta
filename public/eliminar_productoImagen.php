<?php

    include ("conexion.php");

    $id = $_REQUEST['id'];

    $query = "UPDATE info_producto SET URL_imagen=NULL where idProducto='$id'";
    $envio = $conexion->query($query);

?>

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, shrink-to-fit=no">
    <title>RpMotos</title>

    <!--------------------------VINCULACION CSS-------------------------->
    
    <link rel="stylesheet" href="/css/bootstrap.min.css">
    <link rel="stylesheet" href="/css/Login-Form-Clean.css">
    <link rel="stylesheet" href="/css/Animated-Pretty-Product-List-v12.css">
    <link rel="stylesheet" href="/css/header.css">
    <link rel="stylesheet" href="/css/footer.css">
    <link rel="stylesheet" href="/css/style.css">

    <!--------------------------FUENTES DE TEXTO-------------------------->

    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Abril+Fatface">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Autour+One">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Playfair+Display">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Roboto">
    <link rel="stylesheet" href="/fonts/fontawesome-all.min.css">
    <link rel="stylesheet" href="/fonts/font-awesome.min.css">
    <link rel="stylesheet" href="/fonts/ionicons.min.css">
    <link rel="stylesheet" href="/fonts/typicons.min.css">
    <link rel="stylesheet" href="/fonts/fontawesome5-overrides.min.css">

</head>

<body style="background: #efefef;">

    <!--------------------------MENSAJE IMAGEN ELIMINADA-------------------------->

    <div style="display:flex;justify-content:center;">
        <div class="caja-mensaje">
            <h1>Se eliminó la imagen correctamente</h1>
            <a href='administracion.php'>Volver</a>
        </div>
    </div>

</body>