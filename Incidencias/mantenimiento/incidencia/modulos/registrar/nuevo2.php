<?php
require_once("../../../../clases/incidencia/class_incidencia.php");
require_once("../../../../clases/conexion.php");

$incidencia = $_POST['incidencia'];

$sub = new incidencia();
$sub->insertar_incidencia($incidencia);
        //update_trabajador($rsocial, $cargo, $contrato, $area, $sucursal, $telefono, $direccion, $id_trabajador);
?>