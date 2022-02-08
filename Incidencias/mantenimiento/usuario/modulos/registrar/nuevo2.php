<?php
require_once("../../../../clases/usuarios/usuario.php");
require_once("../../../../clases/conexion.php");

$razon_social = $_POST['razon_social'];
$telefono = $_POST['telefono'];
$direccion = $_POST['direccion'];
$usuario = $_POST['usuario'];
$password = $_POST['password'];

$sub = new usuario();
$sub->insertar_usuario($razon_social, $usuario, $password, $telefono, $direccion);
?>