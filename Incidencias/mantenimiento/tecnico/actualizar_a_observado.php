<?php
@session_start();
//$_SESSION['num_tecnico_dos'] = 1;
require_once ("../../clases/ticket/class_ticket.php");
require_once ("../../clases/conexion.php");

$vent = new ticket();
$consulta = $vent->get_ticket_seleccion_tecnico_observacion($_SESSION['id_tecnico']);
@$estado_ticket = $consulta[0]["id_estado_ti"];//3 si hay ticket en observacion

if ($estado_ticket == 3) {
    $variable_nueva = 3;//nuevos tickes
} 
else {
    $variable_nueva = 0;
    $_SESSION['num_tecnico_dos']=1;
}

//echo $variable_nueva;

if ($variable_nueva == 3) {
    $contador = $_SESSION['num_tecnico_dos'];
    if ($contador == 1) {
        echo "
<script>
alert('TIENE TICKET EN OBSERVACION');
location.href='vista_tecnico_ticket_observacion.php'
         </script>";
    }
    $_SESSION['num_tecnico_dos'] = $_SESSION['num_tecnico_dos'] + 1;
} 
else {
}

?>