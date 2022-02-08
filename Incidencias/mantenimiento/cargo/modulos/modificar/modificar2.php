<?php
require_once("../../../../clases/cargo/class_cargo.php");
require_once("../../../../clases/conexion.php");

$id_cargo= $_POST['id_cargo'];
$nombre_cargo = $_POST['nombre_cargo'];

$sub = new cargo();
$sub->actualizar_cargo($nombre_cargo, $id_cargo);
?>