<?php
require_once("../../../../clases/equipos/class_equipo.php");
require_once("../../../../clases/conexion.php");

$equipo = $_POST['equipo'];
$id_area = $_POST['id_area'];

$sub = new equipo();
$sub->insertar_equipo($equipo, $id_area);
        //update_trabajador($rsocial, $cargo, $contrato, $area, $sucursal, $telefono, $direccion, $id_trabajador);
?>