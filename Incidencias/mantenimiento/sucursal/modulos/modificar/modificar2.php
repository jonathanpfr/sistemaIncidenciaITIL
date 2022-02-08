<?php
require_once("../../../../clases/sucursal/class_sucursal.php");
require_once("../../../../clases/conexion.php");

$id_sucursal= $_POST['id_sucursal'];
$sucursal = $_POST['sucursal'];
$ubicacion = $_POST['ubicacion'];
$telefono= $_POST['telefono'];

$sub = new sucursal();
$sub->actualizar_sucursal($sucursal, $ubicacion, $telefono, $id_sucursal);
?>