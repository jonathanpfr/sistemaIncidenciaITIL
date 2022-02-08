<?php
require_once ("../../clases/mensajes/mensajes.php");
require_once ("../../clases/conexion.php");


        $vent = new mensjaes();
        $consulta = $vent->get_mensjaes();
        for ($i = 0; $i < sizeof($consulta); $i++) {
            
            echo $consulta[$i]["id_mensaje"];
            echo $consulta[$i]["id_trabajador"];
            echo $consulta[$i]["id_usuario"];
            echo $consulta[$i]["descripcion"];
            echo $consulta[$i]["fecha"]."<br>";
        }


?>