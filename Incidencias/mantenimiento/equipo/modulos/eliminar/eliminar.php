<?php
require_once("../../../../clases/equipos/class_equipo.php");
require_once("../../../../clases/conexion.php");

$id_equipo = $_GET['id_equipos'];
//$nombre_area = $_POST['nombre_area'];

$sub = new equipo();
$sub->delete_equipo($id_equipo);
header("location:../../vista_equipos.php");
?>