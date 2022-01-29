<?php

    /*----------------------------------IMPORTS-----------------------------------*/

    require 'assets/Classes/PHPExcel/IOFactory.php';
    require 'conexion.php';

    /* https://phpspreadsheet.readthedocs.io/en/latest/topics/accessing-cells/#excel-datatypes Documentacion IOFactory*/

    /*----------------------CARGA DEL ARCHIVO EXCEL AL SERVIDOR------------------------*/

    $carpeta = "CargasExcel/";
    opendir($carpeta);
    $nueva_ubicacion = $carpeta.$_FILES['archivo_excel']['name'];
    copy ($_FILES['archivo_excel']['tmp_name'],$nueva_ubicacion);
    
    /*-------------------------OBTENCION DE DATOS DEL EXCEL--------------------------*/

    $objPHPExcel = PHPEXCEL_IOFactory::load($nueva_ubicacion);

    $objPHPExcel->setActiveSheetIndex(0);

    $filas = $objPHPExcel->setActiveSheetIndex(0)->getHighestRow();

    for ( $i = 2; $i <= $filas; $i++ ){
        $producto = $objPHPExcel->getActiveSheet()->getCell('A'.$i)->
        getCalculatedValue();
        $marca = $objPHPExcel->getActiveSheet()->getCell('B'.$i)->
        getCalculatedValue();
        $modelo = $objPHPExcel->getActiveSheet()->getCell('C'.$i)->
        getCalculatedValue();
        $compatibilidad = $objPHPExcel->getActiveSheet()->getCell('D'.$i)->
        getCalculatedValue();
        $proveedor = $objPHPExcel->getActiveSheet()->getCell('E'.$i)->
        getCalculatedValue();
        $cantidad = $objPHPExcel->getActiveSheet()->getCell('F'.$i)->
        getCalculatedValue();
        $fecha_ingreso = $objPHPExcel->getActiveSheet()->getCell('G'.$i)->
        getFormattedValue();
        $ubicacion = $objPHPExcel->getActiveSheet()->getCell('H'.$i)->
        getCalculatedValue();
        $costo = $objPHPExcel->getActiveSheet()->getCell('I'.$i)->
        getCalculatedValue();
        $precio_publico = $objPHPExcel->getActiveSheet()->getCell('J'.$i)->
        getCalculatedValue();
        $pesoXunidad = $objPHPExcel->getActiveSheet()->getCell('K'.$i)->
        getCalculatedValue();
        $garantia = $objPHPExcel->getActiveSheet()->getCell('L'.$i)->
        getCalculatedValue();
        
        /*-------------------------CARGA A LA BASE DE DATOS--------------------------*/
        
        if ($producto != null){ //verifica que el registro no este vacio
            $query = "INSERT INTO productos (producto,marca,modelo,compatibilidad,proveedor,cantidad,fecha_ingreso,ubicacion,costo,precio_publico,pesoXunidad,garantia) VALUES('$producto','$marca','$modelo','$compatibilidad','$proveedor','$cantidad','$fecha_ingreso','$ubicacion','$costo','$precio_publico','$pesoXunidad','$garantia')";
            $cargar = $conexion->query($query);
        }

    }

?>

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

<body class="text-center d-flex justify-content-center" style="background: #cfcece;">

    <div class="caja-mensaje">
        <h1>Se ha cargado el excel perfectamente</h1>
        <a href="administracion.php">Volver</a>
    </div>

</body>

</html>