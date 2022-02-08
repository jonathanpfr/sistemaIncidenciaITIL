<?php
require_once("../../../../clases/usuarios/usuario.php");
require_once("../../../../clases/conexion.php");

$id_usuario = $_GET['id_usuario'];
//$nombre_area = $_POST['nombre_area'];

$sub = new usuario();
$sub->eliminar_usuario($id_usuario);
header("location:../../vista_usuario.php");
?>