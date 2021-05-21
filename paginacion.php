<?php
require_once("conectar.php");
$base= Conectar::conexion();

$cantidad_datos = 10;
if(isset($_GET["pagina"])){
    if($_GET["pagina"]==1){
        header("Location:index.php");
    }else{
        $pagina=$_GET["pagina"];
    }
}else{
        $pagina=1;
    }
$empezar_desde=($pagina - 1)*$cantidad_datos;
$sql_total="SELECT * FROM productos";
$resultado=$base->prepare($sql_total);
$resultado->execute(array());
$num_filas=$resultado->rowCount();
$total_paginas=ceil($num_filas/$cantidad_datos);
?>