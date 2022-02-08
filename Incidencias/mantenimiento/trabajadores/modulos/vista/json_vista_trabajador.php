<?php
require_once("../../../../clases/conexion.php");
require_once ("../../../../clases/trabajador/class_trabajador.php");
?>
<?php

$tra = new trabajador();
$reg = $tra->get_trabajador();

for ($i = 0; $i < count($reg); $i++) {
    $data['data'] = $reg;
}
echo json_encode($data);
?>