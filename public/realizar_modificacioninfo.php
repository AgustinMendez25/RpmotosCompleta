<?php
    include ("conexion.php");

    $id = $_REQUEST['id'];
    $descripcion = $_POST['descripcion'];

    if ( isset($_POST['enviar'])){
        $query = "SELECT * FROM info_producto where idProducto='$id'";
        $envio = $conexion->query($query);
        if(($envio->num_rows) == 0){
            $query2 = "INSERT INTO info_producto(idProducto,descripcion) values($id,'$descripcion')";
            $envio2 = $conexion->query($query2);
        }else{
            $query2 = "UPDATE info_producto SET descripcion='$descripcion' where idProducto='$id'";
            $envio2 = $conexion->query($query2);
        }
    }
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

    <!--------------------------MENSAJE REGISTRO MODIFICADO-------------------------->

    <div style="display:flex;justify-content:center;">
        <div class="caja-mensaje">
            <h1>Se modificó el registro correctamente</h1>
            <a href='administracion.php#info-producto'>Volver</a>
        </div>
    </div>

</body>