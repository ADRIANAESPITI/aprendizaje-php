<?php
    $codigo = $_GET["cod"]; 
    $seccion = $_GET["sec"]; 
    $articulo = $_GET["art"]; 
    $origen = $_GET["ori"]; 
    $importado = $_GET["imp"]; 
    $precio = $_GET["pre"]; 

    require_once('../modelo/Productos_modelo.php');

    $producto=new Productos_modelo();

    $producto->producto_insert($codigo,$seccion,$articulo,$origen,$importado,$precio);

    $matrizProductos=$producto->get_productos();

    header('Location: ../index.php');

?>