<?php
require_once("../../../../clases/ticket/class_ticket.php");
require_once("../../../../clases/conexion.php");
?>
<?php

$tra = new ticket();
$reg = $tra->verificar_espera_ticket(7);
for ($i = 0; $i < count($reg); $i++) {
    $nombre_tip = $reg[0]['id_estado_ti'];
}
//echo $nombre_tip;

if(@$nombre_tip==2|@$nombre_tip==3){
    echo 0;
}
else{
    echo 1;
}

?>