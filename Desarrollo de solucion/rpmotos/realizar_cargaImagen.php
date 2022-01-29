<?php
    include ("conexion.php");

    $id = $_REQUEST['id'];

    if (isset($_POST['enviar'])){
        $nombre_img = $_FILES['imagen']['name'];
        if ($nombre_img == !NULL){

            //Obtiene el directorio para cargar la imagen
            $directorio = $_SERVER['DOCUMENT_ROOT'].'/rpmotos/assets/img/';
            
            //Carga la imagen en el servidor
            move_uploaded_file($_FILES['imagen']['tmp_name'],$directorio.$nombre_img);
            
            //Carga la URL en la base de datos
            $url_imagen = 'assets/img/'.$nombre_img;

            $query = "SELECT * FROM info_producto where idProducto='$id'";
            $envio = $conexion->query($query);
            if(($envio->num_rows) == 0){
                $query2 = "INSERT INTO info_producto(idProducto,URL_imagen) values($id,'".$url_imagen."')";
                $envio2 = $conexion->query($query2);
            }else{
                $query2 = "UPDATE info_producto SET URL_imagen='".$url_imagen."' where idProducto='$id'";
                $envio2 = $conexion->query($query2);
            }
        }
    }
?>

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

<body style="background: #efefef;">

    <!--------------------------MENSAJE IMAGEN CARGADA-------------------------->

    <div style="display:flex;justify-content:center;">
        <div class="caja-mensaje">
            <h1>La imagen se cargó correctamente</h1>
            <a href='administracion.php#info-producto'>Volver</a>
        </div>
    </div>

</body>