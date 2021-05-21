<!DOCTYPE html>
<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8"/>
<title>MVC en PHP</title>
<link rel="stylesheet" type="text/css" href="vista/estilocrud.css" media="screen">
</head>
<aside class="responsive-banner">
	<span class="circle-a"></span>
	<span class="circle-b"></span>
  <h1><br>MODELOS VISTA CONTROLADOR EN PHP<br>CRUD PRODUCTOS</h1>
</aside>
<body>

<?php
require("modelo/paginacion.php");
?>

<?php
    if(isset($_POST["cr"])){
      
      $codigo = $_POST["cod"]; 
      $seccion = $_POST["sec"]; 
      $articulo = $_POST["art"]; 
      $origen = $_POST["ori"]; 
      $importado = $_POST["imp"]; 
      $precio = $_POST["pre"]; 

      header("Location:controlador/Prod_cont_insertar.php?cod=$codigo& sec=$seccion& art=$articulo&  ori=$origen& imp=$importado& pre=$precio");

      header("Location:index.php");
    }
     
?>

<form action="<?php echo $_SERVER['PHP_SELF'];?>" method="POST">

<table width="90%" border="0" align="center">
  <tr >
    <td class="encabezado">Código</td>
    <td class="encabezado">Sección</td>
    <td class="encabezado">Producto</td>
    <td class="encabezado">Origen</td>
    <td class="encabezado">Importado</td>
    <td class="encabezado">Precio</td>
    <td class="sin"> </td>
    <td class="sin"> </td>
    <td class="sin"> </td>
  </tr> 
 
  <?php

    foreach($matrizProductos as $registro): ?>

      <tr>
          
      <td><?php echo$registro["id_producto"] ?></td>
      <td><?php echo$registro["seccion"] ?></td>
      <td><?php echo$registro["producto"] ?></td>
      <td><?php echo$registro["origen"] ?></td>
      <td><?php echo$registro["importado"] ?></td>
      <td><?php echo$registro["precio"] ?></td> 

      <td class="bot"><a href="controlador/Prod_cont_eliminar.php?Id=<?php echo $registro["id_producto"]?> "><input type='button' name='del' id='del' value='Eliminar'></a></td>

      <td class='bot'><a href="vista/Productos_actualizar.php?cod=<?php echo $registro["id_producto"]?>& sec=<?php echo $registro["seccion"]?> & art=<?php echo $registro["producto"]?>  & ori=<?php echo $registro["origen"]?> & imp=<?php echo $registro["importado"]?> & pre=<?php echo $registro["precio"] ?>    "><input type='button' name='up' id='up' value='Actualizar'></a></td>
    </tr>      
 <?php
 endforeach;
 ?>

  <tr>
    <td><input type='text' name='cod' size='10' class='centrado'></td>
    <td><input type='text' name='sec' size='10' class='centrado'></td>
    <td><input type='text' name='art' size='10' class='centrado'></td>
    <td><input type='text' name='ori' size='10' class='centrado'></td>
    <td><input type='text' name='imp' size='10' class='centrado'></td>
    <td><input type='text' name='pre' size='10' class='centrado'></td>
    <td class='bot'><input type='submit' name='cr' id='cr' value='Insertar'></td></tr>    
  <tr><td> 
      <?php 
      echo "PAG | ";
       for ($i=1;$i<=$total_paginas; $i++){
         echo "<a href=?pagina=" . $i . "'>" . $i . "</a>"." | ";
       }
      ?></td></tr>
</table>

</form>

<p>&nbsp;</p>
</body>
</html>