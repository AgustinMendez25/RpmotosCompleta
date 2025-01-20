<?php
	include ("conexion.php");
    session_start();
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

<body style="background: #efefef;">

    <!--------------------------VERIFICACION ADMIN-------------------------->

    <?php
        if ($_SESSION['rol'] == 'usuario' or empty($_SESSION['nombre_usuario'])){
    ?>
        <div style="display:flex;justify-content:center;">
            <div class="caja-mensaje">
                <h1>No estas autorizado a ver esta seccion</h1>
                <br><br>
                <a href='index.php'>Volver al sitio</a>
            </div>
        </div>
    <?php
        }
        else{
    ?>
    
    <!--------------------------NAVBAR ADMINISTRACION-------------------------->

    <div class="d-flex justify-content-center align-items-center flex-wrap justify-content-sm-between" style="padding: 17px;background: rgb(166,23,23);">
        <h1 style="font-family: 'Playfair Display', serif;color: rgb(255,255,255);text-shadow: 1px 2px 3px rgb(0,0,0);">Administración</h1>
        <div class="d-flex contenedor-busqueda">
            <form class="d-flex justify-content-center align-items-center" method="POST">
                <input type="search" name="Busqueda_Productos" placeholder="Buscar productos..." style="width:330px">
                <button type="submit" name="busqueda"><i class="fa fa-search"></i></button>
            </form>
        </div>
        <div>
            <form method="POST">
                <button class="btn btn-primary" type="submit" name="restablecer">Mostrar Todos</button>
            </form>
        </div>
        <a href="cerrar_sesion.php" style="font-size: 20px;padding: 6px 22px;font-family: Roboto, sans-serif;background: #ffffff;border-radius: 12px;box-shadow: 1px 1px 3px rgb(0,0,0);color: rgb(0,0,0);text-shadow: 1px 1px 4px rgb(108,103,103);margin: 8px 0px;">Cerrar Sesion de Administrador</a>
    </div>

    <!------------------------------PRODUCTOS--------------------------------->

    <div class="row" style="margin: 0;margin-top:30px;">
        <div class="col-12">
            <h1 class="espacio" style="margin-bottom:0px;">Productos</h1>
            <!-- Nuevo Registro -->
            <button type="button" class="btn btn-success" data-toggle="modal" data-target="#nuevo_p">Nuevo Producto</button>
            <!-- Modal -->
            <div class="modal fade" id="nuevo_p" role="dialog">
                <div class="modal-dialog">
                    <!-- Contenido Modal -->
                    <div class="modal-content">
                        <div class="modal-header">
                            <h4 class="modal-title">Nuevo Producto</h4>
                        </div>
                        <div class="modal-body">
                            <form method="post" action="cargar_producto.php">
                                <div class="form-group">
                                    <label>Producto</label>
                                    <input class="form-control" type="text" name="producto" placeholder="Ingrese el nombre de producto" required="">
                                </div>
                                <div class="form-group">
                                    <label>Marca</label>
                                    <input class="form-control" type="text" name="marca" placeholder="Ingrese la marca" required="">
                                </div>
                                <div class="form-group">
                                    <label>Modelo</label>
                                    <input class="form-control" type="text" name="modelo" placeholder="Ingrese el modelo" required="">
                                </div>
                                <div class="form-group">
                                    <label>Compatibilidad</label>
                                    <textarea class="form-control" name="compatibilidad" rows="4" required=""></textarea>
                                </div>
                                <div class="form-group">
                                    <label>Proveedor</label>
                                    <input class="form-control" type="text" name="proveedor" placeholder="Ingrese el proveedor" required="">
                                </div>
                                <div class="form-group">
                                    <label>Cantidad</label>
                                    <input class="form-control" type="number" name="cantidad" placeholder="Ingrese la cantidad" required="">
                                </div>
                                <div class="form-group">
                                    <label>Fecha de ingreso</label>
                                    <input class="form-control" type="date" name="fecha_ingreso" placeholder="Ingrese la fecha de ingreso" required="">
                                </div>
                                <div class="form-group">
                                    <label>Ubicación</label>
                                    <input class="form-control" type="text" name="ubicacion" placeholder="Ingrese la ubicacion" required="">
                                </div>
                                <div class="form-group">
                                    <label>Costo</label>
                                    <input class="form-control" type="number" name="costo" placeholder="Ingrese el costo" required="">
                                </div>
                                <div class="form-group">
                                    <label>Precio al público</label>
                                    <input class="form-control" type="number" name="precio_publico" placeholder="Ingrese el precio al publico" required="">
                                </div>
                                <div class="form-group">
                                    <label>Peso por unidad</label>
                                    <input class="form-control" type="text" name="pesoXunidad" placeholder="Ingrese el peso por unidad" required="">
                                </div>
                                <div class="form-group">
                                    <label>Garantía</label>
                                    <input class="form-control" type="text" name="garantia" placeholder="Ingrese la garantia" required="">
                                </div>
                                <!-- Footer Modal -->
                                <div class="modal-footer">
                                    <div class="form-group">
                                        <button type="button" class="btn btn-secondary" data-dismiss="modal">Cancelar</button>
                                    </div>
                                    <div class="form-group">
                                        <button type="submit" class="btn btn-primary">Guardar</button>
                                    </div>
                                </div>
                            </form>
                        </div>
                    </div>  
                </div>
            </div>

            <!-- Cargar Excel -->
            <button type="button" class="btn btn-info" data-toggle="modal" data-target="#cargar_excel">Cargar Excel</button>
            <!-- Modal -->
            <div class="modal fade" id="cargar_excel" role="dialog">
                <div class="modal-dialog">
                    <!-- Contenido Modal -->
                    <div class="modal-content">
                        <div class="modal-header">
                            <h4 class="modal-title">Cargar Excel</h4>
                        </div>
                        <div class="modal-body">
                            <form action="cargar_excel.php" method="post" enctype="multipart/form-data">
                                <div class="form-group">
                                    <label>Ingrese el Excel</label>
                                    <input class="form-control" type="file" name="archivo_excel" required="">
                                </div>
                                <!-- Footer Modal -->
                                <div class="modal-footer">
                                    <div class="form-group"><button type="button" class="btn btn-secondary" data-dismiss="modal">Cancelar</button></div>
                                    <div class="form-group"><button type="submit" class="btn btn-primary">Guardar</button></div>
                                </div>
                            </form>
                        </div>
                    </div>  
                </div>
            </div>
        </div>
    </div>

    <div class="row" style="margin: 0;">
        <div class="col-12">
            <div class="table-responsive table-bordered" style="margin-top: 24px; padding: 10px;">
                <table class="table table-bordered">
                    <thead style="background: #41b5e7;text-shadow: 1px 1px 1px rgb(142,141,141);font-size: 16px;">
                        <tr>
                            <th>Producto</th>
                            <th>Marca</th>
                            <th>Modelo</th>
                            <th>Compatibilidad</th>
                            <th>Proveedor</th>
                            <th>Cantidad</th>
                            <th>Fecha de Ingreso</th>
                            <th>Ubicación</th>
                            <th>Costo</th>
                            <th>Precio al Público</th>
                            <th>Peso por Unidad</th>
                            <th>Garantía</th>
                            <th></th>
                            <th></th>
                        </tr>
                    </thead>
                    <tbody style="background: #cbcbcb;font-size: 14px;">
                        <?php //PHP SELECTS
                            $nombre = "";

                            if(isset($_POST['busqueda'])){
                                $nombre = $_POST['Busqueda_Productos'];
                                $nombre = " where producto like('".$nombre."%')"; 
                            }

                            if(isset($_POST['restablecer'])){
                                $nombre = "";
                            }

                            $query = "SELECT * FROM productos".$nombre;
                            $envio = $conexion->query($query);
                            while($row=$envio->fetch_assoc()){
                            
                        ?>
                        <tr>
                            <td><?php echo $row['producto']; ?></td>
                            <td><?php echo $row['marca']; ?></td>
                            <td><?php echo $row['modelo']; ?></td>
                            <td><?php echo $row['compatibilidad']; ?></td>
                            <td><?php echo $row['proveedor']; ?></td>
                            <td><?php echo $row['cantidad']; ?></td>
                            <td><?php echo $row['fecha_ingreso']; ?></td>
                            <td><?php echo $row['ubicacion']; ?></td>
                            <td>$<?php echo $row['costo']; ?></td>
                            <td>$<?php echo $row['precio_publico']; ?></td>
                            <td><?php echo $row['pesoXunidad']; ?></td>
                            <td><?php echo $row['garantia']; ?></td>
                            <td style="width: 90px;">
                                <a href="modificar_productoadmin.php?id=<?php echo $row['id']; ?>">
                                    <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#modificar">Editar</button>
                                </a>
                            </td>
                            <td style="width: 10">
                                <a href="eliminar_productoadmin.php?id=<?php echo $row['id']; ?>">
                                    <i class="fa fa-trash btn" style="color:red; font-size:28px;padding:0px"></i>
                                </a>
                            </td>
                        </tr>
                        <?php
                            }
                        ?>
                    </tbody>
                </table>
            </div>
        </div>
    </div>

    <!------------------------------INFO PRODUCTO--------------------------------->
    
    <div class="row" style="margin: 0;">
        <div class="col-12">
            <h1 class="espacio" id="info-producto" style="margin-top:60px;padding-bottom:0px">Info Productos</h1>
            <div class="table-responsive table-bordered" style="margin-top: 24px; padding: 10px;">
                <table class="table table-bordered">
                    <thead style="background: #41b5e7;text-shadow: 1px 1px 1px rgb(142,141,141);font-size: 16px;">
                        <tr>
                            <th>ID</th>
                            <th>Producto</th>
                            <th>Marca</th>
                            <th>Descripción</th>
                            <th>URL_imagen</th>
                            <th></th>
                        </tr>
                    </thead>
                    <tbody style="background: #cbcbcb;font-size: 14px;">
                        <?php //PHP SELECTS
                            $query = "SELECT p.id,p.producto,p.marca,i.* FROM productos p left join info_producto i on p.id = i.idProducto".$nombre." order by id";
                            $envio = $conexion->query($query);
                            while($row=$envio->fetch_assoc()){
                            
                        ?>
                        <tr>
                            <td><?php echo $row['id']; ?></td>
                            <td><?php echo $row['producto']; ?></td>
                            <td><?php echo $row['marca']; ?></td>
                            <td><?php echo $row['descripcion']; ?></td>
                            <td>
                                <?php
                                    if ($row['URL_imagen'] == null){
                                ?>
                                <a href="cargar_imagen.php?id=<?php echo $row['id']; ?>">
                                    <button type="button" class="btn btn-success" data-toggle="modal" data-target="#modificar">Cargar imágen</button>
                                </a>
                                <?php
                                    }else{
                                        echo $row['URL_imagen']; 
                                    }
                                 ?>
                            </td>
                            <td style="width: 90px;">
                                <a href="modificar_productoinfo.php?id=<?php echo $row['id']; ?>">
                                    <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#modificar">Editar Descripción</button>
                                </a>
                                <?php
                                    if ($row['URL_imagen'] != null){
                                ?>
                                <a href="eliminar_productoImagen.php?id=<?php echo $row['id']; ?>">
                                    <button type="button" class="btn btn-danger" style="margin-top:8px">Borrar Imagen</button>
                                </a>
                                <?php } ?>
                            </td>
                        </tr>
                        <?php
                            }
                        ?>
                    </tbody>
                </table>
            </div>
        </div>
    </div>

    <!--------------------------SCRIPTS JS-------------------------->

    <script src="assets/js/jquery.min.js"></script>
    <script src="assets/js/bootstrap.min.js"></script>

</body>

</html>

<?php
    }
?>


<?php