<?php

class tecnico {
    private $tecnico;

    public function __construct() {
        $this->tecnico = array();
    }
    
    public function get_tecnico() {
        $sql = "SELECT * FROM tecnico WHERE  not id_estado_tec=1 ";
        $res = mysql_query($sql, conexion::con());
        while ($reg = mysql_fetch_assoc($res)) {
            $this->tecnico[] = $reg;
        }
        return $this->tecnico;
    }
    
    public function get_tecnico_seleccion($id_tecnico) {
        $sql = "SELECT * FROM tecnico WHERE  not id_estado_tec=1 and id_tecnico=$id_tecnico ";
        $res = mysql_query($sql, conexion::con());
        while ($reg = mysql_fetch_assoc($res)) {
            $this->tecnico[] = $reg;
        }
        return $this->tecnico;
    }

    public function get_tecnico_disponible() {
        $sql = "SELECT * FROM tecnico WHERE id_estado_tec=2 and not id_estado_tec=1 ORDER BY RAND()";
        $res = mysql_query($sql, conexion::con());
        while ($reg = mysql_fetch_assoc($res)) {
            $this->tecnico[] = $reg;
        }
        return $this->tecnico;
    }
    public function get_tecnico_nodisponible() {
        $sql = "SELECT * FROM tecnico WHERE id_estado_tec=1";
        $res = mysql_query($sql, conexion::con());
        while ($reg = mysql_fetch_assoc($res)) {
            $this->tecnico[] = $reg;
        }
        return $this->tecnico;
    }
        public function login_tecnico($variable1,$variable2) {
        $sql = "SELECT * FROM tecnico where usuario='$variable1' and password='$variable2' and not id_estado_tec=1";
        $respuesta = mysql_query($sql, conexion::con());
        while ($registro = mysql_fetch_assoc($respuesta)) {
            $this->tecnico[] = $registro;
        }
        return $this->tecnico;
    }
        public function tecnico_cambio_est_ocupado($id_tecnico) {
        $sql = "update tecnico set id_estado_tec=3 where id_tecnico=$id_tecnico";
        $res = mysql_query($sql, conexion::con());
        }
        public function tecnico_cambio_est_disponible($id_tecnico) {
        $sql = "update tecnico set id_estado_tec=2 where id_tecnico=$id_tecnico";
        $res = mysql_query($sql, conexion::con());
        }
        public function tecnico_cambio_est_observacion($id_tecnico) {
        $sql = "update tecnico set id_estado_tec=4 where id_tecnico=$id_tecnico";
        $res = mysql_query($sql, conexion::con());
        }
    
    public function insertar_tecnico($razon_social,$telefono,$correo,$direccion,$user_tec,$pass_tec){
        $sql = "insert INTO tecnico VALUES(NULL,'$razon_social','$telefono','$correo','$direccion',2,'$user_tec','$pass_tec');";
        $res = mysql_query($sql, conexion::con());
    }
    
    public function modificar_tecnico($razon_social,$telefono,$correo,$direccion,$user_tec,$pass_tec,$id_tecnico){
        $sql = "UPDATE tecnico set razon_social='$razon_social',telefono='$telefono',correo='$correo',direccion='$direccion',usuario='$user_tec',password='$pass_tec' where id_tecnico=$id_tecnico";
        $res = mysql_query($sql, conexion::con());
    }
    
     public function eliminar_tecnico($id_tecnico){
        $sql = "UPDATE tecnico set id_estado_tec='1' where id_tecnico=$id_tecnico";
        $res = mysql_query($sql, conexion::con());
    }
    

        
        
    }

?>
