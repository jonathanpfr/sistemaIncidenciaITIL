<?php
require_once("../../../../clases/tipo_contrato/class_tipo_contrato.php");
require_once("../../../../clases/conexion.php");

$id_contrato= $_POST['id_contrato'];
$nombre_contrato = $_POST['nombre_contrato'];

$sub = new tipo_contrato();
$sub->actualizar_contrato($nombre_contrato, $id_contrato);
?>