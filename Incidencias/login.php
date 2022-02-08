<?php
@session_start();
if (isset($_SESSION['user'])) {
    header("Location: salir.php");
}
?>
<html >
    <head>
        <meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
        <meta name="viewport" content="width=device-width, initial-scale=1.0">

        <script src="paquetes/jquery/jquery-1.11.1.min.js" ></script>
        <script src="paquetes/jquery/jquery.dataTables.min.js"></script>
        <script src="paquetes/bootstrap/js/dataTables.bootstrap.js" ></script>

        <link rel="stylesheet" href="paquetes/bootstrap/css/bootstrap.min.css"/>
        <link rel="stylesheet" href="paquetes/bootstrap/css/dataTables.bootstrap.css" />
        <link rel="stylesheet" href="paquetes/bootstrap/css/bootstrap.min2.css"><!--para botones-->
        <style>
            #contenedor {
                position: absolute;
                /*nos posicionamos en el centro del navegador*/
                top:50%;
                left:50%;
                /*determinamos una anchura*/
                width:400px;
                /*indicamos que el margen izquierdo, es la mitad de la anchura*/
                margin-left:-200px;
                /*determinamos una altura*/
                height:300px;
                /*indicamos que el margen superior, es la mitad de la altura*/
                margin-top:-150px;
                /*border:1px solid #808080;*/
                /*padding:5px;*/
            }

            .bien{
                background-color:#3CBE34;
                text-align:center;
                font-size:14px;
                color:#FFF;
                padding:5px;
            }

        </style>
        <script type="text/javascript">
            function  funciones() {
                $('#mensaje_login').addClass('bien').html('Espere un momento por favor....').hide(0);
                $('#mensaje_login').addClass('bien').html('Espere un momento por favor....').hide(0);
                $('#mensaje_login').addClass('bien').html('Espere un momento por favor....').show(700).delay(2500).hide(200);
                setInterval('ejecutar()', 1000);
            }
            function  ejecutar() {
                document.form2.submit();
            }

        </script>
        <script src="funciones.js"></script>
    </head>
    <body style="background:url('imagen/qw.png')no-repeat center center; ">
        <hr>
        <div id="contenedor"><center>
                <h2 align="center">Logeo Usuario</h2>
                <br><br>
                <form method="POST" action="login2.php" name="form2">

                    <strong>Usuario  :</strong><input type="text" placeholder="usuario" name="user01" id="user01"><br><br>
                    <strong>Password  :</strong><input type="password" placeholder="contraseña" name="pass01" id="pass01">
                    <br><br>
                    <button type="button" class="btn btn-danger" id="enviar" name="enviar" onclick="funciones()"><span class="glyphicon glyphicon-floppy-open"></span>Aceptar</button>
                    <button type="reset" class="btn btn-warning"><span class="glyphicon glyphicon-floppy-remove"></span>Cancelar</button>
                    <br>
                    <br>
                    <?php
                    if (isset($_GET['msg'])) {
                        echo "<div style='background: #ffff99'><strong style='color:blue'>" . $_GET['msg'] . "</strong></div>";
                    }
                    ?>
                    <div id="mensaje_login"></div>
            </center>
        </form>

    </div>

    <hr>
</body>
</html>

