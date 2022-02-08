<?php
session_start();
if (!isset($_SESSION['user'])) {//esta q hace la condicion si no existe el usario llamado "user" que lo envie a
    header('location: ../../login.php'); //redirecionando a login
}
require_once ("../../clases/tecnico/class_tecnico.php");
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
        <!--<script src="js/funciones.js"></script>-->

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
            <li align="center"><a href="vista_trabajadores.php">Inicio</a></li>
            <li class="dropdown">
                <a class="dropdown-toggle" data-toggle="dropdown" href="#">MANTENIMEINTO
                    <span class="caret"></span></a>
                <ul class="dropdown-menu">
                    <li><a href="../cargo/vista_cargo.php">CARGO</a></li>
                    <li><a href="../area/vista_area.php">AREA</a></li>
                    <li><a href="../sucursal/vista_sucursal.php">SUCURSAL</a></li>
                    <li><a href="../contrato/vista_contrato.php">CONTRATO</a></li>
                    <li><a href="../trabajadores/vista_trabajadores.php">TRABAJADORES</a></li>
                    <li><a href="../equipo/vista_equipos.php">EQUIPOS</a></li>
                    <li><a href="../incidencia/vista_incidencia.php">INCIDENCIA</a></li>
                    <li><a href="../tecnico/vista_tecnico_usuario.php">TECNICO</a></li>
                    <li><a href="../usuario/vista_usuario.php">USUARIO</a></li>

                </ul>
            </li>


            <li class="dropdown">
                <a class="dropdown-toggle" data-toggle="dropdown"  href="#">REGISTRO
                    <span class="caret"></span></a>
                <ul class="dropdown-menu">
                    <li><a href="../cargo/modulos/registrar/nuevo.php">CARGO</a></li>
                    <li><a href="../area/modulos/registrar/nuevo.php">AREA</a></li>
                    <li><a href="../sucursal/modulos/registrar/nuevo.php">SUCURSAL</a></li>
                    <li><a href="../contrato/modulos/registrar/nuevo.php">CONTRATO</a></li>
                    <li><a href="../trabajadores/modulos/registro/nuevo.php">TRABAJADORES</a></li>
                    <li><a href="../equipo/modulos/registrar/nuevo.php">EQUIPOS</a></li>
                    <li><a href="../incidencia/modulos/registrar/nuevo.php">INCIDENCIA</a></li>
                    <li><a href="../tecnico/modelo/registrar/registrar1.php">TECNICO</a></li>
                    <li><a href="../usuario/modulos/registrar/nuevo.php">USUARIO</a></li>
                </ul>
            </li>
            <li class="dropdown">
                <a class="dropdown-toggle" data-toggle="dropdown"  href="#">REPORTE
                    <span class="caret"></span></a>
                <ul class="dropdown-menu">
                    <li><a href="../../mantenimiento/reporte/equipo_con_mas_incidencias.php">EQUIPOS</a></li>
                    <li><a href="../../mantenimiento/reporte/area_mas_incidencia.php">AREA</a></li>
                    <li><a href="../../mantenimiento/reporte/trabajador_mas_incidencia.php">TRABAJADOR</a></li>
                    <li><a href="../../mantenimiento/reporte/reporte_mas_incidencia.php">INCIDENCIA</a></li>


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


        <h5 align="right"><strong>ADMINISTRADOR :</strong> <strong style="color: #d43f3a"><?php echo $_SESSION['user']; ?> </strong></h5>
        <hr>
        <h4 align="center">SISTEMA WEB PARA EL PROCESO DE CONTROL INCIDENCIAS DE LOS USUARIOS EN EL INSTITUTO NACIONAL DE INNOVACION AGRARIA</h4>
        <hr>
        <h5 align="center">TECNICOS</h5>
        <hr>
        <div   class='centrar'>
            <table id="example" class="table table-striped table-bordered" cellspacing="0" width="100%">
                <thead>
                    <tr>
                        <th>Modificar</th>
                        <th>razon social</th>
                        <th>telefono</th>
                        <th>correo</th>
                        <th>direccion</th>
                        <th>usuario</th>
<!--                        <th>Sucursal</th>
                        <th>telefono</th>-->
                        <th>Eliminar</th>
                    </tr>
                </thead>
                <tfoot>
                    <tr>
                        <th>Modificar</th>
                        <th>razon social</th>
                        <th>telefono</th>
                        <th>correo</th>
                        <th>direccion</th>
                        <th>usuario</th>
<!--                        <th>Sucursal</th>
                        <th>telefono</th>-->
                        <th>Eliminar</th>
                    </tr>
                </tfoot>
                <tbody>
                    <?php
                    $vent = new tecnico();
                    $consulta = $vent->get_tecnico();
                    for ($i = 0; $i < sizeof($consulta); $i++) {
                        $id_tec = $consulta[$i]["id_tecnico"];
                        echo "<tr>";
                        echo "<td>";
                        echo "<a href='modelo/modificar/modificar1.php?id_tecnico=$id_tec'>Modificar</a>";
                        echo "</td>";
                        echo "<td>";
                        echo $consulta[$i]["razon_social"];
                        echo "</td>";
                        echo "<td>";
                        echo $consulta[$i]["telefono"];
                        echo "</td>";
                        echo "<td>";
                        echo $consulta[$i]["correo"];
                        echo "</td>";
                        echo "<td>";
                        echo $consulta[$i]["direccion"];
                        echo "</td>";
                        echo "<td>";
                        echo $consulta[$i]["usuario"];
                        echo "</td>";
//                        echo "<td>";
//                        echo $consulta[$i]["nombre_sucursal"];
//                        echo "</td>";
//                        echo "<td>";
//                        echo $consulta[$i]["telefono"];
//                        echo "</td>";
                        echo "<td>";
                        $nombre = $consulta[$i]["razon_social"];
                        echo "<a onclick='return confirm(\"Esta Seguro de Eliminar al Trabajador : $nombre ?\")' href='modelo/eliminar/eliminar.php?id_tecnico=$id_tec'>Eliminar</a>";
                        echo "</td>";
                        echo "</tr>";
                    }
                    ?>
                </tbody>
            </table>
        </div>
    </body>
</html>
