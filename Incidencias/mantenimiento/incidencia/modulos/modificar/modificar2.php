<?php
require_once("../../../../clases/incidencia/class_incidencia.php");
require_once("../../../../clases/conexion.php");

$id_inidencia = $_POST['id_incidencia'];
$nombre_incidencia = $_POST['nombre_inidencia'];

$sub = new incidencia();
$sub->modificar_incidencia($nombre_incidencia, $id_inidencia);
?>