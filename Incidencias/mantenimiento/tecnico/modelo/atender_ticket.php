<?php
session_start();
if (!isset($_SESSION['tecnico'])) {//esta q hace la condicion si no existe el usario llamado "user" que lo envie a
    header('location: ../../../../salir.php'); //redirecionando a login
//    require_once ("../../../../salir.php");
}
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
            <!--            <li class="active"><a href="#">Home</a></li>-->
            <li align="center"><a href="../vista_todos_ticket.php">Inicio</a></li>
            <li class="dropdown">
                <a class="dropdown-toggle" data-toggle="dropdown" href="#">TICKETS
                    <span class="caret"></span></a>
                <ul class="dropdown-menu">
                    <li><a href="../../tecnico/vista_tecnico_ticket_espera.php">EN ESPERA</a></li>
                    <li><a href="../../tecnico/vista_tecnico_ticket_observacion.php">EN OBSERBACION</a></li>
                    <li><a href="../../tecnico/vista_tecnico_ticket_atendidos.php">ATENTIDOS</a></li>
                    <li><a href="../../tecnico/vista_todos_ticket.php">TODOS</a></li>
                </ul>
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
        <h5 align="right"><strong>TECNICO :</strong> <strong style="color: #d43f3a"><?php echo $_SESSION['tecnico']; ?> </strong></h5>
        <hr>
        <hr>
        <div  class='centrar'>
            <div>
                <button type="button" class="close" data-dismiss="modal" aria-hidden="true"><span aria-hidden="true">&times;</span></button>

                <h3 align="center"> Atender Ticket</h3>
            </div>
            <hr>
            <div >

                <?php
                $idticket = $_GET['id_ticket'];
                $tick = new ticket();
                $reg = $tick->seleccion_ticket($idticket);
                ?>
                <form class="form-horizontal">
                    <div class="form-group">
                        <label for="inputEmail3" class="col-sm-2 control-label">Trabajador:  </label>
                        <div class="col-sm-4">
                            <input type="text" class="form-control" disabled="true" value="<?php echo $reg[0]['razon_social']; ?>" >
                            <input type="hidden" id="id_tecnico" value="<?php echo $_SESSION['id_tecnico']; ?>">
                            <input type="hidden" id="id_ticket" value="<?php echo $idticket; ?>">
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
                            <!--<input type="text" class="form-control" value="<?php // echo $reg[0]['observacion'];  ?>">-->
                            <textarea  disabled="true" class="form-control" rows="3"  ><?php echo $reg[0]['observacion']; ?>
                            </textarea>
                        </div>
                        <label for="inputPassword3" class="col-sm-2 control-label">Area:</label>
                        <div class="col-sm-4">
                            <input type="text" disabled="true" class="form-control" value="<?php echo $reg[0]['nombre_area']; ?>">
                        </div>

                    </div>


                </form>
            </div>
            <div >
                <center>
                    <form method="post" action="redireccion_observar_ticket.php">
                        <button type="submit" class="btn btn-success" id="observacion"><span class="glyphicon glyphicon-floppy-saved"></span>Observar Incidencia</button>
                        <button type="button" data-dismiss="modal" class="btn btn-warning" id="cancelar"><span class="glyphicon glyphicon-remove"></span>Cancelar</button>
                    </form>
                </center>
            </div>

        </div>
    </body>
</html>
