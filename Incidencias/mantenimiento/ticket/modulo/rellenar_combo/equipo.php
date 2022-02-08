<?php
require_once("../../../../clases/equipos/class_equipo.php");
require_once("../../../../clases/conexion.php");
?>
<?php

$tra = new equipo();
$reg = $tra->get_equipo($_POST['id_trabajador']);
 echo "<option value='0'>----SELECCIONE----</option>";
for ($i = 0; $i < count($reg); $i++) {
    $nombre_tip = $reg[$i]['nom_equipos'];
    $id_tipo = $reg[$i]['id_equipos'];

    echo "<option value='" . $id_tipo . "'>" . $nombre_tip . "</option>	";
}

?>