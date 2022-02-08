<?php
class mensjaes {
    private $trabajador;

    public function __construct() {
        $this->trabajador = array();
    }

    public function get_mensjaes() {
        $sql = "select * from mensjaes ORDER BY id_mensaje desc";
        $res = mysql_query($sql, conexion::con());
        while ($reg = mysql_fetch_assoc($res)) {
            $this->trabajador[] = $reg;
        }
        return $this->trabajador;
    }
   
    public function add_mensjaes($mensaje) {
        $sql = "INSERT into mensjaes VALUES(null,'7','4','$mensaje',NOW())";
        $res = mysql_query($sql, conexion::con());
    }
    
}
?>