<?php

    $codigo = $_GET["cod"]; 
    $seccion = $_GET["sec"]; 
    $articulo = $_GET["art"]; 
    $fecha = $_GET["fec"]; 
    $origen = $_GET["ori"]; 
    $importado = $_GET["imp"]; 
    $precio = $_GET["pre"]; 
    
    require_once('../modelo/Productos_modelo.php');

    $producto=new Productos_modelo();

    $producto->producto_update($codigo,$seccion,$articulo,$fecha,$origen,$importado,$precio);

    $matrizProductos=$producto->get_productos();

    echo "codigo ".$codigo." precio ".$precio;
    header('Location: ../index.php');

?>