<?php
require_once("../../../../../clases/sucursal/class_sucursal.php");
require_once("../../../../../clases/conexion.php");
?>
<?php

$tra = new sucursal();
$reg = $tra->get_sucursal();
for ($i = 0; $i < count($reg); $i++) {
    $nombre_tip = $reg[$i]['nombre_sucursal'];
    $id_tipo = $reg[$i]['id_sucursal'];

    echo "<option value='" . $id_tipo . "'>" . $nombre_tip . "</option>	";
}

?>