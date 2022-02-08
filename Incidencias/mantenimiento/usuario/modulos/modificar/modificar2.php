<?php
require_once("../../../../clases/usuarios/usuario.php");
require_once("../../../../clases/conexion.php");

$razon_social = $_POST['razon_social'];
$telefono = $_POST['telefono'];
$id_usuario = $_POST['id_usuario'];
$direccion = $_POST['direccion'];
$usuario = $_POST['usuario'];
$password = $_POST['password'];


$sub = new usuario();
$sub->actualizar_usuario($razon_social, $usuario, $password, $telefono, $direccion, $id_usuario);
?>