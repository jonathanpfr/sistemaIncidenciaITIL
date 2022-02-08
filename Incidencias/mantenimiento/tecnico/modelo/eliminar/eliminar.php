<?php
require_once("../../../../clases/tecnico/class_tecnico.php");
require_once("../../../../clases/conexion.php");

$id_tecnico=$_GET['id_tecnico'];
$clase=new tecnico();
$clase->eliminar_tecnico($id_tecnico);
header("location:../../vista_tecnico_usuario.php");
?>