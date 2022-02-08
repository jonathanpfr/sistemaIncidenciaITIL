<?php

class usuario {

    private $usuario, $login;

    public function __construct() {
        $this->usuario = array();
        $this->login = array();
    }

    public function login($variable1, $variable2) {
        $sql = "SELECT * FROM usuario where usuario='$variable1' and `password`='$variable2' and estado=1";
        $respuesta = mysql_query($sql, conexion::con());
        while ($registro = mysql_fetch_assoc($respuesta)) {
            $this->login[] = $registro;
        }
        return $this->login;
    }

    public function get_usuario() {
        $sql = "SELECT * FROM `usuario` where estado=1 ";
        $res = mysql_query($sql, conexion::con());
        while ($reg = mysql_fetch_assoc($res)) {
            $this->usuario[] = $reg;
        }
        return $this->usuario;
    }
    
    public function insertar_usuario($razon_social,$usuario,$password,$telefono,$direccion) {
        $sql = "insert INTO usuario VALUES(NULL,'$razon_social','$usuario','$password','$telefono','$direccion','1')";
        $res = mysql_query($sql, conexion::con());
       }
    public function actualizar_usuario($razon_social,$usuario,$password,$telefono,$direccion,$id_usuario) {
        $sql = "UPDATE usuario set razon_social='$razon_social',usuario='$usuario',password='$password',telefono='$telefono',direccion='$direccion' where id_usuario=$id_usuario";
        $res = mysql_query($sql, conexion::con());
       }
    public function eliminar_usuario($id_usuario) {
        $sql = "UPDATE usuario set estado=0 where id_usuario=$id_usuario";
        $res = mysql_query($sql, conexion::con());
       }   
       
       

}

?>