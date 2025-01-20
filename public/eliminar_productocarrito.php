<?php

    include ("conexion.php");

    $id = $_REQUEST['id_compra'];

    $query = "DELETE FROM carrito WHERE id_compra='$id'";
    $envio = $conexion->query($query);

    header ("Location: compra.php");

?>