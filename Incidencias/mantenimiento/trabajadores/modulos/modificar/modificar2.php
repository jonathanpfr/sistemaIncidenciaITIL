<?php
require_once("../../../../clases/trabajador/class_trabajador.php");
require_once("../../../../clases/conexion.php");

$rsocial = $_POST['rsocial'];
$telefono = $_POST['telefono'];
$direccion = $_POST['direccion'];
$cargo = $_POST['cargo'];
$contrato = $_POST['contrato'];
$sucursal = $_POST['sucursal'];
$area = $_POST['area'];//id_trabajador
$id_trabajador = $_POST['id_trabajador'];//id_trabajador

$usuario = $_POST['usuario'];//id_trabajador
$password = $_POST['password'];//id_trabajador
$sub = new trabajador();
$sub->update_trabajador($rsocial, $cargo, $contrato, $area, $sucursal, $telefono, $direccion, $id_trabajador,$usuario,$password);
?>