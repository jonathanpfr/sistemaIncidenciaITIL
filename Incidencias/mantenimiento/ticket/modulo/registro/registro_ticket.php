<?php
session_start();
//if (!isset($_SESSION['trabajador'])) {
//    header('location: ../../../../salir.php'); 
//
//}
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
            .bien{
                background-color:#3CBE34;
                text-align:center;
                font-size:14px;
                color:#FFF;
                padding:5px;
            }

        </style>

    </head>
    <body style="background:url('../../../../imagen/qw.png')no-repeat center center; ">
        <hr>
<ul class="nav nav-tabs" >
    <li align="center"><a href="../../vista_ticket.php">Inicio</a></li>
            <li class="dropdown">
                <a class="dropdown-toggle"  href="../../modulo/registro/registro_ticket.php">NUEVO TICKET
                    </a>
            </li>
            <li class="dropdown">
                <a class="dropdown-toggle"  href="../../vista_ticket_actual_trabajador.php"> TICKET ACTUAL
                  </a>
            </li>
            <li class="dropdown">
                <a class="dropdown-toggle"  href="../../vista_ticket_antiguo_trabajador.php"> TICKETS ANTOGUOS
                  </a>
            </li>
            <li class="dropdown">
                <a class="dropdown-toggle" href="../../vista_ticket.php"> TODOS
                  </a>
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
        <hr>
        <h5 align="right"><strong>TRABAJADOR :</strong> <strong style="color: #d43f3a"><?php echo $_SESSION['trabajador']; ?> </strong></h5>
        <hr>
        <!--        <h4 align="center">TRABAJADORES</h4>-->
        <hr>
        <div  class='centrar'>
            <form method="post" action="registro_ticket2.php">
                <div>
                    <button type="button" class="close" data-dismiss="modal" aria-hidden="true"><span aria-hidden="true">&times;</span></button>

                    <h3 align="center"> Registrar Ticket</h3> 
                </div>
                <hr>
                <div >
                    <!--                <form class="form-horizontal">-->
                    <div class="form-group">
                        <label for="inputEmail3" class="col-sm-2 control-label">Prioridad :  </label>
                        <div class="col-sm-4">
                            <select id="prioridad"  name="prioridad" class="form-control">
                            </select>
                            <input type="hidden" id="id_tra" name="id_trabajador" value="<?php echo $_SESSION['id_trabajador']; ?>">
<!--                            <input type="hidden" id="id_trabajador" >-->
                        </div>
                        <label for="inputPassword3" class="col-sm-2 control-label">Equipo:</label>
                        <div class="col-sm-4">
                            <select id="equipo" name="equipo" class="form-control">
                            </select>
                        </div>

                    </div>
                    <hr>
                    <br><br>
                    <div class="form-group">
                        <label for="tip_per_cli" class="col-sm-2 control-label">Incidencia :</label>
                        <div class="col-sm-4">
                            <select id="incidencia"  name="incidencia" class="form-control">
                            </select>
                        </div>

                        <label for="inputEmail3" class="col-sm-2 control-label">Observacion :</label>
                        <div class="col-sm-4"><textarea class="form-control" rows="3"  name="observacion" id="observacion" placeholder="observacion"></textarea>
                        </div>
                    </div>
                </div>
                <div >
                    <center>
<br><br>
                        <button type="submit" class="btn btn-success" id="registro_ti"><span class="glyphicon glyphicon-floppy-saved"></span>Registrar TICKET</button>

                        <button type="reset" data-dismiss="modal" class="btn btn-warning" id="cancelar"><span class="glyphicon glyphicon-remove"></span>Cancelar</button>
                        <div id="mensaje_reg" style="width: 40% ;"></div>
                    </center>
                </div>

            </form>
        </div>
    </body>
</html>
