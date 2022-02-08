<?php
session_start();
if (!$_SESSION['tecnico']) {//esta q hace la condicion si no existe el usario llamado "user" que lo envie a
    header('location: ../../login.php'); //redirecionando a login
}
require_once ("../../clases/ticket/class_ticket.php");
require_once ("../../clases/conexion.php");
?>
<html >
    <head>
        <meta   http-equiv="Content-Type" content="text/html; charset=UTF-8" />       
        <script src="../../paquetes/jquery/jquery-1.11.1.min.js" ></script>
        <script src="../../paquetes/jquery/jquery.min.js"></script>
        <script src="../../paquetes/bootstrap/js/bootstrap.min.js"></script>
        <link rel="stylesheet" href="../../paquetes/bootstrap/css/bootstrap.min.css"/>
        <link rel="stylesheet" href="../../paquetes/bootstrap/css/dataTables.bootstrap.css" />
        <link rel="stylesheet" href="../../paquetes/bootstrap/css/bootstrap-theme.min.css"/>
        <script src="../../paquetes/jquery/jquery.dataTables.min.js"></script>
        <script src="../../paquetes/bootstrap/js/dataTables.bootstrap.js" ></script>
<!--        <script src="m"></script>-->
        <script src="validar.js"></script>

        <script type="text/javascript">
            $(document).ready(function () {
                $('#example').dataTable();
            });
        </script>

        <style type="text/css">
            .centrar
            {
                /*nos posicionamos en el centro del navegador*/
                top:50%;
                left:50%;
                /*determinamos una anchura*/
                width:80%;
                margin-left: 10%;


            }
        </style>
    </head>
    <body >

             <hr>

        <ul class="nav nav-tabs" >
            <!--            <li class="active"><a href="#">Home</a></li>-->
            <li align="center"><a href="vista_todos_ticket.php.php">Inicio</a></li>
            <li class="dropdown">
                <a class="dropdown-toggle" data-toggle="dropdown" href="#">TICKETS
                    <span class="caret"></span></a>
                <ul class="dropdown-menu">
                    <li><a href="../tecnico/vista_tecnico_ticket_espera.php">EN ESPERA</a></li>
                    <li><a href="../tecnico/vista_tecnico_ticket_observacion.php">EN OBSERBACION</a></li>
                    <li><a href="../tecnico/vista_tecnico_ticket_atendidos.php">ATENTIDOS</a></li>
                      <li><a href="../tecnico/vista_todos_ticket.php">TODOS</a></li>
                </ul>
            </li>
            <li class="dropdown">
                <a class="dropdown-toggle" data-toggle="dropdown"  href="#">Salir
                    <span class="caret"></span></a>
                <ul class="dropdown-menu">
                    <li><a href="../../salir.php">Salir</a></li>
                    <li><a href="../../salir.php">Cerrar Sesion</a></li>

                </ul>
            </li>
        </ul>
        <hr>
        <h5 align="right"><strong>TECNICO :</strong> <strong style="color: #d43f3a"><?php echo $_SESSION['tecnico']; ?> </strong></h5>
        <hr>
        <h4 align="center">SISTEMA WEB PARA EL PROCESO DE CONTROL INCIDENCIAS DE LOS USUARIOS EN EL INSTITUTO NACIONAL DE INNOVACION AGRARIA</h4>
        <hr>
        <h5 align="center">LISTADO DE TICKET ACTUAL</h5>
        <hr>
        <div id="actualizar"></div><!--VALIDAR -->
        <div   class='centrar'>
            <table id="example" class="table table-striped table-bordered" cellspacing="0" width="100%">
                <thead>
                    <tr>
                        <th></th>
                        <th>Prioridad</th>
                        <th>Fecha de reporte</th>
                        <th>Nombre Ticket</th>
                        <th>Trabajador</th>
                        <th>Area</th>
                        <th>Estado</th>
                        <th>Atender</th>
                    </tr>
                </thead>
                <tfoot>
                    <tr>
                        <th></th>
                        <th>Prioridad</th>
                        <th>Fecha de reporte</th>
                        <th>Nombre Ticket</th>
                        <th>Trabajador</th>
                        <th>Area</th>
                        <th>Estado</th>
                        <th>Atender</th>
                    </tr>
                </tfoot>
                <tbody>
                    <?php
                    $vent = new ticket();
                    $consulta = $vent->get_ticket_seleccion_tecnico_observacion($_SESSION['id_tecnico']);
                    for ($i = 0; $i < sizeof($consulta); $i++) {

                        $id_ticket = $consulta[$i]["id_ticket"];
                        echo "<tr>";
                        echo "<td>";
                        echo $i;
                        echo "</td>";
                        if ($consulta[$i]["id_prioridad"] == 1 || $consulta[$i]["id_prioridad"] == 2) {//verde
                            echo "<td >";
                            echo "<div style='background-color:#4cae4c;color:#ffffff;font-size: larger'> <center>" . $consulta[$i]["nom_prioridad"] . "</center></div>";
                            echo "</td>";
                        } else if ($consulta[$i]["id_prioridad"] == 3) {//naranja
                            echo "<td >";
                            echo "<div style='background-color:#eb9316;color:#ffffff;font-size: larger'><center>" . $consulta[$i]["nom_prioridad"] . "</center></div>";
                            echo "</td>";
                        } else if ($consulta[$i]["id_prioridad"] == 4 || $consulta[$i]["id_prioridad"] == 5) {//rojo
                            echo "<td >";
                            echo "<div style='background-color:#d43f3a;color:#ffffff;font-size: larger'><center>" . $consulta[$i]["nom_prioridad"] . "</center></div>";
                            echo "</td>";
                        }
                        echo "<td>";
                        echo $consulta[$i]["fecha_reporte"];
                        echo "</td>";
                        //aca poner le nombre de ticket
                        echo "<td>";
                        echo $consulta[$i]["nom_incidencia"];
                        echo "</td>";
                        //aca poner el tecnico
//                        if ($consulta[$i]["id_estado_tec"] == 1) {//ninguno
                            echo "<td >";
                            echo $consulta[$i]["razon_social"];//trabjador
                            echo "</td>";
                            echo "<td >";
                            echo $consulta[$i]["nombre_area"];//trabjador
                            echo "</td>";
//                        } else {
//                            echo "<td >";
//                            echo "<div style='font-size: larger'><center>" . $consulta[$i]["razon_social"] . "</center></div>";
//                            echo "</td>";
//                        }
//***********************************************************
                        if ($consulta[$i]["id_estado_ti"] == 2) {//espera
                            echo "<td >";
                            echo "<div style='background-color:#d43f3a;color:#ffffff;font-size: larger'><center>" . $consulta[$i]["nombre_estado_ti"] . "</center></div>";
                            echo "</td>";
                        } else if ($consulta[$i]["id_estado_ti"] == 1) { //atendido
                            echo "<td>";
                            echo "<div style='background-color:#4cae4c;color:#ffffff;font-size: larger'><center>" . $consulta[$i]["nombre_estado_ti"] . "</center></div>";
                            echo "</td>";
                        } else {//atendiendo amarillo
                            echo "<td>";
                            echo "<div style='background-color:orange;color:#ffffff;font-size: larger'><center>" . $consulta[$i]["nombre_estado_ti"] . "</center></div>";
                            echo "</td>";
                        }
                        echo "<td>";
                        echo "<a href='modelo/terminar_ticket.php?id_ticket=$id_ticket'>Terminar</a>";
                        echo "</td>";
                        echo "</tr>";
                    }
                    ?>
                </tbody>
            </table>
        </div>
        <!--                <div style="color: #ffffff;background-color: #eb9316;width: 400px;height: 400px; font-size: larger">
                            <strong>muestra omo se ve</strong> 
                        </div>-->
    </body>
</html>
