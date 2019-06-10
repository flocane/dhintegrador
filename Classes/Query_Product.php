<?php

class QueryProduct
{
    private $pdo;

    public function __construct(PDO $pdo)
    {
        $this->pdo = $pdo;
    }
    public function registroProducto($nombre,$descripcion,$id_categoria,$precio)
    {
        $modelo = new Conexion();
        $conexion = $modelo->getConexion();
        $sql = "insert into productos (nombre, descripcion,id_categoria,precio) values (:nombre, :descripcion, :id_categoria,:precio)";
        $preparar = $conexion->prepare($sql);
        $preparar->bindParam(":nombre",  $nombre);
        $preparar->bindParam(":descripcion", $descripcion);
        $preparar->bindParam(":id_categoria", $id_categoria);
        $preparar->bindParam(":precio", $precio);
            
        if(!$preparar)
        {
        return "Error al insertar el registro";
        }else
            {
            $preparar->execute();
            return "Registro creado de manera exitosa..!!!";
            }
        }

        //Esta función carga los registros que van a ser presentados en la consulta
        public function cargarProductos()
        {
            $row = null;
            $modelo= new Conexion();
            $conexion=$modelo->getConexion();
            $sql = "select * from productos";
            $preparar= $conexion->prepare($sql);
            $preparar->execute();
            while ($resultado = $preparar->fetch())
            {
                $row[]= $resultado;
            }
            return $row;
        }
        //Función que elimina el registro seleccionado en la lista
        public function eliminarProductos($id_producto)
        {
            $modelo= new Conexion();
            $conexion=$modelo->getConexion();
            $sql = "delete from productos where id_producto =:id_producto";
            $preparar= $conexion->prepare($sql);
            $preparar->bindParam(":id_producto",  $id_producto);  
            if(!$preparar)
            {
                return "Error al eliminar el registro";
            }else
            {
                $preparar->execute();
                return "Registro eliminado de manera exitosa..!!!";
            }
            


        }
        //Esta función busca un registro que determine el usuario
        public function buscarProductos($nombre)
        {
            
            $row = null;
            $modelo= new Conexion();
            $conexion=$modelo->getConexion();
            $nombre = "%".$nombre."%";
            
            $sql = "select * from productos where nombre like :nombre";
           
            $preparar= $conexion->prepare($sql);
            $preparar->bindParam(":nombre",  $nombre);  
            $preparar->execute();
            while ($resultado = $preparar->fetch())
            {
                $row[]= $resultado;
            }
            return $row;
        }
        //Esta función carga un sólo registro para luego sereliminado
        public function cargarProducto($id_producto)
        {
            $row = null;
            $modelo= new Conexion();
            $conexion=$modelo->getConexion();
            $sql = "select * from productos where id_producto = :id_producto";
            $preparar= $conexion->prepare($sql);
            $preparar->bindParam(":id_producto",  $id_producto);  
            $preparar->execute();
            while ($resultado = $preparar->fetch())
            {
                $row[]= $resultado;
            }
            return $row;
        }
        //Esta es la función que ejecuta la modificación de un producto seleccionado de la lista.
        public function modificarProducto($campo,$valor,$id_producto)
        {
            
            $modelo = new Conexion();
            $conexion = $modelo->getConexion();
            // $conexion->setAttribute( PDO::ATTR_ERRMODE, PDO::ERRMODE_WARNING );
            $sql = "update productos set $campo = :valor where id_producto = :id_producto";
            $preparar = $conexion->prepare($sql);
            
            $preparar->bindParam(":valor",  $valor);
            
            $preparar->bindParam(":id_producto", $id_producto);
            
            if(!$preparar)
            {
                return "Error al modificar el registro";
            }else
            {
                $preparar->execute();
                return "Registro modificado de manera exitosa..!!!";
            }

        }
}