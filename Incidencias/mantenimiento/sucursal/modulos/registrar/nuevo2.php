<?php
require_once("../../../../clases/sucursal/class_sucursal.php");
require_once("../../../../clases/conexion.php");


$nombre_sucursal = $_POST['nombre_sucursal'];
$ubicacion = $_POST['ubicacion'];
$telefono = $_POST['telefono'];

$sub = new sucursal();
$sub->insertar_sucursal($nombre_sucursal, $ubicacion, $telefono);

?>