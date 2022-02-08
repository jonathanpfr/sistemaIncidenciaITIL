<?php

class tipo_contrato {
    private $tipo_contrato;

    public function __construct() {
        $this->tipo_contrato = array();
    }

    public function get_tipo_contrato() {
        $sql = "SELECT * from tipo_contrato  where estado=1";
        $res = mysql_query($sql, conexion::con());
        while ($reg = mysql_fetch_assoc($res)) {
            $this->tipo_contrato[] = $reg;
        }
        return $this->tipo_contrato;
    }

     public function insertar_contrato($contrato){
        $sql = "INSERT INTO tipo_contrato values (NULL,'$contrato',1);";
        $res = mysql_query($sql, conexion::con());
        
    }
    
       public function actualizar_contrato($contrato,$id_contrato){
        $sql = "update tipo_contrato set nombre_contrato='$contrato' where id_tipo_contrato=$id_contrato";
        $res = mysql_query($sql, conexion::con());
    }
    
    public function delete_contrato($id_contrato){
        $sql = "update tipo_contrato set estado=0 where id_tipo_contrato=$id_contrato";
        $res = mysql_query($sql, conexion::con());
    }
}
?>