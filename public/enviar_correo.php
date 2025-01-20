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

<body class="d-flex justify-content-center" style="background: #efefef;">

    <?php

        if (isset($_POST['enviar'])) {
            $nombre = $_POST['nombre'];
            $email = $_POST['email'];
            $tel = $_POST['tel'];
            $mensaje = $_POST['mensaje'];

            $header = "From: noreply@example.com" . "\r\n";
            $header.= "Reply-To: noreply@example.com" . "\r\n";
            $header.= "X-Mailer: PHP/". phpversion();

            $asunto = "Consulta de " . $nombre ;
            $msj = $mensaje;
            $mail = @mail($email,$asunto,$msj,$header);
            
            if ($email) {
    ?>
            
    <div class="caja-mensaje">
        <h1>Se ha enviado el mensaje correctamente</h1>
        <a href='contacto.php'>Volver</a>
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

    }

    ?>