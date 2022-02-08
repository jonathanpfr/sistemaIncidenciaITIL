<?php
require_once("../../../../clases/ticket/class_ticket.php");
require_once("../../../../clases/tecnico/class_tecnico.php");
require_once("../../../../clases/conexion.php");

$id_tecnico = $_POST['id_tecnico'];
$id_ticket = $_POST['id_ticket'];
$sub = new ticket();
$sub->ticket_cambio_est_observado($id_ticket);
$tecnico=new tecnico();
$tecnico->tecnico_cambio_est_observacion($id_tecnico);
//actualizar tecnico...por en observacion
//actualizar el ticket por en observacion

?>