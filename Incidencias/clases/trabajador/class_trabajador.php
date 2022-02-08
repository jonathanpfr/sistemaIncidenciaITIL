<?php

class trabajador {
    private $trabajador;

    public function __construct() {
        $this->trabajador = array();
    }

    public function get_trabajador() {
        $sql = "SELECT t.*,c.*,tc.*,a.*,s.* from trabajador t,cargo c, tipo_contrato tc, area a, sucursal s WHERE t.id_cargo=c.id_cargo AND t.id_tipo_contrato=tc.id_tipo_contrato and t.area=a.id_area AND t.id_sucursal=s.id_sucursal and t.estado=1";
        $res = mysql_query($sql, conexion::con());
        while ($reg = mysql_fetch_assoc($res)) {
            $this->trabajador[] = $reg;
        }
        return $this->trabajador;
    }

    public function seleccion_trabajador($id_trabajador) {
        $sql = "SELECT t.*,c.*,tc.*,a.*,s.* from trabajador t,cargo c, tipo_contrato tc, area a, sucursal s WHERE t.id_cargo=c.id_cargo AND t.id_tipo_contrato=tc.id_tipo_contrato and t.area=a.id_area AND t.id_sucursal=s.id_sucursal and t.id_trabajador=$id_trabajador";
        $res = mysql_query($sql, conexion::con());
        while ($reg = mysql_fetch_assoc($res)) {
            $this->trabajador[] = $reg;
        }
        return $this->trabajador;
    }
//    
    public function update_trabajador($rsocial_p,$id_cargo,$id_tipo_contrato,$area,$id_sucursal,$telefono,$direccion,$id_trabajador,$usuario,$password){
        $sql = "update trabajador set razon_social='$rsocial_p',id_cargo='$id_cargo',id_tipo_contrato='$id_tipo_contrato',area='$area',id_sucursal='$id_sucursal',telefono='$telefono',direccion='$direccion',usuario='$usuario',password='$password' where id_trabajador='$id_trabajador' ";
        $res = mysql_query($sql, conexion::con());
    }
//    
//    
    public function delete_trabajador($id_trabajador){
        
        $sql = "update trabajador set estado=0  where id_trabajador='$id_trabajador' ";
        $res = mysql_query($sql, conexion::con());
    }
//    
        public function insertar_trabajador($razon_social,$id_cargo,$id_tipo_contrato,$area,$id_sucursal,$id_usuario,$telefono,$direccion,$usuario,$password){
        $sql = "INSERT INTO trabajador values (NULL,'$razon_social','$id_cargo','$id_tipo_contrato','$area','$id_sucursal','$id_usuario','$telefono',NOW(), '$direccion','$usuario','$password',1);";
        $res = mysql_query($sql, conexion::con());
        
    }
    
    public function login_trabajador($variable1,$variable2) {
        $sql = "SELECT * FROM trabajador where usuario='$variable1' and `password`='$variable2'";
        $respuesta = mysql_query($sql, conexion::con());
        while ($registro = mysql_fetch_assoc($respuesta)) {
            $this->trabajador[] = $registro;
        }
        return $this->trabajador;
    }
    

//    
}

