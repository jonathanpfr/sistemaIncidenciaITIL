<?php
require_once("../../../../clases/equipos/class_equipo.php");
require_once("../../../../clases/conexion.php");

$id_equipo= $_POST['id_equipo'];
$nombre_equipo = $_POST['nombre_equipo'];
$id_area= $_POST['id_area'];

$sub = new equipo();
$sub->actualizar_equipo($nombre_equipo, $id_equipo, $id_area);
?>