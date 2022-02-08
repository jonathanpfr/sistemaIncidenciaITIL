<?php
require_once("../../clases/mensajes/mensajes.php");
require_once("../../clases/conexion.php");

$mensaje= $_POST['mensaje'];

$sub = new mensjaes();
$sub->add_mensjaes($mensaje);

?>