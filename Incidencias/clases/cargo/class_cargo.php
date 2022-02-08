<?php

class cargo {
    private $cargo;

    public function __construct() {
        $this->cargo = array();
    }

    public function get_cargo() {
        $sql = "SELECT * from cargo  where estado=1";
        $res = mysql_query($sql, conexion::con());
        while ($reg = mysql_fetch_assoc($res)) {
            $this->cargo[] = $reg;
        }
        return $this->cargo;
    }

     public function insertar_cargo($cargo){
        $sql = "INSERT INTO cargo values (NULL,'$cargo',1);";
        $res = mysql_query($sql, conexion::con());
        
    }
    
        public function actualizar_cargo($cargo,$id_cargo){
        $sql = "update cargo set nombre_cargo='$cargo' where id_cargo=$id_cargo";
        $res = mysql_query($sql, conexion::con());
    }
    
    public function delete_cargo($id_cargo){
        $sql = "update cargo set estado=0 where id_cargo=$id_cargo";
        $res = mysql_query($sql, conexion::con());
    }

}
?>