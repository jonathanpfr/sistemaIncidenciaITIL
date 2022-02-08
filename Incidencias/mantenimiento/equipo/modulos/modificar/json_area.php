<?php

require_once ("../../../../clases/area/class_area.php");
require_once ("../../../../clases/conexion.php");

$vent = new area();
$consulta = $vent->get_area();
//for ($i = 0; $i < sizeof($consulta); $i++) {
//    $id_tra = $consulta[$i]["id_area"];
//    $nombre = $consulta[$i]["nombre_area"];
//}

echo "<option value='0'>--Seleccione--</option>";
for ($i = 0; $i < count($consulta); $i++) {
    $id_area = $consulta[$i]["id_area"];
    $nombre = $consulta[$i]["nombre_area"];
    
    echo "<option value='" . $id_area . "'>" . $nombre . "</option>	";
}



//echo $rpta;
?>
?>