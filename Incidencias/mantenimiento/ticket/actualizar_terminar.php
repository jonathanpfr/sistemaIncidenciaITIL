<?php
@session_start();
require_once ("../../clases/ticket/class_ticket.php");
require_once ("../../clases/conexion.php");

$vent = new ticket();
$consulta = $vent->get_ticket_validacion_terminar_trabajador($_SESSION['id_trabajador']);
@$estado_ticket = $consulta[0]["id_estado_ti"];

if ($estado_ticket == 2||$estado_ticket == 3) {//2 o 3 = espera y observacion
    $variable_nueva = 1;
     $_SESSION['num_trabajador_terminar'] = 1;
} else {
    $variable_nueva = 0;
}



if ($variable_nueva == 1) {
    
}
else {
     $contador = $_SESSION['num_trabajador_terminar'];
    if ($contador == 1) {
    echo "
<script>
alert('TU TICKET YA HA SIDO ATENDIDO');
location.href='vista_ticket_actual_trabajador.php'
</script>";
}
 $_SESSION['num_trabajador_terminar'] = $_SESSION['num_trabajador_terminar']+1;
    }
?>