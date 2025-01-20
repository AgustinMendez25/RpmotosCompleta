<html>

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

<body class="d-flex justify-content-center" style="background: #efefef;">

    <?php

        include ("conexion.php");

        $usuario = $_REQUEST['usuario'];

        $msj = "-----PRODUCTOS SOLICITADOS-----\n\n\n";

        $query = "SELECT * FROM carrito WHERE Usuario=".$usuario;
        $envio = $conexion->query($query);
        while($row=$envio->fetch_assoc()){
            $id_compra = $row['id_compra'];
            $producto = $row['Producto'];
            $cantidad_solicitada = $row['cantidad_solicitada'];

            $msj = $msj . "ID Compra: " . $id_compra . "\nProducto: " . $producto . "\nCantidad solicitada: " . $cantidad_solicitada . "\n\n";
        }     

        $header = "From: noreply@example.com" . "\r\n";
        $header.= "Reply-To: noreply@example.com" . "\r\n";
        $header.= "X-Mailer: PHP/". phpversion();

        $email = "info@rpmotos.com.ar";

        $asunto = "Presupuesto del usuario " . $usuario ;
        $mail = @mail($email,$asunto,$msj,$header);

        $query2 = "DELETE FROM carrito WHERE Usuario=".$usuario;
        $envio2 = $conexion->query($query2);
        
        if ($email) {
    ?>
            
    <div class="caja-mensaje">
        <h1>Se ha enviado el mensaje correctamente</h1>
        <a href='index.php'>Volver</a>
    </div>

    <?php
        }else{
    ?>

    <div class="caja-mensaje">
        <h1>No se pudo enviar el mensaje</h1>
        <a href='index.php'>Volver</a>
    </div>

    <?php
        }

    ?>