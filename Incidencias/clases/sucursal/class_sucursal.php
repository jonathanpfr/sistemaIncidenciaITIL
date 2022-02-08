<?php

class sucursal {
    private $sucursal;

    public function __construct() {
        $this->sucursal = array();
    }

    public function get_sucursal() {
        $sql = "SELECT * from sucursal  where estado=1";
        $res = mysql_query($sql, conexion::con());
        while ($reg = mysql_fetch_assoc($res)) {
            $this->sucursal[] = $reg;
        }
        return $this->sucursal;
    }

public function insertar_sucursal($nombre_sucursal,$ubicacion,$telefonos){
        $sql = "INSERT INTO sucursal VALUES (NULL,'$nombre_sucursal','$ubicacion','$telefonos',1);";
        $res = mysql_query($sql, conexion::con());
    }
    
    public function actualizar_sucursal($nombre_sucursal,$ubicacion,$telefonos,$id_sucursal){
        $sql = "update sucursal set nombre_sucursal='$nombre_sucursal',ubicacion='$ubicacion',telefono='$telefonos' where id_sucursal=$id_sucursal ";
        $res = mysql_query($sql, conexion::con());
    }
     public function eliminar_sucursal($id_sucursal){
        $sql = "update sucursal set estado=0 where id_sucursal=$id_sucursal ";
        $res = mysql_query($sql, conexion::con());
    }

}
?>