<?php
    session_start();

    include ("conexion.php");
?>

<!DOCTYPE html>

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

<body>
    
    <!--------------------------HEADER-------------------------->

    <header>

        <!--------------------------NAVBAR-SUPERIOR-------------------------->

        <div class="row" style="padding-bottom: 4px;margin-right: 0px;margin-left: 0px;">
            <div class="col-12 col-md-2 d-flex justify-content-center justify-content-md-end">
                <a href="index.php"><img class="float-right logo" src="/img/logo.png"></a>
            </div>
            <div class="col-12 col-md-10 d-flex justify-content-between">
                <div class="row align-items-center" style="width: 100%;margin: 0;">
                    <div class="col-12 col-sm-6 col-md-9">
                        <div class="contenedor-busqueda">
                            <form action="catalogo.php" class="d-flex justify-content-center align-items-center" method="POST">
                                <input type="search" name="producto_busqueda" placeholder="Buscar productos...">
                                <button type="submit" name="busqueda"><i class="fa fa-search"></i></button>
                            </form>
                        </div>
                    </div>
                    <div class="col-12 col-sm-6 col-md-3 d-flex justify-content-end div-usuario">
                        <?php
                            if (empty($_SESSION['nombre_usuario'])){   
                        ?>
                        <a class="text-nowrap btn-iniciosesion" href="inicio_sesion.php">Iniciar Sesión<i class="fas fa-user"></i></a>
                        <?php
                            } else{
                        ?>
                        <div class="d-flex align-items-center">
                            <p class="text-nowrap btn-iniciosesion"><?php echo $_SESSION['nombre_usuario'];?><i class="fas fa-user"></i></p>
                            <a class="text-nowrap btn-iniciosesion" href="cerrar_sesion.php">Cerrar Sesión</a>
                        </div>
                        <?php
                            }
                        ?>
                    </div>
                </div>
            </div>
        </div>

        <!--------------------------NAVBAR-INFERIOR-------------------------->

        <div class="row d-flex justify-content-center" style="margin: 0;">
            <div class="col-10 col-lg-12">
                <nav class="navbar navbar-light navbar-expand-md navigation-clean" style="padding: 0;">
                    <div class="container">
                        <button data-toggle="collapse" class="navbar-toggler fullwidth" data-target="#navcol-1" style="margin-bottom: 8px;">
                            <span style="margin-left: 29px;">Menú</span>
                            <span><i class="icon ion-android-menu" style="padding: 10px;"></i></span>
                        </button>
                        <div class="collapse navbar-collapse fullwidth" id="navcol-1" style="margin-bottom: 5px;">
                            <ul class="nav navbar-nav d-flex justify-content-between align-items-center fullwidth">
                                <li class="nav-item">
                                    <a class="nav-link" href="index.php">Inicio</a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link" href="catalogo.php">Catálogo</a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link" href="contacto.php">Contacto</a>
                                </li>
                                <li class="nav-item">
                                    <?php
                                        if (empty($_SESSION['nombre_usuario'])){
                                    ?>
                                        <a class="nav-link btn-iniciosesion text-nowrap" href="inicio_sesion.php"><i class="fas fa-shopping-cart"></i>Carrito(0)</a>
                                    <?php
                                        } else{
                                    ?>
                                        <a class="nav-link btn-iniciosesion text-nowrap" href="compra.php"><i class="fas fa-shopping-cart"></i>
                                    <?php
                                            $query = "SELECT * FROM productos p inner join carrito c on p.id = c.Producto where c.Usuario=".$_SESSION['idUsuario']."";
                                            $envio = $conexion->query($query);
                                            
                                            if ($envio == NULL){
                                                echo "Carrito(0)";
                                            } else{
                                                echo "Carrito(";
                                                echo $envio->num_rows;
                                                echo ")";
                                            }
                                        }
                                    ?>
                                    </a>
                                </li>
                            </ul>
                        </div>
                    </div>
                </nav>
            </div>
        </div>

    </header>

    <!--------------------------FORMULARIO DE REGISTRO-------------------------->

    <div class="login-clean" style="background: url(&quot;/img/17735.jpg&quot;) left / cover, rgba(0,0,0,0);font-family: Roboto, sans-serif;">
        <form action="procesar_registro.php" method="post" style="background: rgb(218,212,212);border-radius: 18px;">
            <div class="illustration">
                <h2 class="text-center" style="color: rgb(19,21,23);font-size: 30px;margin-bottom: 0px;">Crear Cuenta</h2>
                <i class="typcn typcn-user-add" style="color: rgb(177,10,10);"></i>
            </div>
            <div class="form-group">
                <input class="form-control" type="text" name="nombre_usuario" placeholder="Nombre de Usuario" required>
            </div>
            <div class="form-group">
                <input class="form-control" type="email" name="email" placeholder="Email" required>
            </div>
            <div class="form-group">
                <input class="form-control" type="password" name="contraseña" placeholder="Contraseña" required>
            </div>
            <div class="form-group">
                <input class="form-control" type="password" name="contraseñarepetir" placeholder="Repetir Contraseña" required>
            </div>
            <div class="form-group">
                <button class="btn btn-primary btn-block" type="submit" style="background: rgb(177,10,10);">Registrarse</button>
            </div>
            <a class="forgot" href="inicio_sesion.php">¿Ya tenés una cuenta? Ingresa aca!</a>
        </form>
    </div>

    <!--------------------------FOOTER-------------------------->

    <footer>
        <div class="row d-flex justify-content-center" style="margin-right: 0px;margin-left: 0px;">
            <div class="col-10 col-md-4 text-center"><img class= "logo" style="margin:30px 0px;" src="/img/logo.png">
                <p class="text-left p-info-negocio">Descripción del negocioD escripción del negocio Descripción del negocioD escripción del negocio</p>
            </div>
            <div class="col-12 col-md-6 d-flex justify-content-around flex-wrap flex-md-nowrap">
                <div class="sucursal-info">
                    <h4>CASA CENTRAL</h4>
                    <p>
                        San Martín, Villa Lynch<br>Av Rodriguez Peña 4581<br>Xhs a Xhs<br>
                        Teléfono 011 47539514<br>WhatsApp 011 36283921<br>info@rpmotos.com.ar<br>
                    </p>
                    <iframe allowfullscreen="" loading="lazy" src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3284.493539840287!2d-58.53548708468836!3d-34.59167946436839!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x95bcb7978de09541%3A0xf53b34cd1c46a432!2sAv.%20Rodr%C3%ADguez%20Pe%C3%B1a%204581%2C%20Villa%20Lynch%2C%20Provincia%20de%20Buenos%20Aires!5e0!3m2!1ses!2sar!4v1624850933759!5m2!1ses!2sar"></iframe>
                </div>
                <div class="sucursal-info">
                    <h4>SUCURSAL</h4>
                    <p>
                        Capital Federal<br>Av De Los Constituyentes 5763<br>Xhs a Xhs<br>
                        Teléfono 011 21004715<br>WhatsApp&nbsp;011 61210284<br>sucursal@rpmotos.com.ar<br>
                    </p>
                    <iframe allowfullscreen="" loading="lazy" src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3285.202562778617!2d-58.50463978468886!3d-34.57374076341974!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x95bcb6560ca07d37%3A0xab467884fb7a753c!2sAv.%20de%20los%20Constituyentes%205763%2C%20C1431%20EZI%2C%20Buenos%20Aires!5e0!3m2!1ses!2sar!4v1624850688984!5m2!1ses!2sar"></iframe>
                </div>
            </div>
        </div>
        <div class="row d-flex justify-content-center pie">
            <div class="col-10 d-flex justify-content-between align-items-center">
                <h5>RP MOTOS</h5>
                <div>
                    <a href="https://www.facebook.com/rpmotos2011" target="_blank"><i class="fa fa-facebook-square"></i></a>
                </div>
            </div>
        </div>
    </footer>

    <!--------------------------SCRIPTS JS-------------------------->

    <script src="/js/jquery.min.js"></script>
    <script src="/js/bootstrap.min.js"></script>

</body>

</html>