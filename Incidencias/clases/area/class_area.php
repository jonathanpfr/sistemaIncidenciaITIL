<?php

class area {
    private $area;

    public function __construct() {
        $this->area = array();
    }

    public function get_area() {
        $sql = "SELECT * from area where estado=1";
        $res = mysql_query($sql, conexion::con());
        while ($reg = mysql_fetch_assoc($res)) {
            $this->area[] = $reg;
        }
        return $this->area;
    }

        public function insertar_area($area){
        $sql = "INSERT INTO area values (NULL,'$area',1);";
        $res = mysql_query($sql, conexion::con());
        
    }
    
    public function actualizar_area($area,$id_area){
        $sql = "update area set nombre_area='$area' where id_area=$id_area";
        $res = mysql_query($sql, conexion::con());
    }
    
    public function delete_area($id_area){
        $sql = "update area set estado=0 where id_area=$id_area";
        $res = mysql_query($sql, conexion::con());
    }
}
?>

