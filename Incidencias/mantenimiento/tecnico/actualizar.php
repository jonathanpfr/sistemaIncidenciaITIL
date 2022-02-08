<?php
@session_start();
$_SESSION['numero'] = 1;

require_once ("../../clases/ticket/class_ticket.php");
require_once ("../../clases/conexion.php");

$vent = new ticket();
$consulta = $vent->get_ticket_tecnico_observacion_validacion($_SESSION['id_tecnico']);
@$estado_ticket = $consulta[0]["id_estado_ti"];

if ($estado_ticket == 2) {
    $variable_nueva = 2;//nuevos tickes
} else {
    $variable_nueva = 0;
    $_SESSION['num_tecnico']=1;
}
if ($variable_nueva == 2) {
    $contador = $_SESSION['num_tecnico'];
    if ($contador == 1) {
        echo "
<script>
alert('SE HA DETECTADO NUEVOS TICKETS');
location.href='vista_tecnico_ticket_espera.php'
         </script>";
    }
    $_SESSION['num_tecnico'] = $_SESSION['num_tecnico'] + 1;
} 
else {
}

?>