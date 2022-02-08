<?php
session_start();
//if (!isset($_SESSION['user'])) {//esta q hace la condicion si no existe el usario llamado "user" que lo envie a
//    header('location: ../login.php'); //redirecionando a login
//}
require_once ("../../clases/reporte/class_reporte.php");
//require_once ("../../modelo/reporte/class_reporte.php");
require_once ("../../clases/conexion.php");
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
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

        <script src="../../paquetes/bootstrap/js2/bootstrap-formhelpers.js"></script>
        <link href="../../paquetes/bootstrap/css/bootstrap-formhelpers.min.css" rel="stylesheet"/>

        <script type="text/javascript">
            $(document).ready(function () {
                $('#example').dataTable();
            });

            function verpdf(url)
            {
                newwindow = window.open(url, 'name', 'height=550,width=850,left=400,padding=700');
                if (window.focus) {
                    newwindow.focus();
                }
            }

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
        <script src="funciones4.js"></script>
    </head>
    <body>
<hr>

        <ul class="nav nav-tabs" >
            <!--            <li class="active"><a href="#">Home</a></li>-->
            <li align="center"><a href="../trabajadores/vista_trabajadores.php">Inicio</a></li>
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

        <form name=" form1" method="get" action="">
            <h5 align="right"><strong>ADMINISTRADOR :</strong> <strong style="color: #d43f3a"><?php echo $_SESSION['user']; ?> </strong></h5>

            <h4 align="center">EQUIPO CON MAS INCIDENCIA</h4>
            <hr>
                <div   class='centrar'>
                    <button id="botones_lazar_fecha" class="btn btn-warning" type="button" data-toggle="modal" data-target="#myModalDia"><span class="glyphicon glyphicon-calendar"></span>Fecha a Buscar</button>


                    <br>

                        <br>
                            <?php
//                            require './reportes/reportes_clientes_altos.php';

                            $cl = new reporte();
                            if (isset($_GET['fec_ini'])) {
                                $fec_ini = $_GET['fec_ini'];
                                $fec_fin = $_GET['fec_fin'];
                                $cadena = "fecha del " . $fec_ini . " al " . $fec_fin;
                            } else {
                                $hoy = date("Y-m-d");
                                $fec_ini = $hoy;
                                $fec_fin = $hoy;
//                                $fec_ini = "2015-06-24";
//                                $fec_fin = "2015-06-24";
                                $cadena = " Hoy " . $hoy;
                            }
                            ?>
                            <br>

                                <center><?php echo $cadena; ?></center> <br> <br>
                                        <table  class="table table-striped table-bordered" cellspacing="0" width="100%">
                                            <thead>
                                                <tr>
                                                    <th> AREA</th>
                                                    <th>INCIDENCIAS </th>

                                                </tr>
                                            </thead>
                                            <tbody>
                                                <?php
                                                $consulta = $cl->equipo_mas_incidencia($fec_ini, $fec_fin);
                                                for ($i = 0; $i < sizeof($consulta); $i++) {
                                                    
                                                    echo "<tr>";
                                                    echo "<td>";
                                                    echo $consulta[$i]["nom_equipos"];
                                                    echo "</td>";
                                                    echo "<td>";
                                                    echo $consulta[$i]["numero"];
                                                    echo "</td>";
                                                    echo "</tr>";
                                                }
                                                ?>

                                            </tbody>
                                        </table>
                                        <a class="btn btn-warning" href="  javascript:verpdf('reportes/equipo.php?fec_ini=<?php echo $fec_ini; ?>&fec_fin=<?php echo $fec_fin; ?>&cadena=<?php echo $cadena; ?>'); " >  
                                            <span class="glyphicon glyphicon-print"></span>Imprimir
                                        </a>
                                        <a class="btn btn-warning" href="  javascript:verpdf('graficos/equipo.php?fec_ini=<?php echo $fec_ini; ?>&fec_fin=<?php echo $fec_fin; ?>&cadena=<?php echo $cadena; ?>'); " >  
                                            <span class="glyphicon glyphicon-print"></span>GRAFICO
                                        </a>
                                        </div>
                                        <!--******************************************** MODAL DIA *********************************************-->

                                        <div class="modal fade" id="myModalDia" tabindex="-1" aria-labelledby="myLargeModalLabel" aria-hidden="true" data-keyboard="false" data-backdrop="static">
                                            <div class="modal-dialog">
                                                <div class="modal-content">
                                                    <div class="modal-header">
                                                        <h3 class="modal-title" id="myModalLabel">BUSCAR</h3>
                                                    </div>
                                                    <div class="modal-body">
                                                        <div class="form-group">
                                                            <label for="inputEmail3" class="control-label col-md-3 col-md-offset-2">Fecha Inicio:</label>
                                                            <div class="col-md-5">
                                                                <div class="bfh-datepicker" id="fecha_inicio" name="fecha_inicio" data-format="y-m-d" data-date="today">
                                                                    <div class="input-group">
                                                                        <span class="input-group-addon">
                                                                            <span class="glyphicon glyphicon-calendar"></span>
                                                                        </span>
                                                                        <input type='text' class="form-control" name="fecha_guia" id="fecha_guia"  />
                                                                    </div>   
                                                                </div>
                                                            </div>
                                                        </div>

                                                        <div class="form-group" id="ocultar">
                                                            <label for="inputEmail3" class="control-label col-md-3 col-md-offset-2">Fecha Fin:</label>
                                                            <div class="col-md-5">
                                                                <div class="bfh-datepicker" id="fecha_fin" data-format="y-m-d" data-date="today">
                                                                    <div class="input-group">
                                                                        <span class="input-group-addon">
                                                                            <span class="glyphicon glyphicon-calendar"></span>
                                                                        </span>
                                                                        <input type='text' class="form-control" name="fecha_guia" id="fecha_guia"  />
                                                                    </div>   
                                                                </div>
                                                            </div>
                                                        </div>

                                                        <div class="form-group">
                                                            <label for="inputEmail3" class="control-label col-md-3 col-md-offset-2">Consulta por:</label>
                                                            <div class="col-md-5">
                                                                <select class="form-control" id="tipo_busqueda">
                                                                    <option value="0">--SELECCIONE--</option>
                                                                    <option value="1">dia</option>
                                                                    <option value="2">mes</option>
                                                                </select>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="modal-footer">
                                                        <input type="hidden" id="clave" value="buscar">
                                                            <button type="button" class="btn btn-success" id="id_botn_consultar" name="id_botn_consultar" value="id_botn_consultar" id="buscar_fecha"><span class="glyphicon glyphicon-floppy-saved"></span>BUSCAR</button>
                                                            <button type="button" data-dismiss="modal" class="btn btn-warning"><span class="glyphicon glyphicon-remove"></span>CANCELAR</button>
                                                    </div>
                                                </div>    
                                            </div>
                                        </div>
                                        <!--******************************************** FINAL  MODAL DIA *********************************************-->

                                        </form>
                                        </body>
                                        </html>