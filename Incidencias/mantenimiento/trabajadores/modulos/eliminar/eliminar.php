<?php
require_once("../../../../clases/trabajador/class_trabajador.php");
require_once("../../../../clases/conexion.php");

$id=$_GET['id_tra'];
$clase=new trabajador();
$clase->delete_trabajador($id);
header("location:../../vista_trabajadores.php");
?>