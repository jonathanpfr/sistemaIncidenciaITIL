<?php
require_once("../../../../clases/ticket/class_ticket.php");
require_once("../../../../clases/conexion.php");
?>
<?php

$tra = new ticket();
$reg = $tra->get_prioridad();
 echo "<option value='0'>----SELECCIONE----</option>";
for ($i = 0; $i < count($reg); $i++) {
    $nombre_tip = $reg[$i]['nom_prioridad'];
    $id_tipo = $reg[$i]['id_prioridad'];

    echo "<option value='" . $id_tipo . "'>" . $nombre_tip . "</option>	";
}

?>