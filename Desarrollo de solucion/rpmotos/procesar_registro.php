<!DOCTYPE html>

<html>

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, shrink-to-fit=no">
    <title>RpMotos</title>

    <!--------------------------VINCULACION CSS-------------------------->
    
    <link rel="stylesheet" href="assets/bootstrap/css/bootstrap.min.css">
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
    
    <!--------------------------PROCESO REGISTRO-------------------------->

    <?php

    include ("conexion.php");

    if (isset($_POST["nombre_usuario"]) and isset($_POST["email"]) and isset($_POST["contraseña"]) and isset($_POST["contraseñarepetir"])) {
        $query = "INSERT INTO usuarios (nombre_usuario, email, contraseña, rol) VALUES ('".$_POST['nombre_usuario']."', '".$_POST['email']."', '".$_POST['contraseña']."', 'usuario')";
        $envio = $conexion->query($query);
        
    ?>

    <!--------------------------MENSAJE CUENTA CREADA-------------------------->

    <div style="display:flex;justify-content:center;">
        <div class="caja-mensaje">
            <h1>Su cuenta ha sido creada con éxito</h1>
            <a href='inicio_sesion.php'>Iniciar sesión</a>
        </div>
    </div>

    <?php
        }
    ?>

</body>