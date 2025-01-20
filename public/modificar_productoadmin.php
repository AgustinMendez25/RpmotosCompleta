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
    <div style="display:flex;justify-content:center;">
        <div>

            <?php
                include ("conexion.php");
                $id = $_REQUEST['id'];

                $query = "SELECT * FROM productos WHERE id=".$id;
                $envio = $conexion->query($query);
                $row=$envio->fetch_assoc();
            ?>
            <div class="col-12 tabla-modificar">
                <form method="post" action="realizar_modificacionadmin.php?id=<?php echo $id ?>">
                    <div class="col-12">
                        <h1 class="text-center">Modificar Registro <?php echo $id?></h1>
                    </div>
                    <div class="form-group">
                        <label>Producto</label>
                        <input class="form-control" type="text" name="producto" value="<?php echo $row['producto']; ?>"></input>
                    </div>
                    <div class="form-group">
                        <label>Marca</label>
                        <input class="form-control" type="text" name="marca" value="<?php echo $row['marca']; ?>"></input>
                    </div>
                    <div class="form-group">
                        <label>Modelo</label>
                        <input class="form-control" type="text" name="modelo" value="<?php echo $row['modelo']; ?>"></input>
                    </div>
                    <div class="form-group">
                        <label>Compatibilidad</label>
                        <input class="form-control" type="text" name="compatibilidad" value="<?php echo $row['compatibilidad']; ?>"></input>
                    </div>
                    <div class="form-group">
                        <label>Proveedor</label>
                        <input class="form-control" type="text" name="proveedor" value="<?php echo $row['proveedor']; ?>"></input>
                    </div>
                    <div class="form-group">
                        <label>Cantidad</label>
                        <input class="form-control" type="number" name="cantidad" value="<?php echo $row['cantidad']; ?>"></input>
                    </div>
                    <div class="form-group">
                        <label>Fecha de ingreso</label>
                        <input class="form-control" type="date" name="fecha_ingreso" value="<?php echo $row['fecha_ingreso']; ?>"></input>
                    </div>
                    <div class="form-group">
                        <label>Ubicación</label>
                        <input class="form-control" type="text" name="ubicacion" value="<?php echo $row['ubicacion']; ?>"></input>
                    </div>
                    <div class="form-group">
                        <label>Costo</label>
                        <input class="form-control" type="number" name="costo" value="<?php echo $row['costo']; ?>"></input>
                    </div>
                    <div class="form-group">
                        <label>Precio al público</label>
                        <input class="form-control" type="number" name="precio_publico" value="<?php echo $row['precio_publico']; ?>"></input>
                    </div>
                    <div class="form-group">
                        <label>Peso por unidad</label>
                        <input class="form-control" type="text" name="pesoXunidad" value="<?php echo $row['pesoXunidad']; ?>"></input>
                    </div>
                    <div class="form-group">
                        <label>Garantía</label>
                        <input class="form-control" type="text" name="garantia" value="<?php echo $row['garantia']; ?>"></input>
                    </div>
                    <div class="form-group">
                        <button class="btn btn-primary" name="enviar" type="submit">Guardar</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
</body>