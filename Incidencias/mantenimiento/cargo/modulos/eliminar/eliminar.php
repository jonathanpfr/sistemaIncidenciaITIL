<?php
require_once("../../../../clases/cargo/class_cargo.php");
require_once("../../../../clases/conexion.php");

$id_cargo = $_GET['id_cargo'];
//$nombre_area = $_POST['nombre_area'];

$sub = new cargo();
$sub->delete_cargo($id_cargo);
header("location:../../vista_cargo.php");
?>