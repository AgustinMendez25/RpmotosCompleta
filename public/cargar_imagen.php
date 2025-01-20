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
    <div style="display:flex;justify-content:center;">
        <div>

            <?php
                $id = $_REQUEST['id'];
            ?>
            <div class="col-12 tabla-modificar">
                <form method="post" action="realizar_cargaImagen.php?id=<?php echo $id ?>" enctype="multipart/form-data">
                    <div class="col-12">
                        <h1 class="text-center">Cargar Imagen al Registro <?php echo $id?></h1>
                    </div>
                    <div class="form-group">
                        <label>Subir Imagen</label>
                        <input class="form-control" type="file" name="imagen">
                    </div>
                    <div class="form-group">
                        <button class="btn btn-primary" name="enviar" type="submit">Guardar</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
</body>