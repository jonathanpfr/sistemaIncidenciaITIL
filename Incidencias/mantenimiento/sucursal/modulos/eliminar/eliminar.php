<?php
require_once("../../../../clases/sucursal/class_sucursal.php");
require_once("../../../../clases/conexion.php");

$id_sucursal= $_GET['id_sucursal'];
//$nombre_area = $_POST['nombre_area'];

$sub = new sucursal();
$sub->eliminar_sucursal($id_sucursal);
header("location:../../vista_sucursal.php");
?>