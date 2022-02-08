<?php
@session_start();
require_once ("../../clases/ticket/class_ticket.php");
require_once ("../../clases/conexion.php");

$vent = new ticket();
$consulta = $vent->get_ticket_validacion_trabajador($_SESSION['id_trabajador']);
     @$estado_ticket = $consulta[0]["id_estado_ti"];
     
     if($estado_ticket==3){
         $variable_nueva=3;
     }
     else{
         $variable_nueva=0;
         $_SESSION['num_trabajador'] = 1;
}
     
     
     
     if($variable_nueva==3){
          $contador = $_SESSION['num_trabajador'];
            if ($contador == 1) {
                    echo "
                    <script>
                    alert('TU TICKET ESTA EN PROCESO DE ATENCION');
                    location.href='vista_ticket_actual_trabajador.php'
                    </script>";
             }
          $_SESSION['num_trabajador'] = $_SESSION['num_trabajador']+1;
     }
     
     
     else{

     }

?>