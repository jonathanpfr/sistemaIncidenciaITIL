<?php
require_once("../../../../clases/area/class_area.php");
require_once("../../../../clases/conexion.php");

$area = $_POST['area'];

$sub = new area();
$sub->insertar_area($area);
        //update_trabajador($rsocial, $cargo, $contrato, $area, $sucursal, $telefono, $direccion, $id_trabajador);
?>