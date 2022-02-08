<?php
require_once("../../../../clases/cargo/class_cargo.php");
require_once("../../../../clases/conexion.php");

$cargo = $_POST['cargo'];

$sub = new cargo();
$sub->insertar_cargo($cargo);

?>