<?php
    class Productos_modelo{

        private $db;

        private $productos;

        public function __construct(){

            require_once('Conectar.php');

            $this->db=Conectar::conexion();

            $this->productos=array();

        }

        public function get_productos(){
                 //incluir la paginacion
           require("paginacion.php");
        
            $consulta=$this->db->query("SELECT * FROM productos LIMIT $empezar_desde, $cantidad_datos");
           

            while($fila=$consulta->fetch(PDO::FETCH_ASSOC)){
                 
                $this->productos[]=$fila;
            }

            return $this->productos;
        }

//FUNCIONES PARA CREAR, ELIMINAR Y ACTUALIZAR

        public function producto_delete($cod){
            $sql = "DELETE FROM productos WHERE id_producto=:miCod";

            $resultado=$this->db->prepare($sql);
        
            $resultado->execute(array(":miCod"=>$cod));
        }

        public function producto_update($codigo,$seccion,$articulo,$fecha,$origen,$importado,$precio){
            $sql = "UPDATE productos SET seccion=:sec, producto=:art,  origen=:ori, importado=:imp, precio=:pre where id_producto=:cod";
            
            $resultado=$this->db->prepare($sql);
        
            $resultado->execute(array(":cod"=>$codigo, ":sec"=>$seccion,":art"=>$articulo,":ori"=>$origen,":imp"=>$importado,":pre"=>$precio));
        }

        public function producto_insert($codigo,$seccion,$articulo,$origen,$importado,$precio){

            $sql = "INSERT INTO productos VALUES (:cod, :sec, :art, :ori, :imp, :pre)";

            $resultado=$this->db->prepare($sql);
      
            $resultado->execute(array(":cod"=>$codigo, ":sec"=>$seccion,":art"=>$articulo,":ori"=>$origen,":imp"=>$importado,":pre"=>$precio));
      
        }

    }

?>