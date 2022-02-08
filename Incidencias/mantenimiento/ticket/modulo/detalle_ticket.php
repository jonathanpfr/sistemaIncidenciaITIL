<?php
session_start();
//if (!isset($_SESSION['tecnico'])) {//esta q hace la condicion si no existe el usario llamado "user" que lo envie a
//    header('location: ../../../../salir.php'); //redirecionando a login
////    require_once ("../../../../salir.php");
//}
require_once ("../../../clases/ticket/class_ticket.php");
require_once ("../../../clases/conexion.php");
?>
<html >
    <head>
        <meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />       
        <script src="../../../paquetes/jquery/jquery-1.11.1.min.js" ></script>
        <script src="../../../paquetes/jquery/jquery.min.js"></script>
        <script src="../../../paquetes/bootstrap/js/bootstrap.min.js"></script>
        <link rel="stylesheet" href="../../../paquetes/bootstrap/css/bootstrap.min.css"/>
        <link rel="stylesheet" href="../../../paquetes/bootstrap/css/dataTables.bootstrap.css" />
        <link rel="stylesheet" href="../../../paquetes/bootstrap/css/bootstrap-theme.min.css"/>
        <script src="../../../paquetes/jquery/jquery.dataTables.min.js"></script>
        <script src="../../../paquetes/bootstrap/js/dataTables.bootstrap.js" ></script>

        <script src="atender_ticket.js" ></script>
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
            <li align="center"><a href="../vista_ticket.php">Inicio</a></li>
            <li class="dropdown">
                <a class="dropdown-toggle"  href="../modulo/registro/registro_ticket.php">NUEVO TICKET
                </a>
            </li>
            <li class="dropdown">
                <a class="dropdown-toggle"  href="../vista_ticket_actual_trabajador.php"> TICKET ACTUAL
                </a>
            </li>
            <li class="dropdown">
                <a class="dropdown-toggle"  href="../vista_ticket_antiguo_trabajador.php"> TICKETS ANTOGUOS
                </a>
            </li>
            <li class="dropdown">
                <a class="dropdown-toggle" href="../vista_ticket.php"> TODOS
                </a>
            </li>


            <li class="dropdown">
                <a class="dropdown-toggle" data-toggle="dropdown"  href="#">Salir
                    <span class="caret"></span></a>
                <ul class="dropdown-menu">
                    <li><a href="../../../salir.php">Salir</a></li>
                    <li><a href="../../../salir.php">Cerrar Sesion</a></li>

                </ul>
            </li>
        </ul>
        <hr>

        <h5 align="right"><strong>Trabajador :</strong> <strong style="color: #d43f3a"><?php echo $_SESSION['trabajador']; ?> </strong></h5>
        <hr>
        <hr>
        <div  class='centrar'>
            <div>
                <button type="button" class="close" data-dismiss="modal" aria-hidden="true"><span aria-hidden="true">&times;</span></button>

                <h3 align="center"> Vista Ticket</h3>
            </div>
            <hr>
            <div >

                <?php
                $idticket = $_GET['id_ticket'];
                $tick = new ticket();
                $reg = $tick->seleccion_ticket($idticket);
                ?>
                <form class="form-horizontal" >
                    <div class="form-group">
                        <label for="inputEmail3" class="col-sm-2 control-label">Trabajador:  </label>
                        <div class="col-sm-4">
                            <input type="text" disabled="true" class="form-control" value="<?php echo $reg[0]['razon_social']; ?>" >
                        </div>
                        <label for="inputPassword3" class="col-sm-2 control-label">Prioridad:</label>
                        <div class="col-sm-4">
                            <input type="email" disabled="true" class="form-control" value="<?php echo $reg[0]['nom_prioridad']; ?>" >
                        </div>

                    </div>

                    <div class="form-group">
                        <label for="tip_per_cli" class="col-sm-2 control-label">Estado :</label>
                        <div class="col-sm-4">
                            <input type="text" disabled="true" class="form-control" value="<?php echo $reg[0]['nombre_estado_ti']; ?>">
                        </div>

                        <label for="inputEmail3" class="col-sm-2 control-label">Fecha :</label>
                        <div class="col-sm-4">
                            <input type="text" disabled="true" class="form-control" value="<?php echo $reg[0]['fecha_reporte']; ?>">
                        </div>
                    </div>

                    <div class="form-group">
                        <label for="inputPassword3" class="col-sm-2 control-label">Equipo:</label>
                        <div class="col-sm-4">
                            <input type="text" disabled="true" class="form-control" value="<?php echo $reg[0]['nom_equipos']; ?>">
                        </div>

                        <label for="inputPassword3" class="col-sm-2 control-label">Incidencia:</label>
                        <div class="col-sm-4">
                            <input type="text" disabled="true" class="form-control" value="<?php echo $reg[0]['nom_incidencia']; ?>">
                        </div>
                    </div>
                    <div class="form-group">

                        <label for="inputPassword3" class="col-sm-2 control-label">Observacion:</label>
                        <div class="col-sm-4">
                            
                        <textarea  disabled="true" class="form-control" rows="3"><?php  echo $reg[0]['observacion']; ?>
                        </textarea>
                        </div>
                        <label for="inputPassword3" class="col-sm-2 control-label">Area:</label>
                        <div class="col-sm-4"><input type="text" disabled="true" class="form-control" value="<?php echo $reg[0]['nombre_area']; ?>">
                        </div>

                    </div>
                    <div class="form-group">

                        <label for="inputPassword3" class="col-sm-2 control-label">Tecnico Asignado:</label>
                        <div class="col-sm-4">
                            <input type="text" disabled="true" class="form-control" value="<?php echo $reg[0]['nombre_tecnico']; ?>">
                        </div>
                        <!--                         <label for="inputPassword3" class="col-sm-2 control-label">Area:</label>
                                                <div class="col-sm-4">
                                                    <input type="text" class="form-control" value="">
                                                </div>-->

                    </div>


                </form>
            </div>
            <div >
                <center>
                    <button type="button" class="btn btn-success"  onclick=" location.href = '../vista_ticket.php'" id="volver"><span class="glyphicon glyphicon-floppy-saved"></span>voler</button>
                    <button type="button" data-dismiss="modal" onclick=" location.href = '../vista_ticket.php'"  class="btn btn-warning" id="cancelar"><span class="glyphicon glyphicon-remove"></span>Cancelar</button>
                </center>
            </div>

        </div>
    </body>
</html>