<?php
require_once("../../../../clases/area/class_area.php");
require_once("../../../../clases/conexion.php");

$id_area = $_POST['id_area'];
$nombre_area = $_POST['nombre_area'];

$sub = new area();
$sub->actualizar_area($nombre_area, $id_area);
?>