<?php
session_start();
if (!isset($_SESSION['user'])) {//esta q hace la condicion si no existe el usario llamado "user" que lo envie a
    header('location: ../../../../salir.php'); //redirecionando a login
//    require_once ("../../../../salir.php");
}
require_once ("../../../../clases/area/class_area.php");
require_once ("../../../../clases/conexion.php");
?>
<html >
    <head>
        <meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />       
        <script src="../../../../paquetes/jquery/jquery-1.11.1.min.js" ></script>
        <script src="../../../../paquetes/jquery/jquery.min.js"></script>
        <script src="../../../../paquetes/bootstrap/js/bootstrap.min.js"></script>
        <link rel="stylesheet" href="../../../../paquetes/bootstrap/css/bootstrap.min.css"/>
        <link rel="stylesheet" href="../../../../paquetes/bootstrap/css/dataTables.bootstrap.css" />
        <link rel="stylesheet" href="../../../../paquetes/bootstrap/css/bootstrap-theme.min.css"/>
        <script src="../../../../paquetes/jquery/jquery.dataTables.min.js"></script>
        <script src="../../../../paquetes/bootstrap/js/dataTables.bootstrap.js" ></script>
        
        <script src="funciones.js" ></script>
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
    <body style="background:url('../../../../imagen/qw.png')no-repeat center center; ">
       <hr>

        <ul class="nav nav-tabs" >
            <!--            <li class="active"><a href="#">Home</a></li>-->
            <li align="center"><a href="vista_trabajadores.php">Inicio</a></li>
            <li class="dropdown">
                <a class="dropdown-toggle" data-toggle="dropdown" href="#">MANTENIMEINTO
                    <span class="caret"></span></a>
                <ul class="dropdown-menu">
                    <li><a href="../../../cargo/vista_cargo.php">CARGO</a></li>
                    <li><a href="../../../area/vista_area.php">AREA</a></li>
                    <li><a href="../../../sucursal/vista_sucursal.php">SUCURSAL</a></li>
                    <li><a href="../../../contrato/vista_contrato.php">CONTRATO</a></li>
                    <li><a href="../../../trabajadores/vista_trabajadores.php">TRABAJADORES</a></li>
                    <li><a href="../../../equipo/vista_equipos.php">EQUIPOS</a></li>
                    <li><a href="../../../incidencia/vista_incidencia.php">INCIDENCIA</a></li>
                    <li><a href="../../../tecnico/vista_tecnico_usuario.php">TECNICO</a></li>
                    <li><a href="../../../usuario/vista_usuario.php">USUARIO</a></li>

                </ul>
            </li>


            <li class="dropdown">
                <a class="dropdown-toggle" data-toggle="dropdown"  href="#">REGISTRO
                    <span class="caret"></span></a>
                <ul class="dropdown-menu">
                    <li><a href="../../../cargo/modulos/registrar/nuevo.php">CARGO</a></li>
                    <li><a href="../../../area/modulos/registrar/nuevo.php">AREA</a></li>
                    <li><a href="../../../sucursal/modulos/registrar/nuevo.php">SUCURSAL</a></li>
                    <li><a href="../../../contrato/modulos/registrar/nuevo.php">CONTRATO</a></li>
                    <li><a href="../../../trabajadores/modulos/registro/nuevo.php">TRABAJADORES</a></li>
                    <li><a href="../../../equipo/modulos/registrar/nuevo.php">EQUIPOS</a></li>
                    <li><a href="../../../incidencia/modulos/registrar/nuevo.php">INCIDENCIA</a></li>
                    <li><a href="../../../tecnico/modelo/registrar/registrar1.php">TECNICO</a></li>
                    <li><a href="../../../usuario/modulos/registrar/nuevo.php">USUARIO</a></li>
                </ul>
            </li>
            <li class="dropdown">
                <a class="dropdown-toggle" data-toggle="dropdown"  href="#">REPORTE
                    <span class="caret"></span></a>
                <ul class="dropdown-menu">
                    <li><a href="../../../../mantenimiento/reporte/equipo_con_mas_incidencias.php">EQUIPOS</a></li>
                    <li><a href="../../../../mantenimiento/reporte/area_mas_incidencia.php">AREA</a></li>
                    <li><a href="../../../../mantenimiento/reporte/trabajador_mas_incidencia.php">TRABAJADOR</a></li>
                    <li><a href="../../../../mantenimiento/reporte/reporte_mas_incidencia.php">INCIDENCIA</a></li>


                </ul>
            </li>
            <li class="dropdown">
                <a class="dropdown-toggle" data-toggle="dropdown"  href="#">Salir
                    <span class="caret"></span></a>
                <ul class="dropdown-menu">
                    <li><a href="../../../../salir.php">Salir</a></li>
                    <li><a href="../../../../salir.php">Cerrar Sesion</a></li>

                </ul>
            </li>
        </ul>
        <h5 align="right"><strong>ADMINISTRADOR :</strong> <strong style="color: #d43f3a"><?php echo $_SESSION['user']; ?> </strong></h5>
        <hr>
<!--        <h4 align="center">TRABAJADORES</h4>-->
        <hr>
        <div  class='centrar'>
            <div>
                <button type="button" class="close" data-dismiss="modal" aria-hidden="true"><span aria-hidden="true">&times;</span></button>

                <h3 align="center"> Actualizar Incidencia</h3>
                <?php
                $nombre_incidencia=$_GET['nombre_incidencia'];
                $id_incidencia=$_GET['id_incidencia'];
                ?>
            </div>
            <hr>
            <div >
                <form class="form-horizontal">
                    <cener>
                    <div class="form-group">
                        <label for="inputEmail3" class="col-sm-4 control-label">Incidencia:  </label>
                        <div class="col-sm-4">
                            <input type="text" class="form-control" id="nombre_incidencia" placeholder="Incidencia" value="<?php echo $nombre_incidencia; ?>">
                            <input type="hidden" id="id_incidencia" value="<?php echo $id_incidencia; ?>">
<!--                            <input type="hidden" id="id_trabajador" >-->
                        </div>
                    </div>
                        </cener>
                </form>
            </div>
            <div >
                <center>
                <button type="button" class="btn btn-success" id="btn_actualizar"><span class="glyphicon glyphicon-floppy-saved"></span>Registrar Datos</button>
                <button type="button" data-dismiss="modal" class="btn btn-warning" id="cancelar"><span class="glyphicon glyphicon-remove"></span>Cancelar</button>
            </center>
            </div>

        </div>
    </body>
</html>
