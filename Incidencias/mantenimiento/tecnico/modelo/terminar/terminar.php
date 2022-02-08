<?php

require_once("../../../../clases/ticket/class_ticket.php");
require_once("../../../../clases/tecnico/class_tecnico.php");
require_once("../../../../clases/conexion.php");


$sub = new ticket();
$id_tecnico = $_POST['id_tecnico_t'];
$id_ticket = $_POST['id_ticket_t'];
$sub->ticket_cambio_est_atendido($id_ticket);
$tecnico = new tecnico();
$tecnico->tecnico_cambio_est_disponible($id_tecnico);

$consulta = $sub->get_ticket_sin_tec();
if (isset($consulta[0]['id_ticket'])) {
//
//    $datos[] = $consulta;
//    echo json_encode($datos);
  $sub->ticket_cambio_estado_tec($consulta[0]['id_ticket'], $id_tecnico);
}




//actualizar  el tecnico  en espera..
//actualizar el ticket por atendido
//hacer una consulta para ver si hay ticket con tecnico=1 que es ninguno ,asignarlo al tecnico actual
//botar un mensaje...para ver si ay mas ticket asignados a el actual tecnico,sino decir q no ay mas ticket asignados a el
?>       