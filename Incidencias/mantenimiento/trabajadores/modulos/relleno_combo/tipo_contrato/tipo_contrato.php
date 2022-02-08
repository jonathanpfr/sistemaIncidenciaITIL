<?php
require_once("../../../../../clases/tipo_contrato/class_tipo_contrato.php");
require_once("../../../../../clases/conexion.php");
?>
<?php

$tra = new tipo_contrato();
$reg = $tra->get_tipo_contrato();
for ($i = 0; $i < count($reg); $i++) {
    $nombre_tip = $reg[$i]['nombre_contrato'];
    $id_tipo = $reg[$i]['id_tipo_contrato'];

    echo "<option value='" . $id_tipo . "'>" . $nombre_tip . "</option>	";
}

?>