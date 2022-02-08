
<?php
require_once("../../../../clases/tecnico/class_tecnico.php");
require_once("../../../../clases/conexion.php");

$rsocial = $_POST['rsocial'];
$telefono = $_POST['telefono'];
$direccion = $_POST['direccion'];
//$cargo = $_POST['cargo'];
//$contrato = $_POST['contrato'];
$correo = $_POST['correo'];
$id_tecnico = $_POST['id_tecnico']; //id_trabajador
//usuario = $_POST['id_trabajador']; //id_trabajador

$usuario = $_POST['usuario']; //id_trabajador
$password = $_POST['password']; //id_trabajador
$sub = new tecnico();
$sub->modificar_tecnico($rsocial, $telefono, $correo, $direccion, $usuario, $password, $id_tecnico);
?>