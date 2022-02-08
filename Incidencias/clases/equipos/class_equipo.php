<?php

class equipo {

    private $equipo;

    public function __construct() {
        $this->equipo = array();
    }

    public function get_equipo($id_trabajador) {
        $sql = "select eq.* from equipos eq
                INNER JOIN area ar
                INNER JOIN trabajador tra
                where eq.id_area=ar.id_area AND
                tra.area=ar.id_area      AND
                tra.id_trabajador=$id_trabajador and  eq.estado=1";
        $res = mysql_query($sql, conexion::con());
        while ($reg = mysql_fetch_assoc($res)) {
            $this->equipo[] = $reg;
        }
        return $this->equipo;
    }

    public function get_todos_equipo() {
        $sql = "select eq.*,ar.* from equipos eq , area ar where eq.id_area=ar.id_area and eq.estado=1";
        $res = mysql_query($sql, conexion::con());
         while ($reg = mysql_fetch_assoc($res)) {
            $this->equipo[] = $reg;
        }
        return $this->equipo;
    }
    
       public function insertar_equipo($equipo,$id_area){
        $sql = "INSERT INTO equipos values (NULL,'$equipo',$id_area,1);";
        $res = mysql_query($sql, conexion::con());
        
    }
    
        public function actualizar_equipo($equipo,$id_equipo,$id_area){
        $sql = "update equipos set nom_equipos='$equipo',id_area=$id_area where id_equipos=$id_equipo";
        $res = mysql_query($sql, conexion::con());
    }
    
    public function delete_equipo($id_equipo){
        $sql = "update equipos set estado=0 where id_equipos=$id_equipo";
        $res = mysql_query($sql, conexion::con());
    }

}

?>