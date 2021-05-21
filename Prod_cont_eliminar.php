<?php
    $cod=$_GET["Id"];
    
    require_once('../modelo/Productos_modelo.php');

    $producto=new Productos_modelo();

    $producto->producto_delete($cod);

    $matrizProductos=$producto->get_productos();

    header('Location: ../index.php');

?>