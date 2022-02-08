<?php
require_once("../../../../clases/incidencia/class_incidencia.php");
require_once("../../../../clases/conexion.php");

$id_incidencia = $_GET['id_incidencia'];
//$nombre_area = $_POST['nombre_area'];

$sub = new incidencia();
$sub->eliminar_incidencia($id_incidencia);
header("location:../../vista_incidencia.php");
?>