<?php
require_once("../../../../clases/area/class_area.php");
require_once("../../../../clases/conexion.php");

$id_area = $_GET['id_area'];
//$nombre_area = $_POST['nombre_area'];

$sub = new area();
$sub->delete_area($id_area);
header("location:../../vista_area.php");
?>