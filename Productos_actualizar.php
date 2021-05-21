<!doctype html>
<html>
    
    <head>
    
        <meta charset="utf-8">
        <title>actualizar</title>
        <link rel="stylesheet" type="text/css" href="estilocrud.css" media="screen">

        
    </head>
         <aside class="responsive-banner">
          <span class="circle-a"></span>
          <span class="circle-b"></span>
          <h1><br>MODELOS VISTA CONTROLADOR EN PHP<br>ACTUALIZAR PRODUCTOS</h1>
        </aside>
    <body>
 
    <?php

      if(!isset($_POST["bot_actualizar"])){

        $codigo = $_GET["cod"]; 
        $seccion = $_GET["sec"]; 
        $articulo = $_GET["art"]; 
        $origen = $_GET["ori"]; 
        $importado = $_GET["imp"]; 
        $precio = $_GET["pre"]; 

      }else{
    
        $codigo = $_POST["cod"]; 
        $seccion = $_POST["sec"]; 
        $articulo = $_POST["art"]; 
        $origen = $_POST["ori"]; 
        $importado = $_POST["imp"]; 
        $precio = $_POST["pre"]; 
  
 
        header("Location:../controlador/Prod_cont_actualizar.php?cod=$codigo&sec=$seccion&art=$articulo&ori=$origen&imp=$importado&pre=$precio");        
  
          }
    ?>

        <form action="<?php echo $_SERVER['PHP_SELF'];?>" method="post">
        
        <table width="50%" align="center"><tr>
<td>
            Codigo Producto</td><td><input type="text" name="cod" id="c_art" value="<?php echo $codigo?>"></td></tr>
           <tr>
           <tr>
             <td> Sección </td><td><input type="text" name="sec" id="seccion" value="<?php echo $seccion?>"></td></tr>
           <tr>
             <td>Nombre Producto</td>
             <td><input type="text" name="art" id="n_art" value="<?php echo $articulo?>"></td>
           </tr>
           <tr>
             <td>Precio</td>
             <td><input type="text" name="pre" id="precio" value="<?php echo $precio?>"></td>
           </tr>
                      <tr>
             <td>El producto es importado(V/F)</td>
             <td><input type="text" name="imp" id="importado" value="<?php echo $importado?>"></td>
           </tr>
           <tr>
             <td>País de Origen</td>
             <td><input type="text" name="ori" id="p_orig" value="<?php echo $origen?>"></td>
           </tr>
           <td colspan="2"><input type="submit" name="bot_actualizar" id="bot_actualizar" value="Actualizar"></td>
        </td></tr></table>
        </form>
    
    </body>
    
</html>