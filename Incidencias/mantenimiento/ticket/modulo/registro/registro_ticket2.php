<?php
require_once("../../../../clases/ticket/class_ticket.php");
require_once("../../../../clases/tecnico/class_tecnico.php");
require_once("../../../../clases/conexion.php");

//agregado por mi....................................
//require_once("../../../../clases/ticket/class_ticket.php");
//require_once("../../../../clases/conexion.php");



$prioridad = $_POST['prioridad'];
$equipo = $_POST['equipo'];
$incidencia = $_POST['incidencia'];
$id_tra = $_POST['id_trabajador'];
$observacion = $_POST['observacion'];


$tra = new ticket();
$reg = $tra->verificar_espera_ticket( $_POST['id_trabajador']);
for ($i = 0; $i < count($reg); $i++) {
    @$nombre_tip = $reg[0]['id_estado_ti'];
}
if ($nombre_tip == 2 | $nombre_tip == 3) {
    $variable=0;//Tiene que esperar que se atienda el ticket anterior pata sacar otro
}
else{
   $variable=1; //se registra normal
}


if ($variable==1) {

    $tec = new tecnico();
    $tecreg = $tec->get_tecnico_disponible();
    $tecreg2 = $tec->get_tecnico_nodisponible();
    $tecnico_disponible = $tecreg[0]['id_tecnico'];
    $tecnico_nodisponible = $tecreg2[0]['id_tecnico'];

    if ($tecnico_disponible != null) {
//        $sub = new ticket();
        $tra->insertar_ticket($id_tra, $prioridad, $tecnico_disponible);
    } 
    else {
//        $sub = new ticket();
        $tra->insertar_ticket($id_tra, $prioridad, $tecnico_nodisponible);
    }
//********************************************detalle ticket**********************
    if (isset($_POST['id_ticket'])) {
        $tra->insertar_detalle_ticket($_POST['id_ticket'], $equipo, $incidencia, $observacion);
    }
    
    header("location:../../vista_ticket_actual_trabajador.php");
} 


else {
    header("location:../../vista_ticket_actual_trabajador.php");
}
?>