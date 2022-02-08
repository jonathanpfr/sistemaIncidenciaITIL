<?php
require_once("../../../../clases/tipo_contrato/class_tipo_contrato.php");
require_once("../../../../clases/conexion.php");

$id_contrato = $_GET['id_contrato'];
//$nombre_area = $_POST['nombre_area'];

$sub = new tipo_contrato();
$sub->delete_contrato($id_contrato);
header("location:../../vista_contrato.php");
?>