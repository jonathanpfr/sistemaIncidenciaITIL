<?php
require_once("../../../../clases/incidencia/class_incidencia.php");
require_once("../../../../clases/conexion.php");
?>
<?php

$tra = new incidencia();
$reg = $tra->get_incidencia();
 echo "<option value='0'>----SELECCIONE----</option>";
for ($i = 0; $i < count($reg); $i++) {
    $nombre_tip = $reg[$i]['nom_incidencia'];
    $id_tipo = $reg[$i]['id_incidencia'];

    echo "<option value='" . $id_tipo . "'>" . $nombre_tip . "</option>	";
}

?>