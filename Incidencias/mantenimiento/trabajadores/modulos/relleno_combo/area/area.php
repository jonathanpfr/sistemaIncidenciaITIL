<?php
require_once("../../../../../clases/area/class_area.php");
require_once("../../../../../clases/conexion.php");
?>
<?php

$tra = new area();
$reg = $tra->get_area();
for ($i = 0; $i < count($reg); $i++) {
    $nombre_tip = $reg[$i]['nombre_area'];
    $id_tipo = $reg[$i]['id_area'];

    echo "<option value='" . $id_tipo . "'>" . $nombre_tip . "</option>	";
}

?>