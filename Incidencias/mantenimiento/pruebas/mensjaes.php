<?php
require_once ("../../clases/mensajes/mensajes.php");
require_once ("../../clases/conexion.php");
?>
<html >
    <head>
        <meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />       
        <script src="../../paquetes/jquery/jquery-1.11.1.min.js" ></script>
        <script src="../../paquetes/jquery/jquery.min.js"></script>
        <script src="../../paquetes/bootstrap/js/bootstrap.min.js"></script>
        <link rel="stylesheet" href="../../paquetes/bootstrap/css/bootstrap.min.css"/>
        <link rel="stylesheet" href="../../paquetes/bootstrap/css/dataTables.bootstrap.css" />
        <link rel="stylesheet" href="../../paquetes/bootstrap/css/bootstrap-theme.min.css"/>
        <script src="../../paquetes/jquery/jquery.dataTables.min.js"></script>
        <script src="../../paquetes/bootstrap/js/dataTables.bootstrap.js" ></script>
        <script src="funciones.js"></script>
    </head>
    <body >
<div id="mensajes" style="width: 500px; height: 500px;overflow: scroll" >
</div>
            <input type="text" id="mensaje_nuevo" name="mensaje_nuevo"/><br>
            <input type="button" id="boton_mensaje_nuevo" name="boton_mensaje_nuevo" value="enviar">

    </body>
</html>
