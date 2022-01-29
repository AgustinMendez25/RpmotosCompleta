<?php
    include ("conexion.php");

    $id = $_REQUEST['id_compra'];

    if ( isset($_POST['cantidad']) ){
        $query = "UPDATE carrito SET cantidad_solicitada='".$_POST['cantidad']."' WHERE id_compra=".$id;
        $envio = $conexion->query($query);
    }

    header ("Location: compra.php");
?>