<?php

class incidencia {

    private $incidencia;

    public function __construct() {
        $this->incidencia = array();
    }

    public function get_incidencia() {
        $sql = "select * from incidencia  where estado=1";
        $res = mysql_query($sql, conexion::con());
        while ($reg = mysql_fetch_assoc($res)) {
            $this->incidencia[] = $reg;
        }
        return $this->incidencia;
    }

    public function insertar_incidencia($incidencia) {
        $sql = "INSERT INTO incidencia values (NULL,'$incidencia',1);";
        $res = mysql_query($sql, conexion::con());
    }
    
    public function modificar_incidencia($incidencia,$id_incidencia) {
        $sql = "update incidencia set nom_incidencia='$incidencia' where id_incidencia=$id_incidencia";
        $res = mysql_query($sql, conexion::con());
    }
    
    public function eliminar_incidencia($id_incidencia) {
        $sql = "update incidencia set estado=0 where id_incidencia=$id_incidencia";
        $res = mysql_query($sql, conexion::con());
    }

}

?>