<?php

    //-----------------PROCESO LOGUEO--------------------

    session_start();
    include ("conexion.php");
   
    if (isset($_POST["nombre_usuario"]) and isset($_POST["contraseña"])) {
        $query = "SELECT * FROM usuarios WHERE nombre_usuario='".$_POST['nombre_usuario']."' and contraseña='".$_POST['contraseña']."'";
        $envio = $conexion->query($query);
        if (($envio->num_rows)>0){
            
            $row=$envio->fetch_assoc();

            $_SESSION['nombre_usuario'] = $_POST["nombre_usuario"];

            $_SESSION['idUsuario'] = $row['idUsuario'];

            $_SESSION['rol'] = $row['rol'];
            
            if ($row['rol'] == 'admin'){
                header("Location: administracion.php");
            }else{
                if ($row['rol'] == 'usuario'){
                    header("Location: index.php");
                }
            }
            
        }
        else{
    
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

    <!--------------------------MENSAJE CONTRASEÑA INCORRECTA-------------------------->

    <div style="display:flex;justify-content:center;">
        <div class="caja-mensaje">
            <h1>Contraseña Incorrecta</h1>
            <a href='inicio_sesion.php'>Volver a intentar</a>
        </div>
    </div>

</body>

<?php
        }
    }
?>