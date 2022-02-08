<?php
require_once("../../../../../clases/cargo/class_cargo.php");
require_once("../../../../../clases/conexion.php");
?>
<?php

$tra = new cargo();
$reg = $tra->get_cargo();
for ($i = 0; $i < count($reg); $i++) {
    $nombre_tip = $reg[$i]['nombre_cargo'];
    $id_tipo = $reg[$i]['id_cargo'];

    echo "<option value='" . $id_tipo . "'>" . $nombre_tip . "</option>	";
}

?>